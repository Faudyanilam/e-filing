<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM karyawan1 WHERE npwp='".mysqli_escape_string($conn, $_POST['npwp'])."'");
$data = mysqli_fetch_array($query);

echo json_encode($data);