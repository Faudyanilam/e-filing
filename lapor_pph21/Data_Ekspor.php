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
$spreadsheet->getActiveSheet()->mergeCells('B2:J2');
$spreadsheet->setActiveSheetIndex(0)->setCellValue('B2', 'Referensi Penerima Penghasilan');
$spreadsheet->getActiveSheet()->getStyle('B2:J4')
    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

// Font style
$spreadsheet->getDefaultStyle()->getFont()->setName('Arial');

//Font Color
$spreadsheet->getActiveSheet()->getStyle('B4:J4')
    ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('B2:J4')->getFont()->setBold(true);

// Background color
$spreadsheet->getActiveSheet()->getStyle('B4:J4')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('FFFF0000');

// sheet pertama
$spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('B4', 'Nomor Bukti Potong')
    ->setCellValue('C4', 'NPWP Pemotong')
    ->setCellValue('D4', 'Jumlah Bruto')
    ->setCellValue('E4', 'Jumlah PPH Potong')
    ->setCellValue('F4', 'Pegawai')
    ->setCellValue('G4', 'Pensiun')
    ->setCellValue('H4', 'Penghasilan Bruto Pensiun')
    ->setCellValue('I4', 'Total Bruto')
    ->setCellValue('J4', 'Total PPh Dipotong');

// membaca data dari mysql
$printer = mysqli_query($con, "SELECT * FROM masa_pajak");
$row = 5;
while ($record = mysqli_fetch_array($printer)) {
    $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('B' . $row, $record['nomor_bukti_potong'])
        ->setCellValue('C' . $row, $record['npwp_pemotong'])
        ->setCellValue('D' . $row, $record['jmlh_bruto'])
        ->setCellValue('E' . $row, $record['jmlh_pph_potong'])
        ->setCellValue('F' . $row, $record['pegawai'])
        ->setCellValue('G' . $row, $record['pensiun'])
        ->setCellValue('H' . $row, $record['penghasilan_bruto_pensiun'])
        ->setCellValue('I' . $row, $record['total_bruto'])
        ->setCellValue('J' . $row, $record['total_pph_dipotong']);
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
$spreadsheet->getActiveSheet()->getStyle('B4:J' . $row)->applyFromArray($styleArray);
$spreadsheet->getActiveSheet()->getStyle('B2:J2')->applyFromArray($styleArray);


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

// name worksheet
$spreadsheet->getActiveSheet()->setTitle('Data Pajak ' . date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// redirect output to client browser
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Data Referensi Penerima Penghasilan.csv"');
header('Cache-Control: max-age=0');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
