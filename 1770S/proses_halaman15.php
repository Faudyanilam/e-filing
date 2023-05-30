
<?php
session_start();
 // End script simpan ke session
if(isset($_POST['submit1'])){
  if (isset($_SESSION['tmphasil_pengurangan_neto_zakat'])) {
    $tmphasil_pengurangan_neto_zakat = $_SESSION['tmphasil_pengurangan_neto_zakat'];
  }
  if (isset($_SESSION['tmpptkp_jml_tanggungan'])) {
    $tmpptkp_jml_tanggungan = $_SESSION['tmpptkp_jml_tanggungan'];
  }
  if (isset($_SESSION['tmppkp'])) {
    $tmppkp = $_SESSION['tmppkp'];
  }
  if (isset($_SESSION['tmppph_terutang_tarif'])) {
    $tmppph_terutang_tarif = $_SESSION['tmppph_terutang_tarif'];
  }
  if (isset($_SESSION['tmpjumlah_pph_terutang'])) {
    $tmpjumlah_pph_terutang = $_SESSION['tmpjumlah_pph_terutang'];
  }
  if (isset($_SESSION['tmppph_dipotong_pihak_lain'])) {
    $tmppph_dipotong_pihak_lain = $_SESSION['tmppph_dipotong_pihak_lain'];
  }
  if (isset($_SESSION['tmppph_dibayar_sendiri'])) {
    $tmppph_dibayar_sendiri = $_SESSION['tmppph_dibayar_sendiri'];
  }
  if (isset($_SESSION['tmpjumlah_kredit'])) {
    $tmpjumlah_kredit = $_SESSION['tmpjumlah_kredit'];
  }
  if (isset($_SESSION['tmpstatus_hasil_s'])) {
    $tmpstatus_hasil_s = $_SESSION['tmpstatus_hasil_s'];
  }
  if (isset($_SESSION['tmpjumlah_hasil_akhir'])) {
    $tmpjumlah_hasil_akhir = $_SESSION['tmpjumlah_hasil_akhir'];
  }
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
  $tmphasil_pengurangan_neto_zakat[] = $_POST['hasil_pengurangan_neto_zakat'];
  $tmpptkp_jml_tanggungan[] = $_POST['ptkp_jml_tanggungan'];
  $tmppkp[] = $_POST['pkp'];
  $tmppph_terutang_tarif[] = $_POST['pph_terutang_tarif'];
  $tmpjumlah_pph_terutang[] = $_POST['jumlah_pph_terutang'];
  $tmppph_dipotong_pihak_lain[] = $_POST['pph_dipotong_pihak_lain'];
  $tmppph_dibayar_sendiri[] = $_POST['pph_dibayar_sendiri'];
  $tmpjumlah_kredit[] = $_POST['jumlah_kredit'];
  $tmpstatus_hasil_s[] = $_POST['status_hasil_s'];
  $tmpjumlah_hasil_akhir[] = $_POST['jumlah_hasil_akhir'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
  $_SESSION['tmphasil_pengurangan_neto_zakat'] = $tmphasil_pengurangan_neto_zakat;
  $_SESSION['tmpptkp_jml_tanggungan'] = $tmpptkp_jml_tanggungan;
  $_SESSION['tmppkp'] = $tmppkp;
  $_SESSION['tmppph_terutang_tarif'] = $tmppph_terutang_tarif;
  $_SESSION['tmpjumlah_pph_terutang'] = $tmpjumlah_pph_terutang;
  $_SESSION['tmppph_dipotong_pihak_lain'] = $tmppph_dipotong_pihak_lain;
  $_SESSION['tmppph_dibayar_sendiri'] = $tmppph_dibayar_sendiri;
  $_SESSION['tmpjumlah_kredit'] = $tmpjumlah_kredit;
  $_SESSION['tmpstatus_hasil_s'] = $tmpstatus_hasil_s;
  $_SESSION['tmpjumlah_hasil_akhir'] = $tmpjumlah_hasil_akhir;
  header('location:halaman_16_lebih.php');
}else if (isset($_POST['submit2'])){
  if (isset($_SESSION['tmphasil_pengurangan_neto_zakat'])) {
    $tmphasil_pengurangan_neto_zakat = $_SESSION['tmphasil_pengurangan_neto_zakat'];
  }
  if (isset($_SESSION['tmpptkp_jml_tanggungan'])) {
    $tmpptkp_jml_tanggungan = $_SESSION['tmpptkp_jml_tanggungan'];
  }
  if (isset($_SESSION['tmppkp'])) {
    $tmppkp = $_SESSION['tmppkp'];
  }
  if (isset($_SESSION['tmppph_terutang_tarif'])) {
    $tmppph_terutang_tarif = $_SESSION['tmppph_terutang_tarif'];
  }
  if (isset($_SESSION['tmpjumlah_pph_terutang'])) {
    $tmpjumlah_pph_terutang = $_SESSION['tmpjumlah_pph_terutang'];
  }
  if (isset($_SESSION['tmppph_dipotong_pihak_lain'])) {
    $tmppph_dipotong_pihak_lain = $_SESSION['tmppph_dipotong_pihak_lain'];
  }
  if (isset($_SESSION['tmppph_dibayar_sendiri'])) {
    $tmppph_dibayar_sendiri = $_SESSION['tmppph_dibayar_sendiri'];
  }
  if (isset($_SESSION['tmpjumlah_kredit'])) {
    $tmpjumlah_kredit = $_SESSION['tmpjumlah_kredit'];
  }
  if (isset($_SESSION['tmpstatus_hasil_s'])) {
    $tmpstatus_hasil_s = $_SESSION['tmpstatus_hasil_s'];
  }
  if (isset($_SESSION['tmpjumlah_hasil_akhir'])) {
    $tmpjumlah_hasil_akhir = $_SESSION['tmpjumlah_hasil_akhir'];
  }
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
  $tmphasil_pengurangan_neto_zakat[] = $_POST['hasil_pengurangan_neto_zakat'];
  $tmpptkp_jml_tanggungan[] = $_POST['ptkp_jml_tanggungan'];
  $tmppkp[] = $_POST['pkp'];
  $tmppph_terutang_tarif[] = $_POST['pph_terutang_tarif'];
  $tmpjumlah_pph_terutang[] = $_POST['jumlah_pph_terutang'];
  $tmppph_dipotong_pihak_lain[] = $_POST['pph_dipotong_pihak_lain'];
  $tmppph_dibayar_sendiri[] = $_POST['pph_dibayar_sendiri'];
  $tmpjumlah_kredit[] = $_POST['jumlah_kredit'];
  $tmpstatus_hasil_s[] = $_POST['status_hasil_s'];
  $tmpjumlah_hasil_akhir[] = $_POST['jumlah_hasil_akhir'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
  $_SESSION['tmphasil_pengurangan_neto_zakat'] = $tmphasil_pengurangan_neto_zakat;
  $_SESSION['tmpptkp_jml_tanggungan'] = $tmpptkp_jml_tanggungan;
  $_SESSION['tmppkp'] = $tmppkp;
  $_SESSION['tmppph_terutang_tarif'] = $tmppph_terutang_tarif;
  $_SESSION['tmpjumlah_pph_terutang'] = $tmpjumlah_pph_terutang;
  $_SESSION['tmppph_dipotong_pihak_lain'] = $tmppph_dipotong_pihak_lain;
  $_SESSION['tmppph_dibayar_sendiri'] = $tmppph_dibayar_sendiri;
  $_SESSION['tmpjumlah_kredit'] = $tmpjumlah_kredit;
  $_SESSION['tmpstatus_hasil_s'] = $tmpstatus_hasil_s;
  $_SESSION['tmpjumlah_hasil_akhir'] = $tmpjumlah_hasil_akhir;
  header('location:halaman_16_kurang.php');

}else if(isset($_POST['submit3'])){
 if (isset($_SESSION['tmphasil_pengurangan_neto_zakat'])) {
  $tmphasil_pengurangan_neto_zakat = $_SESSION['tmphasil_pengurangan_neto_zakat'];
}
if (isset($_SESSION['tmpptkp_jml_tanggungan'])) {
  $tmpptkp_jml_tanggungan = $_SESSION['tmpptkp_jml_tanggungan'];
}
if (isset($_SESSION['tmppkp'])) {
  $tmppkp = $_SESSION['tmppkp'];
}
if (isset($_SESSION['tmppph_terutang_tarif'])) {
  $tmppph_terutang_tarif = $_SESSION['tmppph_terutang_tarif'];
}
if (isset($_SESSION['tmpjumlah_pph_terutang'])) {
  $tmpjumlah_pph_terutang = $_SESSION['tmpjumlah_pph_terutang'];
}
if (isset($_SESSION['tmppph_dipotong_pihak_lain'])) {
  $tmppph_dipotong_pihak_lain = $_SESSION['tmppph_dipotong_pihak_lain'];
}
if (isset($_SESSION['tmppph_dibayar_sendiri'])) {
  $tmppph_dibayar_sendiri = $_SESSION['tmppph_dibayar_sendiri'];
}
if (isset($_SESSION['tmpjumlah_kredit'])) {
  $tmpjumlah_kredit = $_SESSION['tmpjumlah_kredit'];
}
if (isset($_SESSION['tmpstatus_hasil_s'])) {
  $tmpstatus_hasil_s = $_SESSION['tmpstatus_hasil_s'];
}
if (isset($_SESSION['tmpjumlah_hasil_akhir'])) {
  $tmpjumlah_hasil_akhir = $_SESSION['tmpjumlah_hasil_akhir'];
}
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmphasil_pengurangan_neto_zakat[] = $_POST['hasil_pengurangan_neto_zakat'];
$tmpptkp_jml_tanggungan[] = $_POST['ptkp_jml_tanggungan'];
$tmppkp[] = $_POST['pkp'];
$tmppph_terutang_tarif[] = $_POST['pph_terutang_tarif'];
$tmpjumlah_pph_terutang[] = $_POST['jumlah_pph_terutang'];
$tmppph_dipotong_pihak_lain[] = $_POST['pph_dipotong_pihak_lain'];
$tmppph_dibayar_sendiri[] = $_POST['pph_dibayar_sendiri'];
$tmpjumlah_kredit[] = $_POST['jumlah_kredit'];
$tmpstatus_hasil_s[] = $_POST['status_hasil_s'];
$tmpjumlah_hasil_akhir[] = $_POST['jumlah_hasil_akhir'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
$_SESSION['tmphasil_pengurangan_neto_zakat'] = $tmphasil_pengurangan_neto_zakat;
$_SESSION['tmpptkp_jml_tanggungan'] = $tmpptkp_jml_tanggungan;
$_SESSION['tmppkp'] = $tmppkp;
$_SESSION['tmppph_terutang_tarif'] = $tmppph_terutang_tarif;
$_SESSION['tmpjumlah_pph_terutang'] = $tmpjumlah_pph_terutang;
$_SESSION['tmppph_dipotong_pihak_lain'] = $tmppph_dipotong_pihak_lain;
$_SESSION['tmppph_dibayar_sendiri'] = $tmppph_dibayar_sendiri;
$_SESSION['tmpjumlah_kredit'] = $tmpjumlah_kredit;
$_SESSION['tmpstatus_hasil_s'] = $tmpstatus_hasil_s;
$_SESSION['tmpjumlah_hasil_akhir'] = $tmpjumlah_hasil_akhir;
$_SESSION['tmpstatus_hasil'] = $status_hasil = "Nihil";
header('location:halaman16.php');
}
