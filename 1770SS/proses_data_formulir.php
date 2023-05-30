<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmptahun_pajak_ss'])) {
	$tmptahun_pajak_ss = $_SESSION['tmptahun_pajak_ss'];
}
if (isset($_SESSION['tmpstatus_spt_ss'])) {
	$tmpstatus_spt_ss = $_SESSION['tmpstatus_spt_ss'];
}
if (isset($_SESSION['tmppembetulan_ke'])) {
	$tmppembetulan_ke = $_SESSION['tmppembetulan_ke'];
}
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmptahun_pajak_ss[] = $_POST['tahun_pajak_ss'];
$tmpstatus_spt_ss[] = $_POST['status_spt_ss'];
$tmppembetulan_ke[] = $_POST['pembetulan_ke'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
$_SESSION['tmptahun_pajak_ss'] = $tmptahun_pajak_ss;
$_SESSION['tmpstatus_spt_ss'] = $tmpstatus_spt_ss;
$_SESSION['tmppembetulan_ke'] = $tmppembetulan_ke;
 // End script simpan ke session

header('location:bagian_A.php');
?>