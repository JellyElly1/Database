<?php
session_start();
if ($_POST["sender"]=="send") {

    // Tilkoblingsinformasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "bokhandel";

    // Opprette en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);


    // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");

    $ID = $_SESSION["idKunde"];

    echo "$ID";
    
    $lag_ordre = "INSERT INTO `ordre` (kunde_idKunde) VALUES ($ID)";

    if ($kobling->query($lag_ordre)) {
        echo "Spørringen $lag_ordre ble gjennomført.";
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
}
?>