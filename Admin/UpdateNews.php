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
    input{
        width:70%;
        border-radius: 10px;
        border: 1px solid black;
        height: 40px;
        
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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="News.php"><button type="button" class="btn btn-outline-success">Back News
                            Page</button></a></h6>
                </div>
                
                <div class="card-body">
                    <?php 
                    $id=$_GET["id"];
                    include_once "db.php";
                    $query="SELECT * FROM News WHERE ID=$id";
                    $record=mysqli_query($conn,$query);
$result=mysqli_fetch_array($record);
                    ?>
                        <h1 class="">Update News!</h1>
                        <form action="UpNews.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div><label for="">Title:</label>
                                <input type="text" name="Title"  value="<?php echo $result["Title"]; ?>"required/>
                            </div>
                            <div><label for="">Brief:</label>
                                <input type="text" name="Brief"  value="<?php echo $result["Brief"]; ?>"required/>
                            </div>
                            <div><label for="" style="float: left;">Content:</label>
                                <textarea name="Content" id="" cols="90" rows="10"required><?php echo $result["Content"]; ?></textarea>
                            </div> 
                            <div><label for="">News hot:</label>
                                <input style="width: 5%;vertical-align:sub;" type="radio" name="Newshot" value="1"<?php if ($result["Newshot"]==1) {?>checked<?php
                                } ?> /> <label for="">Yes</label>
                                <input style="width: 5%;vertical-align:sub;"type="radio" name="Newshot" value="0" <?php if ($result["Newshot"]==0) {?>checked<?php
                                } ?>/> <label for="">No</label>
                            </div> 
                            <div><label for="">News Special:</label>
                            <select name="NewsSpecial" required>
                                <option value="1" <?php if ($result["NewsSpecial"]==1) {?>
                                    selected="selected"<?php
                                } ?> >1</option>
                                <option value="2"<?php if ($result["NewsSpecial"]==2) {?>
                                    selected="selected"<?php
                                } ?>>2</option>
                                <option value="3"<?php if ($result["NewsSpecial"]==3) {?>
                                    selected="selected"<?php
                                } ?>>3</option>
                                <option value="4"<?php if ($result["NewsSpecial"]==4) {?>
                                    selected="selected"<?php
                                } ?>>4</option>
                                <option value="5"<?php if ($result["NewsSpecial"]==5) {?>
                                    selected="selected"<?php
                                } ?>>5</option>
                            </select>
                            </div>
                            
                            <div><label for="">Link Photo:</label>
                                <input type="text" name="NewsPhoto" value="<?php echo $result["NewsPhoto"]; ?>"required>
                            </div> 
                            <center>
                            <div style="margin-top:2%; width: 40%;">
                                 <input type="submit" value="Update" class="btn btn-info">
                               
                            </div></center>
                        </form>
                        <hr>
                        
                    
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