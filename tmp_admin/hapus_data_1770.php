<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../koneksi.php';

$id = $_GET['id'];

$data4 = mysqli_query($koneksi,"SELECT * FROM tb_spt_1770");
$cek = mysqli_fetch_assoc($data4);

$id2 = $cek['id_spt_1770'];

$data = mysqli_query($koneksi,"DELETE FROM tb_upload_file_1770 WHERE id='$id'");
$data2 = mysqli_query($koneksi,"DELETE FROM tb_hasil_lapor_1770 WHERE id='$id'");

$data3 = mysqli_query($koneksi,"DELETE FROM tb_spt_1770 WHERE id_spt_1770='$id2'");

if($data == 1 && $data2 == 1 && $data3 == 1){
	header("location:data_spt_1770.php?hasil=data_terhapus");
}else if ($data == 1 && $data2 == 1 && $data3 == 0){
	header("location:data_spt_1770.php?hasil=data_terhapus");
}else{
	header("location:data_spt_1770.php?hasil=data_gagalterhapus");
}
?>