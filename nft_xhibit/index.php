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
    <title>NFT XHIBIT - HOME</title>
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


        
        <main style="height:400px;">
            <h1 style="font-weight:bold;font-family:sans-serif;font-size: 50px;position:relative;top:50px;color:yellow;"><br>
                NFT XHIBIT <br>
                MARKETING</h1><br>
                <h2 style="color:yellow;">MAKING YOUR PROJECT FLY
</h2>


        </main>
        <hr>
        <div id="waw">
            <h1 style="color:yellow;font-weight: lighter;">
                WHO ARE WE
            </h1>
            <p style="color:yellow;">
            We are a group of marketing experts providing top quality services at affordable rates,<br> and collaborating with influencers from around the world. We bring inspiration and innovation<br> to every buyer, seller, and artist out there by ensuring maximum exposure to the projects we work with.
            </p>
        </div>
        <hr>
        <div id="portfolio">
        <h2 style="color:yellow;">
               PORTFOLIO
            </h2>
            <p>
            The Biggest NFT drops you've ever seen.
            </p>
        </div>
        <div id="portfolio">
        
            <?php 
          $sql = "SELECT * FROM ad ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
            <div class="alb">

              <br>
                <br>
                <a href="item?nft=<?=$images['user_id'];?>">
                    <img style="border-radius:7%;max-width: 500px;width: 100%;
        height: auto;"  src="./uploads/ADS/<?=$images['image_url'];?>" alt="photo of <?=$images['message'];?>">
                  </a>
                  <br>
                <br>
             
              <div>
               <p style="color:yellow;">
                  <?php echo $images['message']; ?>
              </p>
               
              </div>
            </div>  

            		
      <?php 
      } 
      }
      else
     {
      echo "<p>No NFT's Yet</p>";
      }
      ?>
      </div>
        </div>
        <!-- <div id="contact">
            <div id="cont">
                <!-- <h2>
                    <?php
                        if ($messageSent) {
                            ?>
                            <script>
                                alert()
                            </script>
                            <?php
                        }
                    ?>
                </h2> 
            <h2>
                Contact us
            </h2>
            <form action="/conn/message.php" method="post">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="subject" placeholder="Subject"><br>
        <textarea name="message" placeholder="Write Mail"></textarea><br>
        <button type="submit" value="Signup">Send</button>
            </div>
            </form>
        </div> -->
        <hr>
        <div id="contact">
            <h2>
                Mail Us
            </h2>
            <a href="mailto:info@nftxhibit.net"><img style="width:20px;height:20px;position:relative;" src="/img/mail.png" alt="mail"></a>
        </div>
        
        <footer>
        <?php
                include './assets/footer.php';
            ?>
        </footer>
        <script src="/assets/script.js"></script>
    </div>
</body>
</html>