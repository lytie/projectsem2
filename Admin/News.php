<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/56049.png">

    <title>Admin</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
      <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Feedback</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    
    <li class="nav-item">
      <a class="nav-link" href="User.php">
        <i class="fas fa-fw fa-portrait"></i>
        <span>User</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Matches.php">
        <i class="fas fa-fw fa-calendar-alt"></i> 
        <span>Matches</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Country.php">
        <i class="fas fa-fw fa-flag"></i>
        <span>Country</span></a>
    </li> 
    <li class="nav-item active">
      <a class="nav-link" href="News.php">
        <i class="fas fa-fw fa-file-alt"></i>
        <span>News</span></a>
    </li>
   

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">News</h1>
                    <p class="mb-4">
                    <a href="AddNews.html" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-file-video"></i>
                            </span>
                            <span class="text">Add Videos</span>
                        </a>
                        <a href="AddNews.html" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-file-medical"></i>
                            </span>
                            <span class="text">Add News</span>
                        </a>
                    </p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Video Featured</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Link</th>
                                            <th>Type</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Link</th>
                                            <th>Type</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                   include_once "db.php";
                   $queryvi="SELECT * FROM Video ";
                   $recordvi=mysqli_query($conn,$queryvi);
                   $resultvi=mysqli_fetch_all($recordvi);
                   foreach ($resultvi as $rowvi) {
                     
                  ?>
                                        <tr>
                                            <td><?php echo $rowvi[1];?></td>
                                            <td><?php echo $rowvi[2];?></td>
                                            <td><?php echo $rowvi[3];?></td>
                                         
                                            <td>
                                                <center>
                                                    <a href="UpdateVideo.php?id=<?php echo $rowvi[0]?>"> <button
                                                            style="margin:5px;" type="button"
                                                            class="btn btn-success">Update</button></a>

                                                    <a href="DeleteVideo.php?id=<?php echo $rowvi[0]?>"> <button
                                                            type="button" class="btn btn-danger">Delete</button></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <?php  }
                   ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- News -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">News detail</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Brief</th>
                                            <th>Content</th>
                                            <th>Date up</th>
                                            <th>News Special</th>
                                            <th>News hot</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Brief</th>
                                            <th>Content</th>
                                            <th>Date up</th>
                                            <th>News Special</th>
                                            <th>News hot</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                   include_once "db.php";
                   $queryne="SELECT * FROM News ORDER BY ID DESC";
                   $recordne=mysqli_query($conn,$queryne);
                   $resultne=mysqli_fetch_all($recordne);
                   foreach ($resultne as $rowne) {
                     
                  ?>
                                        <tr>
                                            <td><?php echo $rowne[1];?></td>
                                            <td><?php echo $rowne[2];?></td>
                                            <td><?php echo $rowne[3];?></td>
                                            <td><?php echo $rowne[6];?></td>
                                            <td><?php  for ($i=0; $i <$rowne[4] ; $i++) { 
                        echo "<i class='far fa-star'></i>";
                      } ?></td>
                                            <td><?php if($rowne[7]==1){
                       echo "<i class='fas fa-check'></i>";
                      } ?></td>
                                            <td>
                                                <center>
                                                    <a href="UpdateNews.php?id=<?php echo $rowne[0]?>"> <button
                                                            style="margin:5px;" type="button"
                                                            class="btn btn-success">Update</button></a>

                                                    <a href="DeleteNews.php?id=<?php echo $rowne[0]?>"> <button
                                                            type="button" class="btn btn-danger">Delete</button></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <?php  }
                   ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include_once "footer.html" ?>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>