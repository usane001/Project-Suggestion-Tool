<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php'
    require_once ''

}
else {
    header("location: ../Signup.php");

}



