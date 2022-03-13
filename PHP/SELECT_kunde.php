<?php
session_start();

if(isset($_POST["logg_inn"]))
{

    // Tilkoblingsinformasjon
    $tjener = "books.topheinz.com";
    $brukernavn = "book";
    $passord = "Passord01";
    $database = "bokhandel";

        // Opprette en kobling
        $kobling = new mysqli($tjener, $brukernavn, $passord, $database);


    // Angi UTF-8 som tegnsett
    $kobling->set_charset ("utf8");

    // Lagrer skjemafeltene i enklere navn

    $BN = $_POST["Brukernavn"];
    $PW = $_POST["Passord"];

    $PWH = password_hash($PW, PASSWORD_DEFAULT);

    $logg_inn = "SELECT * FROM bokhandel.legitimasjon WHERE Brukernavn = '$BN' AND Passord = '$PWH'";

    if($resultat = $kobling->query($logg_inn)) {
        echo "Spørringen $logg_inn ble gjennomført.";
        while($rad = $resultat->fetch_assoc()) {
            $DBN = $rad["Brukernavn"];
            $DPW = $rad["Passord"];
        }
    }
    $get_KID ="SELECT bokhandel.Kunde.idKunde FROM bokhandel.Kunde WHERE Legitimasjon_Brukernavn ='$DBN'";

    if ($resultat =$kobling->query($get_KID)) {
        echo "Spørringen $get_KID ble gjennomført.";
        while($rad = $resultat->fetch_assoc()) {
            $ID = $rad["idKunde"];
        }

    }
        $_SESSION["idKunde"] = $ID;

        $_SESSION["bruker"]["brukernavn"] = $DBN; //er litt som å lagre informasjon i localstorage
        header("Location: boker.php"); //sender til boker siden hvis du er logget inn.
}
?>