<?php
include ("config/config.inc.php");

$output = "
<table>
    <thead>
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Kunstname</th>
        </tr>
    </thead>
    <tbody>";
foreach ($_POST as $key => $value) {

    $spieler_id = mysqli_real_escape_string($dbconn, $value);

    $query = "SELECT * FROM ws__spieler WHERE id = '".$spieler_id."'";
    $result = mysqli_query($dbconn, $query);
    $spieler = mysqli_fetch_array($result);
    mysqli_free_result($result);

    $output .= "
        <tr>
            <td>".utf8_encode($spieler['vorname'])."</td>
            <td>".utf8_encode($spieler['nachname'])."</td>
            <td>".utf8_encode($spieler['kunstname'])."</td>
        </tr>
    ";
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