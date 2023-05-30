<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi,"DELETE FROM tb_spt_1770ss WHERE id='$id'");

if($data == 1){
	header("location:data_spt_1770ss.php?hasil=data_terhapus");
}else{
	header("location:data_spt_1770ss.php?hasil=data_gagalterhapus");
}
?>