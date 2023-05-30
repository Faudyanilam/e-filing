<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmptahun_pajak'])) {
	$tmptahun_pajak = $_SESSION['tmptahun_pajak'];
}
if (isset($_SESSION['tmpstatus_spt'])) {
	$tmpstatus_spt = $_SESSION['tmpstatus_spt'];
}
if (isset($_SESSION['tmppembetulan_ke'])) {
	$tmppembetulan_ke = $_SESSION['tmppembetulan_ke'];
}
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmptahun_pajak[] = $_POST['tahun_pajak'];
$tmpstatus_spt[] = $_POST['status_spt'];
$tmppembetulan_ke[] = $_POST['pembetulan_ke'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
$_SESSION['tmptahun_pajak'] = $tmptahun_pajak;
$_SESSION['tmpstatus_spt'] = $tmpstatus_spt;
$_SESSION['tmppembetulan_ke'] = $tmppembetulan_ke;
 // End script simpan ke session

header('location:halaman2-xxx.php');

?>