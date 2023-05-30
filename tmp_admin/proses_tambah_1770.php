<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../koneksi.php';
if(isset($_POST['submit'])){
	$npwp = $_POST['npwp'];
	$file_spt_1770 = $_FILES['file_spt_1770']['name'];
	$lampiran_1 = $_FILES['lampiran_1']['name'];
	$lampiran_2 = $_FILES['lampiran_2']['name'];
	$lampiran_3 = $_FILES['lampiran_3']['name'];
	$lampiran_4 = $_FILES['lampiran_4']['name'];

	$jns_formulir = $_POST['jns_formulir'];
	$tahun_pajak = $_POST['tahun_pajak'];
	$pembetulan_ke = $_POST['pembetulan_ke'];
	$status_spt = $_POST['status_spt'];
	$jumlah = $_POST['jumlah'];
	$catatan = $_POST['catatan'];

	$data = mysqli_query($koneksi, "select * from tb_spt_1770 where npwp = '$npwp'");
	$cek = mysqli_num_rows($data);

	if ($cek == 1) {
		header("location:spt_1770.php?hasil=data_gagalditambah2");
	}
	else{
		$data = mysqli_query($koneksi, "INSERT INTO tb_spt_1770 VALUES('', '$npwp')");
		$data2 = mysqli_query($koneksi, "INSERT INTO tb_upload_file_1770 VALUES('', '$npwp', '$file_spt_1770', '$lampiran_1', '$lampiran_2', '$lampiran_3', '$lampiran_4')");
		$data3 = mysqli_query($koneksi, "INSERT INTO tb_hasil_lapor_1770 VALUES('', '$npwp', '$jns_formulir', '$tahun_pajak', '$pembetulan_ke', '$status_spt', '$jumlah', '$catatan')");

		if ($data == 1 && $data2 == 1 && $data3 == 1){
			header("location:data_spt_1770.php?hasil=data_ditambah");
		}else{
			header("location:spt_1770.php?hasil=data_gagalditambah");
		}
	}
}
?>