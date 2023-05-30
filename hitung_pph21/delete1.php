<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$nomor = $_GET['no'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from perhitungan where no='$nomor'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>

<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_karyawan = $_GET['id_karyawan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from karyawan1 where id_karyawan='$id_karyawan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>