<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$nomor = $_GET['no1'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from perhitungan1 where no1='$nomor'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>