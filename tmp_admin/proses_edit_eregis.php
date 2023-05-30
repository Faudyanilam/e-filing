<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// koneksi database
include '../koneksi.php';

if(isset($_POST['submit'])){
	// menangkap data yang di kirim dari form
	$id = $_POST['id'];
	$npwp = $_POST['npwp'];
	$email = $_POST['email'];
	$jenis_wp = $_POST['jenis_wp'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$no_hp = $_POST['no_hp'];
	$pertanyaan = $_POST['pertanyaan'];
	$jawaban = $_POST['jawaban'];
	$efin = $_POST['efin'];

	// update data ke database
	$data = mysqli_query($koneksi,"update tb_daftarnpwp set  id_daftar_npwp='$npwp', jenis_wp='$jenis_wp', nama_ktp='$nama', email='$email', password='$password', no_hp='$no_hp', pertanyaan='$pertanyaan', jawaban='$jawaban', efin='$efin' where id_id='$id'");

	// mengalihkan halaman kembali ke index.php
	if ($data == 1){
		header("location:data_e-regis.php?hasil=data_diubah");
	}else{
		header("location:edit_e-regis.php?hasil=data_gagaldiubah");
	}
}
?>