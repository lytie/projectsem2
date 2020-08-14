<?php
$Title=addslashes($_POST["NameVideo"]);
$Link=$_POST["Link"];
$Type=$_POST["Type"];
$id=$_POST["id"];
 include_once "db.php";
 $query="UPDATE Video SET NameVideo='$Title', Link='$Link', `Type`=$Type WHERE ID=$id ";
 mysqli_query($conn,$query);
 header("location:News.php");


?>