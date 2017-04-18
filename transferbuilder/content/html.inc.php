<style>
    textarea {  
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; 
    width: 100%;}
</style>

<?php
include ("config/config.inc.php");

$spalten = 6;

$zusatzArray = array();
$zusatz = '';

if ($_POST['sa_spiele'] == 1) {
    $zusatz .= '<th>S (S)</th>';
    array_push($zusatzArray, "sa_spiele");
    $spalten++;
}
if ($_POST['st_spiele'] == 1) {
    $zusatz .= '<th>S (G)</th>';
    array_push($zusatzArray, "st_spiele");
    $spalten++;
}
if ($_POST['sa_tore'] == 1) {
    $zusatz .= '<th>T (S)</th>';
    array_push($zusatzArray, "sa_tore");
    $spalten++;
}
if ($_POST['st_tore'] == 1) {
    $zusatz .= '<th>T (G)</th>';
    array_push($zusatzArray, "st_tore");
    $spalten++;
}
if ($_POST['sa_assists'] == 1) {
    $zusatz .= '<th>V (S)</th>';
    array_push($zusatzArray, "sa_assists");
    $spalten++;
}
if ($_POST['st_assists'] == 1) {
    $zusatz .= '<th>V (G)</th>';
    array_push($zusatzArray, "st_assists");
    $spalten++;
}

$notiz = '<p align="center"><i>Keine</i></p>';
if (!empty($_POST['notiz'])) {
    $notiz = '<p align="left">'.nl2br($_POST['notiz']).'</p>';
}

$output = '
<style>
table#playerTable {
    border: 2px solid #4395bb;
}
table#playerTable th {
    padding: 5px;
    text-align: center;
    border-bottom: 1px solid #4395bb;
} 
table#playerTable td {
    padding: 10px;
    border-bottom: 1px dashed #656565;
}
table#playerTable tfoot {
    border-top: 1px solid #4395bb;
}
table#playerTable p {
    font-size: 14px;
}
</style>

<table align="center" id="playerTable">
    <thead>
        <tr>
            <th></th>
            <th>Position</th>
            <th>Name</th>
            <th>Alter</th>
            <th>Nation</th>
            <th>Marktwert</th>
            '.$zusatz.'
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="'.$spalten.'"><p align="center"><b>Bedingungen</b></p>
            '.$notiz.'</td>
        </tr>
    </tfoot>
    <tbody>';

$if_array = array("notiz", "st_spiele", "st_tore", "st_assists", "sa_spiele", "sa_tore", "sa_assists");

foreach ($_POST as $key => $value) {

    if (in_array($key, $if_array, empty($key) && $key !== '0')) {
        continue;
    }
    
    $spieler_id = mysqli_real_escape_string($dbconn, $value);
    $spieler_id = intval($spieler_id);

    if (!is_numeric($spieler_id)) {
        continue;
    }

    $query = "SELECT * FROM _spieler WHERE id = '".$spieler_id."'";
    $result = mysqli_query($dbconn, $query);
    $spieler = mysqli_fetch_array($result);
    mysqli_free_result($result);

    if (empty($spieler['vorname']) && empty($spieler['nachname'])) {
        $name = $spieler['kunstname'];
    }
    else {
        $name = $spieler['vorname']." ".$spieler['nachname'];
    }

    $date1 = new DateTime($spieler['geburtstag']);
    $date2 = new DateTime(date("Y-m-d"));
    $alter = $date1->diff($date2);

    if ($spieler['position_main'] == "T") $spieler['position_main'] = "TW";
    if ($spieler['position_main'] == "RS") $spieler['position_main'] = "RA";
    if ($spieler['position_main'] == "LS") $spieler['position_main'] = "LA";
    $positionen = '<img src="http://www.exklusiv-manager.de/uploads/positions_small/'.$spieler['position_main'].'.png" />';

    if (!empty($spieler['position_second'])) {
        if ($spieler['position_second'] == "T") $spieler['position_second'] = "TW";
        if ($spieler['position_second'] == "RS") $spieler['position_second'] = "RA";
        if ($spieler['position_second'] == "LS") $spieler['position_second'] = "LA";        
        $positionen .= ' | <img src="http://www.exklusiv-manager.de/uploads/positions_small/'.$spieler['position_second'].'.png" />';
    }

    $zusatz = '';
    foreach ($zusatzArray as $val) {
        $zusatz .= '<td style="text-align: center">'.$spieler[$val].'</td>';
    }

    $nation = utf8_encode($spieler['nation']);
    $nation = str_replace('ä', 'ae', $nation);
    $nation = str_replace('Ä', 'Ae', $nation);
    $nation = str_replace('ö', 'oe', $nation);
    $nation = str_replace('Ö', 'Oe', $nation);
    $nation = str_replace('ü', 'ue', $nation);
    $nation = str_replace('Ü', 'Ue', $nation);

    if (empty($spieler['picture'])) $spieler['picture'] = "nobody.png";

    $output .= '
        <tr>
            <td style="text-align: center"><img src="http://www.exklusiv-manager.de/uploads/player/'.$spieler['picture'].'" height="50px" /></td>
            <td style="text-align: center"><i>'.utf8_encode($positionen).'</i></td>
            <td><a href="http://www.exklusiv-manager.de/?page=player&id='.$spieler['id'].'">'.utf8_encode($name).'</a></td>
            <td style="text-align: center">'.$alter->format('%y').'</td>
            <td style="text-align: center"><img src="http://www.exklusiv-manager.de/img/flags/players/'.$nation.'.png" /></td>
            <td>'.number_format($spieler['marktwert'], 0, ',', '.').' EUR</td>
            '.$zusatz.'
        </tr>
    ';
}

$output .= "
    </tbody>
</table>";

mysqli_close($dbconn);
?>

<section id="html">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Vorschau</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
        <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><?php echo $output; ?><br /><br /><br /></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">HTML Code</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <textarea id="htmlOut" name="htmlOut" cols="100" rows="20" readonly=""><?php echo htmlspecialchars($output); ?></textarea>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center form-group">
                <br /><br />
                <button id="copyAll" class="btn btn-primary btn-xl">Kopieren</a>
            </div>
        </div>
    </div>    
</section>