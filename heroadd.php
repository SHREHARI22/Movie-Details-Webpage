
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie clips</title>
    <link rel="stylesheet" href="CSS/poster/poster.css">
    <style>


        input{
            height: 30px;
            width: 500px;
        }
    </style>

</head>
<body>
    <!-- header  part  start -->
    <header style="background: skyblue;">

        <a href="#" class="logo"><i style="color: black;" class="fas fa-tv"></i>Movie clips</a>
    
        <nav class="navbar">
            <a class="active" href="#home">Welcome to Movie clips</a>
            
        </nav>
    
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i id="search-icon"></i></i>
    
        </div>
    
    </header>
    <!-- header  part  ends -->
    <!--main content  starts-->
    <section class="home" id="home">

        <div  class="swiper-container home-slider">
    
            <div class="swiper-wrapper wrapper">
    
                <div class="swiper-slide slide">
                    <form style="padding: 5px; margin: 10px; font-size: 20px;" action="hero.php" method="post" enctype="multipart/form-data">
                        
                          <h2>Heroname</h2>
                          <input  type="text" name="heroname" required><br>
                          <input style="background: skyblue; font-size: 20px;" type="submit"  value="Add" name="">
                          
                    </form> 
                    
                </div>
            </div>
        </div>
    </section>     
    
    
    
    
    
        
    
    
     
<script src="script.js"></script>    
</body>
</html>