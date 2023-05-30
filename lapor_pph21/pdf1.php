<?php
include 'fpdf/fpdf.php';
include 'koneksi.php';

$pdf=new FPDF("L","cm","A4");
$pdf->SetMargins(0.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"DATA CALON MAHASISWA",0,10,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1,0.8,'NO',1,0);
$pdf->Cell(6,0.8,'NIS',1,0);
$pdf->Cell(7,0.8,'NAMA SISWA',1,0);
$pdf->Cell(4.5,0.8,'JENIS KELAMIN',1,0);
$pdf->Cell(4.5,0.8,'TELEPON',1,0);
$pdf->Cell(4,0.8,'ALAMAT',1,1);
$pdf->SetFont('Arial','',10);
$no = 1;
$tampil = mysqli_query($koneksi, "SELECT * FROM calon_mhs");
while($hasil = mysqli_fetch_array($tampil)){
	$pdf->Cell(1,0.8,$no,1,0);
	$pdf->Cell(6,0.8,$hasil['nis'],1,0);
	$pdf->Cell(7,0.8,$hasil['nama'],1,0);
	$pdf->Cell(4.5,0.8,$hasil['jk'],1,0);
	$pdf->Cell(4.5,0.8,$hasil['telepon'],1,0);
	$pdf->Cell(4,0.8,$hasil['alamat'],1,1);
	$no++;
}
$pdf->Output("laporan_siswa.pdf","I");
?>