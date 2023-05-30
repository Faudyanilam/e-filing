<?php
include ('koneksi.php');

$tahun_pajak = $_POST['tahun_pajak'];
$status_spt = $_POST['status_spt'];
$pembetulan_ke = $_POST['pembetulan_ke'];
 
mysqli_query($koneksi, "insert into save_data values('$tahun_pajak','$status_spt','$pembetulan_ke')");

if($koneksi){  
    echo'Data Berhasil Disimpan';
}else{ 
    echo'Gagal Menyimpan Data';
}
?>