<style>
    textarea {  
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; 
    width: 100%;}
</style>

<?php
include ("config/config.inc.php");

$verein_id = mysqli_real_escape_string($dbconn, $_POST['verein']);
$verein_id = intval($verein_id);

if (is_numeric($verein_id)) {
    $query = "SELECT id,position,position_main,position_second,vorname,nachname,kunstname,geburtstag,nation,marktwert FROM ws__spieler WHERE verein_id = '".$verein_id."' ORDER BY position,nachname,vorname,kunstname ASC";
    $result = mysqli_query($dbconn, $query);
    $spieler = mysqli_fetch_all($result);
    mysqli_free_result($result);    
}
mysqli_close($dbconn);
?>
<form action="index.php?p=html" method="post">
    <section id="spieler">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Spieler auswählen</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive">
                <table class="table form-group">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" id="checkAll" checked="">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <b>Alle</b>
                                    </label>
                                </div>
                            </th>
                            <th>Position</th>
                            <th>Name</th>
                            <th>Alter</th>
                            <th>Nationalität</th>
                            <th>Marktwert</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($spieler as $key => $spieler_id) {
                                $positionen = $spieler_id[2];
                                if (!empty($spieler_id[3])) {
                                    $positionen .= " | ".$spieler_id[3];
                                }

                                if (empty($spieler_id_id[4]) && empty($spieler_id[5])) {
                                    $name = $spieler_id[6];
                                }
                                else {
                                    $name = $spieler_id[4]." ".$spieler_id[5];
                                }

                                $date1 = new DateTime($spieler_id[7]);
                                $date2 = new DateTime(date("Y-m-d"));
                                $alter = $date1->diff($date2);

                                echo '<tr>';
                                    echo '<td><div class="checkbox"><label><input type="checkbox" value="'.$spieler_id[0].'" name="'.$key.'" checked=""/><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span></label></div</td>';
                                    echo '<td>'.utf8_encode($spieler_id[1]).'<br /><i>'.utf8_encode($positionen).'</i></td>';
                                    echo '<td>'.utf8_encode($name).'</td>';
                                    echo '<td>'.$alter->format('%y Jahre').'</td>';
                                    echo '<td>'.utf8_encode($spieler_id[8]).'</td>';
                                    echo '<td>'.number_format($spieler_id[9], 0, ',', '.').' EUR</td>';
                                echo '</tr>';
                            };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Zusatzoptionen</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-3">
                    <div class="checkbox">
                        <label><input type="checkbox" value="1" id="sa_spiele" name="sa_spiele"><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span><b>Spiele (Saison)</b></label>
                    </div>                
                    <div class="checkbox">
                        <label><input type="checkbox" value="1" id="st_spiele" name="st_spiele"><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span><b>Spiele (Gesamt)</b></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="1" id="sa_tore" name="sa_tore"><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span><b>Tore (Saison)</b></label>
                    </div>                    
                    <div class="checkbox">
                        <label><input type="checkbox" value="1" id="st_tore" name="st_tore"><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span><b>Tore (Gesamt)</b></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="1" id="sa_assists" name="sa_assists"><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span><b>Vorlagen (Saison)</b></label>
                    </div>                    
                    <div class="checkbox">
                        <label><input type="checkbox" value="1" id="st_assists" name="st_assists"><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span><b>Vorlagen (Gesamt)</b></label>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br /><br />
                    <h2 class="section-heading">Bedingungen</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <textarea id="notiz" name="notiz" cols="100" rows="20"></textarea>
                </div>
            </div>
        </div>        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center form-group">
                    <br /><br />
                    <button type="submit" class="btn btn-primary btn-xl">HTML Code generieren</button>
                </div>
            </div>
        </div>
    </section>
</form>