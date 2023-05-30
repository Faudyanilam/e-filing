<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// mengaktifkan session php
session_start();


// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];

// menyeleksi data admin pada tabel daftar npwp dengan email yang sesuai
$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email='$email'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek == 1){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "daftar_sesuai";
	header('location:daftar_npwp2.php?hasil=email_terdaftar');
}else{
	header('location:daftar_npwp.php?hasil=gagal');
}
?>
