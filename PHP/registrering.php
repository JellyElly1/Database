<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<!--æøå-->
<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
<title>Ellinors side</title>

<script>
    function validateForm() {
        const passInp = document.getElementById("password") //find password -> store in passInp
        const passConf = document.getElementById("password_confirm") //find password_confirm -> store in passConf

        const errMsg = document.getElementById("error") //put error msg into ErrMsg

        if (passInp.value !== passConf.value) { //password not same?
            const error = "Passwords arent equal you dumb shit" //u stupid

            alert(error) //show error text
            errMsg.innerText = error; //ErrMsg = html id "error" take what it says and change to "error"

            return false
        }

        return true
    }
</script>
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
            <h2>Registrer deg!</h2>
            <form method="POST" onsubmit="return validateForm()"> <!--når du trykker send så sjekker den om alt stemmer-->
                <!--skjema-->
                <input type="text" name="Fornavn" placeholder="Fornavn">
                <br>
                <input type="text" name="Etternavn" placeholder="Etternavn">
                <br>
                <input type="text" name="Epost" placeholder="Epost">
                <br>
                <input type="text" name="Adresse" placeholder="Adresse">
                <br>
                <input type="text" name="Postnummer" placeholder="Postnummer" maxlength="4">
                <br>
                <input type="text" name="Brukernavn" placeholder="Brukernavn">
                <br>
                <input type="password" name="Passord" placeholder="Passord" id="password">
                <br>
                <input type="password" name="confirm_password" placeholder="Gjenta passord" id="password_confirm">
                <br>
                <input type="submit" name="registrer" value="Registrer">
                <!--Knapp for å legge til i tabellene-->
            </form>
            <p id="error"></p>
            <a href="../Personvern.pdf">Lurer du på hvilke rettigheter du har om dine personopplysninger? Les her!</a>
            <a class="database-link" href="innlogging.php">Allerede registrert? Logg inn!</a>
            <?php
            include 'INSERT_kunde.php'; //viser til "Kunde" tabellen(entiteten)
            ?>
        </div>
    </div>
</body>
</html>