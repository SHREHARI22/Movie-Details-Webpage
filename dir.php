<?php
$dirname = $_POST['dirname'];
$conn = new mysqli('localhost','root','','movie');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $SELECT = "SELECT dir_name From director  Where dir_name='$dirname' Limit 1";
        $stmt = $conn->prepare($SELECT);
        //$stmt->bind_param("s", $dirname);
        $stmt->execute();
        $stmt->bind_result($dir_name);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) 
        {
            $stmt->close();
            $INSERT = "INSERT INTO director (dir_name) value ('$dirname')";
            $stmt = $conn->prepare($INSERT);
            $stmt->execute();
            echo '<html><script>alert("added")</script></html>';
            echo '<p><a href="directoradd.php">Go Back</a></p>';
        }
        else
        {
            echo '<html><script>alert("AlreadyAdded")</script></html>';
            echo '<p><a href="directoradd.php">Go Back</a></p>';
        }
}
?>