<?php

session_start();
require "connection.php";
$NPWP = "";
$Email = "";
$Username = "";
$npwp_user = "";
$errors = array();


      
$pembetulan = mysqli_real_escape_string($con, $_POST['pembetulan']);  
$id = mysqli_real_escape_string($con, $_POST['id']);
$bp = mysqli_real_escape_string($con, $_POST['nmr_bkt_ptg']);
$pegawai = mysqli_real_escape_string($con, $_POST['pegawai']);
$pegawai = str_replace(".","",$pegawai);
$pensiun = mysqli_real_escape_string($con, $_POST['pensiun']);
$pensiun = str_replace(".","",$pensiun);
$jmlh_bruto = mysqli_real_escape_string($con, $_POST['jmlh_bruto']);
$jmlh_bruto = str_replace(".","",$jmlh_bruto);
$jmlh_pph_potong = mysqli_real_escape_string($con, $_POST['jmlh_pph_potong']);
$jmlh_pph_potong = str_replace(".","",$jmlh_pph_potong);
$penghasilan_bruto_pegawai  = mysqli_real_escape_string($con, $_POST['penghasilan_bruto_pegawai']);
$penghasilan_bruto_pegawai = str_replace(".","",$penghasilan_bruto_pegawai);
$penghasilan_bruto_pensiun  = mysqli_real_escape_string($con, $_POST['penghasilan_bruto_pensiun']);
$penghasilan_bruto_pensiun = str_replace(".","",$penghasilan_bruto_pensiun);
$total_bruto = mysqli_real_escape_string($con, $_POST['total_bruto']);
$total_bruto = str_replace(".","",$total_bruto);
$total_pph_dipotong = mysqli_real_escape_string($con, $_POST['jmlh_pph_potong']);
$total_pph_dipotong = str_replace(".","",$total_pph_dipotong);


if(count($errors) === 0){
   $masa_pajak = "INSERT INTO masa_pajak (nomor_bukti_potong,jmlh_bruto, jmlh_pph_potong,pegawai, pensiun,penghasilan_bruto_pegawai,penghasilan_bruto_pensiun,total_bruto,total_pph_dipotong,id_spt,pembetulan) VALUES ('$bp','$jmlh_bruto','$jmlh_pph_potong','$pegawai','$pensiun','$penghasilan_bruto_pegawai','$penghasilan_bruto_pensiun','$total_bruto','$jmlh_pph_potong','$id','$pembetulan')";
    
    $hasil = mysqli_query($con, $masa_pajak);
    
    if($hasil){
        echo "Data Berhasil Disimpan";
        header('Location: beranda.php');
        
        }else{
        echo "Gagal Disimpan";
        }
       
        
    
}
        
       
    
?>