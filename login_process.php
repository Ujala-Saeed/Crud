<?php
include('code.php');
session_start();
$email=$_POST['email'];
$pas=$_POST['password'];
//
$dbemail='ujalasaeed.46@gmail.com';
$dbpass='12345';
md5($dbpass);
if($email === $dbemail && $pas === $dbpass){

	$_SESSION['logedin']=1;
	$_SESSION['name']='ujala';
	
	}
else{
	echo "please reg";
	session_destroy();

}

if($_SESSION['logedin']==1){

	header('location:index.php');
}else{
	header('location:login.php');
}


?>