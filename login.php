<?php
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $con = new mysqli("localhost","root","","movie");
    if($con->connect_error)
    {
        die("Failed to connect : ".$con->connection_error);
    }
    else
    {
        $stmt = $con->prepare("select * from loginn where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] == $pass)
            {
                header("Location: logedin.php?user=$email");
            }
            else
            {
                echo '<p>Invalid Password<a href="login.html">Click Here</a> to go to Login Page</p>';
            }
        }
        else 
        {
            echo '<p>Invalid Email<a href="login.html">Click Here</a> to go to Login Page</p>';
        }
    }
?>
