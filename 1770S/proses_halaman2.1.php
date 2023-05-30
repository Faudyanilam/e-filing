
<?php
session_start();
 // Ambil data dari session
 if (isset($_SESSION['tmpjumlah'])) {
  $tmpjumlah = $_SESSION['tmpjumlah'];
 }
 // End ambil data dari session

//Proses untuk menghilangkan titik dan RP
 $A = $_POST['jumlah'];
 $A = substr($A, 4);
 $A = (int) str_replace(".", "", $A );

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
 $tmpjumlah[] = $A;

 // End script tambah ke array

 // Simpan data array yang baru ke session
 $_SESSION['tmpjumlah'] = $tmpjumlah;

header('location:halaman3.php'); 
