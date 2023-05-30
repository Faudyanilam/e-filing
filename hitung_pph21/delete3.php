<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$nomor = $_GET['no2'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from perhitungan2 where no2='$nomor'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>