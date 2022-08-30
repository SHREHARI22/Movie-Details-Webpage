<?php
$conn = new mysqli('localhost','root','','movie');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
?>
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
                    <form style="padding: 5px; margin: 10px; font-size: 20px;" action="poster.php" method="post" enctype="multipart/form-data">
                        
                          <h2>Moviename</h2>
                          <input  type="text" name="mname" required><br>
                          <h2>Movie Discription</h2>
                          <input type="text" name="disname" required><br>
                          <h2>Top Image</h2>
                          <input type="file" name="img" required><br>
                          <h2>Clips-1</h2>
                          <input type="file" name="img1" required><br>
                          <h2>Clips-2</h2>
                          <input type="file" name="img2" required><br>
                          <h2>Clips-3</h2>
                          <input type="file" name="img3" required><br>
                          <h2>Clips-4</h2>
                          <input type="file" name="img4" required><br>
                          <h2>Clips-5</h2>
                          <input type="file" name="img5" required><br>
                          <h2>Clips-6</h2>
                          <input type="file" name="img6" required><br>
                          <h2>Clips-7</h2>
                          <input type="file" name="img7" required><br>
                          <h2>Clips-8</h2>
                          <input type="file" name="img8" required><br>
                          <h2>Director</h2>
                          <select style="width:100%; padding: 10px 15px 10px 15px;" name=dirname>
                          <?php
                          $SELECT = "SELECT * from director";
                          if($res= mysqli_query($conn,$SELECT))
                          {
                              if(mysqli_num_rows($res)>0)
                              {
                                while($row = mysqli_fetch_array($res))
                                {
                                   ?>
                                   <option><?php echo $row["dir_name"]; ?></option>
<?php
                                }
       
                              }
                          }?>
                          </select>
                          <br>
                          <h2>Cinematographer</h2>
                          <input type="text" name="Cinematographer" required><br>
                          <h2>Producer</h2>
                          <input type="text" name="proname" required><br>
                          <h2>Hero</h2>
                          <select style="width:100%; padding: 10px 15px 10px 15px;" name=heroname>
                          <?php
                          $SELECT = "SELECT * from hero";
                          if($res= mysqli_query($conn,$SELECT))
                          {
                              if(mysqli_num_rows($res)>0)
                              {
                                while($row = mysqli_fetch_array($res))
                                {
                                   ?>
                                   <option><?php echo $row["hero_name"]; ?></option>
<?php
                                }
       
                              }
                          }?>
                          </select>
                          <h2>Heroin</h2>
                          <select style="width:100%; padding: 10px 15px 10px 15px;" name=babyname>
                          <?php
                          $SELECT = "SELECT * from heroine";
                          if($res= mysqli_query($conn,$SELECT))
                          {
                              if(mysqli_num_rows($res)>0)
                              {
                                while($row = mysqli_fetch_array($res))
                                {
                                   ?>
                                   <option><?php echo $row["heroine_name"]; ?></option>
<?php
                                }
       
                              }
                          }?>
                          </select>
                          <h2>Music Director</h2>
                          <input type="text" name="musicname" required><br>
                          <h2>OTT</h2>
                          <input type="text" name="ott" required><br>
                          <h2>Theater Release </h2>
                          <input type="date" name="thdate" required><br>
                          <h2>OTT Release </h2>
                          <input type="date" name="ottdate" required><br>
                          <h2>Run Time</h2>
                          <input type="text" name="rtime" required><br>
                          <h2>Language</h2>
                          <input type="text" name="lang" required><br>
                          <h2>Catogry1</h2>
                          <select style="width:100%; padding: 10px 15px 10px 15px;" name=cattype>
                          <?php
                          $SELECT = "SELECT * from catogry";
                          if($res= mysqli_query($conn,$SELECT))
                          {
                              if(mysqli_num_rows($res)>0)
                              {
                                while($row = mysqli_fetch_array($res))
                                {
                                   ?>
                                   <option><?php echo $row["cat"]; ?></option>
<?php
                                }
       
                              }
                          }?>
                          </select>
                          <h2>Catogry2</h2>
                          <select style="width:100%; padding: 10px 15px 10px 15px;" name=cattype1>
                          <?php
                          $SELECT = "SELECT * from catogry";
                          if($res= mysqli_query($conn,$SELECT))
                          {
                              if(mysqli_num_rows($res)>0)
                              {
                                while($row = mysqli_fetch_array($res))
                                {
                                   ?>
                                   <option><?php echo $row["cat"]; ?></option>
<?php
                                }
       
                              }
                          }?>
                          </select>
                          <h2>IMDB rateing</h2>
                          <input type="text" name="rate" required><br>
                          <h2>Trailer link</h2>
                          <input type="text" name="trlink" required><br>
                          <h2>Teaser link</h2>
                          <input type="text" name="teaserlink" required><br>
                          <h2>OTT link</h2>
                          <input type="text" name="ottlink" required><br><br><br><br>
                          <input style="background: skyblue; font-size: 20px;" type="submit"  value="Add" name="">
                      </div>
                    </form> 
                    
                </div>
            </div>
        </div>
    </section>     
    
    
    
    
    
        
    
    <!--main content  ends-->
    <!-- footer  part  starts -->
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
    <!-- footer  part  ends -->  
<script src="script.js"></script>    
</body>
</html>