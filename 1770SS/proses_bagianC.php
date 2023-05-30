<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpseluruh_harta'])) {
	$tmpseluruh_harta = $_SESSION['tmpseluruh_harta'];
}
if (isset($_SESSION['tmpkewajiban_utang'])) {
	$tmpkewajiban_utang = $_SESSION['tmpkewajiban_utang'];
}
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpseluruh_harta[] = $_POST['seluruh_harta'];
$tmpkewajiban_utang[] = $_POST['kewajiban_utang'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
$_SESSION['tmpseluruh_harta'] = $tmpseluruh_harta;
$_SESSION['tmpkewajiban_utang'] = $tmpkewajiban_utang;
 // End script simpan ke session

header('location:bagian_D.php');

?>