<style>
    textarea {  
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; 
    width: 100%;}
</style>

<?php

include ("config/config.inc.php");

$output = '
<style>
table#playerTable {
    border: 2px solid #8fc837;
}
table#playerTable th {
    padding: 5px;
    text-align: center;
    border-bottom: 1px solid #8fc837;
} 
table#playerTable td {
    padding: 10px;
    border-bottom: 1px dashed #656565;
}
table#playerTable tfoot {
    border-top: 1px solid #8fc837;
}
table#playerTable p {
    font-size: 14px;
}
</style>

<table align="center" id="playerTable">
    <thead>
        <tr>
            <th>Position</th>
            <th>Name</th>
            <th>Alter</th>
            <th>Nationalität</th>
            <th>Marktwert</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="5"><p align="center"><b>Bedingungen</b></p>
            <p align="left">'.nl2br($_POST['notiz']).'</p></td>
        </tr>
    </tfoot>
    <tbody>';
foreach ($_POST as $key => $value) {

    if ($key == "notiz") {
        continue;
    }

    $spieler_id = mysqli_real_escape_string($dbconn, $value);

    $query = "SELECT * FROM ws__spieler WHERE id = '".$spieler_id."'";
    $result = mysqli_query($dbconn, $query);
    $spieler = mysqli_fetch_array($result);
    mysqli_free_result($result);

    if (empty($spieler['vorname']) && empty($spieler['vorname'])) {
        $name = $spieler['kunstname'];
    }
    else {
        $name = $spieler['vorname']." ".$spieler['nachname'];
    }

    $date1 = new DateTime($spieler['geburtstag']);
    $date2 = new DateTime(date("Y-m-d"));
    $alter = $date1->diff($date2);

    $positionen = $spieler['position_main'];
    if (!empty($spieler['position_second'])) {
        $positionen .= " | ".$spieler['position_second'];
    }

    $output .= '
        <tr>
            <td>'.utf8_encode($spieler['position']).'<br /><i>'.utf8_encode($positionen).'</i></td>
            <td>'.utf8_encode($name).'</td>
            <td>'.$alter->format('%y Jahre').'</td>
            <td>'.utf8_encode($spieler['nation']).'</td>
            <td>'.number_format($spieler['marktwert'], 0, ',', '.').' EUR</td>
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