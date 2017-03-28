<?php
/**
 * @author Sebastian Kaden
 */
class NextMatchesBlockModel implements IModel {
	private $_db;
	private $_i18n;
	private $_websoccer;
	
	public function __construct($db, $i18n, $websoccer) {
		$this->_db = $db;
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
	}
	
	public function renderView() {
		return (strlen($this->_websoccer->getUser()->username)) ? TRUE : FALSE;
	}
	
	public function getTemplateParameters() {
		if ($this->_nationalteam) {
			$clubId = NationalteamsDataService::getNationalTeamManagedByCurrentUser($this->_websoccer, $this->_db);
		} else {
			$clubId = $this->_websoccer->getUser()->getClubId($this->_websoccer, $this->_db);
		}		

		$nextMatches = MatchesDataService::getNextMatches($this->_websoccer, $this->_db, $clubId, 3);
		
		return array('nextMatches' => $nextMatches);
	}

}

?>