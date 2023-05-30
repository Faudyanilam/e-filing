<?php 
include '../koneksi.php';
if(isset($_POST['submit'])){

	$npwp = $_POST['npwp'];
	$nop = $_POST['nop'];
	$jumlah_setor = $_POST['jumlah_setor'];
	$terbilang = $_POST['terbilang'];
	$jenis_pajak = $_POST['jenis_pajak'];
	$uraian = $_POST['uraian'];
	$jenis_setoran = $_POST['jenis_setoran'];
	$masa_pajak = $_POST['masa_pajak'];
	$tahun_pajak = $_POST['tahun_pajak'];
	$kode_billing = $_POST['kode_billing'];
	$no_sk = $_POST['no_sk'];
	$masa_aktif = $_POST['masa_aktif'];

	$data = mysqli_query($koneksi, "INSERT INTO tb_riwayat_surat VALUES('','$npwp', '$jenis_pajak', '$jenis_setoran', '$masa_pajak', '$tahun_pajak', '$nop', '$jumlah_setor', '$terbilang', '$uraian', '$no_sk', '$kode_billing', '$masa_aktif')");

	if ($data == 1){
		header("location:cetak_pdf.php");
		
		// header("location:data_akun_wp.php?hasil=data_ditambah");
	}else{
		header("location:form_e-billing3.php");
		
		// header("location:daftar_akun.php?hasil=data_gagalditambah");
	}
}
?>
