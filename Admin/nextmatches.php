
 <?php 
 $time=$_POST["Time"];
 $IDteam1=$_POST["IDteam1"];
 $IDteam2=$_POST["IDteam2"];
 
 include_once "db.php";
 $querynm ="UPDATE NextMatches SET `Time`='$time', IDteam1=$IDteam1, IDteam2=$IDteam2 WHERE ID=1;";
 mysqli_query($conn,$querynm);
 header("location:Matches.php");
 

 
 ?>
