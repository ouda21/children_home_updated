<?php
require "database_connect.php";
session_start();
if(!isset($_SESSION["username"])){
    header("location:../admin_login.php");
}

$userId=$_SESSION["username"];
$post_id=$_GET["user_id"];
$sql="DELETE FROM `users` WHERE id='$post_id'";
     if(mysqli_query($conn,$sql)){
        echo '<script type="text/javascript">
        alert("User Deleted Successfully");
        window.location=\'../manage_users.php\';</script>';
     }else{
         die("An error occurred:".mysqli_error($conn));
     }