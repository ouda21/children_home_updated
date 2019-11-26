<?php

    $host="localhost";
    $root="root";
    $db="kevo";
    $pass="";

    $conn=mysqli_connect($host,$root,$pass,$db);
    if(!$conn)
    {
        die("Error:".mysqli_connect_errror());
    }