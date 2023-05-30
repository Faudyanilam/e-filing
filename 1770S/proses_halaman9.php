
<?php
session_start();
 // Ambil data dari session
if (isset($_SESSION['tmpkode_utang'])) {
	$tmpkode_utang = $_SESSION['tmpkode_utang'];
}
if (isset($_SESSION['tmpnama_pemberi_pinjaman'])) {
	$tmpnama_pemberi_pinjaman = $_SESSION['tmpnama_pemberi_pinjaman'];
}
if (isset($_SESSION['tmpalamat_pemberi_pinjaman'])) {
	$tmpalamat_pemberi_pinjaman = $_SESSION['tmpalamat_pemberi_pinjaman'];
}
if (isset($_SESSION['tmptahun_peminjaman'])) {
	$tmptahun_peminjaman = $_SESSION['tmptahun_peminjaman'];
}
if (isset($_SESSION['tmpjumlah_utang'])) {
	$tmpjumlah_utang = $_SESSION['tmpjumlah_utang'];
}
 // End ambil data dari session
 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
$tmpkode_utang[] = $_POST['kode_utang'];
$tmpnama_pemberi_pinjaman[] = $_POST['nama_pemberi_pinjaman'];
$tmpalamat_pemberi_pinjaman[] = $_POST['alamat_pemberi_pinjaman'];
$tmptahun_peminjaman[] = $_POST['tahun_peminjaman'];
$tmpjumlah_utang[] = $_POST['jumlah_utang'];
 // End script tambah ke array
 // Simpan data array yang baru ke session
$_SESSION['tmpkode_utang'] = $tmpkode_utang;
$_SESSION['tmpnama_pemberi_pinjaman'] = $tmpnama_pemberi_pinjaman;
$_SESSION['tmpalamat_pemberi_pinjaman'] = $tmpalamat_pemberi_pinjaman;
$_SESSION['tmptahun_peminjaman'] = $tmptahun_peminjaman;
$_SESSION['tmpjumlah_utang'] = $tmpjumlah_utang;
 // End script simpan ke session
header('location:halaman9-xxx.php'); 
