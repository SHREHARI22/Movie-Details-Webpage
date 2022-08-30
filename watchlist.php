<?php
session_start();
$usr=$_GET['user'];
$id=$_GET['id'];
$con = new mysqli("localhost","root","","movie");
    if($con->connect_error)
    {
        die("Failed to connect : ".$con->connection_error);
    }
    else
    {
        echo $usr;
        $SELECT = "SELECT movie From watchlist Where movie = '$id' and email = '$usr' Limit 1";
        $stmt = $con->prepare($SELECT);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) 
        {
            $INSERT = "INSERT Into watchlist (email,movie )values('$usr','$id')";
            $stmt = $con->prepare($INSERT);
            $stmt->execute();
            $stmt->close();
            $con->close();
            header("Location: moviepage.php?id=$id&user=$usr");
        } 
        else 
        {
            header("Location: moviepage.php?id=$id&user=$usr");
        }
    }
?>