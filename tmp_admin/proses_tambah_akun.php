<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../koneksi.php';
if(isset($_POST['submit'])){

	$npwp = $_POST['npwp'];
	$efin = $_POST['efin'];

	$data = mysqli_query($koneksi, "INSERT INTO tb_registrasi_akun VALUES('','$npwp', '$efin')");

	if ($data == 1){
		header("location:data_akun_wp.php?hasil=data_ditambah");
	}else{
		header("location:daftar_akun.php?hasil=data_gagalditambah");
	}
}
?>