<?php
session_start();
 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "kilder";
 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

 //Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
$sql = "SELECT B.Tittel, B.Pris, B.ImageUrl
FROM Bokhandel.bok B";

$resultat = $kobling->query($sql);

while($rad = $resultat->fetch_assoc()) {
 $Tittel = $rad["Tittel"];
 $Pris = $rad["Pris"];
 $ImgURL = $rad["ImageUrl"];

 echo "<div class=\"card\">";
    echo "<img class=\"bok-img\" src=\"$ImgURL\">";
    echo "<h3>$Tittel</h3>";
    echo "<p class=\"price\">$Pris kr</p>";
    echo "<img class=\"cart-img\" src=\"../Photos/add_cart.png\" onclick=\"add_cart('$Tittel')\">";
 echo "</div>";
}
?>