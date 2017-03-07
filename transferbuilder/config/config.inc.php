<?php
//Zeitzone setzen
date_default_timezone_set('Europe/Berlin');

//Datenbankverbindung
define("DB_HOST", "10.35.249.91");
define("DB_USER", "k51489_appraisal");
define("DB_NAME", "k51489_appraisal");
define("DB_PASS", "Ljqj9@05");

$dbconn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    printf("Database Connection Error: %s\n", mysqli_connect_error());
    exit();
}
?>