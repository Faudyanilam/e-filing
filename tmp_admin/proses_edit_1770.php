<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// koneksi database
include '../koneksi.php';

if(isset($_POST['submit'])){
	// menangkap data yang di kirim dari form
	$id = $_POST['id'];
	$npwp = $_POST['npwp'];
	$file_spt = $_POST['file_spt'];
	$lampiran_1 = $_POST['lampiran_1'];
	$lampiran_2 = $_POST['lampiran_2'];
	$lampiran_3 = $_POST['lampiran_3'];
	$lampiran_4 = $_POST['lampiran_4'];
	$jns_formulir = $_POST['jns_formulir'];
	$tahun_pajak = $_POST['tahun_pajak'];
	$pembetulan_ke = $_POST['pembetulan_ke'];
	$status_spt = $_POST['status_spt'];
	$jumlah = $_POST['jumlah'];
	$catatan = $_POST['catatan'];

	// update data ke database
	$data = mysqli_query($koneksi,"update tb_spt_1770 set npwp='$npwp' where id_spt_1770='$id'");
	$data2 = mysqli_query($koneksi,"update tb_upload_file_1770 set id_spt_1770='$npwp', file_spt='$file_spt', lampiran_1='$lampiran_1', lampiran_2='$lampiran_2', lampiran_3='$lampiran_3', lampiran_4='$lampiran_4' where id='$id'");
	$data3 = mysqli_query($koneksi,"update tb_hasil_lapor_1770 set id_spt_1770='$npwp', jns_formulir='$jns_formulir', tahun_pajak='$tahun_pajak', pembetulan_ke='$pembetulan_ke', status_spt='$status_spt', jumlah='$jumlah', catatan='$catatan' where id='$id'");

	// mengalihkan halaman kembali ke index.php
	if ($data == 1 && $data2 == 1 && $data3 == 1){
		header("location:data_spt_1770.php?hasil=data_diubah");
	}else{
		header("location:edit_spt_1770.php?hasil=data_gagaldiubah");
	}
}
?>