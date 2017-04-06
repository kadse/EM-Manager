<?php
/**
 * 
 * @author Sebastian Kaden
 */
class MatchesFSAddRequestController implements IActionController {
	private $_i18n;
	private $_websoccer;
	private $_db;
	
	public function __construct(I18n $i18n, WebSoccer $websoccer, DbConnection $db) {
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
		$this->_db = $db;
	}
	
	public function executeAction($parameters) {
		$website = WebSoccer::getInstance();
		$tablePrefix = $this->_websoccer->getConfig('db_prefix');

		$fromTable = $tablePrefix . '_verein';
		$whereCondition = 'id = %d';
		$param = $parameters['opponent'];

		$result = $this->_db->querySelect("user_id", $fromTable, $whereCondition, $param);
		$teamManager = $result->fetch_array();
		$result->free();

		if ($teamManager['user_id'] == 0) {
			throw new Exception($this->_i18n->getMessage("matchesfs_opponent_has_no_manager"));	
		}

		$user = $this->_websoccer->getUser();
		$clubId = $user->getClubId($this->_websoccer, $this->_db);
		
		// check if user has a club
		if ($clubId < 1) {
			throw new Exception($this->_i18n->getMessage("error_action_required_team"));
		}

		if ($clubId == $parameters['opponent']) {
			throw new Exception($this->_i18n->getMessage("matchesfs_error_team_opponent_equal"));	
		}

		$dateObj = DateTime::createFromFormat($website->getConfig("date_format") .", H:i", $parameters['date_date'].", ".$parameters['date_time']);
		$date = $dateObj->getTimestamp();
		$now = $website->getNowAsTimestamp() + (60*10);

		if ($date < $now) {
			throw new Exception($this->_i18n->getMessage("matchesfs_date_in_past"));
		}


		// check maximum number of open requests
		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_matchesfs_request";
		
		$result = $this->_db->querySelect("COUNT(*) AS hits", $fromTable, "home_id = %d", $clubId);
		$requests_home = $result->fetch_array();
		$result->free();

		$result = $this->_db->querySelect("COUNT(*) AS hits", $fromTable, "guest_id = %d", $parameters['opponent']);
		$requests_guest = $result->fetch_array();
		$result->free();		
		
		//$maxNoOfRequests = (int) $this->_websoccer->getConfig("youth_matchrequest_max_open_requests");
		$maxNoOfRequests = 5;
		if ($requests_home && $requests_home["hits"] >= $maxNoOfRequests) {
			throw new Exception($this->_i18n->getMessage("matchesfs_too_many_requests_home", $maxNoOfRequests));
		}
		if ($requests_guest && $requests_guest["hits"] >= $maxNoOfRequests) {
			throw new Exception($this->_i18n->getMessage("matchesfs_too_many_requests_guest", $maxNoOfRequests));
		}


		// create request
		$columns = array(
				"home_id" => $clubId,
				"guest_id" => $parameters['opponent'],
				"date" => $date,
				"shootout" => $parameters["shootout"]
				);
		$this->_db->queryInsert($columns, $fromTable);
		
		// create success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
				$this->_i18n->getMessage("matchesfs_matchrequest_create_success"),
				""));

		// create notification
		NotificationsDataService::createNotification($this->_websoccer, $this->_db, $teamManager['user_id'], "matchesfs_notification_matchrequest",
			array("sendername" => $user->username), "matchesfs", "matchesfs#requests", null, $parameters['opponent']);
		
		return "matchesfs";
	}
	
}

?>