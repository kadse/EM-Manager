<?php
include ("config/config.inc.php");

$liga_id = mysqli_real_escape_string($dbconn, $_POST['liga']);
$liga_id = intval($liga_id);

if (is_numeric($liga_id)) {
    $query = "SELECT name,id FROM _verein WHERE liga_id = '".$liga_id."' ORDER BY name ASC";
    $result = mysqli_query($dbconn, $query);
    $verein = mysqli_fetch_all($result);
    mysqli_free_result($result);
}
mysqli_close($dbconn);
?>

<form action="index.php?p=spieler" method="post">
    <section id="verein">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Verein auswählen</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 text-center form-group">
                    <select class="form-control" name="verein" id="verein">
                    <?php
                        foreach ($verein as $verein_id) {
                            echo '<option value="'.$verein_id[1].'">'.utf8_encode($verein_id[0]).'</option>';
                        };
                    ?>
                    </select>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center form-group">
                    <br /><br />
                    <button type="submit" class="btn btn-primary btn-xl">Weiter zur Spielerauswahl</button>
                </div>
            </div>
        </div>    
    </section>
</form>