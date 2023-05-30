<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$npwp = $_POST['npwp'];
$efin = $_POST['efin'];

// menyeleksi data admin pada tabel registrasi akun dengan npwp dan efin yang sesuai
$data = mysqli_query($koneksi,"select * from tb_registrasi_akun where npwp='$npwp' and efin = '$efin'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek == 1){
    $_SESSION['npwp'] = $npwp;
    $_SESSION['efin'] = $efin;
    $_SESSION['status'] = "daftar_sesuai";
     header('location:data_diri.php');
}else{
    header('location:registrasi.php?hasil=gagal');
}
?>
