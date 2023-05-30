<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../koneksi.php';
if(isset($_POST['submit'])){
	$id_daftar_npwp = $_POST['id_daftar_npwp'];
	$efin = $_POST['efin'];
	$id_paket = $_POST['id_paket'];

	mysqli_query($koneksi, "INSERT INTO tb_daftarnpwp(id_daftar_npwp,efin, id_paket) VALUES('$id_daftar_npwp','$efin','$id_paket')");

	echo "<meta http-equiv='refresh' content='0;url=data_e-regis.php?hasil=data_ditambah'>";
}
?>