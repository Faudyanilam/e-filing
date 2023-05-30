
<?php
session_start();
 // Ambil data dari session
 if (isset($_SESSION['tmppajak_dipotong_final'])) {
  $tmppajak_dipotong_final = $_SESSION['tmppajak_dipotong_final'];
 }
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
 $tmppajak_dipotong_final[] = $_POST['pajak_dipotong_final'];

 // End script tambah ke array

 // Simpan data array yang baru ke session
 $_SESSION['tmppajak_dipotong_final'] = $tmppajak_dipotong_final;

 // End script simpan ke session
header('location:halaman8-xxx.php'); 
