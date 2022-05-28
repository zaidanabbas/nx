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
    <meta name="description" content="Non Fungible Token Exibit Marketing Agency.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="shortcut icon" href="./img/logo.jpg" type="image/jpg">
    <title>NFT XHIBIT - Home</title>
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


        
        
            <h1 style="font-weight:bold;font-family:sans-serif;font-size: 60px;position:relative;top:50px;color:yellow;">
            NFT XHIBIT <br>
                LOGIN
           </h1>
           <br> 
           <form action="../inc/login.inc.php" method="post">
        <input type="text" name="user_name" placeholder="Username..."><br>
        <input type="password" name="password" placeholder="Password..."><br>
        <button type="submit" value="Login">Login</button>


      </form>
      <?php if (isset($_GET['error'])): ?>
		<p style='color:red;'><?php echo $_GET['error']; ?></p>
	<?php endif ?>
      <p>Not a member <a style="color: yellow;" href="/signup">Signup</a></p>

        <footer style="position:fixed;">
        <?php
                include './assets/footer.php';
            ?>
        </footer>
    </div>
</body>
</html>