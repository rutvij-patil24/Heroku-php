<?php

session_start();
header('location:login.php'); // redirect to the same page

$con = mysqli_connect('localhost','root');
if($con){echo "connection successful";}
else{echo "connection unsuccessful";}

mysqli_select_db($con,'healthcare'); // database name = healthcare

$name = $_POST['name'];
$uname = $_POST['user'];
$pass = $_POST['password'];
$city = $_POST['city']; 
// name , user, password, city these should match with the names in the input tags of signup.php

$ciphering = "AES-128-CTR"; // it stores the cipher technique (method)
$option = 0 ; 
$encryption_iv = '1234567890123456'; // holds the initialization vector which is not null
$encryption_key = "healthcare"; // secret key

$encryption = openssl_encrypt($pass, $ciphering, $encryption_key, $option, $encryption_iv);


$q = "select * from signup where username = '$uname' && password = '$pass' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1)
	{
		echo "user already exists";
	}
else
	{
		$qy = "insert into signup (name,username,password,city) values ('$name','$uname','$encryption','$city') ";
		mysqli_query($con,$qy);
	}



?>