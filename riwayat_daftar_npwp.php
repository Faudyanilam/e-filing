<?php error_reporting(false);?>
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

	<?php include'header3.html'; ?>
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

							
							<!-- Card bg-->
							<div class="card bg-light mb-3" style="width:735px; background-color: white;">
								<!-- card header -->
								<div class="card-header card-header_1">
									<i class="fas fa-file mr-1"></i>
									<b>Hasil Pendaftaran NPWP (E-Registration)</b>
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
											<p><strong>Jenis WP</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['jenis_wp']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$jenis_wpp = $_SESSION['jenis_wp'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$jenis_wp = $cek['jenis_wp'];
												// session nama harta = harta di database
											if($jenis_wpp== $jenis_wp){
												
												echo "<strong><p style='color:black'>".$jenis_wp."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$jenis_wp."</p></strong>";

												
											}
											?>
										</div>
										<div class="col-sm-2">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$jenis_wpp = $_SESSION['jenis_wp'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$jenis_wp = $cek['jenis_wp'];
												// session nama harta = harta di database
											if($jenis_wpp== $jenis_wp){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>Nama</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['nama_ktpp']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$nama_ktpp = $_SESSION['nama_ktpp'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$nama_ktp = $cek['nama_ktp'];
												// session nama harta = harta di database
											if(strcasecmp($nama_ktpp, $nama_ktp) == 0){
												
												echo "<strong><p style='color:black'>".$nama_ktp."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$nama_ktp."</p></strong>";
												
											}
											?>
										</div>
										<div class="col-sm-2">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$nama_ktpp = $_SESSION['nama_ktp'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$nama_ktp = $cek['nama_ktp'];
												// session nama harta = harta di database
											if(strcasecmp($nama_ktpp, $nama_ktp) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>
									</div>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>Email</strong></p>
										</div>

										<div class="col-sm-3" >
											<?php echo $_SESSION['email']; ?>
										</div>

										<div class="col-sm-3" >
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$email = $cek['email'];
												// session nama harta = harta di database
											if($emaill== $email){
												
												echo "<strong><p style='color:black'>".$emaill."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$emaill."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$email = $cek['email'];
												// session nama harta = harta di database
											if($emaill== $email){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>


									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>Password</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['password']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$passwordd = $_SESSION['password'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$password = $cek['password'];
												// session nama harta = harta di database
											if($passwordd== $password){
												
												echo "<strong><p style='color:black'>".$password."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$password."</p></strong>";
												
											}
											?>
										</div>
										<div class="col-sm-2">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$passwordd = $_SESSION['password'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$password = $cek['password'];
												// session nama harta = harta di database
											if($passwordd== $password){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";

												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>

									<div class="row">

										<div class="col-sm-4">
											<p><strong>Nomor HP</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['no_hp']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$no_hpp = $_SESSION['no_hp'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$no_hp = $cek['no_hp'];
												// session nama harta = harta di database
											if($no_hpp== $no_hp){
												
												echo "<strong><p style='color:black'>".$no_hp."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$no_hp."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$no_hpp = $_SESSION['no_hp'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$no_hp = $cek['no_hp'];
												// session nama harta = harta di database
											if($no_hpp== $no_hp){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{

												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>Pertanyaan</strong></p>
										</div>

										<div class="col-sm-3">
											<?php 
											if($_SESSION['pertanyaan'] == '1'){
												$_SESSION['pertanyaan'] = "Apa nama hewan peliharaan Anda?";
											}else if($_SESSION['pertanyaan'] == '2'){
												$_SESSION['pertanyaan'] = "Apa nama SD Anda?";
											}else if($_SESSION['pertanyaan'] == '3'){
												$_SESSION['pertanyaan'] = "Siapa pahlawan masa kecil Anda?";
											}else if($_SESSION['pertanyaan'] == '4'){
												$_SESSION['pertanyaan'] = "Apa kenangan Anda yang paling berkesan?";
											}else if($_SESSION['pertanyaan'] == '5'){
												$_SESSION['pertanyaan'] = "Apa nama tim olahraga favorit Anda?";
											}else if($_SESSION['pertanyaan'] == '6'){
												$_SESSION['pertanyaan'] = "Apa maskot SMA Anda";
											}else if($_SESSION['pertanyaan'] == '7'){
												$_SESSION['pertanyaan'] = "Apa merek mobil/mobil pertama Anda?";
											}else if($_SESSION['pertanyaan'] == '8'){
												$_SESSION['pertanyaan'] = "Dimana Anda pertama kali bertemu dengan pasangan Anda?";
											}
											?>
											<?php echo $_SESSION['pertanyaan']; ?>

										</div>

										<div class="col-sm-3">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$pertanyaann = $_SESSION['pertanyaan'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$pertanyaan = $cek['pertanyaan'];
											if($pertanyaan == '1'){
												$pertanyaan = "Apa nama hewan peliharaan Anda?";
											}else if($pertanyaan == '2'){
												$pertanyaan = "Apa nama SD Anda?";
											}else if($pertanyaan == '3'){
												$pertanyaan = "Siapa pahlawan masa kecil Anda?";
											}else if($pertanyaan == '4'){
												$pertanyaan = "Apa kenangan Anda yang paling berkesan?";
											}else if($pertanyaan == '5'){
												$pertanyaan = "Apa nama tim olahraga favorit Anda?";
											}else if($pertanyaan == '6'){
												$pertanyaan = "Apa maskot SMA Anda";
											}else if($pertanyaan == '7'){
												$pertanyaan = "Apa merek mobil/mobil pertama Anda?";
											}else if($pertanyaan == '8'){
												$pertanyaan = "Dimana Anda pertama kali bertemu dengan pasangan Anda?";
											}
											
												// session nama harta = harta di database
											if($pertanyaann== $pertanyaan){
												
												echo "<strong><p style='color:black'>".$pertanyaan."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$pertanyaan."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$pertanyaann = $_SESSION['pertanyaan'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$pertanyaan = $cek['pertanyaan'];
											if($pertanyaan == '1'){
												$pertanyaan = "Apa nama hewan peliharaan Anda?";
											}else if($pertanyaan == '2'){
												$pertanyaan = "Apa nama SD Anda?";
											}else if($pertanyaan == '3'){
												$pertanyaan = "Siapa pahlawan masa kecil Anda?";
											}else if($pertanyaan == '4'){
												$pertanyaan = "Apa kenangan Anda yang paling berkesan?";
											}else if($pertanyaan == '5'){
												$pertanyaan = "Apa nama tim olahraga favorit Anda?";
											}else if($pertanyaan == '6'){
												$pertanyaan = "Apa maskot SMA Anda";
											}else if($pertanyaan == '7'){
												$pertanyaan = "Apa merek mobil/mobil pertama Anda?";
											}else if($pertanyaan == '8'){
												$pertanyaan = "Dimana Anda pertama kali bertemu dengan pasangan Anda?";
											}
												// session nama harta = harta di database
											if($pertanyaann== $pertanyaan){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-4">
											<p><strong>Jawaban</strong></p>
										</div>

										<div class="col-sm-3">
											<?php echo $_SESSION['jawaban']; ?>
										</div>

										<div class="col-sm-3">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$jawabann = $_SESSION['jawaban'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$jawaban = $cek['jawaban'];
												// session nama harta = harta di database
											if(strcasecmp($jawabann, $jawaban) == 0){
												
												echo "<strong><p style='color:black'>".$jawaban."</p></strong>";
												
											}else{
												
												echo "<strong><p style='color:black'>".$jawaban."</p></strong>";
												
											}
											?>
										</div>

										<div class="col-sm-2">
											<?php
											// if (isset($_SESSION['pertanyaan'])) {
												// $nama_ktp = $_SESSION['nama_ktp'];
											// }
											// if (isset($_SESSION['email'])) {
											$emaill = $_SESSION['email'];
											$jawabann = $_SESSION['jawaban'];

											// }
											// mengambil data dari database
											$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where email = '$emaill'");
											$cek = mysqli_fetch_assoc($data);

											$jawaban = $cek['jawaban'];
												// session nama harta = harta di database
											if(strcasecmp($jawabann, $jawaban) == 0){
												
												echo "<strong><p style='color:blue'><i class='fas fa-check-square fa-2x'></i></p></strong>";
												
											}else{
												
												echo "<strong><p style='color:red'><i class='fas fa-window-close fa-2x'></i></i></i></p></strong>";
												
											}
											?>
										</div>
									</div>
									<hr>
									<?php 
									include 'koneksi.php';

									$emaill = $_SESSION['email'];

									$data = mysqli_query($koneksi,"SELECT * FROM tb_daftarnpwp where email = '$emaill'");
									$cek = mysqli_fetch_assoc($data);

									?>
									<div class="row" style="padding-left: 5%; padding-bottom: 3%; font-weight: bold; color: blue; font-size: 15;">
										<p style=" font-size: 20;padding-bottom: 2%;color: black;"><b>Berikut adalah NPWP dan Efin Anda</b></p>
										
										<div class="col-md-4" style="">
											NPWP
										</div>
										<div class="col-md-1">
											:
										</div>
										<div class="col-md-5">
											<?php echo $cek['id_daftar_npwp']; ?>
										</div>
									</div>
									<div class="row" style="padding-left: 5%;font-weight: bold; color: blue; font-size: 15;">
										
										<div class="col-md-4">
											EFIN
										</div>
										<div class="col-md-1">
											:
										</div>
										<div class="col-md-5">
											<?php echo $cek['efin']; ?>
										</div>

									</div>
									<div class="row" style="padding: 5%;font-weight: bold; color: blue; font-size: 15;">
										<div class="alert alert-warning alert-block">
											<i class="fa fa-info fa-lg"></i> Silahkan Gunakan NPWP dan EFIN untuk Registrasi Akun Anda!
										</div>

									</div>
									<hr>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div style="padding-right: 20px;" align="right" >
											<a href="login_badan.php">
												<button type="button" id="selesai" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"><small>Selesai</small></button>
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

