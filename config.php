<?php
define("HOST", "localhost"); //Host database
define("USER", "taxcente_bantu_pajak"); //Username database
define("PASSWORD", "dA37I59DKm{g"); //Password database
define("DATABASE", "taxcente_db_bantu_pajak"); //Nama database



//Melakukan koneksi ke database berdasarkan konfigurasi diatas
$koneksi = new mysqli(HOST, USER, PASSWORD, DATABASE); 

?>
