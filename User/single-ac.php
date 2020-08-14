<?php
 session_start();
 $username=$_SESSION['UserName'];
     
    //Nhúng file kết nối với database
    include_once 'db.php';
          
    
    //Lấy dữ liệu từ file dangky.php
    
    $password = $_POST['UserPassO'];
    $passwordC=$_POST['UserPassN'];
        $passwordConfi=$_POST['UserPassConfi'];  
   
          
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    $qu="SELECT UserPassword FROM User WHERE UserName='$username'";
    $re=mysqli_query($conn,$qu);
    $row=mysqli_fetch_array($re);
    if ($row['UserPassword'] != $password){
        header("location:e-single.php?result=pass");
        exit;
    }
    
    if ($passwordC !=$passwordConfi) {
        header("location:e-single.php?result=passCofi");
        exit;
    }
    // Mã khóa mật khẩu
    $passwordC = md5($passwordC);

        $query="UPDATE User SET UserPassword='$passwordC' WHERE UserName='$username'";
    mysqli_query($conn,$query);
    header("location:e-single.php?result=success");
?>