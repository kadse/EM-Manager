<?php
/**
 * @author: Sebastian Kaden
 *
*/
class MatchesFSModel implements IModel {
	private $_db;
	private $_i18n;
	private $_websoccer;
	
	public function __construct($db, $i18n, $websoccer) {
		$this->_db = $db;
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see IModel::renderView()
	 */
	public function renderView() {
		return TRUE;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see IModel::getTemplateParameters()
	 */
	public function getTemplateParameters() {
		$user = $this->_websoccer->getUser();
		$clubId = $user->getClubId($this->_websoccer, $this->_db);

		$website = WebSoccer::getInstance();
		$dateFormat = $website->getConfig('date_format');
		$fieldValue = $website->getNowAsTimestamp();

		$matchesfs['date'] = date($dateFormat, $fieldValue);


		$tablePrefix = $this->_websoccer->getConfig('db_prefix');
		
		// from
		$fromTable = $tablePrefix . '_verein';
		$whereCondition = 'status = 1 AND id != %d ORDER BY name ASC';
		
		// select
		$columns['id'] = 'id';
		$columns['name'] = 'name';
		$columns['user_id'] = 'user_id';
		
		$teams = $this->_db->querySelect($columns, $fromTable, $whereCondition, $clubId);
		
		return array("teams" => $teams, "matchesfs" => $matchesfs);
	}
	
}

?>