
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpstatus_perkawinan'])) {
	$tmpstatus_perkawinan = $_SESSION['tmpstatus_perkawinan'];
}
if (isset($_SESSION['tmpstatus_pjk'])) {
	$tmpstatus_pjk = $_SESSION['tmpstatus_pjk'];
}
if (isset($_SESSION['tmpjumlah_tanggungan'])) {
	$tmpjumlah_tanggungan = $_SESSION['tmpjumlah_tanggungan'];
}
if (isset($_SESSION['tmpptkp'])) {
	$tmpptkp = $_SESSION['tmpptkp'];
}
if (isset($_SESSION['tmplapor_sebagai'])) {
	$tmplapor_sebagai = $_SESSION['tmplapor_sebagai'];
}
if (isset($_SESSION['tmpneto_istri'])) {
	$tmpneto_istri = $_SESSION['tmpneto_istri'];
}
if (isset($_SESSION['tmpneto_suami'])) {
	$tmpneto_suami = $_SESSION['tmpneto_suami'];
}
if (isset($_SESSION['tmpnpwp_istri_suami'])) {
	$tmpnpwp_istri_suami = $_SESSION['tmpnpwp_istri_suami'];
}
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpstatus_perkawinan[] = $_POST['status_perkawinan'];
$tmpstatus_pjk[] = $_POST['status_pjk'];
$tmpjumlah_tanggungan[] = $_POST['jumlah_tanggungan'];
$tmpptkp[] = $_POST['ptkp'];
$tmplapor_sebagai[] = $_POST['lapor_sebagai'];
$tmpneto_istri[] = $_POST['neto_istri'];
$tmpneto_suami[] = $_POST['neto_suami'];
$tmpnpwp_istri_suami[] = $_POST['npwp_istri_suami'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
$_SESSION['tmpstatus_perkawinan'] = $tmpstatus_perkawinan;
$_SESSION['tmpstatus_pjk'] = $tmpstatus_pjk;
$_SESSION['tmpjumlah_tanggungan'] = $tmpjumlah_tanggungan;
$_SESSION['tmpptkp'] = $tmpptkp;
$_SESSION['tmplapor_sebagai'] = $tmplapor_sebagai;
$_SESSION['tmpneto_istri'] = $tmpneto_istri;
$_SESSION['tmpneto_suami'] = $tmpneto_suami;
$_SESSION['tmpnpwp_istri_suami'] = $tmpnpwp_istri_suami;
 // End script simpan ke session
header('location:halaman13.php');
