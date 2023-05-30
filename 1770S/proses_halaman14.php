
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmppembayaran_pph25'])) {
	$tmppembayaran_pph25 = $_SESSION['tmppembayaran_pph25'];
}
if (isset($_SESSION['tmppembayaran_stp_pph25'])) {
	$tmppembayaran_stp_pph25 = $_SESSION['tmppembayaran_stp_pph25'];
}
 // End ambil data dari session
 //proses menghilangkan titik dan rp
$A = $_POST['pembayaran_pph25'];
$A = substr($A, 4);
$A = (int) str_replace(".", "", $A );
$A1 = $_POST['pembayaran_stp_pph25'];
$A1 = substr($A1, 4);
$A1 = (int) str_replace(".", "", $A1 );
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmppembayaran_pph25[] = $A;
$tmppembayaran_stp_pph25[] = $A1;
 // End script tambah ke array
 // Simpan data array yang baru ke session
$_SESSION['tmppembayaran_pph25'] = $tmppembayaran_pph25;
$_SESSION['tmppembayaran_stp_pph25'] = $tmppembayaran_stp_pph25;
 // End script simpan ke session
header('location:halaman15.php'); 
