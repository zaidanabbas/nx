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
    <title>NFT XHIBIT - Item</title>
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
        <br>
        <?php 
        
        $ad = $_GET["nft"];
        $sql = "SELECT * FROM ad WHERE user_id='$ad' ORDER BY id DESC";
        $res = mysqli_query($con,  $sql);

        if (mysqli_num_rows($res) > 0) {

          while ($images = mysqli_fetch_assoc($res)) {  ?>

           <div class="alb">
            <br>
              <br>
              <img style="border-radius:7%;max-width: 500px;width: 100%;
        height: auto;" src="./uploads/ADS/<?=$images['image_url'];?>" alt="photo of <?=$images['username'];?>"><p>
               
               <?php echo $images['message']; ?><br></p>
                <br>
              <br>
           </div> 		
  <?php 
  }
 }
 else {
    echo "<p>NFT does not exist.</p>";
  }
  ?>
          <br>
        

        <footer>
        <?php
                include './assets/footer.php';
            ?>
        </footer>
    </div>
</body>
</html>