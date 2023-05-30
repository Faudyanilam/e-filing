<?php
session_start();
include 'koneksi.php';

$username=$_POST["username"];
$pass= md5($_POST["password"]);

$data=mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$pass' ");
if (mysqli_num_rows($data)==0){
	$row = mysqli_fetch_array($data);
	$_SESSION["username"] =$row["username"];
	$_SESSION["pass"] =$row["password"];
	header("location:index.php");
}else{
	echo"<h3>Data Anda Tidak Valid</h3>";
	echo"Klik sign up untuk membuat akun";
	echo"<br><a href='registrasi.php'><b>SIGN UP</b></a>";
	
}
?>