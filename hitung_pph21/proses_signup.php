<?php

include 'koneksi.php';
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$hash =password_hash($pass, PASSWORD_BCRYPT);
$input = mysqli_query($koneksi, "INSERT INTO user VALUES('$user','$email','$hash')") or die(mysqli_error());
if ($input) {
	header("location:login.php");
	exit;
}

?>