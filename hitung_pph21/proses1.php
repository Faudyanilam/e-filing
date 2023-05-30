<?php
include('koneksi.php');
require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
 
$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
	for($i = 1;$i < count($sheetData);$i++)
	{
        $id_karyawan		= $sheetData[$i]['1'];
        $npwp 				= $sheetData[$i]['2'];
        $nama				= $sheetData[$i]['3'];
		$tanggungan			= $sheetData[$i]['4'];
		$jenis_kelamin	 	= $sheetData[$i]['5'];
		$status_kepegawaian = $sheetData[$i]['6'];
		$status_masuk		= $sheetData[$i]['7'];
		$status_nikah		= $sheetData[$i]['8'];
		$kode_negara		= $sheetData[$i]['9'];
		
        mysqli_query($koneksi,"INSERT INTO `karyawan1`(`id_karyawan`, `npwp`, `nama`, `tanggungan`, `jenis_kelamin`, `status_kepegawaian`, `status_masuk`, `status_nikah`, `kode_negara`) 
							   VALUES ('$id_karyawan','$npwp','$nama','$tanggungan','$jenis_kelamin','$status_kepegawaian','$status_masuk','$status_nikah','$kode_negara')");
    }
    header("Location: daftar_karyawan.php"); 
}
?>