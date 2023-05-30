<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// mengaktifkan session php
session_start();


// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$namaku = mysqli_fetch_assoc($data);

if($cek == 1){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['nama_admin'] = strtoupper($namaku['nama']);
    $_SESSION['status'] = "login_admin";
     header('location:tmp_admin/index.php?hasil=berhasil');
}else{
    header('location:login-admin.php?hasil=gagal');
}
?>
