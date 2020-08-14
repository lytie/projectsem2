<?php
//Khai báo sử dụng session
session_start();
 

 
//Xử lý đăng nhập

    //Kết nối tới database
    include_once 'db.php';
     
    //Lấy dữ liệu nhập vào
    $usermail = addslashes($_POST['Useremail']);
    $password = addslashes($_POST['Userpass']);
     
    
     
    // mã hóa pasword
    $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn,"SELECT UserEmail, UserPassword FROM User WHERE UserEmail='$usermail'");
    if (mysqli_num_rows($query) == 0) {
       header("location:login/login.php?erorr=email");
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['UserPassword']) {
        header("location:login/login.php?erorr=password");
        exit;
    }
     $name=mysqli_query($conn,"SELECT UserName FROM User WHERE UserEmail='$usermail'");
        $r=mysqli_fetch_array($name);
        $username=$r['UserName'];
    //Lưu tên đăng nhập
    $_SESSION['UserName'] = $username;
    header("location:index.php");
    die();

?>