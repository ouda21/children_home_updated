<?php

require "database_connect.php";
session_start();
if(!isset($_SESSION["username"])){
    header("location:../admin_login.php");
}
$userId=$_GET["user_id"];
$sql="UPDATE `users` SET `status`=0 WHERE id='$userId'";
if(mysqli_query($conn,$sql)){
    echo '<script type="text/javascript">
        alert("User Suspended Successfully");
        window.location=\'../manage_users.php\';</script>';
}else{
    die("Error:".mysql_error($conn));
}