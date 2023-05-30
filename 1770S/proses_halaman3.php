
<?php
session_start();
 // Ambil data dari session
 if (isset($_SESSION['tmpneto_dn'])) {
  $tmpneto_dn = $_SESSION['tmpneto_dn'];
 }
 // End ambil data dari session
//mengganti titik dan rp agar tidak terbaca
 $A = $_POST['neto_dn'];
 $A = substr($A, 4);
 $A = (int) str_replace(".", "", $A );

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
 $tmpneto_dn[] = $A;
 // End script tambah ke array
 // Simpan data array yang baru ke session
 $_SESSION['tmpneto_dn'] = $tmpneto_dn;
 // End script simpan ke session
header('location:halaman4.php');
