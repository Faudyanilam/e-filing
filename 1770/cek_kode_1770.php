<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// mengaktifkan session php
session_start();


// menghubungkan dengan koneksi
// include 'koneksi.php';

// menangkap data yang dikirim dari form
$kode_verif_1770 = $_POST['kode_verif_1770'];

$_SESSION['kode_verif'] = $token2;
$_SESSION['kode_verif_1770'] = $kode_verif_1770;


// $password = $_POST['password'];

// if(isset($_POST['submit'])){
//     if($_SESSION['captcha']==$_POST['captcha']){
//         echo "<script>alert('Berhasil! Kode Captcha Valid')</script>";
//     }else{
//         echo "<script>alert('Berhasil! Kode Captcha Tidak Valid')</script>";
//     }
// }
// $nama_ktp = $_POST['nama_ktp'];
// menyeleksi data admin dengan username dan password yang sesuai
// $data = mysqli_query($koneksi,"select * from tb_daftar_npwp where npwp='$npwp' and password='$password'");

// menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($data);
// $namaku = mysqli_fetch_assoc($data);

if($kode_verif_1770==$token2){
    // $_SESSION['npwp'] = $npwp;
    // $_SESSION['nama_ktp'] = $namaku['nama_ktp'];
    // $_SESSION['status'] = "login";
     header('location:lapor_1770.php?hasil=berhasil');
    // header('location:index.php?hasil=berhasil');
}else{
    header('location:login.php?hasil=gagal');
}
?>
