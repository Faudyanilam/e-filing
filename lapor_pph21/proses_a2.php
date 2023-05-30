<?php

require "connection.php";
    
       

$id = mysqli_real_escape_string($con, $_POST['idspt']);
$nbp = mysqli_real_escape_string($con, $_POST['nbp']);
$tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);
$npwp = mysqli_real_escape_string($con, $_POST['npwp']);
$nip  = mysqli_real_escape_string($con, $_POST['nip']);
$nama  = mysqli_real_escape_string($con, $_POST['nama']);
$alamat  = mysqli_real_escape_string($con, $_POST['alamat']);
$jenis_kelamin = mysqli_real_escape_string($con, $_POST['jeniskelamin']);
$nik  = mysqli_real_escape_string($con, $_POST['nik']);
$status_a2  = mysqli_real_escape_string($con, $_POST['status']);
$jumlahtanggungan  = mysqli_real_escape_string($con, $_POST['jumlahtanggungan']);
$gol  = mysqli_real_escape_string($con, $_POST['gol']);
$namajabatan  = mysqli_real_escape_string($con, $_POST['namajabatan']);
$kodeobjekpajak  = mysqli_real_escape_string($con, $_POST['kodeobjekpajak']);

$jumlahgaji = mysqli_real_escape_string($con, $_POST['jumlahgaji']);
$jumlahgaji = str_replace(".","",$jumlahgaji);
$jumlahbruto  = mysqli_real_escape_string($con, $_POST['jumlahbruto']);
$jumlahbruto = str_replace(".","",$jumlahbruto);
$jumlahpengurangan  = mysqli_real_escape_string($con, $_POST['jumlahpengurangan']);
$jumlahpengurangan = str_replace(".","",$jumlahpengurangan);
$jumlahpenghasilanneto  = mysqli_real_escape_string($con, $_POST['jumlahpenghasilanneto']);
$jumlahpenghasilanneto = str_replace(".","",$jumlahpenghasilanneto);
$neto_setahun  = mysqli_real_escape_string($con, $_POST['neto_setahun']);
$neto_setahun = str_replace(".","",$neto_setahun);
$ptkp  = mysqli_real_escape_string($con, $_POST['ptkp']);
$ptkp = str_replace(".","",$ptkp);
$pkpsetahun  = mysqli_real_escape_string($con, $_POST['pkpsetahun']);
$pkpsetahun = str_replace(".","",$pkpsetahun);
$pkppph21  = mysqli_real_escape_string($con, $_POST['pkppph21']);
$pkppph21 = str_replace(".","",$pkppph21);
$pph21terutang  = mysqli_real_escape_string($con, $_POST['pph21terutang']);
$pph21terutang = str_replace(".","",$pph21terutang);
$gajitunjangan  = mysqli_real_escape_string($con, $_POST['23a']);
$gajitunjangan = str_replace(".","",$gajitunjangan);
$penghasilan_tetap = mysqli_real_escape_string($con, $_POST['23b']);
$penghasilan_tetap = str_replace(".","",$penghasilan_tetap);

$namainstansi = mysqli_real_escape_string($con, $_POST['namainstansi']);
$npwppemotong = mysqli_real_escape_string($con, $_POST['npwppemotong']);
$namapemotong = mysqli_real_escape_string($con, $_POST['namapemotong']);
$nippemotong = mysqli_real_escape_string($con, $_POST['nippemotong']);

$a2 = "INSERT INTO a2_laporan (`nomor_bukti_potong_a2`,`tanggal_a2`, `npwp_a2`, `nip`, `nama`, `alamat`, `jenis_kelamin`, `nik`, `status`, `jumlah_tanggungan`, `pangkat`, `nama_jabatan`, `kode_objek_pajak`, `jumlah_gaji`, `jumlah_bruto`, `jumlah_pengurangan`, `neto`, `neto_pph21`, `ptkp`, `pkp`, `pkp_pph21`, `pph21_terutang`, `gaji_tunjangan23a`, `penghasilan_tetap23b`, `nama_instansi`, `npwp_pemotong`, `nama_pemotong`, `nip_pemotong`,id_spt) VALUES ('$nbp','$tanggal','$npwp','$nip','$nama','$alamat','$jenis_kelamin','$nik','$status_a2','$jumlahtanggungan','$gol','$namajabatan','$kodeobjekpajak','$jumlahgaji','$jumlahbruto','$jumlahpengurangan','$jumlahpenghasilanneto','$neto_setahun','$ptkp','$pkpsetahun','$pkppph21','$pph21terutang','$gajitunjangan','$penghasilan_tetap','$namainstansi','$npwppemotong','$namapemotong','$nippemotong','$id')";
$hasil_a2 = mysqli_query($con, $a2);
if($hasil_a2){
    echo "Data Berhasil Disimpan";
    }else{
    echo "Gagal Disimpan";
    }


?>