<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Riwayat Pendaftaran Akun</title>
	<link href="assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->

	<link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/>

	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
	<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  
</head>
</head>
<body class="bg-body">

	<?php include'header1.html'; ?>
	<?php include'koneksi.php'; ?>

	<br />
	<div class="container box">
		<br />
		<form >

			<!-- tab content -->
			<div class="tab-content">
				<!-- tab pane -->
				<div class="tab-pane active" id="lapor_detail" >
					<!-- panel -->
					<div class="panel panel-default">
						<!-- panel body -->
						<div class="panel-body">

							<!-- membuat card navbar -->
							<div class="card card_8 box-shadow">
								<div class="card-body">

									<!-- membuat row -->
									<div class="row">

										<!-- membuat tab -->
										<div class="col-sm-9">
											<ul class="nav nav-tabs">
												<li class="nav-item">
													<a href="informasi.php">Informasi</a>
												</li>
												<li class="nav-item">
													<a href="dasboard.php">Dasboard</a>
												</li>
												<li class="nav-item">
													<a href="profil.php">Profil</a>
												</li>
												<li class="nav-item">
													<a href="bayar.php">Bayar</a>
												</li>
												<li class="nav-item grey-nav">
													<a href="lapor.php" class="font-dark-blue">Lapor</a>
												</li>
												<li class="nav-item jarak-nav">
													<a href="layanan.php">Layanan</a>
												</li>
											</ul>
										</div>
										<!-- end membuat tab -->

										<!-- menambahkan gambar e-filling -->
										<div align="right" class="col-sm-3" style="padding-right: 30px;">
											<img src="img/e-filling.png" width="100px" >
										</div>
										<!-- end menambahkan gambar e-filling -->

									</div>
									<!-- end membuat row -->
								</div>
							</div>
							<!-- end membuat card navbar -->

							<br/>

							<!-- Card bg-->
							<div class="card bg-light mb-3" style="width:735px; background-color: white;">
								<!-- card header -->
								<div class="card-header card-header_1">
									<i class="fas fa-file mr-1"></i>
									<b>Hasil Jawaban Pelaporan SPT</b>
									<!-- <?php echo $_SESSION['npwp']; ?> -->
								</div>
								<!-- end card header -->


								<!-- card body -->
								<div class="card-body card-body_2">  
									<br/>

									<!-- Halaman 1 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 1</strong></mark></p>

									<div class="row">

										<div class="col-sm-6">
											<p><strong>Tahun Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmptahun_pajak'])) {
												$tmptahun_pajak = $_SESSION['tmptahun_pajak'];
											}

											echo "<tr>";
											echo "<td>".end($tmptahun_pajak)."</td></tr>";
											$tahun_pajak = end($tmptahun_pajak);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$tahunpajak = $cek['tahun_pajak'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($tahun_pajak == $tahunpajak){
												
												echo "<strong><p style='color:blue'>".$tahunpajak."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$tahunpajak."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">

										<div class="col-sm-6">
											<p><strong>Status SPT</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpstatus_spt'])) {
												$tmpstatus_spt = $_SESSION['tmpstatus_spt'];
											}

											echo "<tr>";
											echo "<td>".end($tmpstatus_spt)."</td></tr>";
											$status_spt = end($tmpstatus_spt);
											// mengubah huruf uppercase menjadi lowercase, hal ini agar tetap benar karena hanya beda kapital tetapi jawaban sebenarnya sama
											// $kecil_status_spt = strtolower($status_spt);
											// echo $kecil_keterangan;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$tahunpajak = $cek['tahun_pajak'];
											// mengubah nama harta didatabase
											$statusspt = $cek['status_spt'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database, strcasecmp agar tidak casesensitif huruf besar dan kecil
											if(strcasecmp($statusspt, $status_spt) == 0){
												
												echo "<strong><p style='color:blue'>".$statusspt."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$statusspt."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Pembetulan Ke-</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppembetulan_ke'])) {
												$tmppembetulan_ke = $_SESSION['tmppembetulan_ke'];
											}

											echo "<tr>";
											echo "<td>".end($tmppembetulan_ke)."</td></tr>";
											$pembetulan_ke = end($tmppembetulan_ke);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											// mengambil nilai session
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database

											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$pembetulanke = $cek['pembetulan_ke'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($pembetulan_ke == $pembetulanke){
												
												echo "<strong><p style='color:blue'>".$pembetulanke."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$pembetulanke."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 1 -->

									<!-- Halaman 2 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 2</strong></mark></p>

									<div class="row">

										<div class="col-sm-6">
											<p><strong>Jenis Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpjenis_pajak'])) {
												$tmpjenis_pajak = $_SESSION['tmpjenis_pajak'];
											}

											echo "<tr>";
											echo "<td>".end($tmpjenis_pajak)."</td></tr>";
											$jenis_pajak = end($tmpjenis_pajak);
											// mengubah huruf uppercase menjadi lowercase, hal ini agar tetap benar karena hanya beda kapital tetapi jawaban sebenarnya sama
											// $kecil_jenis_pajak = strtolower($jenis_pajak);
											// echo $kecil_keterangan;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$jenispajak = $cek['jenis_pajak'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($jenispajak, $jenis_pajak) == 0){
												
												echo "<strong><p style='color:blue'>".$jenispajak."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$jenispajak."</p></strong>";
												
											}
											?>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>NPWP Pemotong/Pemungutan Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpnpwp_pemotong'])) {
												$tmpnpwp_pemotong = $_SESSION['tmpnpwp_pemotong'];
											}

											echo "<tr>";
											echo "<td>".end($tmpnpwp_pemotong)."</td></tr>";
											$npwp_pemotong = end($tmpnpwp_pemotong);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$npwppemotong = $cek['npwp_pemotong'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($npwp_pemotong == $npwppemotong){
												
												echo "<strong><p style='color:blue'>".$npwppemotong."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$npwppemotong."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Nama Pemotong/Pemungut Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpnama_pemotong'])) {
												$tmpnama_pemotong = $_SESSION['tmpnama_pemotong'];
											}

											echo "<tr>";
											echo "<td>".end($tmpnama_pemotong)."</td></tr>";
											$nama_pemotong = end($tmpnama_pemotong);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$nama_pemotong = $cek['nama_pemotong'];

												// session nama harta = harta di database
											if(strcasecmp($nama_pemotong, $nama_pemotong) == 0){
												
												echo "<strong><p style='color:blue'>".$nama_pemotong."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$nama_pemotong."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Nomor Bukti Pemotongan/Pemungutan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpnomor_bukti'])) {
												$tmpnomor_bukti = $_SESSION['tmpnomor_bukti'];
											}

											echo "<tr>";
											echo "<td>".end($tmpnomor_bukti)."</td></tr>";
											$nomor_bukti = end($tmpnomor_bukti);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$nomorbukti = $cek['nomor_bukti'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($nomor_bukti == $nomorbukti){
												
												echo "<strong><p style='color:blue'>".$nomorbukti."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$nomorbukti."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Tanggal Bukti Pemotongan/Pemungutan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmptanggal_bukti'])) {
												$tmptanggal_bukti = $_SESSION['tmptanggal_bukti'];
											}

											echo "<tr>";
											echo "<td>".end($tmptanggal_bukti)."</td></tr>";
											$tanggal_bukti = end($tmptanggal_bukti);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$tanggalbukti = $cek['tanggal_bukti'];

												// session nama harta = harta di database
											if($tanggal_bukti == $tanggalbukti){
												
												echo "<strong><p style='color:blue'>".$tanggalbukti."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$tanggalbukti."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Jumlah PPh yang dipotong/dipungut</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpjumlah_pph'])) {
												$tmpjumlah_pph = $_SESSION['tmpjumlah_pph'];
											}

											"<tr>";
											"<td>".end($tmpjumlah_pph)."</td></tr>";
											$jumlah_pph = end($tmpjumlah_pph);

											// $jumlah_pph = number_format($jumlah_pph,0,",",".");

											// $jumlah_pph = "Rp. " .$jumlah_pph;

											// echo $jumlah_pph;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$jumlahpph = $cek['jumlah_pph'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($jumlah_pph == $pembetulanke){
												
												echo "<strong><p style='color:blue'>".$jumlahpph."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$jumlahpph."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 2 -->

									<!-- Halaman 3 -->

									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 3</strong></mark></p>

									<div class="row">

										<div class="col-sm-6">
											<p><strong>Penghasilan Neto dalam Negeri Sehubungan Dengan Pekerjaan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpneto_dn'])) {
												$tmpneto_dn = $_SESSION['tmpneto_dn'];
											}


											"<tr>";
											"<td>".end($tmpneto_dn)."</td></tr>";
											$neto_dn = end($tmpneto_dn);

											
											$neto_dn = number_format($neto_dn,0,",",".");

											$neto_dn = "Rp. " .$neto_dn;

											echo $neto_dn;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$neto_dlm_negeri = $cek['p_neto_dlm_negeri'];

												// session nama harta = harta di database
											if($neto_dn == $neto_dlm_negeri){
												
												echo "<strong><p style='color:blue'>".$neto_dlm_negeri."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$neto_dlm_negeri."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 3 -->

									<!-- Halaman 4 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 4</strong></mark></p>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Bunga</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpbunga'])) {
												$tmpbunga = $_SESSION['tmpbunga'];
											}

											"<tr>";
											"<td>".end($tmpbunga)."</td></tr>";
											$bunga = end($tmpbunga);

											$bunga = number_format($bunga,0,",",".");

											$bunga = "Rp. " .$bunga;

											echo $bunga;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$bungaa = $cek['bunga'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($bunga == $bungaa){
												
												echo "<strong><p style='color:blue'>".$bungaa."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$bungaa."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Royalti</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmproyalti'])) {
												$tmproyalti = $_SESSION['tmproyalti'];
											}

											"<tr>";
											"<td>".end($tmproyalti)."</td></tr>";
											$royalti = end($tmproyalti);

											$royalti = number_format($royalti,0,",",".");

											$royalti = "Rp. " .$royalti;

											echo $royalti;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$royaltii = $cek['royalti'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($royalti == $royaltii){
												
												echo "<strong><p style='color:blue'>".$royaltii."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$royaltii."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Sewa</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpsewa'])) {
												$tmpsewa = $_SESSION['tmpsewa'];
											}

											"<tr>";
											"<td>".end($tmpsewa)."</td></tr>";
											$sewa = end($tmpsewa);

											$sewa = number_format($sewa,0,",",".");

											$sewa = "Rp. " .$sewa;

											echo $sewa;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$sewaa = $cek['sewa'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($sewa == $sewaa){
												
												echo "<strong><p style='color:blue'>".$sewaa."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$sewaa."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Hadiah</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmphadiah'])) {
												$tmphadiah = $_SESSION['tmphadiah'];
											}

											"<tr>";
											"<td>".end($tmphadiah)."</td></tr>";
											$hadiah = end($tmphadiah);

											$hadiah = number_format($hadiah,0,",",".");

											$hadiah = "Rp. " .$hadiah;

											echo $hadiah;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$hadiahh = $cek['hadiah'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($hadiah == $hadiahh){
												
												echo "<strong><p style='color:blue'>".$hadiahh."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$hadiahh."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Keuntungan dari Penjualan/Penghasilan Harta</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpkeuntungan'])) {
												$tmpkeuntungan = $_SESSION['tmpkeuntungan'];
											}

											"<tr>";
											"<td>".end($tmpkeuntungan)."</td></tr>";
											$keuntungan = end($tmpkeuntungan);

											$keuntungan = number_format($keuntungan,0,",",".");

											$keuntungan = "Rp. " .$keuntungan;

											echo $keuntungan;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$keuntungann = $cek['keuntungan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($keuntungan == $keuntungann){
												
												echo "<strong><p style='color:blue'>".$keuntungann."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$keuntungann."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Penghasilan Lain</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpp_lain'])) {
												$tmpp_lain = $_SESSION['tmpp_lain'];
											}

											"<tr>";
											"<td>".end($tmpp_lain)."</td></tr>";
											$p_lain = end($tmpp_lain);

											$p_lain = number_format($p_lain,0,",",".");

											$p_lain = "Rp. " .$p_lain;

											echo $p_lain;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$penghasilan_lain = $cek['penghasilan_lain'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($p_lain == $penghasilan_lain){
												
												echo "<strong><p style='color:blue'>".$penghasilan_lain."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$penghasilan_lain."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 4 -->

									<!-- Halaman 5 -->

									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 5</strong></mark></p>

									<div class="row">

										<div class="col-sm-6">
											<p><strong>Penghasilan Neto Luar Negeri</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpluar_negeri'])) {
												$tmpluar_negeri = $_SESSION['tmpluar_negeri'];
											}

											"<tr>";
											"<td>".end($tmpluar_negeri)."</td></tr>";
											$luar_negeri = end($tmpluar_negeri);

											$luar_negeri = number_format($luar_negeri,0,",",".");

											$luar_negeri = "Rp. " .$luar_negeri;

											echo $luar_negeri;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$luarnegeri = $cek['p_neto_luar_negeri'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($luar_negeri == $luarnegeri){
												
												echo "<strong><p style='color:blue'>".$luarnegeri."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$luarnegeri."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 5 -->

									<!-- Halaman 6 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 6</strong></mark></p>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Bantuan/Sumbangan/Hibah</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpsumbangan'])) {
												$tmpsumbangan = $_SESSION['tmpsumbangan'];
											}

											"<tr>";
											"<td>".end($tmpsumbangan)."</td></tr>";
											$sumbangan = end($tmpsumbangan);

											$sumbangan = number_format($sumbangan,0,",",".");

											$sumbangan = "Rp. " .$sumbangan;

											echo $sumbangan;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$sumbangann = $cek['bantuan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($sumbangan == $sumbangann){
												
												echo "<strong><p style='color:blue'>".$sumbangann."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$sumbangann."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Warisan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpwarisan'])) {
												$tmpwarisan = $_SESSION['tmpwarisan'];
											}

											"<tr>";
											"<td>".end($tmpwarisan)."</td></tr>";
											$warisan = end($tmpwarisan);

											$warisan = number_format($warisan,0,",",".");

											$warisan = "Rp. " .$warisan;

											echo $warisan;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$warisann = $cek['warisan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($warisan == $warisann){
												
												echo "<strong><p style='color:blue'>".$warisann."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$warisann."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Bagian Laba Anggota Perseroan Komanditer tidak atas saham, persekutuan, perkumpulan, firma, kogsi</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmplaba_perseroan'])) {
												$tmplaba_perseroan = $_SESSION['tmplaba_perseroan'];
											}

											"<tr>";
											"<td>".end($tmplaba_perseroan)."</td></tr>";
											$laba_perseroan = end($tmplaba_perseroan);

											$laba_perseroan = number_format($laba_perseroan,0,",",".");

											$laba_perseroan = "Rp. " .$laba_perseroan;

											echo $laba_perseroan;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$labaperseroan = $cek['laba_perseroan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($laba_perseroan == $labaperseroan){
												
												echo "<strong><p style='color:blue'>".$labaperseroan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$labaperseroan."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Klaim Asuransi Kesehatan, Kecelakaan, Jiwa, Dwiguna, Beasiswa</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpasuransi'])) {
												$tmpasuransi = $_SESSION['tmpasuransi'];
											}

											"<tr>";
											"<td>".end($tmpasuransi)."</td></tr>";
											$asuransi = end($tmpasuransi);

											$asuransi = number_format($asuransi,0,",",".");

											$asuransi = "Rp. " .$asuransi;

											echo $asuransi;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$asuransii = $cek['asuransi'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($asuransi == $asuransii){
												
												echo "<strong><p style='color:blue'>".$asuransii."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$asuransii."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Beasiswa</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpbeasiswa'])) {
												$tmpbeasiswa = $_SESSION['tmpbeasiswa'];
											}

										 	"<tr>";
											"<td>".end($tmpbeasiswa)."</td></tr>";
											$beasiswa = end($tmpbeasiswa);

											$beasiswa = number_format($beasiswa,0,",",".");

											$beasiswa = "Rp. " .$beasiswa;

											echo $beasiswa;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$beasiswaa = $cek['beasiswa'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($beasiswa == $beasiswaa){
												
												echo "<strong><p style='color:blue'>".$beasiswaa."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$beasiswaa."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Penghasilan Lainnya yang tidak termasuk Objek Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppenghasilan_lain_tob'])) {
												$tmppenghasilan_lain_tob = $_SESSION['tmppenghasilan_lain_tob'];
											}

											"<tr>";
											"<td>".end($tmppenghasilan_lain_tob)."</td></tr>";
											$penghasilan_lain_tob = end($tmppenghasilan_lain_tob);

											$penghasilan_lain_tob = number_format($penghasilan_lain_tob,0,",",".");

											$penghasilan_lain_tob = "Rp. " .$penghasilan_lain_tob;

											echo $penghasilan_lain_tob;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);
											// mengubah nama harta didatabase
											$p_lain_tob = $cek['p_lain_obj_pajak'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($penghasilan_lain_tob == $p_lain_tob){
												
												echo "<strong><p style='color:blue'>".$p_lain_tob."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$p_lain_tob."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 6 -->

									<!-- Halaman 7 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 7</strong></mark></p>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Sumber/Jenis Penghasilan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpsumber_penghasilan'])) {
												$tmpsumber_penghasilan = $_SESSION['tmpsumber_penghasilan'];
											}

											echo "<tr>";
											echo "<td>".end($tmpsumber_penghasilan)."</td></tr>";
											$sumber_penghasilan = end($tmpsumber_penghasilan);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);											
											// mengubah nama harta didatabase
											$sumberpenghasilan = $cek['sumber_penghasilan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($sumber_penghasilan, $sumberpenghasilan) == 0){
												
												echo "<strong><p style='color:blue'>".$sumberpenghasilan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$sumberpenghasilan."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>DPP/Penghasilan Bruto</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpdpp'])) {
												$tmpdpp = $_SESSION['tmpdpp'];
											}

											echo "<tr>";
											echo "<td>".end($tmpdpp)."</td></tr>";
											$dpp = end($tmpdpp);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);		

											// mengubah nama harta didatabase
											$dpp1 = $cek['p_bruto'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($dpp == $dpp1){
												
												echo "<strong><p style='color:blue'>".$dpp1."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$dpp1."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>PPh Terutang</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppph_terutang'])) {
												$tmppph_terutang = $_SESSION['tmppph_terutang'];
											}

											echo "<tr>";
											echo "<td>".end($tmppph_terutang)."</td></tr>";
											$pph_terutang = end($tmppph_terutang);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);		

											// mengubah nama harta didatabase
											$pphterutang = $cek['pph_terutang'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($pph_terutang == $pphterutang){
												
												echo "<strong><p style='color:blue'>".$pphterutang."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$pphterutang."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 7 -->

									<!-- Halaman 8 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 8</strong></mark></p>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Kode Harta</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpkode_harta'])) {
												$tmpkode_harta = $_SESSION['tmpkode_harta'];
											}

											echo "<tr>";
											echo "<td>".end($tmpkode_harta)."</td></tr>";
											$kode_harta = end($tmpkode_harta);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);		
											// mengubah nama harta didatabase
											$kodeharta = $cek['kode_harta'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($kode_harta == $kodeharta){
												
												echo "<strong><p style='color:blue'>".$kodeharta."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$kodeharta."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Nama Harta</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpnama_harta'])) {
												$tmpnama_harta = $_SESSION['tmpnama_harta'];
											}

											echo "<tr>";
											echo "<td>".end($tmpnama_harta)."</td></tr>";
											$nama_harta = end($tmpnama_harta);
											//mengubah uppercase menjadi lowercase agar tetap dianggap benar 
											$kecil_nama_harta = strtolower($nama_harta);
											// echo $kecil_keterangan;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);		
											// mengubah nama harta didatabase
											$namaharta = $cek['nama_harta'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($namaharta, $nama_harta) == 0){
												
												echo "<strong><p style='color:blue'>".$namaharta."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$namaharta."</p></strong>";
												
											}
											?>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Tahun  Perolehan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmptahun_perolehan'])) {
												$tmptahun_perolehan = $_SESSION['tmptahun_perolehan'];
											}

											echo "<tr>";
											echo "<td>".end($tmptahun_perolehan)."</td></tr>";
											$tahun_perolehan = end($tmptahun_perolehan);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);		
											// mengubah nama harta didatabase
											$tahunperolehan = $cek['tahun_perolehan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($tahun_perolehan == $tahunperolehan){
												
												echo "<strong><p style='color:blue'>".$tahunperolehan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$tahunperolehan."</p></strong>";
												
											}
											?>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Harga Perolehan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpharga_perolehan'])) {
												$tmpharga_perolehan = $_SESSION['tmpharga_perolehan'];
											}

											echo "<tr>";
											echo "<td>".end($tmpharga_perolehan)."</td></tr>";
											$harga_perolehan = end($tmpharga_perolehan);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);		

											// mengubah nama harta didatabase
											$hargaperolehan = $cek['harga_perolehan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($harga_perolehan == $hargaperolehan){
												
												echo "<strong><p style='color:blue'>".$hargaperolehan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$hargaperolehan."</p></strong>";
												
											}
											?>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Keterangan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpketerangan'])) {
												$tmpketerangan = $_SESSION['tmpketerangan'];
											}


											echo "<tr>";
											echo "<td>".end($tmpketerangan)."</td></tr>";
											$keterangan = end($tmpketerangan);

											//mengubah uppercase menjadi lowercase agar tetap dianggap benar 
											$kecil_keterangan = strtolower($keterangan);
											// echo $kecil_keterangan;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);		

											// mengubah nama harta didatabase
											$keterangan1 = $cek['keterangan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($keterangan1, $keterangan) == 0 ){
												
												echo "<strong><p style='color:blue'>".$keterangan1."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$keterangan1."</p></strong>";
												
											}
											?>
										</div>

									</div>

									<br/>
									<!-- End Halaman 8 -->

									<!-- Halaman 9 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 9</strong></mark></p>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Kode Utang</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpkode_utang'])) {
												$tmpkode_utang = $_SESSION['tmpkode_utang'];
											}

											echo "<tr>";
											echo "<td>".end($tmpkode_utang)."</td></tr>";
											$kode_utang = end($tmpkode_utang);
											?>
										</div>

										<?php
										if (isset($_SESSION['npwp'])) {
											$npwp = $_SESSION['npwp'];
										}
											// mengambil data dari database
										$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

										$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


										$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
										$cek = mysqli_fetch_assoc($data);		
											// mengubah nama harta didatabase
										$kodeutang = $cek['kode_utang'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
										if($kode_utang == $kodeutang){

											echo "<strong><p style='color:blue'>".$kodeutang."</p></strong>";

										}else{

											echo "<strong><p style='color:red'>".$kodeutang."</p></strong>";

										}
										?>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Nama Pemberi Pinjaman</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpnama_pemberi_pinjaman'])) {
												$tmpnama_pemberi_pinjaman = $_SESSION['tmpnama_pemberi_pinjaman'];
											}

											echo "<tr>";
											echo "<td>".end($tmpnama_pemberi_pinjaman)."</td></tr>";
											$nama_pemberi_pinjaman = end($tmpnama_pemberi_pinjaman);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);		
											// mengubah nama harta didatabase
											$nama_pemberipinjaman = $cek['nama_peminjam'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($nama_pemberi_pinjaman, $nama_pemberipinjaman) == 0){
												
												echo "<strong><p style='color:blue'>".$nama_pemberipinjaman."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$nama_pemberipinjaman."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Alamat Pemberi Pinjaman</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpalamat_pemberi_pinjaman'])) {
												$tmpalamat_pemberi_pinjaman = $_SESSION['tmpalamat_pemberi_pinjaman'];
											}

											echo "<tr>";
											echo "<td>".end($tmpalamat_pemberi_pinjaman)."</td></tr>";
											$alamat_pemberi_pinjaman = end($tmpalamat_pemberi_pinjaman);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$alamat_pemberipinjaman = $cek['alamat_peminjam'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($alamat_pemberi_pinjaman, $alamat_pemberipinjaman) == 0){
												
												echo "<strong><p style='color:blue'>".$alamat_pemberipinjaman."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$alamat_pemberipinjaman."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Tahun Peminjaman</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmptahun_peminjaman'])) {
												$tmptahun_peminjaman = $_SESSION['tmptahun_peminjaman'];
											}

											echo "<tr>";
											echo "<td>".end($tmptahun_peminjaman)."</td></tr>";
											$tahun_peminjaman = end($tmptahun_peminjaman);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$tahunpeminjaman = $cek['tahun_peminjam'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($tahun_peminjaman == $tahunpeminjaman){
												
												echo "<strong><p style='color:blue'>".$tahunpeminjaman."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$tahunpeminjaman."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Jumlah</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpjumlah_utang'])) {
												$tmpjumlah_utang = $_SESSION['tmpjumlah_utang'];
											}

											echo "<tr>";
											echo "<td>".end($tmpjumlah_utang)."</td></tr>";
											$jumlah_utang = end($tmpjumlah_utang);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$jumlahutang = $cek['jumlah_pinjaman'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($jumlah_utang == $jumlahutang){
												
												echo "<strong><p style='color:blue'>".$jumlahutang."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$jumlahutang."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<br/>
									<!-- End Halaman 9 -->

									<!-- Halaman 10 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 10</strong></mark></p>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Nama Anggota Keluarga</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpnama_keluarga'])) {
												$tmpnama_keluarga = $_SESSION['tmpnama_keluarga'];
											}

											echo "<tr>";
											echo "<td>".end($tmpnama_keluarga)."</td></tr>";
											$nama_keluarga = end($tmpnama_keluarga);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$namakeluarga = $cek['nama_keluarga'];

												// session nama harta = harta di database
											if(strcasecmp($nama_keluarga, $namakeluarga) == 0){
												
												echo "<strong><p style='color:blue'>".$namakeluarga."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$namakeluarga."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>NIK Anggota Keluarga</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpnik_keluarga'])) {
												$tmpnik_keluarga = $_SESSION['tmpnik_keluarga'];
											}

											echo "<tr>";
											echo "<td>".end($tmpnik_keluarga)."</td></tr>";
											$nik_keluarga = end($tmpnik_keluarga);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$nikkeluarga = $cek['nik_keluarga'];

												// session nama harta = harta di database
											if($nik_keluarga == $nikkeluarga){
												
												echo "<strong><p style='color:blue'>".$nikkeluarga."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$nikkeluarga."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Hubungan Keluarga</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmphubungan_keluarga'])) {
												$tmphubungan_keluarga = $_SESSION['tmphubungan_keluarga'];
											}

											echo "<tr>";
											echo "<td>".end($tmphubungan_keluarga)."</td></tr>";
											$hubungan_keluarga = end($tmphubungan_keluarga);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);


											// mengubah nama harta didatabase
											$hubungankeluarga = $cek['hubungan_keluarga'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($hubungan_keluarga, $hubungankeluarga) == 0){
												
												echo "<strong><p style='color:blue'>".$hubungankeluarga."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$hubungankeluarga."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Pekerjaan Anggota Keluarga</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppekerjaan_keluarga'])) {
												$tmppekerjaan_keluarga = $_SESSION['tmppekerjaan_keluarga'];
											}

											echo "<tr>";
											echo "<td>".end($tmppekerjaan_keluarga)."</td></tr>";
											$pekerjaan_keluarga = end($tmppekerjaan_keluarga);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$pekerjaankeluarga = $cek['pekerjaan_keluarga'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($pekerjaan_keluarga, $pekerjaankeluarga) == 0){

												
												echo "<strong><p style='color:blue'>".$pekerjaankeluarga."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$pekerjaankeluarga."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<br/>
									<!-- End Halaman 10 -->

									<!-- Halaman 11 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 11</strong></mark></p>

									<div class="row">

										<div class="col-sm-6">
											<p><strong>Zakat Sumbangan Keagamaan yang Sifatnya Wajib</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpzakat_sumbangan'])) {
												$tmpzakat_sumbangan = $_SESSION['tmpzakat_sumbangan'];


											}



											"<tr>";
											"<td>".end($tmpzakat_sumbangan)."</td></tr>";
											$zakat_sumbangan = end($tmpzakat_sumbangan);

											$zakat_sumbangan = number_format($zakat_sumbangan,0,",",".");

											$zakat_sumbangan = "Rp. " .$zakat_sumbangan;

											echo $zakat_sumbangan;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$zakatsumbangan = $cek['zakat_keagamaan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($zakat_sumbangan == $zakatsumbangan){
												
												echo "<strong><p style='color:blue'>".$zakatsumbangan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$zakatsumbangan."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 11 -->

									<!-- Halaman 12 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 12</strong></mark></p>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Status Perkawinan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpstatus_perkawinan'])) {
												$tmpstatus_perkawinan = $_SESSION['tmpstatus_perkawinan'];
											}

											echo "<tr>";
											echo "<td>".end($tmpstatus_perkawinan)."</td></tr>";
											$status_perkawinan = end($tmpstatus_perkawinan);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$statusperkawinan = $cek['status_perkawinan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($status_perkawinan, $statusperkawinan) == 0){
												
												echo "<strong><p style='color:blue'>".$statusperkawinan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$statusperkawinan."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Status Kewajiban Perpajakan Suami-Isteri</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpstatus_pjk'])) {
												$tmpstatus_pjk = $_SESSION['tmpstatus_pjk'];
											}

											echo "<tr>";
											echo "<td>".end($tmpstatus_pjk)."</td></tr>";
											$status_pjk = end($tmpstatus_pjk);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$statuspjk = $cek['status_pjk_si'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($status_pjk, $statuspjk) == 0){
												
												echo "<strong><p style='color:blue'>".$statuspjk."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$statuspjk."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>NPWP Istri/Suami</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpnpwp_istri_suami'])) {
												$tmpnpwp_istri_suami = $_SESSION['tmpnpwp_istri_suami'];
											}

											echo "<tr>";
											echo "<td>".end($tmpnpwp_istri_suami)."</td></tr>";
											$npwp_istri_suami = end($tmpnpwp_istri_suami);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$npwp_si = $cek['npwp_si'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($npwp_istri_suami == $npwp_si){
												
												echo "<strong><p style='color:blue'>".$npwp_si."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$npwp_si."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Penghasilan Tidak Kena Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpptkp'])) {
												$tmpptkp = $_SESSION['tmpptkp'];
											}

											echo "<tr>";
											echo "<td>".end($tmpptkp)."</td></tr>";
											$ptkp = end($tmpptkp);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$ptkp1 = $cek['gol_ptkp'];

												// session nama harta = harta di database
											if(strcasecmp($ptkp, $ptkp1) == 0){
												
												echo "<strong><p style='color:blue'>".$ptkp1."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$ptkp1."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Jumlah Tanggungan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpjumlah_tanggungan'])) {
												$tmpjumlah_tanggungan = $_SESSION['tmpjumlah_tanggungan'];
											}

											echo "<tr>";
											echo "<td>".end($tmpjumlah_tanggungan)."</td></tr>";
											$jumlah_tanggungan = end($tmpjumlah_tanggungan);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$jumlahtanggungan = $cek['jml_tanggungan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($jumlah_tanggungan == $jumlahtanggungan){
												
												echo "<strong><p style='color:blue'>".$jumlahtanggungan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$jumlahtanggungan."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Lapor Sebagai</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmplapor_sebagai'])) {
												$tmplapor_sebagai = $_SESSION['tmplapor_sebagai'];
											}

											echo "<tr>";
											echo "<td>".end($tmplapor_sebagai)."</td></tr>";
											$lapor_sebagai = end($tmplapor_sebagai);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$laporsebagai = $cek['lapor_sebagai'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if(strcasecmp($lapor_sebagai, $laporsebagai) == 0){
												
												echo "<strong><p style='color:blue'>".$laporsebagai."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$laporsebagai."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Penghasilan Neto Suami</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpneto_suami'])) {
												$tmpneto_suami = $_SESSION['tmpneto_suami'];
											}

											"<tr>";
											"<td>".end($tmpneto_suami)."</td></tr>";
											$neto_suami = end($tmpneto_suami);

											$neto_suami = number_format($neto_suami,0,",",".");

											$neto_suami = "Rp. " .$neto_suami;

											echo $neto_suami;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$netosuami = $cek['neto_suami'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($neto_suami == $netosuami){
												
												echo "<strong><p style='color:blue'>".$netosuami."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$netosuami."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Penghasilan Neto Istri</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpneto_istri'])) {
												$tmpneto_istri = $_SESSION['tmpneto_istri'];
											}

											"<tr>";
											"<td>".end($tmpneto_istri)."</td></tr>";
											$neto_istri = end($tmpneto_istri);

											$neto_istri = number_format($neto_istri,0,",",".");

											$neto_istri = "Rp. " .$neto_istri;

											echo $neto_istri;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$netoistri = $cek['neto_istri'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($neto_istri == $netoistri){
												
												echo "<strong><p style='color:blue'>".$netoistri."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$netoistri."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 12 -->

									<!-- Halaman 13 -->

									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 13</strong></mark></p>

									<div class="row">

										<div class="col-sm-6">
											<p><strong>Pengembalian/Pengurangan PPh Pasal 24 yang telah dikreditkan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppengurangan_pph21'])) {
												$tmppengurangan_pph21 = $_SESSION['tmppengurangan_pph21'];
											}

											"<tr>";
											"<td>".end($tmppengurangan_pph21)."</td></tr>";
											$pengurangan_pph21 = end($tmppengurangan_pph21);
											
											$pengurangan_pph21 = number_format($pengurangan_pph21,0,",",".");

											$pengurangan_pph21 = "Rp. " .$pengurangan_pph21;

											echo $pengurangan_pph21;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$penguranganpph21 = $cek['kembali_pph_24'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($pengurangan_pph21 == $penguranganpph21){
												
												echo "<strong><p style='color:blue'>".$penguranganpph21."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$penguranganpph21."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 13 -->

									<!-- Halaman 14 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 14</strong></mark></p>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>PPh yang dibayar Sendiri --> PPh Pasal 25</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppembayaran_pph25'])) {
												$tmppembayaran_pph25 = $_SESSION['tmppembayaran_pph25'];
											}

											"<tr>";
											"<td>".end($tmppembayaran_pph25)."</td></tr>";
											$pembayaran_pph25 = end($tmppembayaran_pph25);

											$pembayaran_pph25 = number_format($pembayaran_pph25,0,",",".");

											$pembayaran_pph25 = "Rp. " .$pembayaran_pph25;

											echo $pembayaran_pph25;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$pembayaranpph25 = $cek['bayar_pph_25'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($pembayaran_pph25 == $pembayaranpph25){
												
												echo "<strong><p style='color:blue'>".$pembayaranpph25."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$pembayaranpph25."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Pph Yang dibayar Sendiri --> STP Pasal 25 (Hanya Pokok Pajak)</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppembayaran_stp_pph25'])) {
												$tmppembayaran_stp_pph25 = $_SESSION['tmppembayaran_stp_pph25'];
											}

											"<tr>";
											"<td>".end($tmppembayaran_stp_pph25)."</td></tr>";
											$pembayaran_stp_pph25 = end($tmppembayaran_stp_pph25);

											$pembayaran_stp_pph25 = number_format($pembayaran_stp_pph25,0,",",".");

											$pembayaran_stp_pph25 = "Rp. " .$pembayaran_stp_pph25;

											echo $pembayaran_stp_pph25;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$pembayaran_stppph25 = $cek['bayar_stp_pph_25'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($pembayaran_stp_pph25 == $pembayaran_stppph25){
												
												echo "<strong><p style='color:blue'>".$pembayaran_stppph25."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$pembayaran_stppph25."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 14 -->

									<!-- Halaman 15 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 15</strong></mark></p>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Jumlah Penghasilan Neto setelah Pengurangan Zakat/Sumbangan Keagamaan yang sifatnya Wajib (4-5)</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmphasil_pengurangan_neto_zakat'])) {
												$tmphasil_pengurangan_neto_zakat = $_SESSION['tmphasil_pengurangan_neto_zakat'];
											}

											echo "<tr>";
											echo "<td>".end($tmphasil_pengurangan_neto_zakat)."</td></tr>";
											$hasil_pengurangan_neto_zakat = end($tmphasil_pengurangan_neto_zakat);

											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$neto_zakat = $cek['neto_kurang_zakat'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($hasil_pengurangan_neto_zakat == $neto_zakat){
												
												echo "<strong><p style='color:blue'>".$neto_zakat."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$neto_zakat."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Penghasilan Tidak Kena Pajak/Jumlah Tanggungan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpptkp_jml_tanggungan'])) {
												$tmpptkp_jml_tanggungan = $_SESSION['tmpptkp_jml_tanggungan'];
											}

											echo "<tr>";
											echo "<td>".end($tmpptkp_jml_tanggungan)."</td></tr>";
											$ptkp_jml_tanggungan = end($tmpptkp_jml_tanggungan);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$ptkp_tanggungan = $cek['ptkp_tanggungan'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($ptkp_jml_tanggungan == $ptkp_tanggungan){
												
												echo "<strong><p style='color:blue'>".$ptkp_tanggungan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$ptkp_tanggungan."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Penghasilan Kena Pajak (6-7)</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppkp'])) {
												$tmppkp = $_SESSION['tmppkp'];
											}

											"<tr>";
											"<td>".end($tmppkp)."</td></tr>";
											$pkp = end($tmppkp);

											$pkp = number_format($pkp,0,",",".");

											$pkp = "Rp. " .$pkp;

											echo $pkp;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$pkp1 = $cek['pkp'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($pkp == $pkp1){
												
												echo "<strong><p style='color:blue'>".$pkp1."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$pkp1."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>PPh Terutang (Tarif Pasal 17 UU PPh *  8)</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppph_terutang_tarif'])) {
												$tmppph_terutang_tarif = $_SESSION['tmppph_terutang_tarif'];
											}

											 "<tr>";
											 "<td>".end($tmppph_terutang_tarif)."</td></tr>";
											$pph_terutang_tarif = end($tmppph_terutang_tarif);

											$pph_terutang_tarif = number_format($pph_terutang_tarif,0,",",".");

											$pph_terutang_tarif = "Rp. " .$pph_terutang_tarif;

											echo $pph_terutang_tarif;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$pph_tarif = $cek['pph_terutang_tarif'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($pph_terutang_tarif == $pph_tarif){
												
												echo "<strong><p style='color:blue'>".$pph_tarif."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$pph_tarif."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Jumlah PPh Terutang (9+10)</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpjumlah_pph_terutang'])) {
												$tmpjumlah_pph_terutang = $_SESSION['tmpjumlah_pph_terutang'];
											}

											"<tr>";
											"<td>".end($tmpjumlah_pph_terutang)."</td></tr>";
											$jumlah_pph_terutang = end($tmpjumlah_pph_terutang);

											$jumlah_pph_terutang = number_format($jumlah_pph_terutang,0,",",".");

											$jumlah_pph_terutang = "Rp. " .$jumlah_pph_terutang;

											echo $jumlah_pph_terutang;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$jmlpph_terutang = $cek['jml_pph_terutang'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($jumlah_pph_terutang == $jmlpph_terutang){
												
												echo "<strong><p style='color:blue'>".$jmlpph_terutang."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$jmlpph_terutang."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>PPh yang dipotong/dipungut pihak lain/ditanggung pemerintah dan/atau Kredit Pajak Luar Negeri dan/atau terutang di luar negeri</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppph_dipotong_pihak_lain'])) {
												$tmppph_dipotong_pihak_lain = $_SESSION['tmppph_dipotong_pihak_lain'];
											}

											echo "<tr>";
											echo "<td>".end($tmppph_dipotong_pihak_lain)."</td></tr>";
											$pph_dipotong_pihak_lain = end($tmppph_dipotong_pihak_lain);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$pph_dipotong_lain = $cek['total_jml_pph_dipotong'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($pph_dipotong_pihak_lain == $pph_dipotong_lain){
												
												echo "<strong><p style='color:blue'>".$pph_dipotong_lain."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$pph_dipotong_lain."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>PPh yang Harus Dibayar Sendiri</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppph_dibayar_sendiri'])) {
												$tmppph_dibayar_sendiri = $_SESSION['tmppph_dibayar_sendiri'];
											}

											echo "<tr>";
											echo "<td>".end($tmppph_dibayar_sendiri)."</td></tr>";
											$pph_dibayar_sendiri = end($tmppph_dibayar_sendiri);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$pphbayar_sendiri = $cek['pph_dibayar_sendiri'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($pph_dibayar_sendiri == $pphbayar_sendiri){
												
												echo "<strong><p style='color:blue'>".$pphbayar_sendiri."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$pphbayar_sendiri."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Jumlah Kredit Pajak (14a+14b+14c)</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpjumlah_kredit'])) {
												$tmpjumlah_kredit = $_SESSION['tmpjumlah_kredit'];
											}

											echo "<tr>";
											echo "<td>".end($tmpjumlah_kredit)."</td></tr>";
											$jumlah_kredit = end($tmpjumlah_kredit);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$jmlkredit = $cek['jumlah_kredit'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($jumlah_kredit == $jmlkredit){
												
												echo "<strong><p style='color:blue'>".$jmlkredit."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$jmlkredit."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Status Hasil</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpstatus_hasil_s'])) {
												$tmpstatus_hasil_s = $_SESSION['tmpstatus_hasil_s'];
											}

											echo "<tr>";
											echo "<td>".end($tmpstatus_hasil_s)."</td></tr>";
											$status_hasil_s = end($tmpstatus_hasil_s);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$statushasil = $cek['status_hasil'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($status_hasil_s == $statushasil){
												
												echo "<strong><p style='color:blue'>".$statushasil."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$statushasil."</p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<p><strong>Jumlah Hasil Akhir</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpjumlah_hasil_akhir'])) {
												$tmpjumlah_hasil_akhir = $_SESSION['tmpjumlah_hasil_akhir'];
											}

											echo "<tr>";
											echo "<td>".end($tmpjumlah_hasil_akhir)."</td></tr>";
											$jumlah_hasil_akhir = end($tmpjumlah_hasil_akhir);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


											$data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id_spt_1770s = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama harta didatabase
											$jml_hasilakhir = $cek['jumlah_hasil'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
											if($jumlah_hasil_akhir == $jml_hasilakhir){
												
												echo "<strong><p style='color:blue'>".$jml_hasilakhir."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'>".$jml_hasilakhir."</p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 15 -->

									<br/>
									<br/>
								</div>
								<!-- end card body -->
							</div>
							<!-- end card bg -->


						</div>
						<!-- end panel body -->
					</div> 
					<!-- end panel panel -->
				</div>
				<!-- end tab pane -->
			</div>
			<!-- end tab content -->
		</form>
		<!-- end form -->
	</div>
	<!-- end container box -->
	<script src="script.js"></script>
	<!-- Fontawesome JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php include'footer 1.html'; ?>
</body>
</html>

