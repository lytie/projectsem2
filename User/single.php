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
</head>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">

<style>
 
label{
    width:30%;
    font-size:23px;
}
input{
    width:50%;
    border:1px solid black;
    border-radius:10px;
    font-size:23px;
}
input:hover{
    background-color:#CEE3F6;
}
input:focus{
    border:1px solid black;
    background-color:#CEE3F6;
}
.reco{
margin-bottom:2%;
}
.lock{
    background-color:#A9D0F5;
    border-radius:50%;
    font-size:60px;
    width:10%;
    height:20%;
    margin-bottom:5%;
}
h1{
    color:#CEECF5;
    text-align:center;
    padding:10% 30%;
    background-image:url("img/image/hinh-nen-bong-da-dep-39.jpg");
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
    <!--body -->

    <div class="banner">
        
            <h1>Change Password</h1>
    </div>

    <div class="container" style="margin:10%">
        

        <div>
            <center>
            <button class="lock"><i class="fa fa-unlock-alt"></i></button></center>
        </div>
        <center>
       <form action="single-ac.php" method="post">
           <div class="reco">
               <label>Old password:</label><input type="password" name="UserPassO" id="">
           </div>
           <div class="reco">
               <label>New Password:</label><input type="password" name="UserPassN" id="">
           </div>
           <div class="reco">
               <label>Confirm New Password:</label><input type="password" name="UserPassConfi" id="">
           </div>
           <div class="reco">
        <input type="submit" class="btn btn-outline-danger" value="Change" style="width:20%">
        <input type="reset" class="btn btn-outline-success" value="Reset" style="width:20%">
        </div>
       </form></center>
    </div>






    <?php 
include_once "footer.html" ;
?>
</body>

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

</html>