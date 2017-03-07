<?php
include ("config/config.inc.php");

$verein_id = mysqli_real_escape_string($dbconn, $_POST['verein']);

$query = "SELECT id,vorname,nachname,kunstname FROM ws__spieler WHERE verein_id = '".$verein_id."' ORDER BY position,nachname,vorname,kunstname ASC";
$result = mysqli_query($dbconn, $query);
$spieler = mysqli_fetch_all($result);
mysqli_free_result($result);
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
                            <th>Vorname</th>
                            <th>Nachname</th>
                            <th>Kunstname</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($spieler as $key => $spieler_id) {
                                echo '<tr>';
                                    echo '<td><div class="checkbox"><label><input type="checkbox" value="'.$spieler_id[0].'" name="'.$key.'" checked=""/><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span></label></div</td>';
                                    echo '<td>'.utf8_encode($spieler_id[1]).'</td>';
                                    echo '<td>'.utf8_encode($spieler_id[2]).'</td>';
                                    echo '<td>'.utf8_encode($spieler_id[3]).'</td>';
                                echo '</tr>';
                            };
                        ?>
                    </tbody>
                </table>
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