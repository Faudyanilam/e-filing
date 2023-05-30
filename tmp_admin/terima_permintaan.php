<?php 
include '../koneksi.php';

$id = $_GET['id'];


// MENGAMBIL ISI TABEL SESUAI ID
$select_data = mysqli_query($koneksi,"select * from tb_pelanggan where id='$id'");
$row = mysqli_fetch_assoc($select_data);
$npwp = $row['id_daftar_npwp'];

// HARI INI
$hari_ini_date = new DateTime(); 
$hari_ini_string = $hari_ini_date->format('Y-m-d');

// MELIHAT PERMINTAAN TIPE AKUN 
if($row['akun'] == 'basic'){
    date_add($hari_ini_date,date_interval_create_from_date_string("3 months"));
    $hari_ini_akhir = $hari_ini_date->format('Y-m-d');
}else if($row['akun'] == 'pro'){
    date_add($hari_ini_date,date_interval_create_from_date_string("6 months"));
    $hari_ini_akhir = $hari_ini_date->format('Y-m-d');
}else if ($row['akun'] == 'trial'){
    date_add($hari_ini_date,date_interval_create_from_date_string("14 days"));
    $hari_ini_akhir = $hari_ini_date->format('Y-m-d');
}else if ($row['akun'] == 'suspended'){
    date_add($hari_ini_date,date_interval_create_from_date_string("14 days"));
    $hari_ini_akhir = $hari_ini_date->format('Y-m-d');
    mysqli_query($koneksi,"update tb_pelanggan set awal='$hari_ini_string', akhir='$hari_ini_akhir', akun='trial' where id='$id'");
}
    
// MENAMBAH AWAL DAN AKHIR BERLANGGANAN
$data = mysqli_query($koneksi,"update tb_pelanggan set awal='$hari_ini_string', akhir='$hari_ini_akhir' where id='$id'");

if($data == 1){
    // echo "<script>alert('Permintaan berhasil dikonfirmasi!')</script>";
    mysqli_query($koneksi,"update tb_daftarnpwp set id_paket='$id' where id_daftar_npwp='$npwp'");
    $test = base64_encode($id);
    header("location:submit_data.php?id=$test");
   
}else{
	header("location:data_langganan.php?hasil=permintaan_gagal");
    

}
?>