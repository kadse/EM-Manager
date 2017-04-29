<style>
    textarea {  
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; 
    width: 100%;}
</style>

<?php
include ("config/config.inc.php");

$spieltag = mysqli_real_escape_string($dbconn, $_POST['spieltag']);
$spieltag = intval($spieltag);

$saison = mysqli_real_escape_string($dbconn, $_POST['saison']);
$saison = intval($saison);

$notiz = '<p align="center"><i>Kein Spieltagsbericht angegeben</i></p>';
if (!empty($_POST['notiz'])) {
    $notiz = '<p align="left">'.nl2br($_POST['notiz']).'</p>';
}

$output = '
<style>
table#Table {
    border: 2px solid #4395bb;
    width: 100%;
}
table#Table th {
    padding: 5px;
    text-align: center;
    border-bottom: 1px solid #4395bb;
} 
table#Table td {
    padding: 10px;
    border-bottom: 1px dashed #656565;
}
table#Table tfoot {
    border-top: 1px solid #4395bb;
}
table#Table p {
    font-size: 14px;
}
</style>

<h3>Vorbericht - '.$spieltag.'.Spieltag</h3>
<br/>
<table align="center" id="Table">
    <tr>
        <td>'.$notiz.'</td>
    </tr>
</table>
<br/>';

if ($spieltag > 1) {
    $output .= '
    <h3>Begegnungen - Letzter Spieltag</h3>
    <br/>
    <table align="center" id="Table">
        <thead>
            <tr>
                <th style="text-align: center">Datum</th>
                <th style="text-align: right">Heimmannschaft</th>
                <th></th>
                <th></th>
                <th></th>
                <th style="text-align: left">Gastmannschaft</th>
                <th style="text-align: center">Info</th>
            </tr>
        </thead>
        <tbody>';    

    if (is_numeric($spieltag) && is_numeric($saison)) {
        $query = "SELECT datum,home_verein,gast_verein,liga_id,id FROM _spiel WHERE spieltag = '".($spieltag-1)."' AND saison_id = '".$saison."'";
        $result = mysqli_query($dbconn, $query);
        $matches_old = mysqli_fetch_all($result);
        mysqli_free_result($result);        
    }

    foreach ($matches_old as $match_old) {

        $query = "SELECT id,name,bild FROM _verein WHERE id = '".$match_old[1]."'";
        $result = mysqli_query($dbconn, $query);
        $home_old = mysqli_fetch_array($result);
        mysqli_free_result($result);

        $query = "SELECT id,name,bild FROM _verein WHERE id = '".$match_old[2]."'";
        $result = mysqli_query($dbconn, $query);
        $guest_old = mysqli_fetch_array($result);
        mysqli_free_result($result);    

        $date_old = date("d.m.Y - H:i",$match_old[0]);

        $output .= '
            <tr>
                <td style="text-align: center">'.$date_old.' Uhr</td>
                <td style="text-align: right"><a href="http://www.exklusiv-manager.de/?page=team&id='.$home_old['id'].'">'.utf8_encode($home_old['name']).'</a></td>
                <td style="text-align: center"><img src="http://exklusiv-manager.de/uploads/club/'.$home_old['bild'].'" /></td>
                <td style="text-align: center">vs.</td>
                <td style="text-align: center"><img src="http://exklusiv-manager.de/uploads/club/'.$guest_old['bild'].'" /></td>
                <td style="text-align: left"><a href="http://www.exklusiv-manager.de/?page=team&id='.$guest_old['id'].'">'.utf8_encode($guest_old['name']).'</a></td>
                <td style="text-align: center"><a href="http://www.exklusiv-manager.de/?page=match&id='.$match_old[3].'">Zum Spiel</a></td>
            </tr>
        ';
    }

    $output .= '
        </tbody>
    </table>
    <br/>';
}

$output .= '
<h3>Begegnungen - '.$spieltag.'.Spieltag</h3>
<br/>
<table align="center" id="Table">
    <thead>
        <tr>
            <th style="text-align: center">Datum</th>
            <th style="text-align: right">Heimmannschaft</th>
            <th></th>
            <th></th>
            <th></th>
            <th style="text-align: left">Gastmannschaft</th>
            <th style="text-align: center">Info</th>
        </tr>
    </thead>
    <tbody>';

