<?php 
session_start();

 $_SESSION['tmpkode_harta'] = $tmpkode_harta;
 $_SESSION['tmpnama_harta'] = $tmpnama_harta;
 $_SESSION['tmptahun_perolehan'] = $tmptahun_perolehan;
 $_SESSION['tmpharga_perolehan'] = $tmpharga_perolehan;
 $_SESSION['tmpketerangan'] = $tmpketerangan;
 
unset($_SESSION['$tmpkode_harta[$i]']);
unset($_SESSION['$tmpnama_harta[$i]']);
unset($_SESSION['$tmptahun_perolehan[$i]']);
unset($_SESSION['$tmpharga_perolehan[$i]']);
unset($_SESSION['$tmpketerangan[$i]']);

header("location:halaman8-xxx.php");

?>