<?php 

$team1=$_POST["team1"];
$team2=$_POST["team2"];
$goal1=$_POST["goal1"];
$goal2=$_POST["goal2"];
$id=$_POST["id"];



include_once "db.php";
$query="UPDATE Matches SET IDteam1=$team1,IDteam2=$team2,goal1=$goal1,goal2=$goal2 WHERE ID=$id";
mysqli_query($conn,$query);
header("location:Matches.php");

