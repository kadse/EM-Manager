<?php
//Zeitzone setzen
date_default_timezone_set('Europe/Berlin');

//Datenbankverbindung
define("DB_HOST", "localhost");
define("DB_USER", "d0252aea");
define("DB_NAME", "d0252aea");
define("DB_PASS", "FZX5LonoMFHCZszd");

$dbconn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    printf("Database Connection Error: %s\n", mysqli_connect_error());
    exit();
}
?>