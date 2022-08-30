<?php
    $conn = new mysqli('localhost','root','','movie');
            if($conn->connect_error)
            {
                die('Connection Failed : '.$conn->connect_error);
            }
            else{
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/indexcss/style.css">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />

</head>
<body>
    
<!-- header section starts      -->

<header style="background: skyblue;">
    <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="images/icon-5359553_1280.png" alt="profile logo" />
        </div>
        <div class="menu">
            <h3><span>My Profile</span></h3>
            <ul>
                <?php
                $sql="select * from loginn where email='{$_GET["user"]}'";
                $res=$conn->query($sql); 
                while($row = $res->fetch_assoc())
                {
                    $fname=$row['firstname'];
                    echo "<li><img src='images/icon-5359553_1280.png' alt='profile logo' />".$fname."</li>";
                } ?> <?php
                    echo  '<li><img src="images/icon-5359553_1280.png" alt="profile logo" /><a href="watch.php?user='.$_GET["user"].'">Wishlist</a></li>';
               ?>
                <li><img src="images/icon-5359553_1280.png" alt="profile logo" /><a href="home.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active');
        }
    </script>

    <a href="#" class="logo"><i style="color: black;" class="fas fa-tv"></i>  Movie clips</a>

    <nav class="navbar">
        <a class="active" href="#home">Welcome to Movie clips</a>
        
    </nav>

    <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <div class="filter-btn" onclick="filterMenuToggle();">
                <button>Filters</button>
            </div>
            <?php
                $usre=$_GET['user'];
           echo '<form action="filter.php?user='.$usre.'" method="post" enctype="multipart/form-data">'; ?>
            <div class="filter-menu">
                <section>
                    <div class="filter-header">
                        <span>FILTERS</span>
                        
                    </div>
                    
                    <ul>
                        <li class="filter-list">
                        
                        <input style="background: darkblue;color:white;outline: none;border: none;font-size: 20px;font-weight: 500px;cursor: pointer;position:absolute; right: 6%;" type="submit"  value="Submit" name="">
                            <h3>Actors</h3>
                            <select style="width:100%; padding: 10px 15px 10px 15px;" name="heroname">
                                <?php
                                    $SELECT = "SELECT * from hero";
                                    if($res= mysqli_query($conn,$SELECT))
                                    {
                                        if(mysqli_num_rows($res)>0)
                                        {
                                            while($row = mysqli_fetch_array($res))
                                            {    
                                ?>
                                <option>
                                    <?php 
                                    echo $row["hero_name"]; 
                                    ?>
                                </option>
                                <?php
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </li>
                        <li class="filter-list">
                            <h3>Directors</h3>
                            <ul class="filter-fields">
                                <select style="width:100%; padding: 10px 15px 10px 15px;" name="dirname">
                                    <?php
                                        $SELECT = "SELECT * from director";
                                        if($res= mysqli_query($conn,$SELECT))
                                        {
                                            if(mysqli_num_rows($res)>0)
                                            {
                                                while($row = mysqli_fetch_array($res))
                                                {
                                    ?>
                                    <option>
                                        <?php 
                                            echo $row["dir_name"]; 
                                        ?>
                                    </option>
                                    <?php
                                                }
                                            }
                                        }   
                                    ?>
                                </select>
                            </ul>
                        </li>
                        <li class="filter-list">
                            <h3>Catogry</h3>
                            <select style="width:100%; padding: 10px 15px 10px 15px;" name="cattype">
                                <?php
                                    $SELECT = "SELECT * from catogry";
                                    if($res= mysqli_query($conn,$SELECT))
                                    {
                                        if(mysqli_num_rows($res)>0)
                                        {
                                            while($row = mysqli_fetch_array($res))
                                            {
                                ?>
                                <option>
                                    <?php 
                                        echo $row["cat"]; 
                                    ?>
                                </option>
                                <?php
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </li>
                    </ul>
                   
                </section>
            </div>
            </form> 
        </div>
        
    <script>
        function filterMenuToggle() 
        {
            const toggleFilterMenu = document.querySelector('.filter-menu');
            toggleFilterMenu.classList.toggle('active');
        }
    </script>
</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

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
    echo  '<h2 class="product-category"><a href="actorpage.php?id='.$row['hero'].'&user='.$usre.'" class="btn btn-success">Rajini Movies</a></h2>';
    ?>
    
    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
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
                    echo '<p><a href="moviepage.php?id='. $row['movie_name'] .'&user='.$usre.'" class="btn btn-success">View Details</a></p>';
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
    $sql = "SELECT * FROM movies WHERE hero  = 'Ajith Kumar'";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    echo  '<h2 class="product-category"><a href="actorpage.php?id='.$row['hero'].'&user='.$usre.'" class="btn btn-success">Rajini Movies</a></h2>';
    ?>
    
    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
    <div class="product-container">
    <?php
    $y=1 ;
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
                    echo '<p><a href="moviepage.php?id='. $row['movie_name'] .'&user='.$usre.'" class="btn btn-success">View Details</a></p>';
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
    $sql = "SELECT * FROM movies WHERE hero  = 'Dhanush '";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    echo  '<h2 class="product-category"><a href="actorpage.php?id='.$row['hero'].'&user='.$usre.'" class="btn btn-success">Dhanush  Movies</a></h2>';
    ?>
    
    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
    <div class="product-container">
    <?php
    $y=1 ;
    for($i=1;$i<=2555;$i++)
    {
        if($y<=10)
            {
            
            
                $sql = "SELECT * FROM movies WHERE hero  = 'Dhanush'and id = $i";
              $res = $conn->query($sql);
              if($res->num_rows>0)
              {
                echo "<div class='product-card'>";
                echo   " <div class='product-image'>";
                while($row = $res->fetch_assoc())
                {
                    
                    echo "<img width='250px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
                    echo '<p><a href="moviepage.php?id='. $row['movie_name'] .'&user='.$usre.'" class="btn btn-success">View Details</a></p>';
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
    $sql = "SELECT * FROM movies WHERE hero  = 'Simbu '";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    echo  '<h2 class="product-category"><a href="actorpage.php?id='.$row['hero'].'&user='.$usre.'" class="btn btn-success">Simbu  Movies</a></h2>';
    ?>
    
    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
    <div class="product-container">
    <?php
    $y=1 ;
    for($i=1;$i<=2555;$i++)
    {
        if($y<=10)
            {
            
            
                $sql = "SELECT * FROM movies WHERE hero  = 'Simbu'and id = $i";
              $res = $conn->query($sql);
              if($res->num_rows>0)
              {
                echo "<div class='product-card'>";
                echo   " <div class='product-image'>";
                while($row = $res->fetch_assoc())
                {
                    
                    echo "<img width='250px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
                    echo '<p><a href="moviepage.php?id='. $row['movie_name'] .'&user='.$usre.'" class="btn btn-success">View Details</a></p>';
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
    echo  '<h2 class="product-category"><a href="actorpage.php?id='.$row['hero'].'" class="btn btn-success">Vijaysethupathi  Movies</a></h2>';
    ?>
    
    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
    <div class="product-container">
    <?php
    $y=1 ;
    for($i=1;$i<=2555;$i++)
    {
        if($y<=10)
            {
            
            
                $sql = "SELECT * FROM movies WHERE hero  = 'Vijay Sethupathi'and id = $i";
              $res = $conn->query($sql);
              if($res->num_rows>0)
              {
                echo "<div class='product-card'>";
                echo   " <div class='product-image'>";
                while($row = $res->fetch_assoc())
                {
                    
                    echo "<img width='250px' height='300px'src='data:image;base64,{$row["top_image"]}' alt='img'>";
                    echo '<p><a href="moviepage.php?id='. $row['movie_name'] .'&user='.$usre.'" class="btn btn-success">View Details</a></p>';
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