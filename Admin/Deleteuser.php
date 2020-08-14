<?php
include_once "db.php";
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM User WHERE ID=$id");
header("location:User.php");
?>


