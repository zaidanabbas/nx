<?php 

session_start();
include("../conn/connection.php");
include("../conn/functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    // $id = $_SESSION['id'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

      //read from database
      $query = "select * from users where user_name = '$user_name' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {

          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] === $password)
          {
            
            $_SESSION['user_name'] = $user_data['user_name'];
            $_SESSION['user_id'] = $user_data['user_id'];
            $_SESSION['adminpanel'] = $user_data['adminpanel'];
            header("Location: ../");
            die;
          }
        }
      }
      
      // echo "<p>wrong username or password!</p>";
      header("Location: /login?error=Wrong%20Username%20or%20Password");
    }else
    {
      header("Location: /login?error=Wrong%20Username%20or%20Password");
    }
  }

?>