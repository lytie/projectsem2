<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    label {
        width: 20%;
        font-size: 20px;
        margin-bottom: 2%;
    }

    h1 {
        margin-bottom: 5%;
    }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <div class="container">
            <div class="card shadow mb-4" style="margin-top:10%;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Matches</h6>
                </div>
                <?php 
$id=$_GET["id"];
include_once "db.php";
$query="SELECT * FROM Matches WHERE ID=$id";
$record=mysqli_query($conn,$query);
$result=mysqli_fetch_array($record);

?>
                <div class="card-body">
                    <center>
                        <h1 class="want"><?php echo $result["DateMatches"] ?></h1>
                        <form action="updatemat.php" method="post">
                            <input type="hidden" name="id"/ value="<?php echo $id ?>">
                            <div><label for=""> ID team1:</label>
                                <input type="number" name="team1" value="<?php echo $result["IDteam1"] ?>" />
                            </div>
                            <div><label for="">ID team2:</label>
                                <input type="number" name="team2" value="<?php echo $result["IDteam2"] ?>" />
                            </div>
                            <div><label for="">Goal of team1:</label>
                                <input type="number" name="goal1" value="<?php echo $result["goal1"] ?>" />
                            </div>
                            <div><label for="">Goal of team2:</label>
                                <input type="number" name="goal2" value="<?php echo $result["goal2"] ?>" />
                            </div>
                            <div style="margin-top:2%">
                                <input type="submit" value="Update" class="btn btn-info">
                            </div>
                        </form>
                        <hr>
                        <a href="Matches.php"><button type="button" class="btn btn-outline-success">Back Matches
                                Page</button></a>
                    </center>
                </div>
            </div>
        </div>


    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>