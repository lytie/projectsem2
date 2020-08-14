<?php
$Title=addslashes($_POST["NameVideo"]);
$Link=$_POST["Link"];
$Type=$_POST["Type"];
 include_once "db.php";
 $query="INSERT INTO Video (NameVideo, Link, `Type`) VALUES ('$Title', '$Link', $Type)";
 mysqli_query($conn,$query);
 header("location:News.php");


?>