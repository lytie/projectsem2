<?php 
$server ='localhost';
$port = '3306';
$db ='Sports';
$user ='root';
$pwd='';
$conn = mysqli_connect($server,$user,$pwd,$db);
if (!$conn) {
    echo "Error: Unable to connect to MySQL" . PHP_EOL;
    echo "Debug errno:" . mysqli_connect_errno() .PHP_EOL;
    exit;

}