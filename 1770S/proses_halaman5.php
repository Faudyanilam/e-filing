
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmppenghasilan_ln'])) {
	$tmppenghasilan_ln = $_SESSION['tmppenghasilan_ln'];
}
if (isset($_SESSION['tmpluar_negeri'])) {
	$tmpluar_negeri = $_SESSION['tmpluar_negeri'];
}
 // End ambil data dari session
 //proses agar titik dan rp tidak terbaca
$A = $_POST['luar_negeri'];
$A = substr($A, 4);
$A = (int) str_replace(".", "", $A );
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmppenghasilan_ln[] = $_POST['penghasilan_ln'];
$tmpluar_negeri[] = $A;
 // End script tambah ke array
 // Simpan data array yang baru ke session
$_SESSION['tmppenghasilan_ln'] = $tmppenghasilan_ln;
$_SESSION['tmpluar_negeri'] = $tmpluar_negeri;
 // End script simpan ke session
header('location:halaman6.php');
