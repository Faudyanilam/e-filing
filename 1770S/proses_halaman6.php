
<?php
session_start();
 // Ambil data dari session
 if (isset($_SESSION['tmppenghasilan_tob'])) {
  $tmppenghasilan_tob = $_SESSION['tmppenghasilan_tob'];
 }
  if (isset($_SESSION['tmpsumbangan'])) {
  $tmpsumbangan = $_SESSION['tmpsumbangan'];
 }
  if (isset($_SESSION['tmpwarisan'])) {
  $tmpwarisan = $_SESSION['tmpwarisan'];
 }
  if (isset($_SESSION['tmplaba_perseroan'])) {
  $tmplaba_perseroan = $_SESSION['tmplaba_perseroan'];
 }
  if (isset($_SESSION['tmpasuransi'])) {
  $tmpasuransi = $_SESSION['tmpasuransi'];
 }
  if (isset($_SESSION['tmpbeasiswa'])) {
  $tmpbeasiswa = $_SESSION['tmpbeasiswa'];
 }
  if (isset($_SESSION['tmppenghasilan_lain_tob'])) {
  $tmppenghasilan_lain_tob = $_SESSION['tmppenghasilan_lain_tob'];
 }
  if (isset($_SESSION['tmpjbb_hal6'])) {
  $tmpjbb_hal6 = $_SESSION['tmpjbb_hal6'];
 }
 // End ambil data dari session
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
 $tmppenghasilan_tob[] = $_POST['penghasilan_tob'];
 $tmpsumbangan[] = $_POST['sumbangan'];
 $tmpwarisan[] = $_POST['warisan'];
 $tmplaba_perseroan[] = $_POST['laba_perseroan'];
 $tmpasuransi[] = $_POST['asuransi'];
 $tmpbeasiswa[] = $_POST['beasiswa'];
 $tmppenghasilan_lain_tob[] = $_POST['penghasilan_lain_tob'];
 $tmpjbb_hal6[] = $_POST['jbb_hal6'];
 // End script tambah ke array
 // Simpan data array yang baru ke session
 $_SESSION['tmppenghasilan_tob'] = $tmppenghasilan_tob;
 $_SESSION['tmpsumbangan'] = $tmpsumbangan;
 $_SESSION['tmpwarisan'] = $tmpwarisan;
 $_SESSION['tmplaba_perseroan'] = $tmplaba_perseroan;
 $_SESSION['tmpasuransi'] = $tmpasuransi;
 $_SESSION['tmpbeasiswa'] = $tmpbeasiswa;
 $_SESSION['tmppenghasilan_lain_tob'] = $tmppenghasilan_lain_tob;
 $_SESSION['tmpjbb_hal6'] = $tmpjbb_hal6;
 // End script simpan ke session
header('location:halaman7-xxx.php');
