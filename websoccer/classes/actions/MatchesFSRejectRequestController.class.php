<?php
/**
 * 
 * @author Sebastian Kaden
 */
class MatchesFSRejectRequestController implements IActionController {
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

		$this->_db->queryDelete($fromTable, $whereCondition, $parameters['id']);


		$result = $this->_db->querySelect("user_id", $this->_websoccer->getConfig("db_prefix") . "_verein", "id = %d", $request['home_id']);
		$receiver = $result->fetch_array();
		$result->free();

		$user = $this->_websoccer->getUser();
	
		// create notification
		NotificationsDataService::createNotification($this->_websoccer, $this->_db, $receiver["user_id"], "matchesfs_notification_rejected",
			array("sendername" => $user->username), "matchesfs", "matchesfs#requests", null, $requests['home_id']);
			
		// show success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
				$this->_i18n->getMessage("matchesfs_request_reject_success"),
				""));
		
		return null;
	}
	
}

?>