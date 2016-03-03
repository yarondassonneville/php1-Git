<?php
    $conn = new mysqli("localhost", "root", "");
    if( $conn->connect_errno) {
        die("Sorry boss, the database is gone.");
    }

?>