
<?php
session_start();
 // Ambil data dari session
 if (isset($_SESSION['tmputang'])) {
  $tmputang = $_SESSION['tmputang'];
 }
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
 $tmputang[] = $_POST['utang'];

 // Simpan data array yang baru ke session
 $_SESSION['tmputang'] = $tmputang;
 // End script simpan ke session
header('location:halaman10-xxx.php'); 
