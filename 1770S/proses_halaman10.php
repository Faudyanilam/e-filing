
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmppunya_tanggungan'])) {
	$tmppunya_tanggungan = $_SESSION['tmppunya_tanggungan'];
}
if (isset($_SESSION['tmpnama_keluarga'])) {
	$tmpnama_keluarga = $_SESSION['tmpnama_keluarga'];
}
if (isset($_SESSION['tmpnik_keluarga'])) {
	$tmpnik_keluarga = $_SESSION['tmpnik_keluarga'];
}
if (isset($_SESSION['tmphubungan_keluarga'])) {
	$tmphubungan_keluarga = $_SESSION['tmphubungan_keluarga'];
}
if (isset($_SESSION['tmppekerjaan_keluarga'])) {
	$tmppekerjaan_keluarga = $_SESSION['tmppekerjaan_keluarga'];
}
 // End ambil data dari session
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmppunya_tanggungan[] = $_POST['punya_tanggungan'];
$tmpnama_keluarga[] = $_POST['nama_keluarga'];
$tmpnik_keluarga[] = $_POST['nik_keluarga'];
$tmphubungan_keluarga[] = $_POST['hubungan_keluarga'];
$tmppekerjaan_keluarga[] = $_POST['pekerjaan_keluarga'];
 // End script tambah ke array
 // Simpan data array yang baru ke session
$_SESSION['tmppunya_tanggungan'] = $tmppunya_tanggungan;
$_SESSION['tmpnama_keluarga'] = $tmpnama_keluarga;
$_SESSION['tmpnik_keluarga'] = $tmpnik_keluarga;
$_SESSION['tmphubungan_keluarga'] = $tmphubungan_keluarga;
$_SESSION['tmppekerjaan_keluarga'] = $tmppekerjaan_keluarga;
 // End script simpan ke session
header('location:halaman10-xxx.php'); 
