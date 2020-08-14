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
    input{
        width: 50%;
    }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <div class="container">
            <div class="card shadow mb-4" style="margin-top:10%;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><a href="News.php"><button type="button" class="btn btn-outline-success">Back News
                            Page</button></a></h6>
                </div>
                
                <div class="card-body">
                    <?php 
                    $id=$_GET["id"];
                    include_once "db.php";
                    $query="SELECT * FROM Video WHERE ID=$id";
                    $record=mysqli_query($conn,$query);
                    $result=mysqli_fetch_array($record);
                    ?>
                    <center>
                        <h1 class="want">Update Video Featured</h1>
                        <form action="upvideo.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div><label for=""> Title:</label>
                                <input type="text" name="NameVideo" value="<?php echo $result["NameVideo"];?>"required/>
                            </div>
                            <div><label for="">Link:</label>
                                <input type="text" name="Link" value="<?php echo $result["Link"];?>"required/>
                            </div>
                            <div><label for="">Type:</label>
                                <select name="Type" style="width: 50%">
                                    <option value="1" <?php if ($result["Type"]==1) {?>
                                        select="select"<?php
                                    } ?>>1</option>
                                    <option value="2"<?php if ($result["Type"]==2) {?>
                                        select="select"<?php
                                    } ?>>2</option>
                                </select>
                            </div>
                            
                            <div style="margin-top:2%">
                                <input type="submit" value="Update" class="btn btn-info">
                            </div>
                        </form>
                        <hr>
                        
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