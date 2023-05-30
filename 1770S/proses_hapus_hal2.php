<?php 
session_start();

 $_SESSION['tmpsumber_penghasilan'] = $tmpsumber_penghasilan;
 $_SESSION['tmpnpwp_pemotong'] = $tmpnpwp_pemotong;
 $_SESSION['tmpnama_pemotong'] = $tmpnama_pemotong;
 $_SESSION['tmpnomor_bukti'] = $tmpnomor_bukti;
 $_SESSION['tmptanggal_bukti'] = $tmptanggal_bukti;
 $_SESSION['tmpjumlah_pph'] = $tmpjumlah_pph;
 $_SESSION['tmpjenis_pajak'] = $tmpjenis_pajak;
 
unset($_SESSION['$tmpnama_pemotong[$i]']);
unset($_SESSION['$tmpnpwp_pemotong[$i]']);
unset($_SESSION['$tmpnomor_bukti[$i]']);
unset($_SESSION['$tmptanggal_bukti[$i]']);
unset($_SESSION['$tmpjenis_pajak[$i]']);
unset($_SESSION['$tmpjumlah_pph[$i]']);

header("location:halaman2-xxx.php");

?>