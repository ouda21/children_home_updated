<?php

require "database_connect.php";
session_start();
if(!isset($_SESSION["username"])){
    header("location:../admin_login.php");
}
$userId=$_GET["user_id"];
$sql="UPDATE `worker` SET `status`=0 WHERE id='$userId'";
if(mysqli_query($conn,$sql)){
    echo '<script type="text/javascript">
        alert("Employee Suspended");
        window.location=\'../manage_users.php\';</script>';
}else{
    die("Error:".mysql_error($conn));
}