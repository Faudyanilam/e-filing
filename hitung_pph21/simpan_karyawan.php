<?php 
include 'koneksi.php';
$id_karyawan = $_POST['id_karyawan'];
$npwp = $_POST['npwp'];
$nama = $_POST['name'];
$tanggungan = $_POST['tanggungan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_kepegawaian = $_POST['status_kepegawaian'];
$status_masuk = $_POST['tanggal'];
$status_nikah = $_POST['status_nikah'];
$kodenegara = $_POST['kode_negara'];
$input =mysqli_query($koneksi, "INSERT INTO karyawan1 VALUES('$id_karyawan','$npwp','$nama','$tanggungan','$jenis_kelamin','$status_kepegawaian','$status_masuk','$status_nikah','$kodenegara')");
if($input){
echo "Data Berhasil Disimpan";
header("location:daftar_karyawan.php");
}else{
echo "Gagal Disimpan";
}
?>