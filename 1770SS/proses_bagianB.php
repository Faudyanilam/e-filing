<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmppenghasilan_bruto'])) {
	$tmppenghasilan_bruto = $_SESSION['tmppenghasilan_bruto'];
}
if (isset($_SESSION['tmppenghasilan_final'])) {
	$tmppenghasilan_final = $_SESSION['tmppenghasilan_final'];
}
if (isset($_SESSION['tmpdikecualikan_obj_pajak'])) {
	$tmpdikecualikan_obj_pajak = $_SESSION['tmpdikecualikan_obj_pajak'];
}
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmppenghasilan_bruto[] = $_POST['penghasilan_bruto'];
$tmppenghasilan_final[] = $_POST['penghasilan_final'];
$tmpdikecualikan_obj_pajak[] = $_POST['dikecualikan_obj_pajak'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
$_SESSION['tmppenghasilan_bruto'] = $tmppenghasilan_bruto;
$_SESSION['tmppenghasilan_final'] = $tmppenghasilan_final;
$_SESSION['tmpdikecualikan_obj_pajak'] = $tmpdikecualikan_obj_pajak;
 // End script simpan ke session
header('location:bagian_C.php');

?>