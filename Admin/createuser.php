

<?php
 //Nhúng file kết nối với database
 include_once 'db.php';
       
 
 //Lấy dữ liệu từ file dangky.php
 $username = $_POST['UserName'];
 $email = $_POST['UserEmail'];
 $password = $_POST['UserPass'];
 $passwordCf = $_POST['CofiUserPass'];

 if ($password != $passwordCf) {
    header("location:createuser-er.php?erorr=pass");
 }
     // Mã khóa mật khẩu
     $password = md5($password);
       
 //Kiểm tra tên đăng nhập này đã có người dùng chưa
 $qu="SELECT UserName FROM User WHERE UserName='$username'";
 $re=mysqli_query($conn,$qu);
 
 if (mysqli_num_rows($re) > 0){
     header("location:createuser-er.php?erorr=user");
     exit;
 }
       
 //Kiểm tra email đã có người dùng chưa
 if (mysqli_num_rows(mysqli_query($conn,"SELECT UserEmail FROM User WHERE UserEmail='$email'")) > 0)
 {
     header("location:createuser-er.php?erorr=mail");
     exit;
 }    
 //Lưu thông tin thành viên vào bảng
 $addmember = mysqli_query($conn,"INSERT INTO User (UserName,UserPassword,UserEmail)VALUES ('$username','$password','$email');");
                       
 //Thông báo quá trình lưu
 if ($addmember){
     
     header("location:createuser-er.php?erorr=success");
 }
 else{
     header("location:createuser-er.php?erorr=fail");
 }
     
?>
