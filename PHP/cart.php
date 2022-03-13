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
            <h4>Handlekurv</h4>
            <div class="show_items">

            </div>
            <div class="button">
                <button onclick="order()">Bestill</button>
            </div>
            <?php
                print_r($_SESSION);
            ?>
            <form id="f1" method="POST">
                <input type="hidden" id="sender" name="sender" value="">
            </form>
            <form id="f2" method="POST">
                <input type="hidden" id="i-bok" name="f-bok">
            </form>
        </div>
    </div>
    <?php
    include "INSERT_ordre.php"; 
    include "SELECT_ordre.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">//imports jquery</script> 
    <script>
        let cart //makes cart exists
        if (localStorage["cart"]) { //if cart yes
            cart=JSON.parse(localStorage["cart"]) //load
        } //jason takes localstorage happiness (string) and makes it happi for everyone else (list)
        else { //if cart no
            cart=[] //make cart (empty)
        }

        const show_items=document.querySelector(".show_items") //query = knockoff css
        //const(ant) means no magic change

        for (const bok of cart) { //for every bok you have you do the loopti loop
            show_items.innerHTML+= //bok goes through all books. it changes based on which bok is next in list
            `<div>
                <h2>${bok}</h2>
            </div>`
        }

        function order() {
            $("#sender").val("send");
            $("#f1").submit();
        }
    </script>
</body>
</html>