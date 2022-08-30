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
    <link rel="stylesheet" href="CSS/indexcss/style.css">
    
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
    
<!-- header section starts      -->

<header style="background: skyblue;">


    <a href="#" class="logo"><i style="color: black;" class="fas fa-tv"></i>Movie clips</a>

    <nav class="navbar">
        <a class="active" href="#home">Welcome to Movie clips</a>
        
    </nav>

    <div class="icons">
        <input class="searct-txt" type="text" name="" placeholder="Type to search">
        <a href="#" class="search-btn"></a>        
        <i  style="font-size:20px;" class="fas fa-search" id="search-icon"></i></i>
        <button><a href="login.html">Login</a></button>
        <button><a href="Adminlogin.html">Admin</a></button>
        

    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
<?php
    $conn = new mysqli('localhost','root','','movie');
            if($conn->connect_error)
            {
                die('Connection Failed : '.$conn->connect_error);
            }
?>
<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    
                    <h3>Netflix</h3>
                    <p>Watch all movie reviews and songs released in netflix ott platform</p>
                    <a href="https://www.netflix.com/in/" class="btn">watch now</a>
                </div>
                <div class="image">
                    <img src="images/netflix.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    
                    <h3>Amazon Prime</h3>
                    <p>Watch all movie reviews and songs released in Amazon Prime ott platform</p>
                    <a href="https://www.primevideo.com/" class="btn">Amazon Prime</a>
                </div>
                <div class="image">
                    <img src="images/prinme.jpg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <h3>Hotstar</h3>
                    <p><p>Watch all movie reviews and songs released in Hotstar ott platform</p></p>
                    <a href="https://www.hotstar.com/in" class="btn">Hotstar</a>
                </div>
                <div class="image">
                    <img src="images/hotstar.png" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    
                    <h3>HBO</h3>
                    <p><p>Watch all movie reviews and songs released HBO ott platform</p></p>
                    <a href="https://www.hbo.com/" class="btn">HBO</a>
                </div>
                <div class="image">
                    <img src="images/hbo.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    
                    <h3>Sony</h3>
                    <p><p>Watch all movie reviews and songs released in Sony ott platform</p></p>
                    <a href="https://www.sonyliv.com/" class="btn">Sony</a>
                </div>
                <div class="image">
                    <img src="images/sony.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    
                    <h3>Zee 5</h3>
                    <p><p>Watch all movie reviews and songs released in Zee5 ott platform</p></p>
                    <a href="https://www.zee5.com/" class="btn">Zee5</a>
                </div>
                <div class="image">
                    <img src="images/zee2.jpg" alt="">
                </div>
            </div>


        </div>

        

    </div>

</section>

<section class="product"> 
    <?php
    $sql = "SELECT * FROM movies WHERE hero  = 'Rajinikanth'";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    echo  '<h2 class="product-category"><a href="outactor.php?id='.$row['hero'].'" class="btn btn-success">Rajini Movies</a></h2>';
    ?>
    
   
    <div class="product-container">
    <?php
    $y=1 ;
    for($i=1;$i<=2555;$i++)
    {
        if($y<=10)
            {
            
            
                $sql = "SELECT * FROM movies WHERE hero  = 'Rajinikanth'and id = $i";
              $res = $conn->query($sql);
              if($res->num_rows>0)
              {
                echo "<div class='product-card'>";
                echo   " <div class='product-image'>";
                while($row = $res->fetch_assoc())
                {
                    
                    echo "<img width='250px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
                    echo '<p><a href="outmovie.php?id='. $row['movie_name'] .'" class="btn btn-success">View Details</a></p>';
                    $y=$y+1;
                }
                echo  " </div>";
            
                echo" </div>";
            }
              else{}
           
                 
                
        }
            }
    ?>
        
    </div>
</section>
<section class="product"> 
    <?php
    $y=1 ;
    $sql = "SELECT * FROM movies WHERE hero  = 'Ajith Kumar'";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    echo  '<h2 class="product-category"><a href="outactor.php?id='.$row['hero'].'" class="btn btn-success">Ajith  Movies</a></h2>';
    ?>
   
    <div class="product-container">
    <?php
    for($i=1;$i<=2555;$i++)
    {
        if($y<=10)
            {
            
            
                $sql = "SELECT * FROM movies WHERE hero  = 'Ajith Kumar'and id = $i";
              $res = $conn->query($sql);
              if($res->num_rows>0)
              {
                echo "<div class='product-card'>";
                echo   " <div class='product-image'>";
                while($row = $res->fetch_assoc())
                {
                    
                    echo "<img width='250px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
                    echo '<p><a href="outmovie.php?id='. $row['movie_name'] .'" class="btn btn-success">View Details</a></p>';
                    $y=$y+1;
                }
              
                echo  " </div>";
            
                echo" </div>";}
              else{}
           
                 
            }   
         
            }
    ?>
        
    </div>
