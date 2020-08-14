
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

    <style>
    * {
        box-sizing: border-box
    }

    /* Set height of body and the document to 100% */
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: Arial;
    }

    /* Style tab links */
    .tablink {
        background-color: #555;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 50%;
    }

    .tablink:hover {
        background-color: #777;
    }

    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {

        display: none;
        padding: 100px 20px;
        height: 100%;
    }

    .nav-item a {
        width: 99%;
    }

    }
    .table-hover th {
        background-color: Blue;
        color: white;
        width: 100%;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    } 
    .Time{
        width:100%; 
        background-color:#08298A;
        text-align:center;
        font-size:23px;
        color:white;
    }
    .country1, .country2{
        width:40%;
        text-align:center;
        font-size:23px;
    }
    .score{
        text-align:center;
        font-size:23px;
    }
    .scr{
        border-radius:10px;
        background-color:#B40404;
        
        width:40%;
    }
    h1{
    color:white;
    text-align:center;
    padding:10% 30%;
    background-image:url("img/image/Euro-U21-Championship-2015-How-to-watch-online-using-VPN-or-Smart-DNS.jpg");
    background-size:cover;
    font-family: 'Luckiest Guy', cursive;
    font-size:59px;
}
    </style>
</head>

<!-- <style>
    .media{display:none;}
    </style> -->

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
                                <li class="active"><a href="matches.php">Matches</a></li>
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
    <!-- body -->
    <div class="banner">
        
        <h1>Matches</h1>
</div>
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
            <div id="date-countdown" >
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

    <div class="main">
        <button class="tablink" onclick="openPage('Schedule', this, 'red')">Schedule</button>
        <button class="tablink" onclick="openPage('Results', this, 'green')" id="defaultOpen">Results</button>


        <div id="Schedule" class="tabcontent">
        <?php
                include_once "db.php";
                    $query ='SELECT * FROM Matches where goal1 is null ';
                    $record = mysqli_query($conn,$query);
                    $result = mysqli_fetch_all($record);
                    foreach ($result as $row) {
                ?>
            <hr>
            
                <table class="table .table-striped">
                    <thead>
                        <tr >
                        <th colspan="3" class="Time"><?php echo $row[1] ; ?></th>   
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $que ="SELECT TeamName FROM team  where ID=".$row[2];
                        $reco = mysqli_query($conn,$que);
                        if($reco==null){
                            $team1="";
                        }else{
                            $r=mysqli_fetch_array($reco);
                        $team1=$r['TeamName'];}
                        
                        
                        $q ="SELECT TeamName FROM team where ID= ".$row[3];
                        $re = mysqli_query($conn,$q);
                        if($re==null){
                            $team2="";
                        }else{
                            $res=mysqli_fetch_array($re);
                            $team2=$res['TeamName'];}
                        
                        ?> 
                        <tr>
                            <td class="country1"><?php echo $team1; ?></td>
                            <td style="font-size:30px;text-align:center;">-- : --</td>
                            <td class="country2"><?php echo $team2 ;?></td>
                        </tr>

                    </tbody>
                </table>
            <?php
                    }
                    ?>
        </div>

        <div id="Results" class="tabcontent">
        <?php
                
                    $qery ='SELECT * FROM Matches where goal1 is not null order by ID  DESC';
                    $recod = mysqli_query($conn,$qery);
                    $resut = mysqli_fetch_all($recod);
                    foreach ($resut as $rw) {
                ?>
            <hr>
                <table class="table .table-striped">
                    <thead>
                        <tr >
                        <th colspan="3" class="Time"><?php echo $rw[1] ; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $qete ="SELECT TeamName FROM team  where ID=".$rw[2];
                        $acte = mysqli_query($conn,$qete);
                        if($acte==null){
                            $teamst="";
                        }else{
                            $kq=mysqli_fetch_array($acte);
                        $teamst=$kq['TeamName'];}
                        
                        
                        $qete1 ="SELECT TeamName FROM team where ID= ".$rw[3];
                        $acte1 = mysqli_query($conn,$qete1);
                        if($acte1==null){
                            $teamth="";
                        }else{
                            $kq1=mysqli_fetch_array($acte1);
                            $teamth=$kq1['TeamName'];}
                        
                        ?> 
                        <tr >
                            <td class="country1"><?php echo $teamst; ?></td>
                            <td class="score"><center><div class="scr"><label for=""><?php echo $rw[4] ; ?></label> - <label for=""><?php echo $rw[5] ; ?></label></div></center></td>
                            <td class="country2"><?php echo $teamth; ?></td>
                        </tr>

                    </tbody>
                </table>
                <?php
            }
                    ?>
        </div>



    </div>
    <!-- Footer -->
    <?php
        include_once "footer.html" ;
    ?>

    <script>
    function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
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