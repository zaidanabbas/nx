<a href="/"><img src="./img/logo.jpg" alt="NX Logo" style="float: left;padding: 20px;width:70px;height:auto;">
</a>
<div id="main">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/">Home</a>
                <a href="#waw">Who Are We</a>
                <a href="/#portfolio1">Portfolio</a>
                <a href="/#contact">Contact</a>
                <?php
    if (isset($_SESSION['user_id'])) {
		if ($_SESSION['user_name'] === 'zaidanabbas') {
      echo "<a href='/uploader'>Uploader</a>";
      
    } else {
      echo "";
    }
    if ($_SESSION['user_name'] === 'adelmroueh') {
      echo "<a href='/uploader'>Uploader</a>";
      
    } else {
      echo "";
    }
		echo "
		<a href='logout.php'>logout</a>";
	  } else { ?>
      <a href="/login">Login</a>
      <a href="/signup">Signup</a>
   <?php }
	 
    
    ?>
</div>

<!-- Use any element to open the sidenav -->
<span ></span>
</div>
<div>
  <button style="float:right;position:relative;top:30px;left:40px;" onclick="openNav()"><img src="./img/drop.png" alt="dropdown" style="width:18px;height:18px;"></button>
</div>