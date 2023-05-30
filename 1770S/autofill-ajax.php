<?php
include ('../koneksi.php');

// variabel yang akan dikirimkan ke form-autofill.php
$npwp_pemotong =$_GET['npwp_pemotong'];
// mengambil data
$sql = mysqli_query($koneksi, "select * from tb_bukti_potong_s where npwp_pemotong='$npwp_pemotong'"); 
$perusahaan = mysqli_fetch_array($sql); 

$data = array(
    'nama_pemotong' => $perusahaan['nama_pemotong'],
);


// tampil data
echo json_encode($data);
?>
