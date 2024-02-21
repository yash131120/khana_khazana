<?php
session_start();
//echo($_SESSION['auth']);
if($_SESSION['auth'] != 1)
{
  $_SESSION['auth_status'] = "Login to Access Dashbord";
  header("Location: login.php");
  // exit(0);
}

?>