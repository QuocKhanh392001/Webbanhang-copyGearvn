<?php
//gán biến
$server = "localhost";
$user = "root";
$pass = "";
$database = "webbanhang";
//kết nối
$conn = mysqli_connect($server, $user, $pass, $database);

//kiểm tra kết nối
if (!$conn) {
    die("<script>alert('Không kết nối được với database')</script>");
}
mysqli_query($conn,"SET NAMES 'UTF8'");
?>