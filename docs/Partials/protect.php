<?php
//checking if the session exists
//if the session is not set it redirects the user to the login form/page
  if(!isset($_SESSION["useruid"])){
      header("location:login.php");
  }
?>