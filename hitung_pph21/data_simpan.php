<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['Karyawan']['npwp'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$npwp     = $data->val($i, 1);
	$nama   = $data->val($i, 2);
	$tanggungan  = $data->val($i, 3);
	$jenis_kelamin  = $data->val($i, 4);
	$status_kepegawaian  = $data->val($i, 5);
	$status_masuk  = $data->val($i, 6);
	$status_nikah  = $data->val($i, 7);
 	$kode_negara  = $data->val($i, 8);
 
	if($nama != "" && $alamat != "" && $telepon != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into karyawan1 values('','$npwp','$nama','$tanggungan','$jenis_kelamin','$status_kepegawaian','$status_masuk','$status_nikah','$kode_negara')");
		$berhasil++;
	}
}

	$nama   = $data->val($i, 2);
	$tanggungan  = $data->val($i, 3);
	$jenis_kelamin  = $data->val($i, 4);
	$status_kepegawaian  = $data->val($i, 5);
	$status_masuk  = $data->val($i, 6);
	$status_nikah  = $data->val($i, 7);
 	$kode_negara  = $data->val($i, 8);
if($nama != "" && $alamat != "" && $telepon != ""){
	// input data ke database (table data_pegawai)
	mysqli_query($koneksi,"INSERT into karyawan1 values('','$npwp','$nama','$tanggungan','$jenis_kelamin','$status_kepegawaian','$status_masuk','$status_nikah','$kode_negara')");
	$berhasil++;
}
?>