<?php
include ("config/config.inc.php");

$query = "SELECT name,id FROM ws__liga ORDER BY name ASC";
$result = mysqli_query($dbconn, $query);
$liga = mysqli_fetch_all($result);
mysqli_free_result($result);
mysqli_close($dbconn);
?>

<form action="index.php?p=verein" method="post">
    <section id="start" class="collapse">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Liga auswählen</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 text-center form-group">
                    <select class="form-control" name="liga" id="liga">
                    <?php
                        foreach ($liga as $liga_id) {
                            echo '<option value="'.$liga_id[1].'">'.$liga_id[0].'</option>';
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
                    <button type="submit" class="btn btn-primary btn-xl">Weiter zur Vereinsauswahl</a>
                </div>
            </div>
        </div>    
    </section>
</form>