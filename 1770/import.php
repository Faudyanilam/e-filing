<?php
/*
-- Source Code from My Notes Code (www.mynotescode.com)
-- 
-- Follow Us on Social Media
-- Facebook : http://facebook.com/mynotescode/
-- Twitter  : http://twitter.com/code_notes
-- Google+  : http://plus.google.com/118319575543333993544
--
-- Terimakasih telah mengunjungi blog kami.
-- Jangan lupa untuk Like dan Share catatan-catatan yang ada di blog kami.
*/

// Load file koneksi.php
include "../database_conection.php";

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = 'data2.xlsx';
	
	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';
	
	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true, true, true);
	
	// Buat query Insert
	$sql = $pdo->prepare("INSERT INTO tb_spt_1771 VALUES(:jns_formulir, :tahun_pajak, :pembetulan_ke, :status_spt, :jumlah, :catatan)");
	
	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
		// $id_spt_1771 = "NULL"; // Ambil data alamat
		// $id_upload_spt = "NULL"; // Ambil data alamat
		$jns_spt = $row['A']; // Ambil data NIS
		$thn_pjk = $row['B']; // Ambil data nama
		$pembetulan_ke = $row['C']; // Ambil data jenis kelamin
		$status_spt = $row['D']; // Ambil data jenis kelamin
		$jml = $row['E']; // Ambil data telepon
		$catatan = $row['F']; // Ambil data telepon

		// $tempat_lahir = "-";
		// $tanggal_lahir = "1970-01-01";
		// $jenis_kelamin = "-";
		// $alamat = "-";
		// $agama = "-";
		// $status_kawin = "-";
		// $pekerjaan = "-";
		// $status_wni = "-";
		// $email = "-";
		// $tgl_registrasi = "2021-01-01";
		// $email = "-";

		
		// Cek jika semua data tidak diisi
		if(empty($jns_spt) && empty($thn_pjk) && empty($pembetulan_ke) && empty($status_spt) && empty($jml) && empty($catatan))
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
		
		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 2){
			// Proses simpan ke Database
			// $sql->bindParam(':id_spt_1771', $id_spt_1771);
			// $sql->bindParam(':id_upload_spt', $id_upload_spt);
			$sql->bindParam(':jns_formulir', $jns_spt);
			$sql->bindParam(':tahun_pajak', $thn_pjk);
			$sql->bindParam(':pembetulan_ke', $pembetulan_ke);
			$sql->bindParam(':status_spt', $status_spt);
			$sql->bindParam(':jumlah', $jml);
			$sql->bindParam(':catatan', $catatan);
			// $sql->bindParam(':status_kawin', $status_kawin);
			// $sql->bindParam(':pekerjaan', $pekerjaan);
			// $sql->bindParam(':status_wni', $status_wni);
			// $sql->bindParam(':no_hp', $no_hp);
			// $sql->bindParam(':email', $email);
			// $sql->bindParam(':tgl_registrasi', $tgl_registrasi);
			// $sql->bindParam(':jenis_anggota', $jenis_anggota);
			// $sql->bindParam(':no_anggota', $no_anggota);
			$sql->execute(); // Eksekusi query insert
			print_r($sql->errorInfo());
		}
		
		$numrow++; // Tambah 1 setiap kali looping
	}
}

header('location: arsip_spt.php'); // Redirect ke halaman awal
?>
