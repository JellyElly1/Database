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
            <a href="index.html" id="home-link"><img class="home" src="../Photos/me.png"></a>
            <h1>Ellinors side</h1>
        </div>
        <div class="dropdown-box">
            <div class="dropdown">
            <button class="dropbtn">Profesjonelt</button>
            <div class="dropdown-content">
                <a class="dropdown-look" href="lower_pages/vg1.html">VG1</a>
                <a class="dropdown-look" href="lower_pages/vg2.html">VG2</a>
                <a class="dropdown-look" href="lower_pages/jobb.html">For arbeidsgivere</a>
            </div>
            </div>
        </div>
        </div> 
    </div> 
    <div class="main-window">
    <h2>OBS! Du er hjertelig velkommen til å opprette bruker, men dette er kun en skoleoppgave og man vil ikke få noen av bøkene som en bestiller!</h2>
        <a class="database-link" href="innlogging.php">Logg inn!</a>
        <a class="database-link" href="registrering.php">Første gang? Registrer deg her!</a>
    </div>
</body>
</html>