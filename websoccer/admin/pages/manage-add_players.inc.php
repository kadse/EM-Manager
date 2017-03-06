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

if (!$showOverview) {
	$count = (isset($_REQUEST['count'])) ? $_REQUEST['count'] : 3;
?>
<script>
function updateQueryStringParameter(uri, key, value) {
  var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
  var separator = uri.indexOf('?') !== -1 ? "&" : "?";
  if (uri.match(re)) {
    return uri.replace(re, '$1' + key + "=" + value + '$2');
  }
  else {
    return uri + separator + key + "=" + value;
  }
}

function playersCount() {
	var select = document.getElementById('players_count');
	var number = select.selectedIndex + 1;

	var url = updateQueryStringParameter(window.location.href, "count", number);
	window.location.href = url;
}
</script>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal"<?php 
	if ($enableFileUpload) echo " enctype=\"multipart/form-data\""; 
?>>
	<input type="hidden" name="show" value="<?php echo $show; ?>">
	<input type="hidden" name="entity" value="<?php echo $entity; ?>">
	<input type="hidden" name="action" value="save">
	<input type="hidden" name="site" value="<?php echo $site; ?>">
	
	<fieldset>
    <legend><?php echo $i18n->getMessage("manage_add_title"); ?></legend>
    <select id="players_count" name="players_count" onchange="playersCount()">
    	<?php 
    		for ($j = 1; $j <= 10; $j++) {
    	?>
    		<option value="<?php echo $j; ?>" <?php if ($count == $j) echo " selected"; ?>><?php echo $j; ?> Spieler</option>
    	<?php
    		}
    	?>
    </select>
    <br /><br />
	
	<?php
	for ($i = 1; $i <= $count; $i++) {
		foreach ($formFields as $fieldId => $fieldInfo) {
			$fieldValue = null;
			if (isset($_REQUEST[$fieldId])) {
				$fieldValue = $_REQUEST[$fieldId];
				
				// use default value only if no data has been submitted, since page could be re-rendered after a validation error
			} else if (!count($_POST) && strlen($fieldInfo["default"])) {
				$fieldValue = $fieldInfo["default"];
			}

			if ($fieldId != "verein_id" || ($fieldId == "verein_id" && $i == 1)) {
				echo FormBuilderPlayers::createFormGroup($i18n, $i, $fieldId, $fieldInfo, $fieldValue, $labelPrefix);
			}			
		}
	}	
	?>
	</fieldset>
	<div class="form-actions">
		<input type="submit" class="btn btn-primary" accesskey="s" title="Alt + s" value="<?php echo $i18n->getMessage("button_save"); ?>"> 
		<a class="btn" href="?site=<?php echo $site; ?>&entity=<?php echo $entity; ?>"><?php echo $i18n->getMessage("button_cancel"); ?></a>
	</div>
         
</form>
<?php 
}
?>

