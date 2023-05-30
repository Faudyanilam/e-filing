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
include "koneksi.php";

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = 'data.xlsx';
	
	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';
	
	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
	
	// Buat query Insert
	$sql = $pdo->prepare("INSERT INTO tb_user VALUES(:id_user, :nama, :tempat_lahir, :tanggal_lahir, :jenis_kelamin, :alamat, :agama, :status_kawin, :pekerjaan, :status_wni, :no_hp, :email, :tgl_registrasi, :jenis_anggota, :no_anggota)");
	
	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
		$id_user = "NULL"; // Ambil data alamat
		$nama = $row['A']; // Ambil data NIS
		$no_anggota = $row['B']; // Ambil data nama
		$no_hp = $row['C']; // Ambil data jenis kelamin
		$jenis_anggota = $row['D']; // Ambil data telepon

		$tempat_lahir = "-";
		$tanggal_lahir = "1970-01-01";
		$jenis_kelamin = "-";
		$alamat = "-";
		$agama = "-";
		$status_kawin = "-";
		$pekerjaan = "-";
		$status_wni = "-";
		$email = "-";
		$tgl_registrasi = "2021-01-01";
		$email = "-";

		
		// Cek jika semua data tidak diisi
		if(empty($nama) && empty($no_anggota) && empty($no_hp) && empty($jenis_anggota))
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
		
		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Proses simpan ke Database
			$sql->bindParam(':id_user', $id_user);
			$sql->bindParam(':nama', $nama);
			$sql->bindParam(':tempat_lahir', $tempat_lahir);
			$sql->bindParam(':tanggal_lahir', $tanggal_lahir);
			$sql->bindParam(':jenis_kelamin', $jenis_kelamin);
			$sql->bindParam(':alamat', $alamat);
			$sql->bindParam(':agama', $agama);
			$sql->bindParam(':status_kawin', $status_kawin);
			$sql->bindParam(':pekerjaan', $pekerjaan);
			$sql->bindParam(':status_wni', $status_wni);
			$sql->bindParam(':no_hp', $no_hp);
			$sql->bindParam(':email', $email);
			$sql->bindParam(':tgl_registrasi', $tgl_registrasi);
			$sql->bindParam(':jenis_anggota', $jenis_anggota);
			$sql->bindParam(':no_anggota', $no_anggota);
			$sql->execute(); // Eksekusi query insert
			print_r($sql->errorInfo());
		}
		
		$numrow++; // Tambah 1 setiap kali looping
	}
}

header('location: index.php'); // Redirect ke halaman awal
?>
