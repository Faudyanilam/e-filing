<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi,"DELETE FROM tb_daftarnpwp WHERE id_id='$id'");

if($data == 1){
	header("location:data_e-regis.php?hasil=data_terhapus");
}else{
	header("location:data_e-regis.php?hasil=data_gagalterhapus");

}
?>