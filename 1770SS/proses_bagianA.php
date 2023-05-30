<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpangkaSatuu'])) {
	$tmpangkaSatuu = $_SESSION['tmpangkaSatuu'];
}
if (isset($_SESSION['tmpangkaDua'])) {
	$tmpangkaDua = $_SESSION['tmpangkaDua'];
}
if (isset($_SESSION['tmpangkaTiga'])) {
	$tmpangkaTiga = $_SESSION['tmpangkaTiga'];
}
if (isset($_SESSION['tmpangkaEmpat'])) {
	$tmpangkaEmpat = $_SESSION['tmpangkaEmpat'];
}
if (isset($_SESSION['tmpangkaLima'])) {
	$tmpangkaLima = $_SESSION['tmpangkaLima']; 
}
if (isset($_SESSION['tmpangkaEnam'])) {
	$tmpangkaEnam = $_SESSION['tmpangkaEnam'];
}
if (isset($_SESSION['tmpstatus_hasil_ss'])) {
	$tmpstatus_hasil_ss = $_SESSION['tmpstatus_hasil_ss'];
}
if (isset($_SESSION['tmpangkaTujuh'])) {
	$tmpangkaTujuh = $_SESSION['tmpangkaTujuh'];
}
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpangkaSatuu[] = $_POST['angkaSatuu'];
$tmpangkaDua[] = $_POST['angkaDua'];
$tmpangkaTiga[] = $_POST['angkaTiga'];
$tmpangkaEmpat[] = $_POST['angkaEmpat'];
$tmpangkaLima[] = $_POST['angkaLima'];
$tmpangkaEnam[] = $_POST['angkaEnam'];
$tmpstatus_hasil_ss[] = $_POST['status_hasil_ss'];
$tmpangkaTujuh[] = $_POST['angkaTujuh'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
$_SESSION['tmpangkaSatuu'] = $tmpangkaSatuu;
$_SESSION['tmpangkaDua'] = $tmpangkaDua;
$_SESSION['tmpangkaTiga'] = $tmpangkaTiga;
$_SESSION['tmpangkaEmpat'] = $tmpangkaEmpat;
$_SESSION['tmpangkaLima'] = $tmpangkaLima;
$_SESSION['tmpangkaEnam'] = $tmpangkaEnam;
$_SESSION['tmpstatus_hasil_ss'] = $tmpstatus_hasil_ss;
$_SESSION['tmpangkaTujuh'] = $tmpangkaTujuh;
 // End script simpan ke session

header('location:bagian_B.php');

?>