<?php
include('connection.php');
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
        $masa_pajak         = $sheetData[$i]['0'];
        $tahun_pajak        = $sheetData[$i]['1'];
        $pembetulan         = $sheetData[$i]['2'];
        $kap                = $sheetData[$i]['3'];
        $kjs                = $sheetData[$i]['4'];
        $tanggal            = $sheetData[$i]['5'];
        $nomor_spp          = $sheetData[$i]['6'];
        $jumlah_setoran     = $sheetData[$i]['7'];
        mysqli_query($con, "INSERT INTO `tpegawai`(`masa_pajak`, `tahun_pajak`, `pembetulan`, `kap`, `kjs`, `tanggal`, `nomor_spp`, `jumlah_setoran`) 
        VALUES ('$masa_pajak','$tahun_pajak','$pembetulan','$kap','$kjs','$tanggal','$nomor_spp','$jumlah_setoran')");
    }
    header("Location: SSP.php"); 
}
?>