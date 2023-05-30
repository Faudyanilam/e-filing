<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_karyawan = $_POST['id_karyawan'];
$npwp = $_POST['npwp'];
$nama = $_POST['name'];
$tanggungan = $_POST['tanggungan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_kepegawaian = $_POST['status_kepegawaian'];
$status_masuk = $_POST['tanggal'];
$status_nikah = $_POST['status_nikah'];
$kodenegara = $_POST['kode_negara'];

mysqli_query($koneksi, "UPDATE karyawan1 set npwp='$npwp', nama='$nama', tanggungan='$tanggungan',jenis_kelamin='$jenis_kelamin', status_kepegawaian='$status_kepegawaian', status_masuk='$status_masuk', status_nikah='$status_nikah', kode_negara='$kodenegara' where id_karyawan='$id_karyawan'");
header("location:daftar_karyawan.php");

?>
 
