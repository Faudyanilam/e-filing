<?php 
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM kena_pph_final WHERE id ='$id' ";
 
$result = $koneksi->query($sql) or die("Cannot write");

if($result){
echo '<script language="javascript">alert("Hapus data berhasil dilakukan."); document.location="halaman7_coba.php";</script>';
}
else {
echo '<script language="javascript">alert("Hapus data gagal dilakuan."); document.location="halaman7_coba.php";</script>';
}

?>
