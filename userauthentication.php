<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
// $_SESSION['userid'];
//echo($_SESSION['auth']);
if($_SESSION['auth'] != 1)
{
  $_SESSION['auth_status'] = "Login to Access Dashbord";
  header("Location: userlogin.php");
  // exit(0);
}

?>