<?php 
$fullname = $email = $phone = $pass = "";
if (isset($_POST['name'])) {
	$fullname = $_POST['name'];
}
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}
if (isset($_POST['phonenumber'])) {
	$phone = $_POST['phonenumber'];
}
if (isset($_POST['password'])) {
	$pass = $_POST['password'];
}
if ($email != "" && $pass != "") {
  	header('Location: dangnhap.php?email='.$email.' &password='.$pass);
  	die();
}