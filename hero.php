<?php
$heroname = $_POST['heroname'];
$conn = new mysqli('localhost','root','','movie');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $SELECT = "SELECT hero_name From hero  Where hero_name=? Limit 1";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $heroname);
        $stmt->execute();
        $stmt->bind_result($hero_name);
        $stmt->store_result();
        if ($rnum = $stmt->num_rows ==0) 
        {
            $stmt->close();
            $INSERT = "INSERT INTO hero (hero_name) values ('$heroname')";
            $stmt = $conn->prepare($INSERT);
            $stmt->execute();
            echo '<html><script>alert("added")</script></html>';
            echo '<p><a href="heroadd.php">Go Back</a></p>';
        }
        else{
            echo '<html><script>alert("AlreadyAdded")</script></html>';
            echo '<p><a href="heroadd.php">Go Back</a></p>';
        }
}
?>