<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
include '../koneksi.php';
if(isset($_POST['submit'])){
	$npwp = $_POST['npwp'];
	$thn_pajak = $_POST['thn_pajak'];
	$status_spt = $_POST['status_spt'];
	$pembetulan_ke = $_POST['pembetulan_ke'];
	$jenis_pajak = $_POST['jenis_pajak'];
	$npwp_pemotong = $_POST['npwp_pemotong'];
	$nama_pemotong = $_POST['nama_pemotong'];
	$nomor_bukti = $_POST['nomor_bukti'];
	$tanggal_bukti = $_POST['tanggal_bukti'];
	$jumlah_pph = $_POST['jumlah_pph'];
	$p_neto_dlm_negeri = $_POST['p_neto_dlm_negeri'];
	$bunga = $_POST['bunga'];
	$royalti = $_POST['royalti'];
	$sewa = $_POST['sewa'];
	$hadiah = $_POST['hadiah'];
	$keuntungan = $_POST['keuntungan'];
	$penghasilan_lain = $_POST['penghasilan_lain'];
	$p_neto_luar_negeri = $_POST['p_neto_luar_negeri'];
	$bantuan = $_POST['bantuan'];
	$warisan = $_POST['warisan'];
	$laba_perseroan = $_POST['laba_perseroan'];
	$asuransi = $_POST['asuransi'];
	$beasiswa = $_POST['beasiswa'];
	$p_lain_obj_pajak = $_POST['p_lain_obj_pajak'];
	$sumber_penghasilan = $_POST['sumber_penghasilan'];
	$p_bruto = $_POST['p_bruto'];
	$pph_terutang = $_POST['pph_terutang'];
	$kode_harta = $_POST['kode_harta'];
	$nama_harta = $_POST['nama_harta'];
	$tahun_perolehan = $_POST['tahun_perolehan'];
	$harga_perolehan = $_POST['harga_perolehan'];
	$keterangan = $_POST['keterangan'];
	$kode_utang = $_POST['kode_utang'];
	$nama_peminjam = $_POST['nama_peminjam'];
	$alamat_peminjam = $_POST['alamat_peminjam'];
	$tahun_peminjam = $_POST['tahun_peminjam'];
	$jumlah_pinjaman = $_POST['jumlah_pinjaman'];
	$nama_keluarga = $_POST['nama_keluarga'];
	$nik = $_POST['nik'];
	$hubungan_keluarga = $_POST['hubungan_keluarga'];
	$pekerjaan = $_POST['pekerjaan'];
	$zakat_keagamaan = $_POST['zakat_keagamaan'];
	$status_perkawinan = $_POST['status_perkawinan'];
	$status_pjk_si = $_POST['status_pjk_si'];
	$npwp_si = $_POST['npwp_si'];
	$gol_ptkp = $_POST['gol_ptkp'];
	$jml_tanggungan = $_POST['jml_tanggungan'];
	$lapor_sebagai = $_POST['lapor_sebagai'];
	$neto_suami = $_POST['neto_suami'];
	$neto_istri = $_POST['neto_istri'];
	$kembali_pph_24 = $_POST['kembali_pph_24'];
	$bayar_pph_25 = $_POST['bayar_pph_25'];
	$bayar_stp_pph_25 = $_POST['bayar_stp_pph_25'];
	$neto_kurang_zakat = $_POST['neto_kurang_zakat'];
	$ptkp_tanggungan = $_POST['ptkp_tanggungan'];
	$pkp = $_POST['pkp'];
	$pph_terutang_tarif = $_POST['pph_terutang_tarif'];
	$jml_pph_terutang = $_POST['jml_pph_terutang'];
	$pph_dipotong = $_POST['pph_dipotong'];
	$pph_dibayar_sendiri = $_POST['pph_dibayar_sendiri'];
	$jumlah_kredit = $_POST['jumlah_kredit'];
	$status_hasil = $_POST['status_hasil'];
	$jumlah_hasil = $_POST['jumlah_hasil'];


	$data = mysqli_query($koneksi, "select * from tb_spt_1770s where npwp = '$npwp'");
	$cek = mysqli_num_rows($data);

	// if ($cek['npwp'] == $npwp ) {
	// 	$data2 = mysqli_query($koneksi, "INSERT INTO tb_bukti_potong_s VALUES('', '$npwp', '$thn_pajak', '$status_spt', '$pembetulan_ke', '$jenis_pajak', '$npwp_pemotong', '$nama_pemotong', '$nomor_bukti', '$tanggal_bukti', '$jumlah_pph', '$p_neto_dlm_negeri', '$sumber_penghasilan', '$p_bruto', '$pph_terutang')");
	// 	$data3 = mysqli_query($koneksi, "INSERT INTO tb_non_bukti_potong_s VALUES('', '$npwp', '$bunga', '$royalti', '$sewa', '$hadiah', '$keuntungan', '$penghasilan_lain', '$p_neto_luar_negeri',  '$bantuan',  '$warisan',  '$laba_perseroan',  '$asuransi',  '$beasiswa',  '$p_lain_obj_pajak', '$kode_harta', '$nama_harta', '$tahun_perolehan', '$harga_perolehan', 'keterangan', '$kode_utang', '$nama_peminjam', '$alamat_peminjam', '$tahun_peminjam', '$jumlah_pinjaman', '$nama_keluarga', '$nik', '$hubungan_keluarga', '$pekerjaan', '$zakat_keagamaan', '$status_perkawinan', '$status_pjk_si', '$npwp_si', '$gol_ptkp', '$jml_tanggungan', '$kembali_pph_24', '$bayar_pph_25', '$bayar_stp_pph_25', '$neto_kurang_zakat', '$ptkp_tanggungan',  '$pkp', '$pph_terutang_tarif', '$jml_pph_terutang', '$pph_dipotong','$pph_dibayar_sendiri', '$jumlah_kredit', '$status_hasil', '$jumlah_hasil')");

	// 	if ($data2 == 1 && $data3 == 1){
	// 		header("location:data_spt_1770s.php?hasil=data_ditambah");
	// 	}else{

	// 		header("location:spt_1770s.php?hasil=data_gagalditambah");
	// 	}
	// }

	if ($cek == 1) {
		# code...
		header("location:spt_1770s.php?hasil=data_gagalditambah2");
	}
	else{
		$data = mysqli_query($koneksi, "INSERT INTO tb_spt_1770s VALUES('', '$npwp')");
		$data2 = mysqli_query($koneksi, "INSERT INTO tb_bukti_potong_s VALUES('', '$npwp', '$thn_pajak', '$status_spt', '$pembetulan_ke', '$jenis_pajak', '$npwp_pemotong', '$nama_pemotong', '$nomor_bukti', '$tanggal_bukti', '$jumlah_pph', '$p_neto_dlm_negeri', '$sumber_penghasilan', '$p_bruto', '$pph_terutang')");

		$data3 = mysqli_query($koneksi, "INSERT INTO tb_non_bukti_potong_s VALUES('', '$npwp', '$bunga', '$royalti', '$sewa', '$hadiah', '$keuntungan', '$penghasilan_lain', '$p_neto_luar_negeri',  '$bantuan',  '$warisan',  '$laba_perseroan',  '$asuransi',  '$beasiswa',  '$p_lain_obj_pajak', '$kode_harta', '$nama_harta', '$tahun_perolehan', '$harga_perolehan', '$keterangan', '$kode_utang', '$nama_peminjam', '$alamat_peminjam', '$tahun_peminjam', '$jumlah_pinjaman', '$nama_keluarga', '$nik', '$hubungan_keluarga', '$pekerjaan', '$zakat_keagamaan', '$status_perkawinan', '$status_pjk_si', '$npwp_si', '$gol_ptkp', '$jml_tanggungan', '$lapor_sebagai', '$neto_suami', '$neto_istri', '$kembali_pph_24', '$bayar_pph_25', '$bayar_stp_pph_25', '$neto_kurang_zakat', '$ptkp_tanggungan',  '$pkp', '$pph_terutang_tarif', '$jml_pph_terutang', '$pph_dipotong','$pph_dibayar_sendiri', '$jumlah_kredit', '$status_hasil', '$jumlah_hasil')");

		if ($data == 1 && $data2 == 1 && $data3 == 1){
			header("location:data_spt_1770s.php?hasil=data_ditambah");
		// echo "<script>alert('Data Berhasil Ditambahkan!');window.location='data_e-regis'</script>";
		}else{
			header("location:spt_1770s.php?hasil=data_gagalditambah");
		}
	}
}
?>