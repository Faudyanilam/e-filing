<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

<?php 
// mengaktifkan session php
session_start();

// menangkap data yang dikirim dari form
$jenis_wp = $_POST['jenis_wp'];
$nama_ktp = $_POST['nama_ktp'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];

// Memasukkan data yang telah ditampung ke session
$_SESSION['jenis_wp'] = $jenis_wp;
$_SESSION['nama_ktpp'] = $nama_ktp;
$_SESSION['password'] = $password;
$_SESSION['no_hp'] = $no_hp;
$_SESSION['pertanyaan'] = $pertanyaan;
$_SESSION['jawaban'] = $jawaban;

header('location:riwayat_daftar_npwp.php?hasil=daftar_berhasil');

?>
