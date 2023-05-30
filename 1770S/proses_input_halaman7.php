<?php
include '../config.php'; 

$sumber_penghasilan = $_POST['sumber_penghasilan'];
$DPP = $_POST['DPP'];
$PPh_terutang = $_POST['PPh_terutang'];

$sql = "INSERT INTO `kena_pph_final` (`id`, `sumber_penghasilan`, `DPP`, `PPh_terutang`) VALUES (NULL, '$sumber_penghasilan', '$DPP', '$PPh_terutang'); ";

$result = $koneksi->query($sql) or die("Cannot write");

if($result){

echo '<script language="javascript">alert("Input berhasil ditambahkan."); document.location="halaman7_coba.php";</script>';
	                                                                                                             
}
else {

echo '<script language="javascript">alert("Input gagal ditambahkan."); document.location="halaman7_coba.php";</script>';

}
?>

