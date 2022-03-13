<?php
session_start();
if ($_POST[""]) {

    // Tilkoblingsinformasjon
    $tjener = "books.topheinz.com";
    $brukernavn = "book";
    $passord = "Passord01";
    $database = "bokhandel";

    // Opprette en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);


    // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");

    $ID = $_SESSION["idKunde"];

    $hent_ordre = "SELECT `idOrdre` FROM `ordre` WHERE Kunde_idKunde=$ID ORDER BY idOrdre DESC LIMIT 1";

    if ($kobling->query($hent_ordre)) {
        echo "Spørringen $hent_ordre ble gjennomført.";
        while($rad = $resultat->fetch_assoc()) {
            $OID = $rad["idOrdre"];
            $_SESSION["OID"] = $OID;
        }
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
}
?>