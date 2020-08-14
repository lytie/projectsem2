<?php
session_start();
$username=$_SESSION['UserName'];
 


include_once "db.php";

$date=date("d M,Y");
$content=$_POST["message"];
$in="INSERT INTO Contact (UserName, Content, Date) VALUES ('$username', '$content', '$date');";
$result=mysqli_query($conn,$in);
if($result){
   header("location:s-contact.php?result=success");
   exit;
}else{
header("location:s-contact.php?result=fail");
}
?>