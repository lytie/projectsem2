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
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
<li class="nav-item active">
  <a class="nav-link" href="Matches.php">
    <i class="fas fa-fw fa-calendar-alt"></i> 
    <span>Matches</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="Country.php">
    <i class="fas fa-fw fa-flag"></i>
    <span>Country</span></a>
</li> 
<li class="nav-item">
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
          <h1 class="h3 mb-2 text-gray-800">Matches</h1>
          <p class="mb-4"> </p>

          <div class="card shadow mb-4" style="margin-top:10%;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Infomation next matches</h6>
                </div>
                
                <div class="card-body"><center>
                <?php include_once "db.php";
                    $querynm ='SELECT * FROM NextMatches ';
                    $recordnm = mysqli_query($conn,$querynm);
                    $resultnm = mysqli_fetch_array($recordnm);
                   
                    
                    ?>
                    
                        <h1 class="">Next Matches!</h1>
                        <form action="nextmatches.php" method="post">
                            <div><label for="">Time:</label>
                                <input type="text" name="Time" value="<?php echo $resultnm["Time"]; ?>"required/>
                            </div>
                            <div><label for="">ID team 1:</label>
                                <input type="number" name="IDteam1"  value="<?php echo $resultnm["IDteam1"]; ?>"required/>
                            </div>
                            <div><label for="">ID team 2:</label>
                                <input type="number" name="IDteam2"  value="<?php echo $resultnm["IDteam2"]; ?>"required/>
                            </div>
                            <div style="margin-top:2%; width: 40%;">
                                 <input type="submit" value="Updates" class="btn btn-info">
                               
                            </div>
                        </form>
                        </center>
                        <hr>
                        
                    
                </div>
            </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Schedule & Result</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Team 1</th>
                      <th>Goal 1</th>
                      <th>Goal 2</th>
                      <th>Team 2</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Date</th>
                      <th>Team 1</th>
                      <th>Goal 1</th>
                      <th>Goal 2</th>
                      <th>Team 2</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                   <?php
                   include_once "db.php";
                   $querym="SELECT * FROM Matches";
                   $recordm=mysqli_query($conn,$querym);
                   $resultm=mysqli_fetch_all($recordm);
                   foreach ($resultm as  $rowm) {
                    
                        $query1 ="SELECT TeamName FROM team  where ID=".$rowm[2];
                        $record1 = mysqli_query($conn,$query1);
                        if($record1==null){
                            $team1="";
                        }else{
                            $result1=mysqli_fetch_array($record1);
                        $team1=$result1['TeamName'];}
                        
                        
                        $query2 ="SELECT TeamName FROM team where ID= ".$rowm[3];
                        $record2 = mysqli_query($conn,$query2);
                        if($record2==null){
                            $team2="";
                        }else{
                            $result2=mysqli_fetch_array($record2);
                            $team2=$result2['TeamName'];}
                   
                   ?>
                    <tr>
                      <td><?php echo $rowm[1];?></td>
                      <td><?php echo $team1 ;?></td>
                      <td><?php echo $rowm[4];?></td>
                      <td><?php echo $rowm[5];?></td>
                      <td><?php echo $team2 ;?></td>
                      <td><center>
                      <a href="Updatematches.php?id=<?php echo $rowm[0];?>"> <button type="button" class="btn btn-success">Update</button></a>
                      </center>
                      </td>
                      
                    </tr>
                    
                    <?php }
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
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
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
