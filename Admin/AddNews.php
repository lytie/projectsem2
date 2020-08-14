<?php
$Title=addslashes($_POST["Title"]);
$Brief=addslashes($_POST["Brief"]);
$Content=addslashes($_POST["Content"]);
$NewsSpecial=$_POST["NewsSpecial"];
$Newshot=$_POST["Newshot"];
$NewsPhoto=addslashes($_POST["NewsPhoto"]);
date_default_timezone_set("asia/ho_chi_minh");
$Dateup=date("d/m/Y h:i a");

include_once "db.php";
$query="INSERT INTO News (Title, Brief, Content, NewsSpecial, NewsPhoto, `Date up`, Newshot) VALUES ('$Title', '$Brief', '$Content', $NewsSpecial, '$NewsPhoto', '$Dateup', $Newshot);";
mysqli_query($conn,$query);
header("location:News.php");

?>
