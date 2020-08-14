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
<?php
$result =$_GET["result"];
?>
<div class="<?php echo $result;?>"></div>
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
    <!-- ##### Header Area End ##### -->
 
    
    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="contact-content mb-100">
                        <!-- Google Maps -->
                        <div class="map-area mb-70">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
                        </div>

                        <!-- Contact Content Area -->
                        <div class="contact-content-area mb-70">
                            <h3 class="mb-50">Contact info</h3>

                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sapien nunc, aliquam et sollicitudin a, mollis sit amet odio. Cras in varius libero, ac molestie enim. Aenean semper leo et tellus luctus, ultricies condimentum odio placerat.</p>
                                    <p>Aliquam et semper neque. Donec vitae ultrices justo. Curabitur a semper leo, quis maximus tellus. Fusce euismod nisi eu sapien dignissim pulvinar.</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex align-items-center">
                                        <div class="icon mr-15">
                                            <img src="img/core-img/placeholder.png" alt="">
                                        </div>
                                        <p>1481 Creekside Lane Avila Beach, CA 931</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex align-items-center">
                                        <div class="icon mr-15">
                                            <img src="img/core-img/telephone.png" alt="">
                                        </div>
                                        <p>+53 345 7953 32453</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex align-items-center">
                                        <div class="icon mr-15">
                                            <img src="img/core-img/mail.png" alt="">
                                        </div>
                                        <p>yourmail@gmail.com</p>
                                    </div>
                                    
                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-block mt-50">
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-behance"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <h3 class="mb-50">Get In Touch</h3>

                            <form action="ac-contact.php" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn videomag-btn mt-30" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mb-100">
                        
                    <?php 
                   include_once "db.php";
                   $querys ='SELECT * FROM Video WHERE Type=1';
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
                                    <a href="<?php echo $rows[2] ?>" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title"><?php echo $rows[1] ?></a>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                       
                   
                    $que ='SELECT * FROM Video WHERE Type=2';
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
                                    <a href="<?php echo $r[2] ?>" class="video-play-btn style2"><i class="fa fa-play"></i></a>
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
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
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
    <script src="js/sweetalert/sweetalert.min.js"></script>
	 <script type="text/javascript">
    $('.success').each(function(){
        swal("Success", "Send Success :)", "success");
    });
  </script>
  <script type="text/javascript">
    $('.fail').each(function(){
        swal("Error", "Send Fail :)", "error");
    });
  </script>
</body>

</html>