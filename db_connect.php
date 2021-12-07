<?php
    $hostname = "localhost";
    $username = "root";
    $password = "almxlna1012";
    $dbname = "event";

    $connect = mysqli_connect($hostname, $username, $password);

    $dbselected=mysqli_select_db($connect, $dbname)
        OR die ("Database cannot be accesed");
?>