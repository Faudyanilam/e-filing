<?php 
include 'connection.php';

//query delete
$npwp = $_POST['npwp_a2'];
$jumlah_dipilih = count($npwp);
 
for($x=0;$x<$jumlah_dipilih;$x++){
	mysqli_query($con, "DELETE FROM a2_laporan WHERE npwp_a2='$npwp[$x]'");
}
header("Location: DaftarBuktiPotong_A2.php")
 




?>
