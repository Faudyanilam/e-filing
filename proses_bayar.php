<?php
include "koneksi.php"; 
	
	if(isset($_POST['submit'])) {
		$npwp = $_POST['npwp'];
		$email= $_POST['email'];
		$nama_ktp = $_POST['nama_ktp'];
		$harga = $_POST['harga'];
		$user = $_POST['user'];	
		$akun= $_POST['akun'];
	
		
		$result = mysqli_query($koneksi, "INSERT INTO tb_pelanggan(npwp,email,nama_ktp,harga,user,akun) VALUES('$npwp','$email','$nama_ktp','$harga','$user','$akun')");

		header('lapor.php'); 
	}
	?>