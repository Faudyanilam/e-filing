<?php 
include 'connection.php';

//query delete
$npwp = $_POST['npwp'];
$jumlah_dipilih = count($npwp);
 
for($x=0;$x<$jumlah_dipilih;$x++){
	mysqli_query($con, "DELETE FROM user WHERE npwp='$npwp[$x]'");
}
 
header("location: ptong_pjak_bulan.php");


//query update
$npwp = $_POST['npwp'];
$jumlah_dipilih = count($npwp);
//query update
$query = "UPDATE mhs SET nama='$nama' , fakultas='$fakultas' WHERE id='$id' ";

if (mysql_query($query)) {
 # credirect ke page index
 header("location:pagemhs.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>
?>