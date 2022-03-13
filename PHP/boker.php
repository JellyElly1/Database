<?php session_start() ?>
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
                <div class="knapp">
                    <a href="cart.php" ><img class="cart" src="../Photos/cart.png"></a>
                </div>
                <div class="dropdown">
                <button class="dropbtn">Profesjonelt</button>
                <div class="dropdown-content">
                    <a class="dropdown-look" href="../lower_pages/vg1.html">VG1</a>
                    <a class="dropdown-look" href="../lower_pages/vg2.html">VG2</a>
                    <a class="dropdown-look" href="../lower_pages/jobb.html">For arbeidsgivere</a>
                    <a class="dropdown-look" href="database.php">Bokhandel</a>
                </div>
                </div>
            </div>
        </div> 
        <div class="main-window">
            <p>OBS! Dette er en skoleoppgave! Du kan bestille om du ønsker det, men du vil ikke få varene og du vil ikke ha mulighet til å betale.</p>
            <div class="bok">
                <?php include "display_bok.php"?>
            </div> 
        </div>
    </div>
    <script>
        let cart //makes cart exists
        if (localStorage["cart"]) { //if cart yes
            cart=JSON.parse(localStorage["cart"]) //load
        } //jason takes localstorage happiness (string) and makes it happi for everyone else (list)
        else { //if cart no
            cart=[] //make cart (empty)
        }

        function add_cart(bok) { 
            cart.push(bok) //add bok you clicked to carty
            localStorage["cart"]=JSON.stringify(cart) //save cart to localstorage
        } //jason turn list into string to make localstorage happi
    </script>
</body>
</html>