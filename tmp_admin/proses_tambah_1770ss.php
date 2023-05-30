<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../koneksi.php';
if(isset($_POST['submit'])){
	$npwp = $_POST['npwp'];
	$thn_pajak = $_POST['thn_pajak'];
	$status_spt = $_POST['status_spt'];
	$pembetulan_ke = $_POST['pembetulan_ke'];
	$penghasilan_bruto = $_POST['penghasilan_bruto'];
	$pengurangan = $_POST['pengurangan'];
	$ptkp = $_POST['ptkp'];
	$pkp = $_POST['pkp'];
	$pp_terutang = $_POST['pp_terutang'];
	$pp_dipotong = $_POST['pp_dipotong'];
	$status = $_POST['status'];
	$total = $_POST['total'];
	$pp_final = $_POST['pp_final'];
	$pp_final_terutang = $_POST['pp_final_terutang'];
	$p_objek_pajak = $_POST['p_objek_pajak'];
	$jml_harta = $_POST['jml_harta'];
	$jml_kwj_utang = $_POST['jml_kwj_utang'];

	$data2 = mysqli_query($koneksi,"SELECT * FROM tb_spt_1770ss where id_spt_1770ss = '$npwp'");
	$cek = mysqli_num_rows($data2);

	if($cek == 1){
		header("location:spt_1770ss.php?hasil=data_gagalditambah2");
	}else{
		$data = mysqli_query($koneksi, "INSERT INTO tb_spt_1770ss VALUES('','$npwp','$thn_pajak', '$status_spt', '$pembetulan_ke', '$penghasilan_bruto', '$pengurangan', '$ptkp', '$pkp', '$pp_terutang', '$pp_dipotong', '$status', '$total', '$pp_final', '$pp_final_terutang', '$p_objek_pajak', '$jml_harta', '$jml_kwj_utang')");
		if ($data == 1){
			header("location:data_spt_1770ss.php?hasil=data_ditambah");
		}else{
			header("location:spt_1770ss.php?hasil=data_gagalditambah");
		}
	}
}
?>