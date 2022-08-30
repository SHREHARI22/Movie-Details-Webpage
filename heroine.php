<?php
$babyname = $_POST['babyname'];
$conn = new mysqli('localhost','root','','movie');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $SELECT = "SELECT heroine_name From heroine  Where heroine_name=? Limit 1";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $babyname);
        $stmt->execute();
        $stmt->bind_result($heroine_name);
        $stmt->store_result();
        if ($rnum = $stmt->num_rows ==0) 
        {
            $stmt->close();
            $INSERT = "INSERT INTO heroine (heroine_name) values ('$babyname')";
            $stmt = $conn->prepare($INSERT);
            $stmt->execute();
            echo '<html><script>alert("added")</script></html>';
            echo '<p><a href="heroineadd.php">Go Back</a></p>';
        }
        else{
            echo '<html><script>alert("AlreadyAdded")</script></html>';
            echo '<p><a href="heroineadd.php">Go Back</a></p>';
        }
}
?>