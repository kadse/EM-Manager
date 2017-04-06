<?php
/**
 * @author: Sebastian Kaden
 *
*/
class MatchesFSRequestsModel implements IModel {
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
		$clubId = $this->_websoccer->getUser()->getClubId($this->_websoccer, $this->_db);

		$website = WebSoccer::getInstance();
		$tablePrefix = $this->_websoccer->getConfig('db_prefix');
		
		// from
		$fromTable = $tablePrefix . '_matchesfs_request AS M';
		$fromTable .= ' INNER JOIN ' . $tablePrefix . '_verein AS H ON H.id = M.home_id';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_stadion AS S ON S.id = H.stadion_id';
		$whereCondition = 'M.guest_id = %d ORDER BY M.date ASC';
		
		// select
		$columns = array(
				"M.id"			=> "match_id",
				"H.id"			=> "home_id",
				"H.name"		=> "home_name",
				"H.bild"		=> "home_picture",
				"S.name" 		=> "stadium",
				"M.date" 		=> "match_date",
				"M.shootout" 	=> "match_shootout"
			);
		
		$requests = $this->_db->querySelect($columns, $fromTable, $whereCondition, $clubId);
		$count = $requests->fetch_array();

		return array("requests" => $requests, "count" => count($count));
	}
	
}

?>