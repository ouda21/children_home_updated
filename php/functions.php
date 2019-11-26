<?php

    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("location:../login.php");
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
        

        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["pic"]["name"]);

        $sql="INSERT INTO `street_child`(`pic`, `name`, `gender`, `age`, `country`, `county`, `father`, `mother`, `first_ass`,`second_ass`,`final``registered_by`) VALUES ('$pic','$name','$gender','$age','$country','$county','$father','$mother',0,0,0'$user')";
        if(mysqli_query($conn,$sql))
        {
            if(move_uploaded_file($_FILES['pic']['tmp_name'],$target_dir.$pic))
            {
                echo '<script type="text/javascript">
                alert("New Child Registered Successfully");
                window.location=\'../register_child.php\';</script>';
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

    function UserDetails($value)
    {
        require "database_connect.php";
        $user=$_SESSION["username"];

        $sql="SELECT * FROM `users` WHERE email='$user'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            return $row["$value"];
        }
    }

    if(isset($_POST["donate_money"])){
        $amount=$_POST["donation"];
        $other=$_POST["other"];
        $user_id=$_SESSION["username"];

        if($amount=="" && $other==""){
            echo '<script type="text/javascript">alert("No donaton amount was selected");window.location=\'../anindo(donation).php\';</script>';
        }else{
            $sql="INSERT INTO `money_donation`(`donor`, `amount`, `other_amount`) VALUES ('$user_id','$amount','$other')";
            if(mysqli_query($conn,$sql)){
                echo '<script type="text/javascript">alert("Thank you for Donating");window.location=\'../donate.php\';</script>';
            }else{
                die("Error:".mysqli_error($conn));
            }
        }

    }

    if(isset($_POST["donate_food"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $food=$_POST["food"];
        $quantity=$_POST["quantity"];

        $user_id=$_SESSION["username"];
        
        $sql="INSERT INTO `food_donation`(`donor`, `food_type`, `quantity`) VALUES ('$email','$food','$quantity')";
        if(mysqli_query($conn,$sql)){
            echo '<script type="text/javascript">alert("Thank you for Donating");window.location=\'../donate.php\';</script>';
        }else{
            die("Error:".mysqli_error($conn));
        }
    }

    if(isset($_POST["update_info"]))
    {
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $username=$_POST["username"];
        $location=$_POST["location"];
        $user=$_SESSION["username"];
        $sql="UPDATE `users` SET `first_name`='$fname',`last_name`='$lname',`email`='$email',`phone`='$phone',`username`='$username',`location`='$location' WHERE email='$user'";
        if(mysqli_query($conn,$sql))
        {
            echo '<script type="text/javascript">alert("Profile Updated Successfully");window.location=\'../user_profile.php\';</script>';
        }
        else
        {
            die("Error:".mysqli_error($conn));
        }
    }

    function foodDonationHistory()
    {
        require "database_connect.php";
        $email1=$_SESSION["username"];
        $sql="SELECT * FROM `food_donation` WHERE donor='$email1'";

        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='table table-stripped'>";
            echo'<tr> 
            <td> <font face="Arial">Serial Number</font> </td> 
            <td> <font face="Arial">Food Type</font> </td> 
            <td> <font face="Arial">Quantity</font> </td> 
            
            
            </tr>';
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $id=$row["donation_id"];
                    $fname=$row["food_type"];
                    $lname=$row["quantity"];
                    
            
                    echo '<tr> 
                    <td>'.$id.'</td> 
                    <td>'.$fname.'</td> 
                    <td>'.$lname.'</td>  
                    
                    
                    </tr>';
                }
                //$result->free();
                echo "</table>";
            }      
        }
    }

    function moneyDonationHistory()
    {
        require "database_connect.php";
        $email1=$_SESSION["username"];
        $sql="SELECT * FROM `money_donation` WHERE donor='$email1'";

        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='table table-stripped'>";
            echo'<tr> 
            <td> <font face="Arial">Serial Number</font> </td> 
            <td> <font face="Arial">Amount </font> </td> 
            <td> <font face="Arial">Other Amount</font> </td> 
            
            
            </tr>';
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $id=$row["donation_id"];
                    $fname=$row["amount"];
                    $lname=$row["other_amount"];
                    
            
                    echo '<tr> 
                    <td>'.$id.'</td> 
                    <td>'.$fname.'</td> 
                    <td>'.$lname.'</td>  
                    
                    
                    </tr>';
                }
                //$result->free();
                echo "</table>";
            }      
        }
    }

    function showApprovedChildren1()
    {
        require "database_connect.php";
        $email=$_SESSION["username"];
        $sql="SELECT * FROM `street_child` WHERE final=1 AND registered_by='$email'";

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
                    
                    echo '<tr> 
                    <td>'.$id.'</td> 
                    <td>'.$fname.'</td> 
                    <td>'.$lname.'</td>  
                    <td>'.$email.'</td> 
                    <td>'.$phone.'</td> 
                    <td>'.$uname.'</td> 
                    <td>'.$loc.'</td> 
                    <td>'.$mom.'</td> 
                    
                    
                    </tr>';
                }
                //$result->free();
                echo "</table>";
            }      
        }

    }