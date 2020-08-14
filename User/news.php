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
    
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' >
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">


</head>

<style>
    h1{
    color:#045FB4;
    text-align:center;
    padding:10% 30%;
    background-image:url("img/image/hero_bg_2.jpg");
    background-size:cover;
    font-family: 'Luckiest Guy', cursive;
    font-size:59px;
}

    </style> 

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
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><a href="news.php">News</a></li>
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
<!-- Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="container mt-3">
                <?php
                include_once "db.php";
                    $query ='SELECT * FROM News order by ID  DESC';
                    $record = mysqli_query($conn,$query);
                    $result = mysqli_fetch_all($record);
                    foreach ($result as $row) {
                        $co="SELECT COUNT(ID)FROM comment where NewsID=".$row[0];
$count=mysqli_query($conn,$co);
               $cnt=mysqli_fetch_array($count)["COUNT(ID)"];
                ?>
                
                     <div class="media border p-3">
                        <img src="<?php echo $row[5] ; ?>" alt="John Doe" class="mr-3 mt-3 " style="width:15%;float: left;">
                        <div class="media-body">
                            <a href="single-post.php?id=<?php echo $row[0] ; ?>"><h4><?php echo $row[1] ; ?></h4></a> <!--title -->
                            <p><?php echo $row[2] ; ?></p> <!-- brief -->
                            <div class="blog-content">
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""><?php echo $row[6] ; ?></a> <!-- datetime -->
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> <?php echo $cnt ; ?></a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> <?php echo $row[8] ; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php
                            }
                        ?>


                    <a href="#" id="loadMore" class="btn btn-outline-dark"
                        style="margin-left: 40%; margin-bottom:2%;">Load More</a>
                </div>

            </div>
            <div class="col">
                
                <div>
                    <div class="section-heading wow fadeInUp" data-wow-delay="200ms" style="margin-top:10px;">
                        <h2> Top News</h2>
                    </div>
                    
                    <?php 
                    $querys ='SELECT * FROM News WHERE Newshot=1  order by ID  DESC LIMIT 0,8';
                    $records = mysqli_query($conn,$querys);
                    $results = mysqli_fetch_all($records);
                    foreach ($results as $rows) {
                        $co1="SELECT COUNT(ID)FROM comment where NewsID=".$rows[0];
                        $count1=mysqli_query($conn,$co1);
                                       $cnt1=mysqli_fetch_array($count1)["COUNT(ID)"];
                    ?>
                    <!-- Single Blog Post -->
                <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                    
                        <div class="blog-thumb">
                            <img src="<?php echo $rows[5] ; ?>" alt="">
                        </div>
                        <div class="blog-content">
                            <a href="#" class="post-tag">Featured</a>
                            <a href="#" class="post-title"><?php echo $rows[1] ; ?></a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/chat2.png" alt=""> <?php echo  $cnt1 ; ?></a>
                                <a href="#"><img src="img/core-img/like2.png" alt=""> <?php echo $rows[8] ; ?></a>
                            </div>
                        </div>
                        
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>


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
    <!-- Accondion-->
    <script src="js/accordion.js"></script>
    <!--Load more -->
    <script src="js/loadmore.js"></script>
    
</body>

</html>