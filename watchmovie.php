<?php
session_start();
$usr=$_SESSION['user'];
$_SESSION['id']=$_GET['id'];
$conn = new mysqli('localhost','root','','movie');
if($conn->connect_error)
            {
                die('Connection Failed : '.$conn->connect_error);
            }
            else
            {}
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie clips</title>
    <link rel="stylesheet" href="CSS/movcss/moviepage.css">
        <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"> </script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"> </script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <!-- header  part  start -->
    <header style="background: skyblue;">

    <a href="#" class="logo"><i style="color: black;" class="fas fa-tv"></i>Movie clips</a>

    <nav class="navbar" >
        <a class="active" href="#home">Welcome to Movie clips</a>
        
    </nav>



</header>

    <?php
            
            if(isset($GET["id"]))
                {
                    $sql="select * from movies where movie_name='{$_GET["id"]}'";
                    $res=$conn->query($sql); 
                }
                else
                {
                    header("locaton: index.php");
                }
            
    ?>
    <!-- header  part  ends -->
    <!--main content  starts-->
    <section class="home" id="home">

        <div  class="swiper-container home-slider">
    
            <div class="swiper-wrapper wrapper">
    
                <div class="swiper-slide slide">
                    <div class="content">
                        
                        <h3><?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            //echo $rate;
                            echo "<p>".$row['movie_name']."</p>";
                            
                        }
                    ?></h3>
                        <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['movie_descr']."</p>";
                        }
                    ?>
                    </div>
                    <div class="image">
                        <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<img width='300px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>     
    
    <section class="product"> 
        <h2 class="product-category">Some Clips</h2>
        <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    
                <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<img width='300px' height='300px'src='data:image;base64,{$row["clip_1"]}' alt='img'>";
                        }
                    ?></div>
                
            </div>
            <div class="product-card">
                <div class="product-image">
                    
                <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<img width='300px' height='300px'src='data:image;base64,{$row["clip_2"]}' alt='img'>";
                        }
                    ?>
                    
                </div>
                
            </div>
            <div class="product-card">
                <div class="product-image">
                    
                <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<img width='300px' height='300px'src='data:image;base64,{$row["clip_3"]}' alt='img'>";
                        }
                    ?>
                    
                </div>
                
            </div>
            <div class="product-card">
                <div class="product-image">
                    
                <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<img width='300px' height='300px'src='data:image;base64,{$row["clip_4"]}' alt='img'>";
                        }
                    ?>
                    
                </div>
                
            </div>
            <div class="product-card">
                <div class="product-image">
                    
                <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<img width='300px' height='300px'src='data:image;base64,{$row["clip_5"]}' alt='img'>";
                        }
                    ?>
                    
                </div>
                
            </div>
            <div class="product-card">
                <div class="product-image">
                    
                <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<img width='300px' height='300px'src='data:image;base64,{$row["clip_6"]}' alt='img'>";
                        }
                    ?>
                    
                </div>
                
            </div>
            <div class="product-card">
                <div class="product-image">
                    
                <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<img width='300px' height='300px'src='data:image;base64,{$row["clip_7"]}' alt='img'>";
                        }
                    ?>
                    
                </div>
                
            </div>
            <div class="product-card">
                <div class="product-image">
                    
                <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<img width='300px' height='300px'src='data:image;base64,{$row["clip_8"]}' alt='img'>";
                        }
                    ?>
                    
                </div>
                
            </div>

        </div>
    </section>

    <section class="home" id="home">

        <div  class="swiper-container home-slider">
    
            <div class="swiper-wrapper wrapper">
    
                <div class="swiper-slide slide">
                    <div class="content">
                        
                        <h3>Movie Details</h3> 
                        <p> Directed by	<?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['director']."</p>";
                        }
                    ?></p>
                        <p> Cinematography by	 <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['Cinematography']."</p>";
                        }
                    ?>
                        <p> Produced by	<?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['producer']."</p>";
                        }
                    ?>
                        <p> Starring	<?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['hero'].",".$row['heroine']."</p>";
                        }
                    ?>
                       <p> Music by	<?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['music_director']."</p>";
                        }
                    ?>
                        <p> Release Year  <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['release_year']."</p>";
                        }
                    ?>
                        <p> Running time <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['run_time']."</p>";
                        }
                    ?>
                        <p> Language <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['lang']."</p>";
                        }
                    ?>
                        <p> Catogry <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            echo "<p>".$row['catogry']."</p>";
                        }
                    ?></p>
                    </div>
                    <div class="image">
                        <h4 style="font-size: 25px; color: #192a56;">Trailer</h4>
                        
                        <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            $trail=$row['trailer'];
                            $trai=preg_replace("#https://youtu.be/#" , "", $trail);
                            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$trai.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                        }
                    ?>
                        <h4 style="font-size: 25px; color: #192a56;">Teaser</h4>
                        <?php
                        $sql="select * from movies where movie_name='{$_GET["id"]}'";
                        $res=$conn->query($sql); 
                        while($row = $res->fetch_assoc())
                        {
                            $teaser=$row['teaser_link'];
                            $tease=preg_replace("#https://youtu.be/#" , "", $teaser);
                            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$tease.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    
    <section class="review" style="" id="review">
        
    
    <h2 class="heading">Rating for the Movie</h2>
    <form action="rate.php" method="post" > 
        <h1 class="heading">Give the comments about tha movie</h1>
        <input  type="text" name ="idd"  placeholder="Enter the comment">
                      
        <input style="background: darkblue;
    color:white;
    outline: none;
    border: none;
    font-size: 20px;
    font-weight: 500px;
    cursor: pointer;" type="submit"  value="Submit" name="">
                    
    </form>
        <h1 class="heading"> viewers <span>reviews</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="images/vijay.jpg" alt="">
                <h3>Vijay</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Best story and extronary acting and great music</p>
            </div>
            <div class="box">
                <img src="images/suriya.jpg" alt="">
                <h3>Ajith</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Best story and extronary acting and great music</p>
            </div>
            <div class="box">
                <img src="images/ajith.jpg" alt="">
                <h3>Suriya</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Best story and extronary acting and great music</p>
            </div>
    
        </div>
        
    </section>
    
    
    
        
    
    <!--main content  ends-->
    <!-- footer  part  starts -->
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
    <!-- footer  part  ends -->  
<script src="script.js"></script>    
</body>
</html>

