<?php

    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("location:../admin_login.php");
    }
    include "database_connect.php";

    if(isset($_POST["register_kid"]))
    {
        $user=$_SESSION["username"];
        $pic=$_FILES["pic"]["name"];
        $name=$_POST["name"];
        $gender=$_POST["gender"];
        $age=$_POST["age"];
        $country=$_POST["country"];
        $county=$_POST["county"];
        $father=$_POST["father"];
        $mother=$_POST["mother"];
        $ass=0;
        

        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["pic"]["name"]);

        $sql="INSERT INTO `street_child`(`pic`, `name`, `gender`, `age`, `country`, `county`, `father`, `mother`, `first_ass`,`second_ass`,`final``registered_by`) VALUES ('$pic','$name','$gender','$age','$country','$county','$father','$mother',0,0,0'$user')";
        if(mysqli_query($conn,$sql))
        {
            if(move_uploaded_file($_FILES['pic']['tmp_name'],$target_dir.$pic))
            {
                echo '<script type="text/javascript">
                alert("New Child Registered Successfully");
                window.location=\'../admin_register_child.php\';</script>';
            }
            else
            {
                die("Error:".mysqli_error($conn));
            }
        }
        else
        {
            die("Error:".mysqli_error($conn));
        }
    }

    function showAllUsers(){
        require "database_connect.php";
        $sql="SELECT * FROM `users`";
        
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='table table-striped'>";
      echo'<tr> 
          <td> <font face="Arial">Serial Number</font> </td> 
          <td> <font face="Arial">First Name</font> </td> 
          <td> <font face="Arial">Other Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Phone</font> </td> 
          <td> <font face="Arial">Username</font> </td> 
          <td> <font face="Arial">Location</font> </td> 
          <td> <font face="Arial">Delete</font> </td> 
          <td> <font face="Arial">Suspend</font> </td> 
      </tr>';
      if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $id=$row["id"];
            $fname=$row["first_name"];
            $lname=$row["last_name"];
            $email=$row["email"];
            $phone=$row["phone"];
            $uname=$row["username"];
            $loc=$row["location"];
            
     
            echo '<tr> 
                      <td>'.$id.'</td> 
                      <td>'.$fname.'</td> 
                      <td>'.$lname.'</td>  
                      <td>'.$email.'</td> 
                      <td>'.$phone.'</td> 
                      <td>'.$uname.'</td> 
                      <td>'.$loc.'</td> 
        
                      <td><a href="php/delete.php?user_id='.$id.'" method="get" class="table-links">Delete</a></td>
                      <td><a href="php/suspend_user.php?user_id='.$id.'" method="get" class="table-links">Suspend</a></td>
                      
                  </tr>';
        }
        //$result->free();
        echo "</table>";
    }      
        }

    }

    function showSuspendedUsers(){
        require "database_connect.php";
        $sql="SELECT * FROM `users` WHERE status=0";
        
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='redTable'>";
      echo'<tr> 
      <td> <font face="Arial">Serial Number</font> </td> 
      <td> <font face="Arial">First Name</font> </td> 
      <td> <font face="Arial">Other Name</font> </td> 
      <td> <font face="Arial">Email</font> </td> 
      <td> <font face="Arial">Phone</font> </td> 
      <td> <font face="Arial">Username</font> </td> 
      <td> <font face="Arial">Location</font> </td> 
      
      <td> <font face="Arial">Suspend</font> </td> 
      </tr>';
      if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $id=$row["id"];
            $fname=$row["first_name"];
            $lname=$row["last_name"];
            $email=$row["email"];
            $phone=$row["phone"];
            $uname=$row["username"];
            $loc=$row["location"];
            
     
            echo '<tr> 
            <td>'.$id.'</td> 
            <td>'.$fname.'</td> 
            <td>'.$lname.'</td>  
            <td>'.$email.'</td> 
            <td>'.$phone.'</td> 
            <td>'.$uname.'</td> 
            <td>'.$loc.'</td> 

        
                      <td><a href="php/unsuspend_user.php?user_id='.$id.'" method="get" class="table-links">Unsuspend</a></td>
                      
                  </tr>';
        }
        //$result->free();
        echo "</table>";
    }      
        }

    }

    function showNewChildren()
    {
        require "database_connect.php";
        $sql="SELECT * FROM `street_child` WHERE first_ass=0";

        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='redTable'>";
            echo'<tr> 
            <td> <font face="Arial">Serial Number</font> </td> 
            <td> <font face="Arial">Name</font> </td> 
            <td> <font face="Arial">Gender</font> </td> 
            <td> <font face="Arial">Age</font> </td> 
            <td> <font face="Arial">Country</font> </td>
            <td> <font face="Arial">County</font> </td> 
            <td> <font face="Arial">Father</font> </td> 
            <td> <font face="Arial">Mother</font> </td> 
            <td> <font face="Arial">Added By</font> </td> 
            <td> <font face="Arial">First Approval</font> </td> 
            </tr>';
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $id=$row["id"];
                    $fname=$row["name"];
                    $lname=$row["gender"];
                    $email=$row["age"];
                    $phone=$row["country"];
                    $uname=$row["county"];
                    $loc=$row["father"];
                    $mom=$row["mother"];
                    $add=$row["registered_by"];
            
                    echo '<tr> 
                    <td>'.$id.'</td> 
                    <td>'.$fname.'</td> 
                    <td>'.$lname.'</td>  
                    <td>'.$email.'</td> 
                    <td>'.$phone.'</td> 
                    <td>'.$uname.'</td> 
                    <td>'.$loc.'</td> 
                    <td>'.$mom.'</td> 
                    <td>'.$add.'</td> 
                    <td><a href="php/init_approve.php?user_id='.$id.'" method="get" class="table-links">Approve</a></td>
                    </tr>';
                }
                //$result->free();
                echo "</table>";
            }      
        }

    }

    function showSecChildren()
    {
        require "database_connect.php";
        $sql="SELECT * FROM `street_child` WHERE second_ass=1";

        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='redTable'>";
            echo'<tr> 
            <td> <font face="Arial">Serial Number</font> </td> 
            <td> <font face="Arial">Name</font> </td> 
            <td> <font face="Arial">Gender</font> </td> 
            <td> <font face="Arial">Age</font> </td> 
            <td> <font face="Arial">Country</font> </td>
            <td> <font face="Arial">County</font> </td> 
            <td> <font face="Arial">Father</font> </td> 
            <td> <font face="Arial">Mother</font> </td> 
            <td> <font face="Arial">Added By</font> </td> 
            <td> <font face="Arial">Second Approval</font> </td> 
            </tr>';
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $id=$row["id"];
                    $fname=$row["name"];
                    $lname=$row["gender"];
                    $email=$row["age"];
                    $phone=$row["country"];
                    $uname=$row["county"];
                    $loc=$row["father"];
                    $mom=$row["mother"];
                    $add=$row["registered_by"];
            
                    echo '<tr> 
                    <td>'.$id.'</td> 
                    <td>'.$fname.'</td> 
                    <td>'.$lname.'</td>  
                    <td>'.$email.'</td> 
                    <td>'.$phone.'</td> 
                    <td>'.$uname.'</td> 
                    <td>'.$loc.'</td> 
                    <td>'.$mom.'</td> 
                    <td>'.$add.'</td> 
                    <td><a href="php/second_approve.php?user_id='.$id.'" method="get" class="table-links">Approve</a></td>
                    </tr>';
                }
                //$result->free();
                echo "</table>";
            }      
        }

    }

    function showApprovedChildren()
    {
        require "database_connect.php";
        $sql="SELECT * FROM `street_child` WHERE final=1";

        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='table table-stripped'>";
            echo'<tr> 
            <td> <font face="Arial">Serial Number</font> </td> 
            <td> <font face="Arial">Name</font> </td> 
            <td> <font face="Arial">Gender</font> </td> 
            <td> <font face="Arial">Age</font> </td> 
            <td> <font face="Arial">Country</font> </td>
            <td> <font face="Arial">County</font> </td> 
            <td> <font face="Arial">Father</font> </td> 
            <td> <font face="Arial">Mother</font> </td> 
            <td> <font face="Arial">Added By</font> </td> 
            
            </tr>';
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $id=$row["id"];
                    $fname=$row["name"];
                    $lname=$row["gender"];
                    $email=$row["age"];
                    $phone=$row["country"];
                    $uname=$row["county"];
                    $loc=$row["father"];
                    $mom=$row["mother"];
                    $add=$row["registered_by"];
            
                    echo '<tr> 
                    <td>'.$id.'</td> 
                    <td>'.$fname.'</td> 
                    <td>'.$lname.'</td>  
                    <td>'.$email.'</td> 
                    <td>'.$phone.'</td> 
                    <td>'.$uname.'</td> 
                    <td>'.$loc.'</td> 
                    <td>'.$mom.'</td> 
                    <td>'.$add.'</td> 
                    
                    </tr>';
                }
                //$result->free();
                echo "</table>";
            }      
        }

    }

    function showAllFood(){
        require "database_connect.php";
        $sql="SELECT * FROM `food_donation`";
        
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='table table-striped'>";
            echo'<tr> 
                <td> <font face="Arial"> Donation Number</font> </td> 
                <td> <font face="Arial">Donor</font> </td> 
                <td> <font face="Arial">Food Name</font> </td> 
                <td> <font face="Arial">Quantity</font> </td>
                
            </tr>';
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $id=$row["donation_id"];
                    $name=$row["donor"];
                    $email=$row["food_type"];
                    $phone=$row["quantity"];
                    
                    echo '<tr> 
                            <td>'.$id.'</td> 
                            <td>'.$name.'</td> 
                            <td>'.$email.'</td> 
                            <td>'.$phone.'</td> 
                        </tr>';
                }
                //$result->free();
                echo "</table>";
            }         
        }

    }

    function showAllMoney(){
        require "database_connect.php";
        $sql="SELECT * FROM `money_donation`";
        
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='table table-striped'>";
            echo'<tr> 
                <td> <font face="Arial"> Donation Id</font> </td> 
                <td> <font face="Arial">Donor</font> </td> 
                <td> <font face="Arial">Selected Amount</font> </td> 
                <td> <font face="Arial">Other Amount</font> </td> 
            </tr>';
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $id=$row["donation_id"];
                    $name=$row["donor"];
                    $email=$row["amount"];
                    $phone=$row["other_amount"];
                    
            
                    echo '<tr> 
                            <td>'.$id.'</td> 
                            <td>'.$name.'</td> 
                            
                            <td>'.$email.'</td> 
                            <td>'.$phone.'</td> 
                
                            
                        </tr>';
                }
                //$result->free();
                echo "</table>";
            }     
        }

    }

    function UserDetails($value)
    {
        require "database_connect.php";
        $user=$_SESSION["username"];

        $sql="SELECT * FROM `admin` WHERE email='$user'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            return $row["$value"];
        }
    }

    if(isset($_POST["update_info"]))
    {
        require "database_connect.php";
        $user=$_SESSION["username"];
        $uname=$_POST["username"];
        $email=$_POST["email"];
        $name=$_POST["name"];
        $sql="UPDATE `admin` SET `username`='$uname',`email`='$email',`name`='$name' WHERE email='$user'";
        if(mysqli_query($conn,$sql))
        {
            echo '<script type="text/javascript">
            alert("Profile Updated Successfully");
            window.location=\'../admin_profile.php\';</script>';
        }
        else
        {
            die("Error:".mysqli_error($conn));
        }
    }

    if(isset($_POST["register_worker"]))
    {
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $nat=$_POST["national_id"];
        $gender=$_POST["gender"];
        $rank=$_POST["rank"];
        $pass=md5(1234);
        $sql="INSERT INTO `worker`( `first_name`, `last_name`, `email`, `phone`, `national_id`, `gender`, `rank`, `password`,`status`) VALUES ('$fname','$lname','$email','$phone','$nat','$gender','$rank','$pass'1)";

        if(mysqli_query($conn,$sql))
        {
            echo '<script type="text/javascript">
            alert("User added Successfully");
            window.location=\'../register_worker.php\';</script>';
        }
        else
        {
            die("Error:".mysqli_error($conn));
        }
    }

    function workers()
    {
        require "database_connect.php";
        $sql="SELECT * FROM `worker`";
        echo "<table class='table table-striped'>";
            echo'<tr> 
                <td> <font face="Arial">Registration Id</font> </td> 
                <td> <font face="Arial">First Name</font> </td> 
                <td> <font face="Arial">Last Name</font> </td> 
                <td> <font face="Arial">Email</font> </td>
                <td> <font face="Arial">Phone</font> </td>
                <td> <font face="Arial">National Id</font> </td>
                <td> <font face="Arial">Gender</font> </td>
                <td> <font face="Arial">Rank</font> </td>
                <td> <font face="Arial">Suspend</font> </td>
                <td> <font face="Arial">Fire</font> </td>
            </tr>';
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row["id"];
                $fname=$row["first_name"];
                $lname=$row["last_name"];
                $email=$row["email"];
                $phone=$row["phone"];
                $nat=$row["national_id"];
                $gender=$row["gender"];
                $rank=$row["rank"];
                $r=null;
                if($rank=='M')
                {
                    $r="Manager";
                }
                else if($rank=="A")
                {
                    $r="Account";
                }
                else
                {
                    $r="Employee";
                }

                echo '<tr> 
                            <td>'.$id.'</td> 
                            <td>'.$fname.'</td> 
                            <td>'.$lname.'</td> 
                            <td>'.$email.'</td> 
                            <td>'.$phone.'</td> 
                            <td>'.$nat.'</td> 
                            <td>'.$gender.'</td> 
                            <td>'.$r.'</td> 
                            <td><a href="php/suspend_worker.php?user_id='.$id.'" method="get" class="table-links">Suspend</a></td>
                            <td><a href="php/fire_worker.php?user_id='.$id.'" method="get" class="table-links">Fire</a></td>
                        </tr>';
            }
            echo "</table>";
        }
        else
        {
            echo "No Employees";
        }
    }

    function SuspendedWorkers()
    {
        require "database_connect.php";
        $sql="SELECT * FROM `worker` WHERE status=0";
        echo "<table class='table table-striped'>";
            echo'<tr> 
                <td> <font face="Arial">Registration Id</font> </td> 
                <td> <font face="Arial">First Name</font> </td> 
                <td> <font face="Arial">Last Name</font> </td> 
                <td> <font face="Arial">Email</font> </td>
                <td> <font face="Arial">Phone</font> </td>
                <td> <font face="Arial">National Id</font> </td>
                <td> <font face="Arial">Gender</font> </td>
                <td> <font face="Arial">Rank</font> </td>
                <td> <font face="Arial">Unsuspend</font> </td>
                <td> <font face="Arial">Fire</font> </td>
            </tr>';
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row["id"];
                $fname=$row["first_name"];
                $lname=$row["last_name"];
                $email=$row["email"];
                $phone=$row["phone"];
                $nat=$row["national_id"];
                $gender=$row["gender"];
                $rank=$row["rank"];
                $r=null;
                if($rank=='M')
                {
                    $r="Manager";
                }
                else if($rank=="A")
                {
                    $r="Account";
                }
                else
                {
                    $r="Employee";
                }

                echo '<tr> 
                            <td>'.$id.'</td> 
                            <td>'.$fname.'</td> 
                            <td>'.$lname.'</td> 
                            <td>'.$email.'</td> 
                            <td>'.$phone.'</td> 
                            <td>'.$nat.'</td> 
                            <td>'.$gender.'</td> 
                            <td>'.$r.'</td> 
                            <td><a href="php/unsuspend_worker.php?user_id='.$id.'" method="get" class="table-links">Suspend</a></td>
                            <td><a href="php/fire_worker.php?user_id='.$id.'" method="get" class="table-links">Fire</a></td>
                        </tr>';
            }
            echo "</table>";
        }
        else
        {
            echo "No Employees";
        }
    }

    function FiredWorkers()
    {
        require "database_connect.php";
        $sql="SELECT * FROM `worker` WHERE status=2";
        echo "<table class='table table-striped'>";
            echo'<tr> 
                <td> <font face="Arial">Registration Id</font> </td> 
                <td> <font face="Arial">First Name</font> </td> 
                <td> <font face="Arial">Last Name</font> </td> 
                <td> <font face="Arial">Email</font> </td>
                <td> <font face="Arial">Phone</font> </td>
                <td> <font face="Arial">National Id</font> </td>
                <td> <font face="Arial">Gender</font> </td>
                <td> <font face="Arial">Rank</font> </td>
                
            </tr>';
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row["id"];
                $fname=$row["first_name"];
                $lname=$row["last_name"];
                $email=$row["email"];
                $phone=$row["phone"];
                $nat=$row["national_id"];
                $gender=$row["gender"];
                $rank=$row["rank"];
                $r=null;
                if($rank=='M')
                {
                    $r="Manager";
                }
                else if($rank=="A")
                {
                    $r="Account";
                }
                else
                {
                    $r="Employee";
                }

                echo '<tr> 
                            <td>'.$id.'</td> 
                            <td>'.$fname.'</td> 
                            <td>'.$lname.'</td> 
                            <td>'.$email.'</td> 
                            <td>'.$phone.'</td> 
                            <td>'.$nat.'</td> 
                            <td>'.$gender.'</td> 
                            <td>'.$r.'</td> 
                            
                        </tr>';
            }
            echo "</table>";
        }
        else
        {
            echo "No Employees";
        }
    }