if (is_numeric($spieltag) && is_numeric($saison)) {
    $query = "SELECT datum,home_verein,gast_verein,liga_id,id FROM _spiel WHERE spieltag = '".$spieltag."' AND saison_id = '".$saison."'";
    $result = mysqli_query($dbconn, $query);
    $matches = mysqli_fetch_all($result);
    mysqli_free_result($result);        
}

$liga_id = $matches[0][3];

foreach ($matches as $match) {

    $query = "SELECT id,name,bild FROM _verein WHERE id = '".$match[1]."'";
    $result = mysqli_query($dbconn, $query);
    $home = mysqli_fetch_array($result);
    mysqli_free_result($result);

    $query = "SELECT id,name,bild FROM _verein WHERE id = '".$match[2]."'";
    $result = mysqli_query($dbconn, $query);
    $guest = mysqli_fetch_array($result);
    mysqli_free_result($result);    

    $date = date("d.m.Y - H:i",$match[0]);

    $output .= '
        <tr>
            <td style="text-align: center">'.$date.' Uhr</td>
            <td style="text-align: right"><a href="http://www.exklusiv-manager.de/?page=team&id='.$home['id'].'">'.utf8_encode($home['name']).'</a></td>
            <td style="text-align: center"><img src="http://exklusiv-manager.de/uploads/club/'.$home['bild'].'" /></td>
            <td style="text-align: center">vs.</td>
            <td style="text-align: center"><img src="http://exklusiv-manager.de/uploads/club/'.$guest['bild'].'" /></td>
            <td style="text-align: left"><a href="http://www.exklusiv-manager.de/?page=team&id='.$guest['id'].'">'.utf8_encode($guest['name']).'</a></td>
            <td style="text-align: center"><a href="http://www.exklusiv-manager.de/?page=match&id='.$match[4].'">Zum Spiel</a></td>
        </tr>
    ';
}

$output .= '
    </tbody>
</table>
<br/>

<h3>Ligatabelle - '.$spieltag.'.Spieltag</h3>
<br/>
<table align="center" id="Table">
    <thead>
        <tr>
            <th style="text-align: center">P</th>
            <th style="text-align: center"></th>
            <th style="text-align: left">Verein</th>
            <th style="text-align: center">SP</th>
            <th style="text-align: center">S</th>
            <th style="text-align: center">U</th>
            <th style="text-align: center">N</th>
            <th style="text-align: center">Tore</th>
            <th style="text-align: center">TD</th>
            <th style="text-align: center">Pkt</th>
        </tr>
    </thead>';


$query = "SELECT id,bild,name,sa_spiele,sa_siege,sa_unentschieden,sa_niederlagen,sa_tore,sa_gegentore,sa_punkte FROM _verein WHERE liga_id = '".$liga_id."' ORDER BY sa_punkte DESC";
$result = mysqli_query($dbconn, $query);
$teams = mysqli_fetch_all($result);
mysqli_free_result($result);

foreach ($teams as $pos => $team) {
    $output .= '
        <tr>
            <td style="text-align: center">'.($pos+1).'</td>
            <td style="text-align: center"><img src="http://exklusiv-manager.de/uploads/club/'.$team[1].'" /></td>
            <td style="text-align: left"><a href="http://www.exklusiv-manager.de/?page=team&id='.$team[0].'">'.utf8_encode($team[2]).'</a></td>
            <td style="text-align: center">'.$team[3].'</td>
            <td style="text-align: center">'.$team[4].'</td>
            <td style="text-align: center">'.$team[5].'</td>
            <td style="text-align: center">'.$team[6].'</td>
            <td style="text-align: center">'.$team[7].':'.$team[8].'</td>
            <td style="text-align: center">'.($team[7] - $team[8]).'</td>
            <td style="text-align: center">'.$team[9].'</td>
        </tr>';
}

$output .= '
</table>';

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