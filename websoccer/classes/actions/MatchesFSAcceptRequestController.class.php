<?php
/**
 * 
 * @author Sebastian Kaden
 */
class MatchesFSAcceptRequestController implements IActionController {
	private $_i18n;
	private $_websoccer;
	private $_db;
	
	public function __construct(I18n $i18n, WebSoccer $websoccer, DbConnection $db) {
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
		$this->_db = $db;
	}
	
	public function executeAction($parameters) {

		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_matchesfs_request";
		$whereCondition = "id = %d";
		
		// get offer information
		$result = $this->_db->querySelect("*", $fromTable, $whereCondition, $parameters["id"]);
		$request = $result->fetch_array();
		$result->free();
		
		if (!$request) {
			throw new Exception($this->_i18n->getMessage("matchesfs_request_notfound"));
		}
		
		$this->insertFSMatch($parameters['id']);

		$result = $this->_db->querySelect("user_id", $this->_websoccer->getConfig("db_prefix") . "_verein", "id = %d", $request['home_id']);
		$receiver = $result->fetch_array();
		$result->free();

		$user = $this->_websoccer->getUser();
	
		// create notification
		NotificationsDataService::createNotification($this->_websoccer, $this->_db, $receiver["user_id"], "matchesfs_notification_accepted",
			array("sendername" => $user->username), "matchesfs", "formation", null, $requests['home_id']);
		
		// show success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
				$this->_i18n->getMessage("matchesfs_request_accept_success"),
				""));

		return null;
	}
	
	private function insertFSMatch($matchID) {
		$tablePrefix = $this->_websoccer->getConfig('db_prefix');

		$fromTable = $tablePrefix . "_matchesfs_request AS M";
		$fromTable .= ' INNER JOIN ' . $tablePrefix . '_verein AS H ON H.id = M.home_id';
		$whereCondition = "M.id = %d";

		$columns = array(
				"M.date" 		=> "date",
				"M.shootout" 	=> "shootout",			
				"M.home_id"		=> "home_id",
				"M.guest_id"	=> "guest_id",
				"H.stadion_id"	=> "stadium"
			);		

		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition, $matchID);
		$match = $result->fetch_array();
		$result->free();


		$table = $tablePrefix . "_spiel";
		$columns = array(
				"spieltyp" 		=> "Freundschaft",
				"elfmeter" 		=> $match['shootout'],
				"datum"			=> $match['date'],
				"stadion_id"	=> $match['stadium'],
				"home_verein"	=> $match['home_id'],
				"gast_verein"	=> $match['guest_id']
			);

		$this->_db->queryInsert($columns, $table);

		$this->_db->queryDelete($tablePrefix . "_matchesfs_request", "id = %d", $matchID);
	}
}

?>