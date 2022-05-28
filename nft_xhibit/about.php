<?php
session_start();
include "./conn/connection.php";
include './conn/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Html, Css, Js,and Php">
    <meta name="author" content="Abbas Zaidan">
    <meta name="description" content="Non Fungible Token Xhibit Marketing Agency.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="shortcut icon" href="./img/logo.jpg" type="image/jpg">
    <title>NFT XHIBIT - Who Are We</title>
</head>
<body>
    <div class="container">
        <nav>
            <?php
                include './assets/home_nav.php';
            ?>
        </nav>
        <br>
        <br>
        <br>


        
        <!-- <main style="background-image: url('/nft/nft1.png');height:500px;">
            
        </main> -->
        <div id="waw1">
            <h1 style="color:yellow;font-weight: lighter;">
                WHO ARE WE
            </h1>
            <p style="color:yellow;">
            We are a group of marketing experts providing top quality services at affordable rates,<br> and collaborating with influencers from around the world. We bring inspiration and innovation<br> to every buyer, seller, and artist out there by ensuring maximum exposure to the projects we work with.
            </p>
        </div>
        
        <br>
        <br>
        <footer>
        <?php
                include './assets/footer.php';
            ?>
        </footer>
    </div>
</body>
</html>