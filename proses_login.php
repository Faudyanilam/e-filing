<?php
session_start();
 
$npwp = $_POST['npwp'];
$password = base64_encode($_POST['password']);
 
$_SESSION['npwp'] = $npwp;
header('location:lapor.php');

?>