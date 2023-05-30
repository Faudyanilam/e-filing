

<?php
include "koneksi.php";
session_start();

$bg_color = "#FF3333";
$akun = "trial";
$modal = "#modal_berlangganan";
$_SESSION['bg_color'] = $bg_color;
$id_paket = $_SESSION['id_paket'];
$data = mysqli_query($koneksi,"select * from tb_pelanggan where id='$id_paket'");

//memanggil data dari $data ke variabel $row
$row = mysqli_fetch_assoc($data);
$akun = $row['akun'];


$hari_ini_date = new DateTime(); 
$hari_ini_str = $hari_ini_date->format('Y-m-d');
$awal_str = $row['awal'];
$awal_date = date_create("$awal_str");
$akhir_str = $row['akhir'];
$akhir_date = date_create("$akhir_str");




if($akun == "basic"){
    $bg_color = "#0499C3";
    $akun = "basic";
    $modal = "#modal_telah_berlangganan";
    $_SESSION['modal'] = $modal;
    $_SESSION['bg_color'] = $bg_color;
    $_SESSION['akun'] = $akun;
;
}else if($akun == "pro"){
     $bg_color = "#FF9D31";  
     $akun = "pro";
     $modal = "#modal_telah_berlangganan";
     $_SESSION['modal'] = $modal;
    $_SESSION['bg_color'] = $bg_color;
    $_SESSION['akun'] = $akun;
}else if($akun == "suspended"){
    header('location:login.php?hasil1=suspended');
					session_destroy();
}
$_SESSION['modal'] = $modal;
$_SESSION['bg_color'] = $bg_color;
$_SESSION['akun'] = $akun;
$diff = new DateTime(); 
$diff = date_diff($akhir_date,$hari_ini_date);
$diff_str = $diff->format("%a");
if($diff_str < 15){
    $invis = "show";
    $_SESSION['invis'] = $invis;
}else{
    $invis = "none";
    $_SESSION['invis'] = $invis;
}

?>