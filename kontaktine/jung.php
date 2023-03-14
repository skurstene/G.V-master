<?php
define("JUNG_SERVER", "localhost");
define ("JUNG_USER", "root");
define ("JUMG_PASSWORD", "");
define ("JUNG_NAME", "master.1");

$mysqli = new mysqli(JUNG_SERVER, JUNG_USER, JUMG_PASSWORD, JUNG_NAME);
if($mysqli->connect_error){
    echo 'Nepavyko!!';
    echo 'Klaida. ' . $mysqli->connect_error . '\n';
    exit();
}
mysqli_query($mysqli, "INSERT INTO kontaktai (vardas, email, message) 
VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[kalusimai]')");
?>