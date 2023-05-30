<?php

// Menghubungkan dengan library phpspreadsheet
require 'vendor/autoload.php';

// menghubungkan dengan koneksi file database
include 'connection.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
// akhir library phpspreadsheet

// membuat object class baru
$spreadsheet = new Spreadsheet();
$spreadsheet->getActiveSheet();

// Membuat properti dokumen
$spreadsheet->getProperties()
    ->setCreator("Roqib Abdillah")
    ->setLastModifiedBy("Roqib Abdillah")
    ->setTitle("Office 2007 XLSX Data Pajak")
    ->setSubject("Office 2007 XLSX Data Pajak")
    ->setDescription("Data Pajak for Office 2007 XLSX Roqib Abdillah.")
    ->setKeywords("office 2007 openxml php Roqib Abdillah")
    ->setCategory("Test result file Roqib Abdillah");

// Set judul
$spreadsheet->getActiveSheet()->mergeCells('B2:T2');
$spreadsheet->setActiveSheetIndex(0)->setCellValue('B2', 'Referensi Pegawai A1');
$spreadsheet->getActiveSheet()->getStyle('B2:T4')
    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

// Font style
$spreadsheet->getDefaultStyle()->getFont()->setName('Arial');

//Font Color
$spreadsheet->getActiveSheet()->getStyle('B4:T4')
    ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('B2:T4')->getFont()->setBold(true);

// Background color
$spreadsheet->getActiveSheet()->getStyle('B4:T4')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('FFFF0000');

// sheet pertama
$spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('B4', 'Tanggal')
    ->setCellValue('C4', 'NPWP A1')
    ->setCellValue('D4', 'NIK')
    ->setCellValue('E4', 'Nama A1')
    ->setCellValue('F4', 'Alamat')
    ->setCellValue('G4', 'Jenis Kelamin')
    ->setCellValue('H4', 'Status')
    ->setCellValue('I4', 'Nama Jabatan')
    ->setCellValue('J4', 'Jumlah Tanggungan')
    ->setCellValue('K4', 'Kode Negara')
    ->setCellValue('L4', 'Kode Objek Pajak')
    ->setCellValue('M4', 'Hasil 1 8')
    ->setCellValue('N4', 'Hasil 9 10')
    ->setCellValue('O4', 'Neto')
    ->setCellValue('P4', 'Neto Setahun')
    ->setCellValue('Q4', 'Penghasilan Tidak Kena Pajak')
    ->setCellValue('R4', 'Penghasilan Kena Pajak')
    ->setCellValue('S4', 'Penghasilan Kena Pajak Setahun')
    ->setCellValue('T4', 'PPh21 Dipotong Sebelum');


// membaca data dari mysql
$printer = mysqli_query($con, "SELECT * FROM a1_laporan");
$row = 5;
while ($record = mysqli_fetch_array($printer)) {
    $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('B' . $row, $record['tgl'])
        ->setCellValue('C' . $row, $record['npwp_a1'])
        ->setCellValue('D' . $row, $record['nik'])
        ->setCellValue('E' . $row, $record['nama_a1'])
        ->setCellValue('F' . $row, $record['alamat'])
        ->setCellValue('G' . $row, $record['jns_kelamin'])
        ->setCellValue('H' . $row, $record['status1'])
        ->setCellValue('I' . $row, $record['nm_jbtn'])
        // ->setCellValue('J' . $row, $record['jmlh_tanggungan'])
        ->setCellValue('K' . $row, $record['jmlh_tanggungan'])
        ->setCellValue('L' . $row, $record['kode_negara'])
        ->setCellValue('M' . $row, $record['kode_objk_pjk'])
        ->setCellValue('N' . $row, $record['hasil_1_8'])
        ->setCellValue('O' . $row, $record['hasil_9_10'])
        ->setCellValue('P' . $row, $record['neto'])
        ->setCellValue('Q' . $row, $record['neto_setahun'])
        ->setCellValue('R' . $row, $record['penghasilan_tdk_pjk'])
        ->setCellValue('S' . $row, $record['penghasilan_kena_pjk_setahun'])
        ->setCellValue('T' . $row, $record['pph21_dipotong_sebelum']);
    $row++;
}

// Membuat border tabel
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$row = $row - 1;
$spreadsheet->getActiveSheet()->getStyle('B4:T' . $row)->applyFromArray($styleArray);
$spreadsheet->getActiveSheet()->getStyle('B2:T2')->applyFromArray($styleArray);


// Mengatur ukuran colomn cell secara otomatis
$spreadsheet->getActiveSheet(0)->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('D')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('E')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('F')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('G')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('H')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('I')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('J')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('K')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('L')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('M')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('N')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('O')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('P')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('Q')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('R')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('S')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('T')->setAutoSize(true);
// name worksheet
$spreadsheet->getActiveSheet()->setTitle('Data Pajak ' . date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// redirect output to client browser
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Data Referensi Pegawai A1.csv"');
header('Cache-Control: max-age=0');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
