<?php

include 'koneksi.php';

$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$gender  = $_POST['gender'];
$email   = $_POST['email'];
$password   = $_POST['password'];
$address   = $_POST['address'];
$mobile_no  = $_POST['mobile_no']; 

// $message = '';

$query= mysqli_query($koneksi," INSERT INTO data (first_name, last_name, gender, email, password, address, mobile_no) VALUES ('$first_name', '$last_name', '$gender', '$email', '$password', '$address', '$mobile_no')");
if($query){
    echo 'Berhasil...';
}else{
    echo 'Gagal...';

}


?>