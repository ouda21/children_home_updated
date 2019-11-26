<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("location:login.php");
    }

    function getDays()
    {

    }
    if(isset($_POST["time_in"]))
    {
        $emai=$_SESSION["username"];
        $$in=$_POST["in"];
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
    function UserDetails($value)
    {
        require "database_connect.php";
        $user=$_SESSION["username"];

        $sql="SELECT * FROM `worker` WHERE email='$user'";
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
                echo '<script type="text/javascript">alert("Thank you for Donating");window.location=\'../worker_donate.php\';</script>';
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
            echo '<script type="text/javascript">alert("Thank you for Donating");window.location=\'../worker_donate.php\';</script>';
        }else{
            die("Error:".mysqli_error($conn));
        }
    }

    if(isset($_POST["update_info"]))
    {
        $email1=$_SESSION["username"];
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];

        $sql="UPDATE `worker` SET `first_name`='$fname',`last_name`='$lname',`email`='$email',`phone`='$phone', WHERE email='$email1'";
        if(mysqli_query($conn,$sql))
        {
            echo '<script type="text/javascript">alert("");window.location=\'../worker_profile.php\';</script>';
        }
        else
        {

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