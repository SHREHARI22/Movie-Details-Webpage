<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conn = new mysqli('localhost','root','','movie');
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $SELECT = "SELECT email From loginn Where email = ? Limit 1";
        $INSERT = "INSERT Into loginn (firstname,lastname,email , password )values(?,?,?,?)";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) 
        {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssss", $fname,$lname,$email,$pass);
            $stmt->execute();
            header("Location: login.html");
        } 
        else 
        {
            echo '<p>Email Already Registered<a href="login.html">Click Here</a> to go to Login Page</p>';
        }
        $stmt->close();
        $conn->close();
    }
?>