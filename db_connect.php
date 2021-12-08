<?php
//Muhammad Naqib bin Nasrudin 1912549
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "event";

    $connect = mysqli_connect($hostname, $username, $password);

    $dbselected=mysqli_select_db($connect, $dbname)
        OR die ("Database cannot be accesed");
?>
