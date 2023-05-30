
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpsumber_penghasilan'])) {
	$tmpsumber_penghasilan = $_SESSION['tmpsumber_penghasilan'];
}
if (isset($_SESSION['tmpdpp'])) {
	$tmpdpp = $_SESSION['tmpdpp'];
}
if (isset($_SESSION['tmppph_terutang'])) {
	$tmppph_terutang = $_SESSION['tmppph_terutang'];
}
 // End ambil data dari session
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpsumber_penghasilan[] = $_POST['sumber_penghasilan'];
$tmpdpp[] = $_POST['dpp'];
$tmppph_terutang[] = $_POST['pph_terutang'];
 // End script tambah ke array
 // Simpan data array yang baru ke session
$_SESSION['tmpsumber_penghasilan'] = $tmpsumber_penghasilan;
$_SESSION['tmpdpp'] = $tmpdpp;
$_SESSION['tmppph_terutang'] = $tmppph_terutang;
 // End script simpan ke session
header('location:halaman7-xxx.php'); 
