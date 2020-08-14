<?php
session_start();
$username=$_SESSION['UserName'];
 

$id=$_GET["id"];
include_once "db.php";

$date=date("d M,Y");
$content=$_POST["message"];
$in="INSERT INTO comment (CommendContent, UserName, NewsID, `date`) VALUES ('$content', '$username', $id, '$date');";
mysqli_query($conn,$in);
   header("location:single-post.php?id=$id");
   
?>