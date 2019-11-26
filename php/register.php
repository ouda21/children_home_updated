<?php

    require "database_connect.php";
    if(isset($_POST["signup"]))
    {
        $username=$_POST["username"];
        $email=$_POST["email"];
        $pass=md5($_POST["pass"]);

        $sql="INSERT INTO `users`(`email`,`username`,`password`,`status`) VALUES ('$email','$username','$pass',1)";
        if(mysqli_query($conn,$sql))
        {
            echo '<script type="text/javascript">
                    alert("Registration Successful!");
                    window.location=\'../login.php\';</script>';
        }
        else
        {
            die("Error:".mysqli_error($conn));
        }
    }