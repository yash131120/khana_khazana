<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['login_btn']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];


  $log_query = "SELECT * FROM admin WHERE email='$email' AND password='$password' ";
  $log_query_run = mysqli_query($con, $log_query);

  if(mysqli_num_rows($log_query_run) > 0)
   {
     $row = mysqli_fetch_assoc($log_query_run);
   $_SESSION['auth'] = true;
   $_SESSION['email'] = $row['email'];
     $_SESSION['status'] = "Logged In Successfully";
     header('Location: index.php');
  }

  else
  {
    $_SESSION['status'] = "Invalid Email or Password";
  }
}

?> 