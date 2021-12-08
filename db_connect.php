<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "event";

    $connect = mysqli_connect($hostname, $username, $password);

    $dbselected=mysqli_select_db($connect, $dbname)
        OR die ("Database cannot be accesed");
?>
