
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpmembayar_zakat'])) {
	$tmpmembayar_zakat = $_SESSION['tmpmembayar_zakat'];
}
if (isset($_SESSION['tmpzakat_sumbangan'])) {
	$tmpzakat_sumbangan = $_SESSION['tmpzakat_sumbangan'];
}
 // End ambil data dari session
$A = $_POST['zakat_sumbangan'];
$A = substr($A, 4);
$A = (int) str_replace(".", "", $A );
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpmembayar_zakat[] = $_POST['membayar_zakat'];
$tmpzakat_sumbangan[] = $A;
 // End script tambah ke array
 // Simpan data array yang baru ke session
$_SESSION['tmpmembayar_zakat'] = $tmpmembayar_zakat;
$_SESSION['tmpzakat_sumbangan'] = $tmpzakat_sumbangan;
 // End script simpan ke session
header('location:halaman12.php'); 
