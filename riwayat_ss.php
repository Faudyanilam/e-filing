<?php 
error_reporting(false);
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Riwayat Pelaporan</title>
	<link href="assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->

	<link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/>

	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
	<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  

	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="1770S/bootstrap/js/jquery.js"></script>
	<script src="1770S/bootstrap/js/bootstrap.min.js"></script>  
 <!--  <script src="jquery.min.js"></script>  
 	<script src="jquery-ui.js"></script> -->
 </head>
</head>
<body class="bg-body">

	<?php include'header1.html'; ?>
	<?php include'koneksi.php';?>
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
									<b>Hasil Jawaban Pelaporan SPT 1770 SS</b>
								</div>
								<!-- end card header -->


								<!-- card body -->
								<div class="card-body card-body_2">  
									<br/>
									<div class="row">
										<div class="col-sm-4">
											<p style="font-size: 16px; color:orange;"><strong>Pertanyaan</strong></p>
										</div>

										<div class="col-sm-3">
											<p style="font-size: 16px; color:orange;"><strong>Jawaban Anda</strong></p>
										</div>

										<div class="col-sm-3">
											<p style="font-size: 16px; color:orange;"><strong>Kunci Jawaban</strong></p>
										</div>

										<div class="col-sm-2">
											<p style="font-size: 16px; color:orange;"><strong>Status</strong></p>
										</div>
									</div>
									<hr>
									
									<!-- Halaman 1 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 1</strong></mark></p>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>Tahun Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmptahun_pajak_ss'])) {
												$tmptahun_pajak_ss = $_SESSION['tmptahun_pajak_ss'];
											}

											echo "<tr>";
											echo "<td>".end($tmptahun_pajak_ss)."</td></tr>";
											$tahun_pajak_ss = end($tmptahun_pajak_ss);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database


											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											$thn_pajak = $cek['thn_pajak'];
												// session nama harta = harta di database
											if($tahun_pajak_ss== $thn_pajak){
												
												echo "<strong><p style='color:black'>".$thn_pajak."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$thn_pajak."</p></strong>";

												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$thn_pajak = $cek['thn_pajak'];
												// session nama harta = harta di database
											if($tahun_pajak_ss== $thn_pajak){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>Status SPT</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpstatus_spt_ss'])) {
												$tmpstatus_spt_ss = $_SESSION['tmpstatus_spt_ss'];
											}

											echo "<tr>";
											echo "<td>".end($tmpstatus_spt_ss)."</td></tr>";
											$status_spt_ss = end($tmpstatus_spt_ss);
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$status_spt = $cek['status_spt'];
												// session = database
											if( strcasecmp($status_spt_ss, $status_spt) == 0 ){
												
												echo "<strong><p style='color:black'>".$status_spt."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$status_spt."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											$status_spt = $cek['status_spt'];
												// session nama harta = harta di database
											if( strcasecmp($status_spt_ss, $status_spt) == 0 ){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

												
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
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
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											//mengubah nama database
											$pembetulan_kee = $cek['pembetulan_ke'];

												// session  = database
											if($pembetulan_ke== $pembetulan_kee){
												
												echo "<strong><p style='color:black'>".$pembetulan_kee."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$pembetulan_kee."</p></strong>";

												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											//mengubah nama database
											$pembetulan_kee = $cek['pembetulan_ke'];

												// session  = database
											if($pembetulan_ke == $pembetulan_kee){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";
												
											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 1 -->


									<!-- Halaman 2 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 2</strong></mark></p>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>1. Penghasilan Bruto Dalam Negeri Sehubungan Dengan Pekerjaan dan Penghasilan Neto Dalam Negeri</strong></p>
										</div>

										<div class="col-sm-3">
											<?php 
											if ( isset($_SESSION['tmpangkaSatuu'])) {
												$tmpangkaSatuu = $_SESSION['tmpangkaSatuu'];
											}


											"<tr>";
											"<td>".end($tmpangkaSatuu)."</td></tr>";
											$angkaSatuu = end($tmpangkaSatuu);

											
											// $angkaEnam = number_format($angkaEnam,0,",",".");

											$angkaSatuu = "Rp. " .$angkaSatuu;

											echo $angkaSatuu;
											// echo $tmpangkaSatuu;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);


											// mengubah nama didatabase
											$penghasilan_bruto= $cek['penghasilan_bruto'];
												// session = database
											if( $angkaSatuu == $penghasilan_bruto){
												
												echo "<strong><p style='color:black'>".$penghasilan_bruto."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$penghasilan_bruto."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$penghasilan_bruto= $cek['penghasilan_bruto'];
												// session = database
											if( $angkaSatuu == $penghasilan_bruto){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";
											}
											?>

										</div>

									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>2. Pengurangan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpangkaDua'])) {
												$tmpangkaDua = $_SESSION['tmpangkaDua'];
											}


											"<tr>";
											"<td>".end($tmpangkaDua)."</td></tr>";
											$angkaDua = end($tmpangkaDua);

											
											// $angkaSatu = number_format($angkaSatu,0,",",".");

											$angkaDua = "Rp. " .$angkaDua;

											echo $angkaDua;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka2 = $_SESSION['tmpangkaDua'];
											// mengubah nama didatabase
											$pengurangann= $cek['pengurangan'];
												// session = database
											if(strcasecmp($angkaDua, $pengurangann) == 0){
												
												echo "<strong><p style='color:black'>".$pengurangann."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$pengurangann."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka2 = $_SESSION['tmpangkaDua'];

											// mengubah nama didatabase
											$pengurangann= $cek['pengurangan'];
												// session = database
											if(strcasecmp($angkaDua, $pengurangann) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>3. Penghasilan Tidak Kena Pajak</strong></p>
										</div>
										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpangkaTiga'])) {
												$tmpangkaTiga = $_SESSION['tmpangkaTiga'];
											}


											"<tr>";
											"<td>".end($tmpangkaTiga)."</td></tr>";
											$angkaTiga = end($tmpangkaTiga);

											
											$angkaTiga = number_format($angkaTiga,0,",",".");

											$angkaTiga = "Rp. " .$angkaTiga;

											echo $angkaTiga;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka3 = $_SESSION['tmpangkaTiga'];

											// mengubah nama didatabase
											$ptkpp= $cek['ptkp'];
												// session = database
											if(strcasecmp($angkaTiga, $ptkpp) == 0){
												
												echo "<strong><p style='color:black'>".$ptkpp."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$ptkpp."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka3 = $_SESSION['tmpangkaTiga'];

											// mengubah nama didatabase
											$ptkpp= $cek['ptkp'];
												// session = database
											if(strcasecmp($angkaTiga, $ptkpp) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";
											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>4. Penghasilan Kena Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if ( isset($_SESSION['tmpangkaEmpat']) ) {
												$tmpangkaEmpat = $_SESSION['tmpangkaEmpat'];
											}


											"<tr>";
											"<td>".end($tmpangkaEmpat)."</td></tr>";
											$angkaEmpat = end($tmpangkaEmpat);

											
											$angkaEmpat = number_format($angkaEmpat,0,",",".");

											$angkaEmpat = "Rp. " .$angkaEmpat;

											echo $angkaEmpat;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka4 = $_SESSION['tmpangkaEmpat'];

											// mengubah nama didatabase
											$pkp= $cek['pkp'];
												// session = database
											if(strcasecmp($angkaEmpat, $pkp) == 0){
												
												echo "<strong><p style='color:black'>".$pkp."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$pkp."</p></strong>";

											}
											?>
										</div>


										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											$angka4 = $_SESSION['tmpangkaEmpat'];

											// mengubah nama didatabase
											$pkp= $cek['pkp'];

												// session = database
											if( strcasecmp($angkaEmpat, $pkp) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>


									<div class="row">
										<div class="col-sm-4">
											<p><strong>5. Pajak Penghasilan Terhutang</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpangkaLima'])) {
												$tmpangkaLima = $_SESSION['tmpangkaLima'];
											}


											"<tr>";
											"<td>".end($tmpangkaLima)."</td></tr>";
											$angkaLima = end($tmpangkaLima);

											
											$angkaLima = number_format($angkaLima,0,",",".");

											$angkaLima = "Rp. " .$angkaLima;

											echo $angkaLima;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka5 = $_SESSION['tmpangkaLima'];

											// mengubah nama didatabase
											$pp_terutang= $cek['pp_terutang'];
												// session = database
											if(strcasecmp($angkaLima, $pp_terutang) == 0){
												
												echo "<strong><p style='color:black'>".$pp_terutang."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$pp_terutang."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka5 = $_SESSION['tmpangkaLima'];

											// mengubah nama didatabase
											$pp_terutang= $cek['pp_terutang'];
												// session = database
											if(strcasecmp($angkaLima, $pp_terutang) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>6. Pajak Penghasilan yang dipotong</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpangkaEnam'])) {
												$tmpangkaEnam = $_SESSION['tmpangkaEnam'];
											}


											"<tr>";
											"<td>".end($tmpangkaEnam)."</td></tr>";
											$angkaEnam = end($tmpangkaEnam);

											
											// $angkaEnam = number_format($angkaEnam,0,",",".");

											$angkaEnam = "Rp. " .$angkaEnam;

											echo $angkaEnam;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka6 = $_SESSION['tmpangkaEnam'];

											// mengubah nama didatabase
											$pp_terutang= $cek['pp_terutang'];
												// session = database
											if(strcasecmp($angkaEnam, $pp_terutang) == 0){
												
												echo "<strong><p style='color:black'>".$pp_terutang."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$pp_terutang."</p></strong>";

											}
											?>
										</div>
										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka6 = $_SESSION['tmpangkaEnam'];

											// mengubah nama didatabase
											$pp_terutang= $cek['pp_terutang'];
												// session = database
											if(strcasecmp($angkaEnam, $pp_terutang) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>7. Status Hasil</strong></p>
										</div>

										<div class="col-sm-3">
											<?php 
											// if (isset($_SESSION['tmpstatus_hasil_ss'])) {
											// 	$tmpstatus_hasil_ss = $_SESSION['tmpstatus_hasil_ss'];
											// }

											// echo "<tr>";
											// echo "<td>".end($tmpstatus_hasil_ss)."</td></tr>";
											// $status_hasil_ss = end($tmpstatus_hasil_ss);
											$status_hasil_ss = "Nihil";
											echo $status_hasil_ss;
											?>


										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$status= $cek['status'];
												// session = database
											if(strcasecmp($status_hasil_ss, $status) == 0){
												
												echo "<strong><p style='color:black'>".$status."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$status."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$status= $cek['status'];
												// session = database
											if(strcasecmp($status_hasil_ss, $status) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>8. Jumlah Hasil Akhir</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpangkaTujuh'])) {
												$tmpangkaTujuh = $_SESSION['tmpangkaTujuh'];
											}


											"<tr>";
											"<td>".end($tmpangkaTujuh)."</td></tr>";
											$angkaTujuh = end($tmpangkaTujuh);

											
											// $angkaEnam = number_format($angkaEnam,0,",",".");

											$angkaTujuh = "Rp. " .$angkaTujuh;

											echo $angkaTujuh;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $angka7 = $_SESSION['tmpangkaTujuh'];
											// mengubah nama didatabase
											$total= $cek['total'];
												// session = database
											if(strcasecmp($angkaTujuh, $total) == 0){
												
												echo "<strong><p style='color:black'>".$total."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$total."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$total= $cek['total'];
												// session = database
											if(strcasecmp($angkaTujuh, $total) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 2 -->

									<!-- Halaman 3 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 3</strong></mark></p>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>8. Dasar Pengenaan Pajak/Penghasilan Bruto Pajak Penghasilan Final</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppenghasilan_bruto'])) {
												$tmppenghasilan_bruto = $_SESSION['tmppenghasilan_bruto'];
											}


											"<tr>";
											"<td>".end($tmppenghasilan_bruto)."</td></tr>";
											$penghasilan_bruto = end($tmppenghasilan_bruto);

											
											// $angkaEnam = number_format($angkaEnam,0,",",".");

											$penghasilan_bruto = "Rp. " .$penghasilan_bruto;

											echo $penghasilan_bruto;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);


											// mengubah nama didatabase
											$pp_final= $cek['pp_final'];
												// session = database
											if(strcasecmp($penghasilan_bruto, $pp_final) == 0){
												
												echo "<strong><p style='color:black'>".$pp_final."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$pp_final."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$pp_final= $cek['pp_final'];
												// session = database
											if(strcasecmp($penghasilan_bruto, $pp_final) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>9. Pajak Penghasilan Final Terutang</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmppenghasilan_final'])) {
												$tmppenghasilan_final = $_SESSION['tmppenghasilan_final'];
											}


											"<tr>";
											"<td>".end($tmppenghasilan_final)."</td></tr>";
											$penghasilan_final = end($tmppenghasilan_final);

											
											// $angkaEnam = number_format($angkaEnam,0,",",".");

											$penghasilan_final = "Rp. " .$penghasilan_final;

											echo $penghasilan_final;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$pp_final_terutang= $cek['pp_final_terutang'];
												// session = database
											if(strcasecmp($penghasilan_final, $pp_final_terutang) == 0){
												
												echo "<strong><p style='color:black'>".$pp_final_terutang."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$pp_final_terutang."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$pp_final_terutang= $cek['pp_final_terutang'];
												// session = database
											if(strcasecmp($penghasilan_final, $pp_final_terutang) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>10. Penghasilan yang Dikecualikan dari Objek Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpdikecualikan_obj_pajak'])) {
												$tmpdikecualikan_obj_pajak = $_SESSION['tmpdikecualikan_obj_pajak'];
											}


											"<tr>";
											"<td>".end($tmpdikecualikan_obj_pajak)."</td></tr>";
											$dikecualikan_obj_pajak = end($tmpdikecualikan_obj_pajak);

											
											// $angkaEnam = number_format($angkaEnam,0,",",".");

											$dikecualikan_obj_pajak = "Rp. " .$dikecualikan_obj_pajak;

											echo $dikecualikan_obj_pajak;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$p_objek_pajak= $cek['p_objek_pajak'];
												// session = database
											if(strcasecmp($dikecualikan_obj_pajak, $p_objek_pajak) == 0){
												
												echo "<strong><p style='color:black'>".$p_objek_pajak."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$p_objek_pajak."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// mengubah nama didatabase
											$p_objek_pajak= $cek['p_objek_pajak'];
												// session = database
											if(strcasecmp($dikecualikan_obj_pajak, $p_objek_pajak) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 3 -->

									<!-- Halaman 4 -->
									<p style="font-size: 16px"><mark class="mark1"><strong>Halaman 4</strong></mark></p>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>11.Jumlah Keseluruhan Harta yang Dimiliki pada akhir Tahun Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpseluruh_harta'])) {
												$tmpseluruh_harta = $_SESSION['tmpseluruh_harta'];
											}


											"<tr>";
											"<td>".end($tmpseluruh_harta)."</td></tr>";
											$seluruh_harta = end($tmpseluruh_harta);

											
											// $angkaEnam = number_format($angkaEnam,0,",",".");

											$seluruh_harta = "Rp. " .$seluruh_harta;

											echo $seluruh_harta;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $semua_harta = $_SESSION['tmpseluruh_harta'];
											// mengubah nama didatabase
											$jml_harta= $cek['jml_harta'];
												// session = database
											if(strcasecmp($seluruh_harta, $jml_harta) == 0){
												
												echo "<strong><p style='color:black'>".$jml_harta."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$jml_harta."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $semua_harta = $_SESSION['tmpseluruh_harta'];

											// mengubah nama didatabase
											$jml_harta= $cek['jml_harta'];
												// session = database
											if(strcasecmp($seluruh_harta, $jml_harta) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>12. Jumlah Keseluruhan Kewajiban/Utang pada akhir Tahun Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php if (isset($_SESSION['tmpkewajiban_utang'])) {
												$tmpkewajiban_utang = $_SESSION['tmpkewajiban_utang'];
											}


											"<tr>";
											"<td>".end($tmpkewajiban_utang)."</td></tr>";
											$kewajiban_utang = end($tmpkewajiban_utang);

											
											// $angkaEnam = number_format($angkaEnam,0,",",".");

											$kewajiban_utang = "Rp. " .$kewajiban_utang;

											echo $kewajiban_utang;
											?>
										</div>

										<div class="col-sm-3">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $wajib_utang = $_SESSION['tmpkewajiban_utang'];
											// mengubah nama didatabase
											$jml_kwj_utang= $cek['jml_kwj_utang'];
												// session = database
											if(strcasecmp($kewajiban_utang, $jml_kwj_utang) == 0){
												
												echo "<strong><p style='color:black'>".$jml_kwj_utang."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$jml_kwj_utang."</p></strong>";

											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id_spt_1770ss = '$npwp'");
											$cek = mysqli_fetch_assoc($data);

											// $wajib_utang = $_SESSION['tmpkewajiban_utang'];

											// mengubah nama didatabase
											$jml_kwj_utang= $cek['jml_kwj_utang'];
												// session = database
											if(strcasecmp($kewajiban_utang, $jml_kwj_utang) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></p></strong>";

											}
											?>
										</div>
									</div>
									<br/>
									<!-- End Halaman 4 -->


									<br/>
									<br/>

									<div class="form-group row" style="padding-bottom: 	15px">
										<div style="padding-right: 20px;" align="right" >
											<a href="lapor_ss.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"><small>Selesai</small></button>
											</a>
										</div>
										
									</div>
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

