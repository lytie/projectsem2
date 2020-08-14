<<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="css/Ourteamstyle.css" /> 

</head>
<style>
.col-md-offset-2 {
    margin-left: 16.666666666666664%;
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
                                <li><a href="news.php">News</a></li>
                                <li><a href="matches.php">Matches</a></li>
                                <li class="active"><a href="AboutUs.php">AboutUs</a></li>
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


<section id="speakers">
		<h3>Deverloper</h3> <!-- Section Title -->
		<div class="separator"></div>
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<!-- Section Description -->
				<p>Welcome to our team hoping that we can meet your demand for sports information neew have questions or comments to contact us, do not hesitate and we will absorb and The earliest addition can feel my friend loves you</p>
			</div>
			
			<!-- First Row of Speakers -->
			<div class="row">
			
				<!-- Speaker 1 -->
				<div class="col-md-3">
					<a href="#" class="member-profile">
						<div class="unhover_img">
						<img src="img/image/speaker-1.png" alt="" />
						</div>
						<div class="hover_img">
						<img src="img/image/speaker-1-hover.png" alt="" />
						</div>
						<span>Developer</span>
						<h4><span> Nhat</span>Nguyen</h4>
					</a>	
					<ul>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-foursquare"></i></a></li>						
					</ul>
				</div>
				
				<!-- Speaker 2 -->
				<div class="col-md-3">
					<a href="#" class="member-profile">
						<div class="unhover_img">
						<img src="img/image/speaker-2.png" alt="" />
						</div>
						<div class="hover_img">
						<img src="img/image/speaker-2-hover.png" alt="" />
						</div>
						<span>Developer</span>
						<h4><span>Tien</span> Nguyen</h4>
					</a>	
					<ul>
						<li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				
				<!-- Speaker 3 -->
				<div class="col-md-3">
					<a href="#" class="member-profile">
						<div class="unhover_img">
						<img src="img/image/speaker-3.png" alt="" />
						</div>
						<div class="hover_img">
						<img src="img/image/speaker-3-hover.png" alt="" />
						</div>
						<span>Developer</span>
						<h4><span>Truc</span>Nguyen</h4>
					</a>					
					<ul>
						<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>						
						<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>						
					</ul>					
				</div>
				
				<!-- Speaker 4 -->
				<div class="col-md-3">
					<a href="#" class="member-profile">
						<div class="unhover_img">
						<img src="img/image/speaker-4.png" alt="" />
						</div>
						<div class="hover_img">
						<img src="img/image/speaker-4-hover.png" alt="" />
						</div>
						<span>Developer</span>
						<h4><span>Tien</span> Nguyen</h4>
					</a>					
					<ul>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-foursquare"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					</ul>						
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