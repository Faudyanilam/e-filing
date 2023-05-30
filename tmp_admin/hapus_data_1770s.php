<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../koneksi.php';

$id = $_GET['id'];

$data4 = mysqli_query($koneksi,"SELECT * FROM tb_spt_1770s");
$cek = mysqli_fetch_assoc($data4);

$id2 = $cek['id_spt_1770s'];

$data = mysqli_query($koneksi,"DELETE FROM tb_bukti_potong_s WHERE id='$id'");
$data2 = mysqli_query($koneksi,"DELETE FROM tb_non_bukti_potong_s WHERE id='$id'");
$data3 = mysqli_query($koneksi,"DELETE FROM tb_spt_1770s WHERE id_spt_1770s='$id2'");

if($data == 1 && $data2 == 1 && $data3 == 1){
	header("location:data_spt_1770s.php?hasil=data_terhapus");
}else if ($data == 1 && $data2 == 1 && $data3 == 0){
	header("location:data_spt_1770s.php?hasil=data_terhapus");
}else{
	header("location:data_spt_1770s.php?hasil=data_gagalterhapus");
}
?>