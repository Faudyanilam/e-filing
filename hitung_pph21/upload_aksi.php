<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['karyawan1']['npwp']) ;
move_uploaded_file($_FILES['karyawan1']['tmp_npwp'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['karyawan1']['npwp'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['karyawan1']['npwp'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$npwp     = $data->val($i, 2);
	$nama   = $data->val($i, 3);
	$tanggungan  = $data->val($i, 4);
	$jenis_kelamin  = $data->val($i, 5);
	$status_kepegawaian  = $data->val($i, 6);
	$status_masuk  = $data->val($i, 7);
	$status_nikah  = $data->val($i, 8);
 	$kode_negara  = $data->val($i, 9);
 
 
	if($npwp != "" && $nama != "" && $tanggungan != "" && $jenis_kelamin != "" && $status_kepegawaian != "" && $status_masuk!= "" && $status_nikah!= "" && $kode_negara!= ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into karyawan1 values('','$npwp','$nama','$tanggungan','$jenis_kelamin','$status_kepegawaian','$status_masuk','$status_nikah','$kode_negara')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['Karyawan']['npwp']);
 
// alihkan halaman ke index.php
header("location:daftar_karyawan.php?berhasil=$berhasil");
?>