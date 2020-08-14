<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sport</title>

    <!-- Favicon -->
    <link rel="icon" href="img/image/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>


<body>
    <!-- Preloader -->
    <?php
        include_once "preloader.html" ;
    ?>

    <!--Header -->
    <?php session_start(); ?>
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-sm-4">
                        <!-- Logo Area -->
                        <div class="logo-area">
                            <a href="index.html"><img src="img/image/logo.png" alt="" width="35%"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8">
                        <!-- Top Add Area -->
                        <div class="top-add-area text-right">
                            <marquee>Welcome to European U21 Championship News!</marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="videomag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="videomagNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="matches.php">Matches</a></li>
                                    <li><a href="AboutUs.php">AboutUs</a></li>
                                    <li><a href="contact.php">Contac Us</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        <?php 
       if (isset($_SESSION['UserName']) && $_SESSION['UserName']){?>
                        <form method="post" class="form-inline">
                            <button class="btn btn-outline-warning dropdown-toggle" type="button"
                                data-toggle="dropdown"> <img src="img/bg-img/7.jpg" alt=""
                                    style="max-width: 50px;margin-right:2px" /><?php echo $_SESSION['UserName']; ?></button>
                            <div class="dropdown-menu" style="width:10%;">
                                <a class="dropdown-item" href="single.php">Change info <i
                                        class='fa fa-address-card-o'></i></a>
                                <a class="dropdown-item" href="logout.php">Log out <i class='fa fa-sign-out'></i></a>
                            </div>
                        </form>
                        <?php
           
       }
       else{?>
                        <form class="form-inline">
                            <a href="login/login.html"><button class="btn btn-outline-success" type="button"
                                    style="margin-right: 5px;">Login</button></a>

                            <a href="login/signup.html"><button class="btn btn-outline-info" type="button">Sign
                                    up</button></a>
                        </form>
                        <?php
       }
       ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>



    <!-- Body -->
    <div class="hero-area d-flex flex-wrap">

        <div class="hero-single-section">
            <!-- Single Welcome Post -->
            <?php
            include_once "db.php";
            $topque='SELECT * FROM News WHERE NewsSpecial=5 order by ID  DESC LIMIT 0,1';
            $topre=mysqli_query($conn,$topque);
            $topsult=mysqli_fetch_all($topre);
            
            foreach ($topsult as $top) {
                $co="SELECT COUNT(ID)FROM comment where NewsID=".$top[0];
$count=mysqli_query($conn,$co);
               $cnt=mysqli_fetch_array($count)["COUNT(ID)"];
            
            ?>
            <div class="single-welcome-post bg-img item1 wow fadeInUp" data-wow-delay="300ms"
                style="background-image: url(<?php echo $top[5] ?>);">

                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">

                            <a href="single-post.php?id=<?php echo $top[0] ; ?>"
                                class="post-title"><?php echo $top[1] ?></a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/author.png" alt=""> By James Smith</a>
                                <a href="#"><img src="img/core-img/calender.png" alt=""> <?php echo $top[6] ?></a>
                                <a href="#"><img src="img/core-img/chat.png" alt=""> <?php echo $cnt ?></a>
                                <a href="#"><img src="img/core-img/like.png" alt=""> <?php echo $top[8] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?}?>
        </div>

        <div class="hero-single-section">
            <!-- Single Welcome Post -->
            <?php
            include_once "db.php";
            $topque1='SELECT * FROM News WHERE NewsSpecial=5 order by ID  DESC LIMIT 1,1';
            $topre1=mysqli_query($conn,$topque1);
            $topsult1=mysqli_fetch_all($topre1);
            
            foreach ($topsult1 as $top1) {
                $co1="SELECT COUNT(ID)FROM comment where NewsID=".$top1[0];
$count1=mysqli_query($conn,$co1);
               $cnt1=mysqli_fetch_array($count1)["COUNT(ID)"];
            
            ?>
            <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms"
                style="background-image: url(<?php echo $top1[5] ?>);">
                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="single-post.php?id=<?php echo $top1[0] ; ?>"
                                class="post-title"><?php echo $top1[1] ?></a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/author.png" alt=""> By James Smith</a>
                                <a href="#"><img src="img/core-img/calender.png" alt=""> <?php echo $top1[6] ?></a>
                                <a href="#"><img src="img/core-img/chat.png" alt=""><?php echo $cnt1 ?></a>
                                <a href="#"><img src="img/core-img/like.png" alt=""><?php echo $top1[8] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
                ?>
            <div class="hero-second-section d-flex flex-wrap">
                <!-- Single Welcome Post -->
                <?php 
                 $topque2='SELECT * FROM News WHERE NewsSpecial=5 order by ID  DESC LIMIT 2,2';
                 $topre2=mysqli_query($conn,$topque2);
                 $topsult2=mysqli_fetch_all($topre2);
                 
                 foreach ($topsult2 as $top2) {
                ?>
                <div class="single-welcome-post bg-img item3 wow fadeInUp" data-wow-delay="500ms"
                    style="background-image: url(<?php echo $top2[5] ?>);">
                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="single-post.php?id=<?php echo $top2[0] ; ?>"
                                    class="post-title"><?php echo $top2[1] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                 }
?>

            </div>

        </div>
    </div>

    <!-- ##### Hero Area End ##### -->
    <?php include_once "db.php";
                    $querynm ='SELECT * FROM NextMatches ';
                    $recordnm = mysqli_query($conn,$querynm);
                    $resultnm = mysqli_fetch_array($recordnm);
                    $querynmt ="SELECT TeamName,TeamLogo FROM team  where ID=".$resultnm["IDteam1"];
                        $recordnmt = mysqli_query($conn,$querynmt);
                        
                            $resultnmt=mysqli_fetch_array($recordnmt);
                        
                            $querynmt1 ="SELECT TeamName,TeamLogo FROM team  where ID=".$resultnm["IDteam2"];
                            $recordnmt1 = mysqli_query($conn,$querynmt1);
                            
                                $resultnmt1=mysqli_fetch_array($recordnmt1);
                    
                    ?>
    <input type="hidden" name="time" value="<?php echo $resultnm["Time"]; ?>" id="time">
    <div class="border d-block d-lg-flex align-items-center p-3 next-match row"
        style="border: 1px solid black; border-radius: 10px; padding-left: 10px; ">
        <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0 col-md-6" >
            Next match
            <div id="date-countdown" style="font-size:23px;">
                <span id="hours" style="font-size:50px; font-family: Arial; "></span><span
                    style="color: gray; margin-left: 5px;">hr</span>
                <span id="minutes" style="font-size:50px; font-family: Arial; margin-left: 20px;"></span><span
                    style="color: gray; margin-left: 5px;">min</span>
                <span id="seconds" style="font-size:50px; font-family: Arial; margin-left: 20px;"></span><span
                    style="color: gray; margin-left: 5px;">sec</span>
            </div>
        </div>
        <div class="ml-auto pr-4 order-md-2 col-md-6">
            <div class="h5 text-black text-uppercase text-center text-lg-left row">
            
                <div class="d-block d-md-inline-block mb-3 mb-lg-0 col-md-5">
                    <img src="img/flag/<?php echo $resultnmt['TeamLogo']?>" alt="Image" width="30%" class="mr-3 image"><span
                        class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0"><?php echo $resultnmt['TeamName']; ?> </span>
                </div>
                <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span>
                <div class="d-block d-md-inline-block col-md-5">
                    <img src="img/flag/<?php echo $resultnmt1['TeamLogo']?>" alt="Image" width="30%" class="mr-3 image"><span
                        class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0"><?php echo $resultnmt1['TeamName']; ?> </span>
                </div>
            </div>
        </div>
    </div>



    <script>
    var time = document.getElementById("time").value;
    // show ngày trận đấu diễn ra
    var countDownDate = new Date(time).getTime();

    // Update the count down every 1 second
    var countdownfunction = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds

        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"

        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;


        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(countdownfunction);
            document.getElementById("date-countdown").innerHTML = "The match took place";
        }
    }, 1000);
    </script>
    <!-- ##### Tabs Area Start ##### -->
    <div class="video-mag-tabs-area mt-50 wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <h3>HOT NEWS</h3>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                            <div class="latest-videos-slide owl-carousel">
                                <?php
            include_once "db.php";
            $query='SELECT * FROM News WHERE NewsSpecial=1 order by ID  DESC LIMIT 0,6';
            $record=mysqli_query($conn,$query);
            $r=mysqli_fetch_all($record);
            foreach ($r as $i) {
                $cone="SELECT COUNT(ID)FROM comment where NewsID=".$i[0];
$countne=mysqli_query($conn,$cone);
               $cntne=mysqli_fetch_array($countne)["COUNT(ID)"];
            
            ?>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="<?php echo $i[5] ;?>" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <a href="single-post.php?id=<?php echo $i[0] ; ?>"
                                            class="post-title"><?php echo $i[1] ;?></a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt="">
                                                <?php echo $i[6] ;?></a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt="">
                                                <?php echo $cntne ;?></a>
                                            <a href="#"><img src="img/core-img/like2.png" alt="">
                                                <?php echo $i[8] ;?></a>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
            ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                            <div class="videos-slide owl-carousel">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Tabs Area End ##### -->



    <!-- ##### Small Videos Area Start ##### -->
    <section class="small-videos-area">
        <div class="container">
            <div class="small-videos-content">
                <div class="row">

                    <!-- Fashion News -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <?php
            
            $quer='SELECT * FROM News WHERE NewsSpecial=2 order by ID  DESC LIMIT 0,1';
            $recor=mysqli_query($conn,$quer);
            $re=mysqli_fetch_all($recor);
            foreach ($re as $r) {
                $cone1="SELECT COUNT(ID)FROM comment where NewsID=".$r[0];
                $countne1=mysqli_query($conn,$cone1);
                               $cntne1=mysqli_fetch_array($countne1)["COUNT(ID)"];
            
            ?>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="<?php echo $r[5] ;?>" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="single-post.php?id=<?php echo $r[0] ; ?>"
                                    class="post-title"><?php echo $r[1] ;?></a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> <?php echo $r[6] ;?></a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> <?php echo $cntne1 ;?></a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> <?php echo $r[8] ;?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        $que='SELECT * FROM News WHERE NewsSpecial=3 order by ID  DESC LIMIT 0,3';
                        $reco=mysqli_query($conn,$que);
                        $res=mysqli_fetch_all($reco);
                        foreach ($res as $ro) {
                            $cone2="SELECT COUNT(ID)FROM comment where NewsID=".$ro[0];
                $countne2=mysqli_query($conn,$cone2);
                               $cntne2=mysqli_fetch_array($countne2)["COUNT(ID)"];
            
                ?>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $ro[5] ;?>" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="single-post.php?id=<?php echo $ro[0] ; ?>"
                                    class="post-title"><?php echo $ro[1] ;?></a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> <?php echo $cntne2 ;?></a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> <?php echo $ro[8] ;?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                    </div>

                    <!-- Technology News -->
                    <div class="col-12 col-md-6 col-lg-4">

                        <?php
                        
                        $qu='SELECT * FROM News WHERE NewsSpecial=4 order by ID  DESC LIMIT 0,1';
                        $rec=mysqli_query($conn,$qu);
                        $resu=mysqli_fetch_all($rec);
                        foreach ($resu as $row) {
                            $cone3="SELECT COUNT(ID)FROM comment where NewsID=".$row[0];
                $countne3=mysqli_query($conn,$cone3);
                               $cntne3=mysqli_fetch_array($countne3)["COUNT(ID)"];
            
                ?>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="<?php echo $row[5] ;?>" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="single-post.php?id=<?php echo $row[0]; ?>"
                                    class="post-title"><?php echo $row[1] ;?></a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> <?php echo $row[6] ;?></a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> <?php echo $cntne3 ;?></a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> <?php echo $row[8] ;?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        $q='SELECT * FROM News WHERE NewsSpecial=3 order by ID  DESC LIMIT 3,3';
                        $re=mysqli_query($conn,$q);
                        $resur=mysqli_fetch_all($re);
                        foreach ($resur as $rows) {
                            $cone4="SELECT COUNT(ID)FROM comment where NewsID=".$rows[0];
                $countne4=mysqli_query($conn,$cone4);
                               $cntne4=mysqli_fetch_array($countne4)["COUNT(ID)"];
            
                ?>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="<?php echo $rows[5] ;?>" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="single-post.php?id=<?php echo $rows[0]; ?>"
                                    class="post-title"><?php echo $rows[1] ;?></a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> <?php echo $cntne4; ?></a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> <?php echo $rows[8]; ?></a>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        
                ?>

                    </div>

                    <!-- July Top News -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Results of recent matches</h2>
                        </div>
                        <?php
                
                    $qery ='SELECT * FROM Matches where goal1 is not null  order by ID  DESC LIMIT 0,5';
                    $recod = mysqli_query($conn,$qery);
                    $resut = mysqli_fetch_all($recod);
                    foreach ($resut as $rw) {
                
                        $qete ="SELECT TeamLogo FROM team  where ID=".$rw[2];
                        $acte = mysqli_query($conn,$qete);
                        if($acte==null){
                            $teamst="";
                        }else{
                            $kq=mysqli_fetch_array($acte);
                        $teamst=$kq['TeamLogo'];}
                        
                        
                        $qete1 ="SELECT TeamLogo FROM team where ID= ".$rw[3];
                        $acte1 = mysqli_query($conn,$qete1);
                        if($acte1==null){
                            $teamth="";
                        }else{
                            $kq1=mysqli_fetch_array($acte1);
                            $teamth=$kq1['TeamLogo'];}
                        
                        ?>

                        <!-- Single -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-sm-4">
                                    <center><img src="img/flag/<?php echo $teamst; ?>" alt="" width="70%" height="50px">
                                    </center>
                                </div>
                                <div class="col-sm-2" style="margin-top:2%;">
                                    <span style="font-size: 15px"> <?php echo $rw[4] ; ?></span> - <span
                                        style="font-size: 15px"> <?php echo $rw[5] ; ?></span>
                                </div>
                                <div class="col-sm-4">
                                    <center>
                                        <img src="img/flag/<?php echo $teamth; ?>" alt="" width="70%" height="50px">
                                    </center>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                         ?>

                        <div style="margin-left: 20%;"><a href="matches.php"><button
                                    class="btn btn-outline-primary">Read more</button></a></div>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <?php
        include_once "footer.html" ;
    ?>


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>