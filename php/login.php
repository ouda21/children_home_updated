<?php
    session_start();
    require "database_connect.php";

    if(isset($_POST["login"])){
        $userid=$_POST["username"];
        $password=md5($_POST["pass"]);
        $sql="SELECT * FROM `users` WHERE username=? AND password=?";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            die("Sql statement failed");
        }else{
            mysqli_stmt_bind_param($stmt,"ss",$userid,$password);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result)==0){
                echo '<script type="text/javascript">
                alert("Wrong UserName or Password. Please try again!");
                window.location=\'../login.php\';</script>';
            }else{
                while($row=mysqli_fetch_assoc($result)){
                    $_SESSION['username']=$row["email"];
                    $status=$row["status"];
                    if($status==0)
                    {
                        echo "<script>Log in Successful</script>";
                        header("location:../user_landing.php");
                    }
                    else
                    {
                        echo '<script type="text/javascript">
                    alert("This account is suspended!");
                    window.location=\'../login.php\';</script>';
                    }        
                    }
                }
            }
        }
    
        if(isset($_POST["admin_login"])){
            $userid=$_POST["username"];
            $password=$_POST["pass"];
            $sql="SELECT * FROM `admin` WHERE username=? AND password=?";
            $stmt=mysqli_stmt_init($conn);
    
            if(!mysqli_stmt_prepare($stmt,$sql)){
                die("Sql statement failed");
            }else{
                mysqli_stmt_bind_param($stmt,"ss",$userid,$password);
                mysqli_stmt_execute($stmt);
                $result=mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result)==0){
                    echo '<script type="text/javascript">
                    alert("Wrong UserName or Password. Please try again!");
                    window.location=\'../admin_login.php\';</script>';
                }else{
                    while($row=mysqli_fetch_assoc($result)){
                            $_SESSION['username']=$row["email"];
                        
                                echo "<script>Log in Successful</script>";
                                header("location:../admin_home.php");
                            
                        }
                    }
                }
            }
        
            if(isset($_POST["worker_login"])){
                $userid=$_POST["username"];
                $password=md5($_POST["pass"]);
                $sql="SELECT * FROM `worker` WHERE email=? AND password=?";
                $stmt=mysqli_stmt_init($conn);
        
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    die("Sql statement failed");
                }else{
                    mysqli_stmt_bind_param($stmt,"ss",$userid,$password);
                    mysqli_stmt_execute($stmt);
                    $result=mysqli_stmt_get_result($stmt);
                    if(mysqli_num_rows($result)==0){
                        echo '<script type="text/javascript">
                        alert("Wrong UserName or Password. Please try again!");
                        window.location=\'../worker_login.php\';</script>';
                    }else{
                        while($row=mysqli_fetch_assoc($result)){
                                $_SESSION['username']=$row["email"];
                                    $status=$row["status"];
                                    if($status==1){
                                        echo "<script>Log in Successful</script>";
                                        header("location:../worker_landin.php");
                                    }
                                    else if($status==2)
                                    {
                                        echo '<script type="text/javascript">
                                             alert("You were fired!");
                                             window.location=\'../worker_login.php\';</script>';
                                    }
                                    else
                                    {
                                        echo '<script type="text/javascript">
                                        alert("You are on Suspension!");
                                        window.location=\'../worker_login.php\';</script>';
                                    }
                                    
                                
                            }
                        }
                    }
                }
            