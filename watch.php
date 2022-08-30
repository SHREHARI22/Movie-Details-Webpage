<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Clip</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSS/actorcss/style1.css">

</head>
<body>
    
<!-- header section starts      -->

<header style="background: skyblue;">

    <a href="#" class="logo"><i style="color: black;" class="fas fa-tv"></i>Movie clips</a>

    <nav class="navbar">
        <a class="active" href="#home">Welcome to Movie clips</a>
        
    </nav>

    
        

</header>

<!-- header section ends-->

<!-- search form  -->

<?php
            $conn = new mysqli('localhost','root','','movie');
            if($conn->connect_error)
            {
                die('Connection Failed : '.$conn->connect_error);
            }
            
    ?>

<!-- home section starts  -->

 
<section class="dishes" id="dishes">

   

    <div class="box-container">
    
        <?php
    
        //echo'<div class="box">';
        for($i=1;$i<=255;$i++)    
        {
        $sql = "SELECT * FROM watchlist WHERE email  = '{$_GET["user"]}'and id = $i";
        $res = $conn->query($sql);
        if($res->num_rows>0)
        {
          while($riw = $res->fetch_assoc())
          {
              $mov=$riw['movie'];
            $sel ="SELECT * FROM movies where movie_name='$mov'";
            $ris =$conn->query($sel);
            if($ris->num_rows>0)
            {
                while($row =$ris->fetch_assoc())
                {
                    $usr=$_GET["user"];
            echo'<div class="box">';
              echo "<img width='250px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
              echo '<p><a href="watchmovie.php?id='. $row['movie_name'] .'&user='.$usr.'" class="btn btn-success">View Details</a></p>';
              echo'</div>';
          }
        }
            
                      
       // echo'</div>';
    }
}
        }
                    ?>
        
      
    </div>

</section>



<section class="footer" style="background: skyblue;">

    <div class="box-container">

        <div class="box">
            <h3>Avalible Platform</h3>
            <a href="#">Hotstar</a>
            <a href="#">Netflix</a>
            <a href="#">Disney</a>
            <a href="#">HBO</a>
            <a href="#">Zee 5</a>
            <a href="#">Others</a>
        </div>

        <div class="box">
            <h3>Languages</h3>
            <a href="#">English</a>
            <a href="#">Tmail</a>
            <a href="#">Malayalayam</a>
            <a href="#">hindi</a>
            <a href="#">Telegu</a>
            <a href="#">Others</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">+111-222-3333</a>
            <a href="#">shaikhanas@gmail.com</a>
            <a href="#">anasbhai@gmail.com</a>
            <a href="#">mumbai, india - 400104</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    

</section>

<!-- footer section ends -->

<!-- loader part  -->





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