</section>
<section class="product"> 
    <?php
    $sql = "SELECT * FROM movies WHERE hero  = 'Dhanush '";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    echo  '<h2 class="product-category"><a href="outactor.php?id='.$row['hero'].'" class="btn btn-success">Dhanush  Movies</a></h2>';
    ?>
    
    <div class="product-container">
    <?php
    $y=1 ;
    for($i=1;$i<=2555;$i++)
    {
        if($y<=10)
            {
            
                $sql = "SELECT * FROM movies WHERE hero  = 'Dhanush 'and id = $i";
              $res = $conn->query($sql);
              if($res->num_rows>0)
              {
                echo "<div class='product-card'>";
                echo   " <div class='product-image'>";
                while($row = $res->fetch_assoc())
                {
                    
                    echo "<img width='250px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
                    echo '<p><a href="outmovie.php?id='. $row['movie_name'] .'" class="btn btn-success">View Details</a></p>';
                    $y=$y+1;
                }
                echo  " </div>";
            
                echo" </div>";
            }
              else{}
           
                 
                
         
       
         }     }
    ?>
        
    </div>
</section>

<section class="product"> 
    <?php
    $sql = "SELECT * FROM movies WHERE hero  = 'Simbu '";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    echo  '<h2 class="product-category"><a href="outactor.php?id='.$row['hero'].'" class="btn btn-success">Simbu  Movies</a></h2>';
    ?>
    
    <div class="product-container">
    <?php
    $y=1 ;
    for($i=1;$i<=2555;$i++)
    {
        if($y<=10)
            {
            
            
                $sql = "SELECT * FROM movies WHERE hero  = 'Simbu 'and id = $i";
              $res = $conn->query($sql);
              if($res->num_rows>0)
              {
                echo "<div class='product-card'>";
                echo   " <div class='product-image'>";
                while($row = $res->fetch_assoc())
                {
                    
                    echo "<img width='250px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
                    echo '<p><a href="outmovie.php?id='. $row['movie_name'] .'" class="btn btn-success">View Details</a></p>';
                    $y=$y+1;
                }
                echo  " </div>";
            
                echo" </div>";
            }
              else{}
           
                 
        }   
         
            }
    ?>
        
    </div>
</section>

<section class="product"> 
    <?php
    $sql = "SELECT * FROM movies WHERE hero  = 'Vijay Sethupathi '";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    echo  '<h2 class="product-category"><a href="outactor.php?id='.$row['hero'].'" class="btn btn-success">Vijaysethupathi  Movies</a></h2>';
    ?>
    
    <div class="product-container">
    <?php
    $y=1 ;
    for($i=1;$i<=2555;$i++)
    {
        if($y<=10)
            {
            $sql = "SELECT * FROM movies WHERE hero  = 'Vijay Sethupathi 'and id = $i";
            $res = $conn->query($sql);
            if($res->num_rows>0)
              {
                echo "<div class='product-card'>";
                echo   " <div class='product-image'>";
                while($row = $res->fetch_assoc())
              {
                  
                  echo "<img width='250px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
                  echo '<p><a href="outmovie.php?id='. $row['movie_name'] .'" class="btn btn-success">View Details</a></p>';
                  $y=$y+1;
              }
              echo  " </div>";
            
       echo" </div>";}
              
            }
           
                 
                
         
            }
    ?>
        
    </div>
</section>


<section class="footer" style="background: skyblue;">

    <div class="box-container">

        <div class="box">
            <h3>Avalible Platform</h3>
            <a href="https://www.hotstar.com/in">Hotstar</a>
            <a href="https://www.netflix.com/in/">Netflix</a>
            <a href="https://www.primevideo.com/">Amazon Prime</a>
            <a href="https://www.hbo.com/">HBO</a>
            <a href="https://www.zee5.com/">Zee 5</a>
            <a href="https://www.sonyliv.com/">SonyLiv</a>
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
