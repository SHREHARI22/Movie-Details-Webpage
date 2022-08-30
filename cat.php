<?php
$cat = $_POST['cat'];
$conn = new mysqli('localhost','root','','movie');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $SELECT = "SELECT cat From catogry  Where cat='$cat' Limit 1";
        $stmt = $conn->prepare($SELECT);
        //$stmt->bind_param("s", $cat);
        $stmt->execute();
        $stmt->bind_result($cat);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) 
        {
            $stmt->close();
            $INSERT = "INSERT INTO catogry (cat) value ('$cat')";
            $stmt = $conn->prepare($INSERT);
            $stmt->execute();
            echo '<html><script>alert("added")</script></html>';
            echo '<p><a href="catadd.php">Go Back</a></p>';
        }
        else
        {
            echo '<html><script>alert("AlreadyAdded")</script></html>';
            echo '<p><a href="catadd.php">Go Back</a></p>';
        }
}
?>