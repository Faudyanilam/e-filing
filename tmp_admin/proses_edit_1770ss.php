<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// koneksi database
include '../koneksi.php';

if(isset($_POST['submit'])){
// menangkap data yang di kirim dari form
	$id = $_POST['id'];
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

	// update data ke database
	$data = mysqli_query($koneksi,"update tb_spt_1770ss set  id_spt_1770ss='$npwp', thn_pajak='$thn_pajak', status_spt='$status_spt', pembetulan_ke='$pembetulan_ke', penghasilan_bruto='$penghasilan_bruto', pengurangan='$pengurangan', ptkp='$ptkp', pkp='$pkp', pp_terutang='$pp_terutang', pp_dipotong='$pp_dipotong', status='$status', total='$total', pp_final='$pp_final', pp_final_terutang='$pp_final_terutang', p_objek_pajak='$p_objek_pajak', jml_harta='$jml_harta', jml_kwj_utang='$jml_kwj_utang' where id='$id'");
	// mengalihkan halaman kembali ke index.php
	if ($data == 1){
		header("location:data_spt_1770ss.php?hasil=data_diubah");
	}else{
		header("location:edit_spt_1770ss.php?hasil=data_gagaldiubah");
	}
}
?>