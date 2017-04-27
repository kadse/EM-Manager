<?php
/******************************************************

  This file is part of OpenWebSoccer-Sim.

  OpenWebSoccer-Sim is free software: you can redistribute it 
  and/or modify it under the terms of the 
  GNU Lesser General Public License 
  as published by the Free Software Foundation, either version 3 of
  the License, or any later version.

  OpenWebSoccer-Sim is distributed in the hope that it will be
  useful, but WITHOUT ANY WARRANTY; without even the implied
  warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
  See the GNU Lesser General Public License for more details.

  You should have received a copy of the GNU Lesser General Public 
  License along with OpenWebSoccer-Sim.  
  If not, see <http://www.gnu.org/licenses/>.

******************************************************/

/**
 * Executes a training unit and adds training effect results to context parameters.
 */
class ExecuteTrainingController implements IActionController {
	private $_i18n;
	private $_websoccer;
	private $_db;
	
	public function __construct(I18n $i18n, WebSoccer $websoccer, DbConnection $db) {
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
		$this->_db = $db;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see IActionController::executeAction()
	 */
	public function executeAction($parameters) {
		
		$user = $this->_websoccer->getUser();
		$teamId = $user->getClubId($this->_websoccer, $this->_db);
		if ($teamId < 1) {
			return null;
		}
		
		// get unit info
		$unit = TrainingDataService::getTrainingUnitById($this->_websoccer, $this->_db, $teamId, $parameters["id"]);
		if (!isset($unit["id"])) {
			throw new Exception("invalid ID");
		}
		
		if ($unit["date_executed"]) {
			throw new Exception($this->_i18n->getMessage("training_execute_err_already_executed"));
		}
		
		// check if minimum time break between two units is matched
		$previousExecution = TrainingDataService::getLatestTrainingExecutionTime($this->_websoccer, $this->_db, $teamId);
		$earliestValidExecution = $previousExecution + 3600 * $this->_websoccer->getConfig("training_min_hours_between_execution");
		$now = $this->_websoccer->getNowAsTimestamp();
		
		if ($now < $earliestValidExecution) {
			throw new Exception($this->_i18n->getMessage("training_execute_err_too_early", $this->_websoccer->getFormattedDatetime($earliestValidExecution)));
		}
		
		// check if team is in training camp.
		$campBookings = TrainingcampsDataService::getCampBookingsByTeam($this->_websoccer, $this->_db, $teamId);
		foreach ($campBookings as $booking) {
			if ($booking["date_start"] <= $now && $booking["date_end"] >= $now) {
				throw new Exception($this->_i18n->getMessage("training_execute_err_team_in_training_camp"));
			}
		}
		
		// check if there is currently a match simulating
		$liveMatch = MatchesDataService::getLiveMatchByTeam($this->_websoccer, $this->_db, $teamId);
		if (isset($liveMatch["match_id"])) {
			throw new Exception($this->_i18n->getMessage("training_execute_err_match_simulating"));
		}
		
		// trainer info
		$trainer = TrainingDataService::getTrainerById($this->_websoccer, $this->_db, $unit["trainer_id"]);
		
		// train players
		$this->trainPlayers($teamId, $trainer, $unit);
		
		// update execution time of unit
		$columns["date_executed"] = $now;
		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_training_unit";
		$whereCondition = "id = %d";
		$this->_db->queryUpdate($columns, $fromTable, $whereCondition, $unit["id"]);
		
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS, 
				$this->_i18n->getMessage("training_execute_success"),
				""));
		
		return null;
	}
	
	private function trainPlayers($teamId, $trainer, $unit) {
		
		// compute effect on every player
		$players = PlayersDataService::getPlayersOfTeamById($this->_websoccer, $this->_db, $teamId);
		
		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_spieler";
		$whereCondition = "id = %d";
		
		$trainingEffects = array();
		foreach ($players as $player) {
			
			$effectFreshness = 0;
			$effectStamina = 0;
			$effectSatisfaction = 0;

			if (!$player["matches_injured"]) {
				$effectFreshness = $trainer["p_frische"];
				$effectStamina = $trainer["p_kondition"];
				$effectSatisfaction = $trainer["p_zufriedenheit"];
			} 
			
			// call plugins
			$event = new PlayerTrainedEvent($this->_websoccer, $this->_db, $this->_i18n,
					$player["id"], $teamId, $trainer["id"], 
					$effectFreshness, $effectStamina, $effectSatisfaction);
			PluginMediator::dispatchEvent($event);
			
			// update player
			$columns = array(
					"w_frische" => min(100, max(1, $player["strength_freshness"] + $effectFreshness)),
					"w_kondition" => min(100, max(1, $player["strength_stamina"] + $effectStamina)),
					"w_zufriedenheit" => min(100, max(1, $player["strength_satisfaction"] + $effectSatisfaction))
					);
			$this->_db->queryUpdate($columns, $fromTable, $whereCondition, $player["id"]);
			
			// add effect
			$trainingEffects[$player["id"]] = array(
					"name" => ($player["pseudonym"]) ? $player["pseudonym"] : $player["firstname"] . " " . $player["lastname"],
					"freshness" => $effectFreshness,
					"stamina" => $effectStamina,
					"satisfaction" => $effectSatisfaction
					);
		}
		
		$this->_websoccer->addContextParameter("trainingEffects", $trainingEffects);
	}
	
}

?>