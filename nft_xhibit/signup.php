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
    <title>NFT XHIBIT - SIGNUP</title>
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


        
        <main style="height:650px;">
            <h1 style="font-weight:bold;font-family:sans-serif;font-size: 60px;position:relative;top:50px;color:yellow;">
            NFT XHIBIT <br>
                SIGNUP
           </h1>
           <br>
           <form action="inc/signup.inc.php" method="post">
        <input autofocus type="text" name="name" placeholder="Full Name" required><br>
        <input type="text" name="user_name" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="number" placeholder="Phone Number(optional)"><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" value="Signup">Signup</button>


      </form>
      <p style="color:yellow;font-weight:;bolder">Already a member <a style="color: rgb(255, 255, 0);font-weight:bolder;" href="/login">Login</a></p>
    </div>
           <br>
        </main>
        <div>
            <div>
                
        </div>
        <footer style="position:fixed;">
        <?php
                include './assets/footer.php';
            ?>
        </footer>
    </div>
</body>
</html>