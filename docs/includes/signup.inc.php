<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $username, $email, $pwd, $pwdRepeat) !== false) {
        header("location: ../Signup.php?error=emptyinput");
        exit();
    }
    if (InvalidUid($username) !== false) {
        header("location: ../Signup.php?error=invaliduid");
        exit();
    }
    if (InvalidEmail($email) !== false) {
        header("location: ../Signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../Signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../Signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ../Signup.php");
    exit();

}



