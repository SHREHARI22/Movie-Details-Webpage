<?php

session_start();
$usr=$_GET['user'];
$name=$_SESSION['id'];
$comm=$_POST['idd'];
$conn = new mysqli('localhost','root','','movie');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{

                
        $sql = "SELECT movie_name from rating where movie_name='$name' and user='$usr' Limit 1";
        $INSERT = "INSERT Into rating (user,movie_name,comment )values('$usr','$name','$comm')";
        $UPDATE="UPDATE rating SET comment='$comm' where movie_name='$name' and user='$usr' Limit 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) 
        {
            $stmt1 = $conn->prepare($INSERT);
            $stmt1->execute();
            header("Location: moviepage.php?id=$name&user=$usr");
        }
        else
        {
            $stmt->close();
            $up="UPDATE rating SET comment='$comm' where movie_name='$name' and user='$usr' Limit 1";
            $stmt2 = $conn->prepare($UPDATE);
            $stmt2->execute();
            header("Location: moviepage.php?id=$name&user=$usr");
        }
                     
    }
                 
?>