
   <?php session_start();
$id=$_GET["id"];
include_once "db.php";
$q ='SELECT * FROM News where ID='.$id;
    $recor = mysqli_query($conn,$q);
    $res = mysqli_fetch_all($recor);
    foreach ($res as $rw){
                                        $username=$_SESSION['UserName'];
                                        
                                        $iduser=mysqli_query($conn,"SELECT ID FROM User WHERE UserName='$username'");
                                        $r=mysqli_fetch_array($iduser);
                                        $ider=$r['ID'];
                                        $likenews=$rw[8]+1;
                                        $check=mysqli_query($conn,"SELECT * FROM Favourite WHERE UserID=$ider AND NewsID=$id");
                                        // $rp=mysqli_fetch_array($iduser);
                                        // $i=$rp['ID'];
                                        
                                        if (mysqli_num_rows($check)==0) {
                                            $in=mysqli_query($conn,"INSERT INTO Favourite (UserID, NewsID) VALUES ($ider,$id)");
                                        $up="UPDATE News SET `Like`=$likenews WHERE ID=$id";
                                        mysqli_query($conn,$up);
                                            
                                            
                                        }
                                        
                                        header("location:single-post.php?id=$id");
                                                 }             ?>