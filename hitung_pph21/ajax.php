<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "perhitunganpajak");

//variabel npwp yang dikirimkan form.php
$npwp = $_GET['npwp'];

//mengambil data
$query = mysqli_query($koneksi, "select * from karyawan1 where npwp='$npwp'");
$karyawan = mysqli_fetch_array($query);
$data = array(
	'nama' => @$karyawan['nama'],
	'status' => @$karyawan['status_nikah'],
	'tanggungan' => @$karyawan['tanggungan'],

);
//tampil data
echo json_encode($data);
?>