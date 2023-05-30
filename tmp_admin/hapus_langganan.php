<?php 
include '../koneksi.php';

$id = $_GET['id'];

$user = mysqli_query($koneksi, "select * from tb_daftarnpwp where id_paket='$id'");
$jumlah_user = mysqli_num_rows($user);

if($jumlah_user > 1){
	$hari_ini_date = new DateTime(); 
	$hari_ini_string = $hari_ini_date->format('Y-m-d');
	date_add($hari_ini_date,date_interval_create_from_date_string("14 days"));
    $hari_ini_akhir = $hari_ini_date->format('Y-m-d');
	$data = mysqli_query($koneksi, "update tb_pelanggan set harga='', akun='trial', user='', awal='$hari_ini_string', akhir='$hari_ini_akhir' where id='$id'");
	if($data == 1){
		header("location:data_langganan.php");
	}else{
		header("location:data_langganan.php?hasil=data_gagalterhapus");
	
	}
	
}else{
	$data = mysqli_query($koneksi,"DELETE FROM tb_pelanggan WHERE id='$id'");
	mysqli_query($koneksi,"update tb_daftarnpwp set id_paket=null where id_paket='$id'");	
	if($data == 1){
		header("location:data_langganan.php?hasil=data_terhapus");
	}else{
		header("location:data_langganan.php?hasil=data_gagalterhapus");
	
	}

}

?>