<?php 
include 'connection.php';

//query delete
$tanggal = $_POST['tanggal'];
$jumlah_dipilih = count($tanggal);
 
for($x=0;$x<$jumlah_dipilih;$x++){
	mysqli_query($con, "DELETE FROM masa_spt WHERE tanggal='$tanggal[$x]'");
}
 
header("location: daftar_spt.php");