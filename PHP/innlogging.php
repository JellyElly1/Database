<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8"> <!--æøå-->
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    <title>Ellinors side</title>
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="flexbox_left">
                <a href="../index.html" id="home-link"><img class="home" src="../Photos/me.png"></a>
                <h1>Ellinors side</h1>
            </div>
            <div class="dropdown-box">
                <!--<div class="knapp">
                <a class="personlig" href="lower_pages/pers.html">Personlig</a>
                </div>-->
                <div class="dropdown">
                <button class="dropbtn">Profesjonelt</button>
                <div class="dropdown-content">
                    <a class="dropdown-look" href="../lower_pages/vg1.html">VG1</a>
                    <a class="dropdown-look" href="../lower_pages/vg2.html">VG2</a>
                    <a class="dropdown-look" href="../lower_pages/jobb.html">For arbeidsgivere</a>
                    <a class="dropdown-look" href="database.php">Database</a>
                </div>
                </div>
            </div>
        </div> 
        <div class="main-window">
            <h2>Logg inn!</h2>
            <form method="POST"> <!--skjema-->
            <input type="text" name="Brukernavn" placeholder="Brukernavn">
            <br>
            <input type="password" name="Passord" placeholder="Passord">
            <br>
            <input type="submit" name="logg_inn" value="Logg inn"> <!--Knapp for å legge til i tabellene-->
            </form>
            <a class="database-link" href="registrering.php">Ikke registert enda? Registrer deg her!</a>
            <?php
                include "SELECT_kunde.php"
            ?>
        </div>
    </div>
</body>
</html>