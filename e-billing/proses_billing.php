<?php
session_start();
 // Ambil data dari session
// $nop = $_POST['nop'];

// $_SESSION['nop'] = $nop;
if (isset($_SESSION['tmpjenis_pajak'])) {
	$tmpjenis_pajak = $_SESSION['tmpjenis_pajak'];
}
if (isset($_SESSION['tmpjenis_setoran'])) {
	$tmpjenis_setoran = $_SESSION['tmpjenis_setoran'];
}
if (isset($_SESSION['tmpmasa_pajak_sebelum'])) {
	$tmpmasa_pajak_sebelum = $_SESSION['tmpmasa_pajak_sebelum'];
}
if (isset($_SESSION['tmpmasa_pajak_sesudah'])) {
	$tmpmasa_pajak_sesudah = $_SESSION['tmpmasa_pajak_sesudah'];
}
if (isset($_SESSION['tmptahun_pajak'])) {
	$tmptahun_pajak = $_SESSION['tmptahun_pajak'];
}
if (isset($_SESSION['tmpnop'])) {
	$tmpnop = $_SESSION['tmpnop'];
}
if (isset($_SESSION['tmpno_ketetapan'])) {
	$tmpno_ketetapan = $_SESSION['tmpno_ketetapan'];
}
if (isset($_SESSION['tmpjml_setor'])) {
	$tmpjml_setor = $_SESSION['tmpjml_setor'];
}
if (isset($_SESSION['tmpterbilang'])) {
	$tmpterbilang = $_SESSION['tmpterbilang'];
}
if (isset($_SESSION['tmpuraian'])) {
	$tmpuraian = $_SESSION['tmpuraian'];
}



$tmpjenis_pajak[] = $_POST['jenis_pajak'];
$tmpjenis_setoran[] = $_POST['jenis_setoran'];
$tmpmasa_pajak_sebelum[] = $_POST['masa_pajak_sebelum'];
$tmpmasa_pajak_sesudah[] = $_POST['masa_pajak_sesudah'];
$tmptahun_pajak[] = $_POST['tahun_pajak'];
$tmpnop[] = $_POST['nop'];
$tmpno_ketetapan[] = $_POST['no_ketetapan'];
$tmpjml_setor[] = $_POST['jml_setor'];
$tmpterbilang[] = $_POST['terbilang'];
$tmpuraian[] = $_POST['uraian'];




$_SESSION['tmpjenis_pajak'] = $tmpjenis_pajak;
$_SESSION['tmpjenis_setoran'] = $tmpjenis_setoran;  
$_SESSION['tmpmasa_pajak_sebelum'] = $tmpmasa_pajak_sebelum;
$_SESSION['tmpmasa_pajak_sesudah'] = $tmpmasa_pajak_sesudah;
$_SESSION['tmptahun_pajak'] = $tmptahun_pajak;
$_SESSION['tmpnop'] = $tmpnop;
$_SESSION['tmpno_ketetapan'] = $tmpno_ketetapan;
$_SESSION['tmpjml_setor'] = $tmpjml_setor;
$_SESSION['tmpterbilang'] = $tmpterbilang;
$_SESSION['tmpuraian'] = $tmpuraian;


 // End script simpan ke session

header('location:form_e-billing2.php');

?>