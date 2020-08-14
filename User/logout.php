<?php session_start(); 
 
if (isset($_SESSION['UserName'])){
    unset($_SESSION['UserName']); // xóa session login
}
header("location:index.php")
?>