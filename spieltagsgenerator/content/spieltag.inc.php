<?php
include ("config/config.inc.php");

$liga_id = mysqli_real_escape_string($dbconn, $_POST['liga']);
$liga_id = intval($liga_id);

if (is_numeric($liga_id)) {
    $query = "SELECT id FROM _saison WHERE liga_id = '".$liga_id."' AND beendet = '0'";
    $result = mysqli_query($dbconn, $query);
    $saison = mysqli_fetch_array($result);
    mysqli_free_result($result);

    $query = "SELECT DISTINCT spieltag FROM _spiel WHERE liga_id = '".$liga_id."' AND saison_id = '".$saison['id']."' ORDER BY spieltag ASC";
    $result = mysqli_query($dbconn, $query);
    $spieltag = mysqli_fetch_all($result);
    mysqli_free_result($result);
}
mysqli_close($dbconn);
?>

<form action="index.php?p=html" method="post">
<input type="hidden" name="saison" value="<?php echo $saison['id']; ?>" />
    <section id="spieltag">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Spieltag auswählen</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 text-center form-group">
                    <select class="form-control" name="spieltag" id="spieltag">
                    <?php
                        foreach ($spieltag as $spieltag_id) {
                            echo '<option value="'.$spieltag_id[0].'">'.utf8_encode($spieltag_id[0]).'. Spieltag</option>';
                        };
                    ?>
                    </select>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br /><br />
                    <h2 class="section-heading">Bericht</h2>
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