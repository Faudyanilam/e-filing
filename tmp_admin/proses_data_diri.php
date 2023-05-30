<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// koneksi database
include '../koneksi.php';

if(isset($_POST['submit'])){
	// menangkap data yang di kirim dari form
    $npwp = $_POST['npwp'];
    $email = $_POST['email'];
	$jenis_wp = $_POST['jenis_wp'];
	$nama_ktp = $_POST['nama'];
	$password = $_POST['password'];
	$no_hp = $_POST['no_hp'];
	$pertanyaan = $_POST['pertanyaan'];
    $jawaban = $_POST['jawaban'];
	$alamat = $_POST['alamat'];



	// update data ke database
	$data = mysqli_query($koneksi,"update tb_daftarnpwp set email='$email', jenis_wp='$jenis_wp', nama_ktp='$nama_ktp', password='$password', no_hp='$no_hp', pertanyaan='$pertanyaan', jawaban='$jawaban', alamat='$alamat'  where id_daftar_npwp='$npwp'");
    
	// mengalihkan halaman kembali ke index.php
	if ($data == 1){
		if($jenis_wp == 'Orang Pribadi'){
			header("location:../login.php?hasil=berhasil_registrasi");
		}
		else if($jenis_wp == 'Badan'){
			header("location:../login_badan.php?hasil1=berhasil_registrasi");
		}
       
	}else{
		if($jenis_wp == 'Orang Pribadi'){
			header("location:../login.php?hasil=gagal_registrasi");
		}
		else if($jenis_wp == 'Badan'){
			header("location:../login.php?hasil1=gagal_registrasi");
		}
	}
}
?>