<?php
include_once "db.php";
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM Video WHERE ID=$id");
header("location:News.php");
?>