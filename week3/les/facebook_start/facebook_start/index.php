<?php
    //check if cookie exists ==> ZEKER NIET DOEN ==> ONVEILIG
    /*if(isset($_COOKIE['loggedin'])) {
        $cookie = $_COOKIE['loggedin'];
        //yaron@yarondassonneville.be,qslkjflmcsuenvuqs

        $arrCookie = explode(",", $cookie); //2 arrays van maken (voor & na de komma)

        $username = $arrCookie[0]; //yaron@yarondassonneville.be
        $hash = $arrCookie[1]; // lfhqslkfjhqslkdfhqsjh

        $salt = "sfjsfjsqlkdjf!.";

        $check = md5($username . $salt);

        if ($check == $hash) {
            //welcome
        }
        else{
            header('Location: login.php');
        }
    }
    else {
        header('Location: login.php');
    }
    // if not, redirect to login.php*/

    // check if session exists
    session_start(); //OP SERVER
    if($_SESSION["loggedin"] == "yes") {
        // welcome
        // PLAATST OOK EEN COOKIE
    }
    else {
        header("Location: login.php");
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facebook</title>
    <!-- LAYOUT BY ED BOND: http://codepen.io/edbond88/pen/yGjAu -->
    <link rel="stylesheet" href="css/facebook.css">
</head>
<body>
        <section class="login-form-wrap" style="height: 156px">
          <p class="message">Welcome back!</p>
          <a style="color: white" href="logout.php">Logout</a>
        </section>
</body>
</html>