<?php 
session_start();

 $_SESSION['tmpkode_utang'] = $tmpkode_utang;
 $_SESSION['tmpnama_pemberi_pinjaman'] = $tmpnama_pemberi_pinjaman;
 $_SESSION['tmpalamat_pemberi_pinjaman'] = $tmpalamat_pemberi_pinjaman;
 $_SESSION['tmptahun_peminjaman'] = $tmptahun_peminjaman;
 $_SESSION['tmpjumlah_utang'] = $tmpjumlah_utang;
 
unset($_SESSION['$tmpkode_utang[$i]']);
unset($_SESSION['$tmpnama_pemberi_pinjaman[$i]']);
unset($_SESSION['$tmpalamat_pemberi_pinjaman[$i]']);
unset($_SESSION['$tmptahun_peminjaman[$i]']);
unset($_SESSION['$tmpjumlah_utang[$i]']);

header("location:halaman9-xxx.php");

?>