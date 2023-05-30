<?php
include 'koneksi.php';


$npwp						 =$_POST['npwp'];

$nama						 =$_POST['nama'];

$masa						 =$_POST['m1'];

$gaji						 =$_POST['gaji_pensi'];
$gaji 						 = str_replace(".", "", $gaji);

$hasil18					 =$_POST['hasil_1_8'];
$hasil18					 = str_replace(".", "", $hasil18);

$biayajbtn					 =$_POST['biaya_jbtn'];
$biayajbtn					 = str_replace(".", "", $biayajbtn);

$hasil910					 =$_POST['hasil_9_10'];
$hasil910					 = str_replace(".", "", $hasil910);

$neto 		 				 =$_POST['neto'];
$neto					     = str_replace(".", "", $neto);

$netoSetahun				 =$_POST['neto_setahun'];
$netoSetahun				 = str_replace(".", "", $netoSetahun);

$penghasilanTdkPjk			 =$_POST['penghasilan_tdk_pjk'];
$penghasilanTdkPjk			 = str_replace(".", "", $penghasilanTdkPjk);

$penghasilanKenaPjk 		 =$_POST['penghasilan_kena_pjk'];
$penghasilanKenaPjk 		 = str_replace(".", "", $penghasilanKenaPjk );

$penghasilanKenaPjkSetahun	 =$_POST['penghasilan_kena_pjk_setahun'];
$penghasilanKenaPjkSetahun	 = str_replace(".", "", $penghasilanKenaPjkSetahun);

$pph21DipotongSebelum		 =$_POST['pph21_dipotong_sebelum'];
$pph21DipotongSebelum		 = str_replace(".", "", $pph21DipotongSebelum);


$input=mysqli_query($koneksi,"INSERT INTO `perhitungan`( npwp, nama, masa, gaji_pensi, hasil_1_8, biaya_jbtn, hasil_9_10, neto, neto_setahun, penghasilan_tdk_pjk, penghasilan_kena_pjk, penghasilan_kena_pjk_setahun, pph21_dipotong_sebelum) 
	values('$npwp','$nama','$masa','$gaji','$hasil18','$biayajbtn', '$hasil910', '$neto', '$netoSetahun', '$penghasilanTdkPjk', '$penghasilanKenaPjk', '$penghasilanKenaPjkSetahun', '$pph21DipotongSebelum')");

if ($input) {
	echo "Data Berhasil Disimpan";
	header("location:data-perhitungan.php");
	}else{
	echo "Gagal Disimpan";
}

?>