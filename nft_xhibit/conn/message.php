<?php
session_start();
include "./connection.php";
include "./functions.php";
$messageSent = false;
$user_data = check_login($con);
    if (isset($_POST['email']) && $_POST['email'] != '') {
        
   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
       $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "abbastzaidan08@gmail.com";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    $messageSent = true;
    header("Location: /");
   } else {
       $invalid_class_name = "form-invalid";
   }
    
    // mail($to,$messageSubject,$body);
 }