<?php

require "database_connect.php";
session_start();
if(!isset($_SESSION["username"])){
    header("location:../admin_login.php");
}
$userId=$_GET["user_id"];
$sql="UPDATE `street_child` SET `first_ass`=0,`second_ass`=1 WHERE id='$userId'";
if(mysqli_query($conn,$sql)){
    echo '<script type="text/javascript">
    alert("Initial Verification Complete");
    window.location=\'../manage_children.php\';</script>';
}else{
    die("Error:".mysql_error($conn));
}