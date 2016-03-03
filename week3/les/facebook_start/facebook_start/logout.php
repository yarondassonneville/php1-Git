<?php
    // setcookie("loggedin", "", time()-3600);

    session_start(); //JE moet de sessie starten om die af te zetten
    session_destroy();
    header('Location: login.php');
?>