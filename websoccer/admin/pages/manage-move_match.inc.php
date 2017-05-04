<?php
/******************************************************

  Author: Sebastian Kaden

******************************************************/

if (!$showOverview) {
	$website = WebSoccer::getInstance();
	$db = DbConnection::getInstance();
	$dateFormat = $website->getConfig('date_format');
	$fieldValue = $website->getNowAsTimestamp();
	$now = date($dateFormat, $fieldValue);
	$time = date('H:i', $fieldValue);

	//### Ligen
	$fromTable = $website->getConfig("db_prefix") . "_liga AS L";
	$fromTable .= " INNER JOIN " . $website->getConfig("db_prefix") . "_saison AS S ON S.liga_id = L.id";

	// where
	$whereCondition = "S.beendet = '0' ORDER BY L.name ASC";

	// select
	$columns = [
		"L.id" => "liga_id",
		"L.name" => "liga_name",
		"S.id" => "saison_id",
		"S.name" => "saison_name"
	];

	$ligen = $db->queryCachedSelect($columns, $fromTable, $whereCondition);
	//-Ligen

	//### Spieltage
	$queryStr = "SELECT DISTINCT spieltag FROM " . $website->getConfig("db_prefix") . "_spiel WHERE spieltag IS NOT NULL ORDER BY spieltag ASC";

	$spieltage = $db->executeQuery($queryStr);
	//-Spieltage

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
	<input type="hidden" name="show" value="<?php echo $show; ?>">
	<input type="hidden" name="entity" value="<?php echo $entity; ?>">
	<input type="hidden" name="action" value="save">
	<input type="hidden" name="site" value="<?php echo $site; ?>">
	<br/><br/>
	<fieldset>
		<div class="control-group">
			<label class="control-label">Liga-Saison</label>
			<div class="controls">
				<select id="liga_saison" name="liga_saison">
				<?php
					foreach ($ligen as $liga_saison) {
						echo '<option value="'.$liga_saison['saison_id'].'">'.$liga_saison['liga_name'].' - '.$liga_saison['saison_name'].'</option>';
					}
				?>
				</select>
		    </div>
        </div>	
		<div class="control-group">
			<label class="control-label">Spieltag</label>
			<div class="controls">
				<select id="spieltag" name="spieltag">
				<?php
					foreach ($spieltage as $spieltag) {
						echo '<option value="'.$spieltag['spieltag'].'">'.$spieltag['spieltag'].'. Spieltag</option>';
					}
				?>
				</select>
		    </div>
        </div>	
		<div class="control-group">
			<label class="control-label">Neue Anstoßzeit</label>
			<div class="controls">
				<div class="input-append date datepicker">
					<input type="text" name="days" value="<?php echo $now ?>" class="input-small">
					<span class="add-on"><i class="icon-calendar"></i></span>
				</div>
				<div class="input-append bootstrap-timepicker">
					<input type="text" name="hours" value="<?php echo $time ?>" class="timepicker input-small">
					<span class="add-on"><i class="icon-time"></i></span>
		        </div>
		    </div>
        </div>
	</fieldset>
	<div class="form-actions">
		<input type="submit" class="btn btn-primary" accesskey="s" title="Alt + s" value="<?php echo $i18n->getMessage("button_save"); ?>"> 
		<a class="btn" href="?site=<?php echo $site; ?>&entity=<?php echo $entity; ?>"><?php echo $i18n->getMessage("button_cancel"); ?></a>
	</div>
         
</form>
<?php 
}
?>

