<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpemail'])) {
	$tmpemail = $_SESSION['tmpemail'];
}
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpemail[] = $_POST['nama_email'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
$_SESSION['tmpemail'] = $tmpemail;
 // End script simpan ke session

header('location:../kode_verif.php');

?>