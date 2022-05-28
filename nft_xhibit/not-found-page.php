<?php
session_start();
include "./conn/connection.php";
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
    <title>NFT XHIBIT - 404 </title>
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


        
        <main style="background-image: url('/nft/unnamed.gif');height: 400px;">
            <h1 style="font-weight:bold;font-family:sans-serif;font-size: 60px;position:relative;top:50px;color:white;">
                NFT XHIBIT <br>
                404 PAGE
           </h1>
           <br>
           <h2 style="font-family:sans-serif;color: white;">
           THIS PAGE DOES NOT EXIST.
           </h2> <!-- 
            <img src="./img/nft.gif" alt="NFT pic" style="width:100%;height:auto;"> -->
        </main>
        <footer>
        <?php
                include './assets/footer.php';
            ?>
        </footer>
    </div>
</body>
</html>