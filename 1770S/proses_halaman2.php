
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpnpwp_pemotong'])) {
	$tmpnpwp_pemotong = $_SESSION['tmpnpwp_pemotong'];
}
if (isset($_SESSION['tmpnama_pemotong'])) {
	$tmpnama_pemotong = $_SESSION['tmpnama_pemotong'];
}
if (isset($_SESSION['tmpnomor_bukti'])) {
	$tmpnomor_bukti = $_SESSION['tmpnomor_bukti'];
}
if (isset($_SESSION['tmptanggal_bukti'])) {
	$tmptanggal_bukti = $_SESSION['tmptanggal_bukti'];
}
if (isset($_SESSION['tmpjumlah_pph'])) {
	$tmpjumlah_pph = $_SESSION['tmpjumlah_pph'];
}
if (isset($_SESSION['tmpjenis_pajak'])) {
	$tmpjenis_pajak = $_SESSION['tmpjenis_pajak'];
}
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpnpwp_pemotong[] = $_POST['npwp_pemotong'];
$tmpnama_pemotong[] = $_POST['nama_pemotong'];
$tmpnomor_bukti[] = $_POST['nomor_bukti'];
$tmptanggal_bukti[] = $_POST['tanggal_bukti'];
$tmpjumlah_pph[] = $_POST['jumlah_pph'];
$tmpjenis_pajak[] = $_POST['jenis_pajak'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
$_SESSION['tmpsumber_penghasilan'] = $tmpsumber_penghasilan;
$_SESSION['tmpnpwp_pemotong'] = $tmpnpwp_pemotong;
$_SESSION['tmpnama_pemotong'] = $tmpnama_pemotong;
$_SESSION['tmpnomor_bukti'] = $tmpnomor_bukti;
$_SESSION['tmptanggal_bukti'] = $tmptanggal_bukti;
$_SESSION['tmpjumlah_pph'] = $tmpjumlah_pph;
$_SESSION['tmpjenis_pajak'] = $tmpjenis_pajak;
 // End script simpan ke session
header('location:halaman2-xxx.php'); 
