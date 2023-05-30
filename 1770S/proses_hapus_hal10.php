<?php 
session_start();

 $_SESSION['tmppunya_tanggungan'] = $tmppunya_tanggungan;
 $_SESSION['tmpnama_keluarga'] = $tmpnama_keluarga;
 $_SESSION['tmpnik_keluarga'] = $tmpnik_keluarga;
 $_SESSION['tmphubungan_keluarga'] = $tmphubungan_keluarga;
 $_SESSION['tmppekerjaan_keluarga'] = $tmppekerjaan_keluarga;
 
unset($_SESSION['$tmppunya_tanggungan[$i]']);
unset($_SESSION['$tmpnama_keluarga[$i]']);
unset($_SESSION['$tmpnik_keluarga[$i]']);
unset($_SESSION['$tmphubungan_keluarga[$i]']);
unset($_SESSION['$tmppekerjaan_keluarga[$i]']);

header("location:halaman10-xxx.php");

?>