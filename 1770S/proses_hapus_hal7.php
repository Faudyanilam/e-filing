<?php 
session_start();

 $_SESSION['tmpsumber_penghasilan'] = $tmpsumber_penghasilan;
 $_SESSION['tmpdpp'] = $tmpdpp;
 $_SESSION['tmppph_terutang'] = $tmppph_terutang;
 
unset($_SESSION['$tmpsumber_penghasilan[$i]']);
unset($_SESSION['$tmpdpp[$i]']);
unset($_SESSION['$tmppph_terutang[$i]']);

header("location:halaman7-xxx.php");

?>