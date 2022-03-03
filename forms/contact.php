<?php
 
  $receiving_email_address = 'khaliphag9@gmail.com';
  $name = $_POST['name'];
  $email = $_POST ['email'];
  $message = $_POST['message'];
  
  mail("khaliphag9@gmail.com",$email,$name,$message);
  header("location:index.php");
?>
