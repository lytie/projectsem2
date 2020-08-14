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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
 background-image: url(img/image/about_1.jpg);
	}
  .link{
	border: 5px solid #2E9AFE;
	padding: 7% 7%;
	margin: 10% 30%;
	border-radius: 10px;
	background-color: #A9D0F5;
}
.want{
	margin-bottom: 10% ;
	color: #DF0101;
}
	
</style> 
<body>
<?php
$result =$_GET["result"];
?>
<div class="<?php echo $result;?>"></div>
<div class="link"><center>
	<h1 class="want">You want</h1>
	<a href="index.php"><button type="button" class="btn btn-outline-success">Back home</button></a>
	<a href="<?php if($result=="success"){echo"login/login.html";}else{echo "login/signup.html";}?>"><button type="button" class="btn btn-outline-dark"><?php if($result=="success"){echo "Login";}else{echo "Try It";}?></button></a>
	</center>
</div >


	
    <!-- sweet alert-->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
	 <script src="js/sweetalert/sweetalert.min.js"></script>
	 <script type="text/javascript">
    $('.success').each(function(){
        swal("Success", "Sign Up Success :)", "success");
    });
  </script>
  <script type="text/javascript">
    $('.fail').each(function(){
        swal("Error", "Sign Up Fail :)", "error");
    });
  </script>

</body>
</html>