
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpkode_harta'])) {
	$tmpkode_harta = $_SESSION['tmpkode_harta'];
}
if (isset($_SESSION['tmpnama_harta'])) {
	$tmpnama_harta = $_SESSION['tmpnama_harta'];
}
if (isset($_SESSION['tmptahun_perolehan'])) {
	$tmptahun_perolehan = $_SESSION['tmptahun_perolehan'];
}
if (isset($_SESSION['tmpharga_perolehan'])) {
	$tmpharga_perolehan = $_SESSION['tmpharga_perolehan'];
}
if (isset($_SESSION['tmpketerangan'])) {
	$tmpketerangan = $_SESSION['tmpketerangan'];
}
 // End ambil data dari session
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpkode_harta[] = $_POST['kode_harta'];
$tmpnama_harta[] = $_POST['nama_harta'];
$tmptahun_perolehan[] = $_POST['tahun_perolehan'];
$tmpharga_perolehan[] = $_POST['harga_perolehan'];
$tmpketerangan[] = $_POST['keterangan'];
 // End script tambah ke array
 // Simpan data array yang baru ke session
$_SESSION['tmpkode_harta'] = $tmpkode_harta;
$_SESSION['tmpnama_harta'] = $tmpnama_harta;
$_SESSION['tmptahun_perolehan'] = $tmptahun_perolehan;
$_SESSION['tmpharga_perolehan'] = $tmpharga_perolehan;
$_SESSION['tmpketerangan'] = $tmpketerangan;
 // End script simpan ke session
header('location:halaman8-xxx.php'); 
