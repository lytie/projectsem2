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
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">

</head>
<style>
h1 {
    color: #045FB4;
    text-align: center;
    padding: 10% 30%;
    background-image: url("img/image/hero_bg_2.jpg");
    background-size: cover;
    font-family: 'Luckiest Guy', cursive;
    font-size: 59px;
}
</style>

<body>
    <!-- Preloader -->
    <?php
        include_once "preloader.html" ;
    ?>

    <!-- ##### Header Area Start ##### -->
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
                        <marquee behavior="alternate">Welcome to European U21 Championship News!</marquee>
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
                                <li><a href="index.php">Home</a></li>
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
        <button class="btn btn-outline-warning dropdown-toggle" type="button" data-toggle="dropdown"> <img
                src="img/bg-img/7.jpg" alt="" style="max-width: 50px;margin-right:2px" /><?php echo $_SESSION['UserName']; ?></button>
        <div class="dropdown-menu" style="width:10%;">
            <a class="dropdown-item" href="single.php">Change info <i class='fa fa-address-card-o'></i></a>
            <a class="dropdown-item"  href="logout.php">Log out <i class='fa fa-sign-out'></i></a>
        </div>
    </form>
    <?php
           
       }
       else{?>
        <form  class="form-inline">
        <a href="login/login.html"><button class="btn btn-outline-success" type="button" style="margin-right: 5px;" >Login</button></a>

        <a href="login/signup.html"><button class="btn btn-outline-info" type="button" >Sign up</button></a>
    </form>
    <?php
       }
       ?>
                </nav>
            </div>
        </div>
    </div>
</header>


    <div class="banner">

        <h1>News</h1>
    </div>
    <?php 
    $id=$_GET["id"];
    include_once "db.php";
    $q ='SELECT * FROM News where ID='.$id;
    $recor = mysqli_query($conn,$q);
    $res = mysqli_fetch_all($recor);
    foreach ($res as $rw){
?>
    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area ">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">News</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $rw[1] ?></li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <div class="single-blog-post style2 mb-50">

                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <h4><?php echo $rw[1] ?></h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> <?php echo $rw[6] ?></a>

                                </div>
                                <img src="<?php echo $rw[5] ?>" class="mb-30" alt="">
                                <p><?php echo $rw[3] ?></p>
                                <?php if (isset($_SESSION['UserName']) && $_SESSION['UserName']){ ?>
                
                                <!-- Like Dislike Share -->
                                <div class="like-dislike-share mt-50">
                                    <a href="like.php?id=<?php echo $id ; ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>

                                    <a href="dislike.php?id=<?php echo $id ; ?>"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>

                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Likes <span><?php echo $rw[8] ?></span></a>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Area Start -->
                    <?php if (isset($_SESSION['UserName']) && $_SESSION['UserName']){ ?>
                    <div class="comment_area clearfix mb-100">
<?php
$co="SELECT COUNT(ID)FROM comment where NewsID=$id";
$count=mysqli_query($conn,$co);
               $cnt=mysqli_fetch_array($count)["COUNT(ID)"];   
                    ?>
                        <h3 class="mb-50">Comments (<span><?php echo $cnt ?></span>)</h3>

                        <ol>
                            <?php
                            $cmtque ='SELECT * FROM comment where NewsID='.$id;
                            $cmtreco = mysqli_query($conn,$cmtque);
                            $cmtre = mysqli_fetch_all($cmtreco);
                            foreach ($cmtre as $cmt){
                            ?>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/40.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author"><?php echo $cmt[2]?></a>
                                            <a href="#" class="post-date"><?php echo $cmt[4]?></a>

                                        </div>
                                        <p><?php echo $cmt[1]?></p>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>

                        </ol>
                    </div>

                    <div class="post-a-comment-area mb-100 clearfix">
                        <h3 class="mb-50">Comment</h3>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="comment.php?id=<?php echo $id ; ?>" method="post">


                                <div>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10"
                                        placeholder="Message*" required></textarea>
                                </div>
                                <div>
                                    <button class="btn videomag-btn mt-30" type="submit">Submit Comment</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <?php
                                }else{
                                    ?>
                                   <i>*Sign in to interact with posts</i>
                                    <?php
                                }
                                ?>
                </div>
                            <?php } ?>
                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mb-100">
                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area mb-50">
                            <h2 class="widget-title wow fadeInUp" data-wow-delay="200ms">July Top</h2>
                            <?php 
                    include_once 'db.php';
                    $query ='SELECT * FROM News WHERE Newshot=1';
                    $record = mysqli_query($conn,$query);
                    $result = mysqli_fetch_all($record);
                    foreach ($result as $row) {

                    ?>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style4 d-flex mb-30">
                                <div class="blog-thumb">
                                    <img src="<?php echo $row[5] ?>" alt="">

                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title"><?php echo $row[1] ?></a>
                                    <div class="post-meta">
                                        <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                        <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                        </div>
                        <?php 
                   
                    $querys ='SELECT * FROM Video WHERE Type=1 ORDER BY ID DESC LIMIT 0,1';
                    $records = mysqli_query($conn,$querys);
                    $results = mysqli_fetch_all($records);
                    foreach ($results as $rows) {

                    ?>
                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area border-style mb-50">
                            <h2 class="widget-title">Most liked</h2>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style3">
                                <div class="blog-thumb mb-30">
                                    <img src="img/image/img_1.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="<?php echo $rows[2] ?>" class="video-play-btn style2"><i
                                            class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title"><?php echo $rows[1] ?></a>

                                </div>
                            </div>
                        </div>
                        <?php
                        }
                       
                   
                    $que ='SELECT * FROM Video WHERE Type=2 ORDER BY ID DESC LIMIT 0,1';
                    $reco = mysqli_query($conn,$que);
                    $resu = mysqli_fetch_all($reco);
                    foreach ($resu as $r) {

                
                    ?>

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area border-style mb-50">
                            <h2 class="widget-title">Featured</h2>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style3">
                                <div class="blog-thumb mb-30">
                                    <img src="img/image/img_3.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="<?php echo $r[2] ?>" class="video-play-btn style2"><i
                                            class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title"><?php echo $r[1] ?></a>
                               
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php
        include_once "footer.html" ;
    ?>
    <!-- ##### Footer Area End ##### -->

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
    <!-- sweet alert-->
    <script src="js/sweetalert/sweetalert.min.js"></script>
    
</body>

</html>