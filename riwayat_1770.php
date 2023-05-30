<?php session_start(); error_reporting(false);?>
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
									<b>Hasil Jawaban Pelaporan SPT 1770</b>
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


									<div class="row">

										<div class="col-sm-4">
											<p><strong>Jenis Formulir</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['jns_spt']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$jns_spt = $_SESSION['jns_spt'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$jns_formulir = $cek['jns_formulir'];


												// session nama harta = harta di database
											if($jns_spt == $jns_formulir){
												
												echo "<strong><p style='color:black'>".$jns_formulir."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$jns_formulir."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$jns_spt = $_SESSION['jns_spt'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$jns_formulir = $cek['jns_formulir'];


												// session nama harta = harta di database
											if($jns_spt == $jns_formulir){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>

									<!-- <hr> -->

									<div class="row">

										<div class="col-sm-4">
											<p><strong>Tahun Pajak</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['thn_pjk']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$thn_pjk = $_SESSION['thn_pjk'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$tahun_pajak = $cek['tahun_pajak'];


												// session nama harta = harta di database
											if($thn_pjk == $tahun_pajak){
												
												echo "<strong><p style='color:black'>".$tahun_pajak."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$tahun_pajak."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$thn_pjk = $_SESSION['thn_pjk'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$tahun_pajak = $cek['tahun_pajak'];
											

												// session nama harta = harta di database
											if($thn_pjk == $tahun_pajak){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>Pembetulan Ke-</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['pembetulan_ke']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$pembetulan_kee = $_SESSION['pembetulan_ke'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$pembetulan_ke = $cek['pembetulan_ke'];


												// session nama harta = harta di database
											if($pembetulan_kee == $pembetulan_ke){
												
												echo "<strong><p style='color:black'>".$pembetulan_ke."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$pembetulan_ke."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$pembetulan_kee = $_SESSION['pembetulan_ke'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$pembetulan_ke = $cek['pembetulan_ke'];


												// session nama harta = harta di database
											if($pembetulan_kee == $pembetulan_ke){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
											}
											?>
										</div>

									</div>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>Status SPT</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['status_spt']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$status_sptt = $_SESSION['status_spt'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$status_spt = $cek['status_spt'];


												// session nama harta = harta di database
											if(strcasecmp($status_sptt, $status_spt) == 0){
												
												echo "<strong><p style='color:black'>".$status_spt."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$status_spt."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$status_sptt = $_SESSION['status_spt'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$status_spt = $cek['status_spt'];


												// session nama harta = harta di database
											if(strcasecmp($status_sptt, $status_spt) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>Jumlah</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['jml']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$jml = $_SESSION['jml'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$jumlah = $cek['jumlah'];


												// session nama harta = harta di database
											if($jml == $jumlah){
												
												echo "<strong><p style='color:black'>".$jumlah."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$jumlah."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$jml = $_SESSION['jml'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$jumlah = $cek['jumlah'];


												// session nama harta = harta di database
											if($jml == $jumlah){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
												
											}
											?>
										</div>


									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>Catatan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['catatan'] ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$catatann = $_SESSION['catatan'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$catatan = $cek['catatan'];


												// session nama harta = harta di database
											if(strcasecmp($catatann, $catatan) == 0){
												
												echo "<strong><p style='color:black'>".$catatan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$catatan."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$catatann = $_SESSION['catatan'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_hasil_lapor_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$catatan = $cek['catatan'];


												// session nama harta = harta di database
											if(strcasecmp($catatann, $catatan) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>

									<!-- file spt 1770 -->
									<div class="row">

										<div class="col-sm-4">
											<p><strong>File SPT</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['file_spt_1770']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$file_spt_1770 = $_SESSION['file_spt_1770'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$file_spt = $cek['file_spt'];


												// session nama harta = harta di database
											if($file_spt_1770 == $file_spt){
												
												echo "<strong><p style='color:black'>".$file_spt."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$file_spt."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$file_spt_1770 = $_SESSION['file_spt_1770'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$file_spt = $cek['file_spt'];


												// session nama harta = harta di database
											if($file_spt_1770 == $file_spt){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>
									<!-- END file spt 1770 -->
									
									<!-- Lampiran 1 -->
									<div class="row">

										<div class="col-sm-4">
											<p><strong>Lampiran 1</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['lampiran_1']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$lamp_1 = $_SESSION['lampiran_1'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$lampiran_1 = $cek['lampiran_1'];


												// session nama harta = harta di database
											if($lamp_1 == $lampiran_1){
												
												echo "<strong><p style='color:black'>".$lampiran_1."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$lampiran_1."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$lamp = $_SESSION['lampiran_1'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$lampiran_1 = $cek['lampiran_1'];


												// session nama harta = harta di database
											if($lamp == $lampiran_1){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>
									<!-- END lampiran 1 -->

									<!-- Lampiran 2 -->
									<div class="row">

										<div class="col-sm-4">
											<p><strong>Lampiran 2</strong></p>
										</div>

										<div class="col-sm-3">

											<?php echo $_SESSION['lampiran_2']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$lamp_2 = $_SESSION['lampiran_2'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$lampiran_1 = $cek['lampiran_2'];


												// session nama harta = harta di database
											if($lamp_1 == $lampiran_1){
												
												echo "<strong><p style='color:black'>".$lampiran_2."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$lampiran_2."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$lamp = $_SESSION['lampiran_2'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$lampiran_2 = $cek['lampiran_2'];


												// session nama harta = harta di database
											if($lamp == $lampiran_2){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>
									<!-- END lampiran 2 -->

									<!-- Lampiran 3 -->
									<div class="row">

										<div class="col-sm-4">
											<p><strong>Lampiran 3</strong></p>
										</div>

										<div class="col-sm-3">

											<?php echo $_SESSION['lampiran_3']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$lamp_3 = $_SESSION['lampiran_3'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$lampiran_3 = $cek['lampiran_3'];


												// session nama harta = harta di database
											if($lamp_3 == $lampiran_3){
												
												echo "<strong><p style='color:black'>".$lampiran_3."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$lampiran_3."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$lamp = $_SESSION['lampiran_3'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$lampiran_3 = $cek['lampiran_3'];


												// session nama harta = harta di database
											if($lamp == $lampiran_3){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>
									<!-- END lampiran 3 -->

									<!-- Lampiran 4 -->
									<div class="row">

										<div class="col-sm-4">
											<p><strong>Lampiran 4</strong></p>
										</div>

										<div class="col-sm-3">

											<?php echo $_SESSION['lampiran_4']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$lamp_4 = $_SESSION['lampiran_4'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$lampiran_4 = $cek['lampiran_4'];


												// session nama harta = harta di database
											if($lamp_3 == $lampiran_3){
												
												echo "<strong><p style='color:black'>".$lampiran_4."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$lampiran_4."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											if (isset($_SESSION['npwp'])) {
												$npwp = $_SESSION['npwp'];
											}

											$lamp = $_SESSION['lampiran_4'];

											// mengambil data dari database
											$data = mysqli_query($koneksi,"select id from tb_upload_file_1770 where id_spt_1770 = '$npwp'");

											$cek = mysqli_fetch_assoc($data) ['id'];


											$data = mysqli_query($koneksi,"select * from tb_upload_file_1770 where id = '$cek'");
											$cek = mysqli_fetch_assoc($data);

											
											
											// mengubah nama harta didatabase
											$lampiran_4 = $cek['lampiran_4'];


												// session nama harta = harta di database
											if($lamp == $lampiran_4){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>
									<!-- END lampiran 4 -->
									
									<br/>
									<br/>
									<br/>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div style="padding-right: 20px;" align="right" >
											<a href="lapor_1770.php">
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

