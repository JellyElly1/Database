<?php
session_start();
if (isset($_POST["registrer"])) {

    // Tilkoblingsinformasjon
    $tjener = "books.topheinz.com";
    $brukernavn = "book";
    $passord = "Passord01";
    $database = "bokhandel";

    // Opprette en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);


    // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");

    // Lagrer skjemafeltene i enklere navn

    $FN = $_POST["Fornavn"];
    $EN = $_POST["Etternavn"];
    $EP = $_POST["Epost"];
    $BN = $_POST["Brukernavn"];
    $PW = $_POST["Passord"];
    $CPW = $_POST["confirm_password"];
    $AD = $_POST["Adresse"];
    $PN = $_POST["Postnummer"];

    $PWH = password_hash($PW, PASSWORD_DEFAULT);
    $CPWH = password_hash($CPW, PASSWORD_DEFAULT);


    $legitimasjon = "INSERT INTO Legitimasjon (Brukernavn, Passord)
        VALUES ('$BN', '$PWH')";

    $kunde = "INSERT INTO kunde (Fornavn_k, Etternavn_k, Epost, Adresse, Postnummer_Postnummer, Legitimasjon_Brukernavn)
        VALUES ('$FN', '$EN', '$EP', '$AD', '$PN', '$BN')";


    if ($kobling->query($legitimasjon)) {
        echo "Spørringen $legitimasjon ble gjennomført.";
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }

    if ($kobling->query($kunde)) {
        echo "Spørringen $kunde ble gjennomført.";
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
}