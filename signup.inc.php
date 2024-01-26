<?php

if (isset($_POST["submit"]))
{
    // Data pakken
    $uid = $_POST["submit"];
    $uid = $_POST["pwd"];
    $uid = $_POST["pwdRepeat"];
    $uid = $_POST["email"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);


    $signup->signupUser();

    header(location: ../"index.php?error=none");
}