<?php

require "connection.php";
    
        $pembetulan = mysqli_real_escape_string($con, $_POST['pembetulan']);
        $idspt = mysqli_real_escape_string($con, $_POST['idspt']);
        $no = mysqli_real_escape_string($con, $_POST['nmr_bkt_ptg']);
        $tgl = mysqli_real_escape_string($con, $_POST['tgl']);
        $npwp_a1 = mysqli_real_escape_string($con, $_POST['npwp_a1']);
        $nik  = mysqli_real_escape_string($con, $_POST['nik']);
        $nama_a1  = mysqli_real_escape_string($con, $_POST['nama_a1']);
        $alamat  = mysqli_real_escape_string($con, $_POST['alamat']);
        $jns_kelamin = mysqli_real_escape_string($con, $_POST['jns_kelamin']);
        $status1 = mysqli_real_escape_string($con, $_POST['status']);
        $jabatan = mysqli_real_escape_string($con, $_POST['jabatan']);
        $jmlh_tanggungan  = mysqli_real_escape_string($con, $_POST['tanggungan']);
        $kode_negara = mysqli_real_escape_string($con, $_POST['kode_negara']);
        $kode_objk_pjk  = mysqli_real_escape_string($con, $_POST['kode_objk_pjk']);

        $hasil_1_8  = mysqli_real_escape_string($con, $_POST['hasil_1_8']);
        $hasil_1_8 = str_replace(".","",$hasil_1_8);
        $hasil_9_10 = mysqli_real_escape_string($con, $_POST['hasil_9_10']);
        $hasil_9_10 = str_replace(".","",$hasil_9_10);
        $neto  = mysqli_real_escape_string($con, $_POST['neto']);
        $neto = str_replace(".","",$neto);
        $neto_setahun = mysqli_real_escape_string($con, $_POST['neto_setahun']);
        $neto_setahun = str_replace(".","",$neto_setahun);
        $penghasilan_tdk_pjk = mysqli_real_escape_string($con, $_POST['penghasilan_tdk_pjk']);
        $penghasilan_tdk_pjk = str_replace(".","",$penghasilan_tdk_pjk);
        $penghasilan_kena_pjk = mysqli_real_escape_string($con, $_POST['penghasilan_kena_pjk']);
        $penghasilan_kena_pjk = str_replace(".","",$penghasilan_kena_pjk);
        $penghasilan_kena_pjk_setahun = mysqli_real_escape_string($con, $_POST['penghasilan_kena_pjk_setahun']);
        $penghasilan_kena_pjk_setahun = str_replace(".","",$penghasilan_kena_pjk_setahun);
        $pph21_dipotong_sebelum  = mysqli_real_escape_string($con, $_POST['pph21_dipotong_sebelum']);
        $pph21_dipotong_sebelum = str_replace(".","",$pph21_dipotong_sebelum);
        if($status1 == 54000000){
                $status1 = "TK";
        }
        $a1 = "INSERT INTO a1_laporan(nomor_bukti_potong1,tgl,npwp_a1, nik, nama_a1, alamat, jns_kelamin, status1, nm_jbtn, jmlh_tanggungan, kode_negara, kode_objk_pjk, hasil_1_8, hasil_9_10, neto, neto_setahun, penghasilan_tdk_pjk, penghasilan_kena_pjk, penghasilan_kena_pjk_setahun, pph21_dipotong_sebelum, id_spt,pembetulan) VALUES ('$no','$tgl','$npwp_a1','$nik','$nama_a1','$alamat','$jns_kelamin','$status1','$jabatan','$jmlh_tanggungan','$kode_negara','$kode_objk_pjk','$hasil_1_8','$hasil_9_10','$neto','$neto_setahun','$penghasilan_tdk_pjk ','$penghasilan_kena_pjk','$penghasilan_kena_pjk_setahun','$pph21_dipotong_sebelum','$idspt','$pembetulan')";
        $hsl_a1= mysqli_query($con, $a1);
        if($hsl_a1){
        echo "Data Berhasil Disimpan";
        }else{
        echo "Gagal Disimpan";
        }

?>