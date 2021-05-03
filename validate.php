<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
}else{
	echo "connection unsuccessful";
}
mysqli_select_db($con,'healthcare'); // database name = healthcare
$name = $_POST['name'];
$uname = $_POST['user'];
$pass = $_POST['password'];
$city = $_POST['city']; 
// name , user, password, city these should match with the names in the input tags of signup.php


$ciphering = "AES-128-CTR";
$option = 0 ;
$encryption_iv = '1234567890123456';
$encryption_key = "healthcare";

$encryption = openssl_encrypt($pass, $ciphering, $encryption_key, $option, $encryption_iv);


$q = "select * from signup where username = '$uname' && password = '$encryption' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1){
		$_SESSION['patientname'] = $uname;
		// this session variable will store patient name and show it on home.php once the patient is logged in (eg. WELCOME, Rutvij)
		header('location:home.php');}
else{
	header('location:login.php');
}
?>