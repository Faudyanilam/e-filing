
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpmemiliki_pengurangan_pph24'])) {
	$tmpmemiliki_pengurangan_pph24 = $_SESSION['tmpmemiliki_pengurangan_pph24'];
}
if (isset($_SESSION['tmppengurangan_pph21'])) {
	$tmppengurangan_pph21 = $_SESSION['tmppengurangan_pph21'];
}
 // End ambil data dari session
 //Proses untuk menghilangkan titik dan rp
$A = $_POST['pengurangan_pph21'];
$A = substr($A, 4);
$A = (int) str_replace(".", "", $A );
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpmemiliki_pengurangan_pph24[] = $_POST['memiliki_pengurangan_pph24'];
$tmppengurangan_pph21[] = $A;
 // End script tambah ke array
 // Simpan data array yang baru ke session
$_SESSION['tmpmemiliki_pengurangan_pph24'] = $tmpmemiliki_pengurangan_pph24;
$_SESSION['tmppengurangan_pph21'] = $tmppengurangan_pph21;
 // End script simpan ke session
header('location:halaman14.php'); 
