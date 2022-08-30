<?php
    $mname = $_POST['mname'];
    $disname = $_POST['disname'];
    $img = $_FILES['img']['tmp_name'];
    $img1 = $_FILES['img1']['tmp_name'];
    $img2 = $_FILES['img2']['tmp_name'];
    $img3 = $_FILES['img3']['tmp_name'];
    $img4 = $_FILES['img4']['tmp_name'];
    $img5 = $_FILES['img5']['tmp_name'];
    $img6 = $_FILES['img6']['tmp_name'];
    $img7 = $_FILES['img7']['tmp_name'];
    $img8 = $_FILES['img8']['tmp_name'];
    $dirname = $_POST['dirname'];
    $camname = $_POST['Cinematographer'];
    $proname = $_POST['proname'];
    $heroname = $_POST['heroname'];
    $babyname = $_POST['babyname'];
    $musicname = $_POST['musicname'];
    $ott = $_POST['ott'];
    $thdate = date('Y-m-d',strtotime($_POST['thdate']));
    $ottdate =  date('Y-m-d',strtotime($_POST['ottdate']));
    $rtime = $_POST['rtime'];
    $lang = $_POST['lang'];
    $catttype = $_POST['cattype'];
    $catttype1 = $_POST['cattype1'];
    $trlink = $_POST['trlink'];
    $teaserlink = $_POST['teaserlink'];
    $ottlink = $_POST['ottlink'];
    $rate = $_POST['rate'];
    $com = new mysqli('localhost','root','','movie');
    if($com->connect_error)
    {
        die('Connection Failed : '.$com->connect_error);
    }
    else
    {
        $SELECT = "SELECT movie_name From movies Where movie_name = ? Limit 1";
        $stmt = $com->prepare($SELECT);
        $stmt->bind_param("s", $mname);
        $stmt->execute();
        $stmt->bind_result($movie_name);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) 
        {
            $img=file_get_contents($img);
            $img=base64_encode($img);
            $img1=file_get_contents($img1);
            $img1=base64_encode($img1);
            $img2=file_get_contents($img2);
            $img2=base64_encode($img2);
            $img3=file_get_contents($img3);
            $img3=base64_encode($img3);
            $img4=file_get_contents($img4);
            $img4=base64_encode($img4);
            $img5=file_get_contents($img5);
            $img5=base64_encode($img5);
            $img6=file_get_contents($img6);
            $img6=base64_encode($img6);
            $img7=file_get_contents($img7);
            $img7=base64_encode($img7);
            $img8=file_get_contents($img8);
            $img8=base64_encode($img8);
            $stmt->close();
            $INSERT = "INSERT INTO movies (movie_name,movie_descr,top_image,clip_1,clip_2,clip_3,clip_4,clip_5,clip_6,clip_7,clip_8,director,Cinematography,producer,hero,heroine,music_director,theater_release,ott_release,run_time,lang,catogry,catogry1,trailer,teaser_link,IMDB_rate,OTT,OTT_link) values ('$mname','$disname','$img','$img1','$img2','$img3','$img4','$img5','$img6','$img7','$img8','$dirname','$camname','$proname','$heroname','$babyname','$musicname','$thdate','$ottdate','$rtime','$lang','$catttype','$catttype1','$trlink','$teaserlink','$rate','$ott','$ottlink')";
            $stmt = $com->prepare($INSERT);
            $stmt->execute();
            echo "New record inserted sucessfully";
        } 
        else 
        {
            echo "Already Movie Added";
        }
        $stmt->close();
        $com->close();
    }
?>