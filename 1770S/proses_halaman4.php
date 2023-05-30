
<?php
session_start();
 // Ambil data dari session
 if (isset($_SESSION['tmppenghasilan_dn'])) {
  $tmppenghasilan_dn = $_SESSION['tmppenghasilan_dn'];
 }
 if (isset($_SESSION['tmpbunga'])) {
  $tmpbunga = $_SESSION['tmpbunga'];
 }
 if (isset($_SESSION['tmproyalti'])) {
  $tmproyalti = $_SESSION['tmproyalti'];
 }
 if (isset($_SESSION['tmpsewa'])) {
  $tmpsewa = $_SESSION['tmpsewa'];
 }
 if (isset($_SESSION['tmphadiah'])) {
  $tmphadiah = $_SESSION['tmphadiah'];
 }
 if (isset($_SESSION['tmpkeuntungan'])) {
  $tmpkeuntungan = $_SESSION['tmpkeuntungan'];
 }
 if (isset($_SESSION['tmpp_lain'])) {
  $tmpp_lain = $_SESSION['tmpp_lain'];
 }
 if (isset($_SESSION['tmpjml_a'])) {
  $tmpjml_a = $_SESSION['tmpjml_a'];
 }
 // End ambil data dari session
 
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
 $tmppenghasilan_dn[] = $_POST['penghasilan_dn'];
 $tmpbunga[] = $_POST['bunga'];
 $tmproyalti[] = $_POST['royalti'];
 $tmpsewa[] = $_POST['sewa'];
 $tmphadiah[] = $_POST['hadiah'];
 $tmpkeuntungan[] = $_POST['keuntungan'];
 $tmpp_lain[] = $_POST['p_lain'];
 $tmpjml_a[] = $_POST['jml_a'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
 $_SESSION['tmppenghasilan_dn'] = $tmppenghasilan_dn;
 $_SESSION['tmpbunga'] = $tmpbunga;
 $_SESSION['tmproyalti'] = $tmproyalti;
 $_SESSION['tmpsewa'] = $tmpsewa;
 $_SESSION['tmphadiah'] = $tmphadiah;
 $_SESSION['tmpkeuntungan'] = $tmpkeuntungan;
 $_SESSION['tmpp_lain'] = $tmpp_lain;
 $_SESSION['tmpjml_a'] = $tmpjml_a;
 // End script simpan ke session
header('location:halaman5.php');
