<?php
include 'config.php'; 

$id = $_POST['id'];
$sumber_penghasilan = $_POST['sumber_penghasilan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$sql = "UPDATE `kena_pph_final` SET 
`sumber_penghasilan_siswa` = '$sumber_penghasilan', 
`alamat` = '$alamat', 
`no_hp` = '$no_hp' 
WHERE `kena_pph_final`.`id` = '$id'";

$result = $koneksi->query($sql) or die("Cannot write");

if($result){
echo '<script language="javascript">alert("Update berhasil dilakukan."); document.location="fetch_halaman_7.php";</script>';
}
else {
echo '<script language="javascript">alert("Update gagal dilakukan."); document.location="fetch_halaman_7.php";</script>';
}

?>
