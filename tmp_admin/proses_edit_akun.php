<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// koneksi database
include '../koneksi.php';

if(isset($_POST['submit'])){
	// menangkap data yang di kirim dari form
	$id = $_POST['id'];
	$npwp = $_POST['npwp'];
	$efin = $_POST['efin'];

	// update data ke database
	$data = mysqli_query($koneksi,"update tb_registrasi_akun set  npwp='$npwp', efin='$efin' where id_regis='$id'");

	// mengalihkan halaman kembali ke index.php
	if ($data == 1){
		header("location:data_akun_wp.php?hasil=data_diubah");
	}else{
		header("location:edit_akun.php?hasil=data_gagaldiubah");
	}
}
?>