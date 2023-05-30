<?php session_start();?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dasboard | Politeknik Negeri Batam</title>
	<link href="assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-body">  
	<?php include'header1.html'; ?>
	<br />
	<br/>
	<br/>

	<div class="container box"> 
		<br />
		<!-- <h2 align="center"></h2><br /> -->

		<form>
			<!-- <ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="informasi.php">Informasi</a>
				</li>
				<li class="nav-item">
					<a href="dasboard.php">Dasboard</a>
				</li>
				<li class="nav-item">
					<a href="profil.php">Profil</a>
				</li>
				<li class="nav-item" style="background-color: #f5f5f5;">
					<a href="bayar.php"  style="color: #191970;">Bayar</a>
				</li>
				<li class="nav-item">
					<a href="lapor.php">Lapor</a>
				</li>
				<li class="nav-item" >
					<a href="layanan.php">Layanan</a>
				</li>
			</ul> -->

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
												<li class="nav-item grey-nav">
													<a href="bayar.php" class="font-dark-blue">Bayar</a>
												</li>
												<li class="nav-item">
													<a href="lapor.php">Lapor</a>
												</li>
												<li class="nav-item jarak-nav">
													<a href="layanan.php">Layanan</a>
												</li>
											</ul>
										</div>
										<!-- end membuat tab -->

									</div>
									<!-- end membuat row -->
								</div>
							</div>
							<!-- end membuat card navbar -->

							<br/>
							

							<!-- agar kolom tidak ada batas row -->
							<div class="row no-gutters">

								<!-- membuat kolom kiri-->
								<div class="col-6 col-md-4">

									<!-- card petunjuk -->
									<div class="card bg-light mb-3 card_2">
										<div class="card-header card-header_2"><i class="fas fa-book-open"></i> <b>Petunjuk</b></div>
										<div class="card-body">
											<h5 class="card-title card-title_1 font-13px">Menu Lapor dibedakan sub menu pelaporan dan pra pelaporan</h5>
											<p class="card-text card-text_1 font-12px">1. Sub menu pelaporan manampilkan aplikasi e-filling yang digunakan untuk menyampaikan SPT secara elektronik serta data riwayat pelaporan selama 3 tahun terakhir</p>
											<p class="card-text card-text_1 font-12px">2. Sub menu pra pelaporan menampilkan aplikasi yang digunakan dalam pembuatan bukti pemotongan dan/atau pemungutan pajak sebelum melaporkan SPT</p>



											<br/>
										</div>
									</div>
									<!-- end card petunjuk -->

								</div>
								<!-- end membuat kolom kiri-->

								<!-- membuat kolom kanan -->
								<div class="col-sm-6 col-md-8">

									<!-- membuat card e filling -->
									<a href="e-billing/form_e-billing.php" style="color:#191970; border:0px solid #ccc;">
										<div class="card mb-3 card_4">
											<div class="row no-gutters">
												<div class="col-md-4 col_1">
													<img src="img/eBilling.png" class="card-img img_efilling" alt="e-Billing"/>
												</div>
												<div class="col-md-8">
													<div class="card-body">
														<h5 class="card-title p_text_2"><b>e-Billing</b></h5>
														<p class="card-text p_text_2"><small>Aplikasi pembuatan kode billing untuk pembayaran pajak</small></p>
														<p class="card-text p_text_3"><small>FAQ / Pertanyaan Umum</small></p>


														<?php 
          //           if (isset($_SESSION['tmpnop'])) {
										// $tmpnop = $_SESSION['tmpnop'];
									// }
            // $nop=$_SESSION['nop'];

                    // echo $tmpnop; 
                    // var_dump($nop);
// $nop = $_POST['nop'];

// //                     echo $nop;
// 														if (isset($_SESSION['tmpjenis_pajak'])) {
// 															$tmpjenis_pajak= $_SESSION['tmpjenis_pajak'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmpjenis_pajak)."</td></tr>";
// 														$jenis_pajak = end($tmpjenis_pajak);

// 														if (isset($_SESSION['tmpjenis_setoran'])) {
// 															$tmpjenis_setoran= $_SESSION['tmpjenis_setoran'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmpjenis_setoran)."</td></tr>";
// 														$jenis_setoran = end($tmpjenis_setoran);

// 														if (isset($_SESSION['tmpmasa_pajak_sebelum'])) {
// 															$tmpmasa_pajak_sebelum = $_SESSION['tmpmasa_pajak_sebelum'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmpmasa_pajak_sebelum)."</td></tr>";
// 														$masa_pajak_sebelum = end($tmpmasa_pajak_sebelum);


// 														if (isset($_SESSION['tmpmasa_pajak_sesudah'])) {
// 															$tmpmasa_pajak_sesudah = $_SESSION['tmpmasa_pajak_sesudah'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmpmasa_pajak_sesudah)."</td></tr>";
// 														$masa_pajak_sesudah = end($tmpmasa_pajak_sesudah); 


// 														if (isset($_SESSION['tmptahun_pajak'])) {
// 															$tmptahun_pajak = $_SESSION['tmptahun_pajak'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmptahun_pajak)."</td></tr>";
// 														$tahun_pajak = end($tmptahun_pajak);
														

// 														if (isset($_SESSION['tmpnop'])) {
// 															$tmpnop = $_SESSION['tmpnop'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmpnop)."</td></tr>";
// 														$nop = end($tmpnop);

// 														if (isset($_SESSION['tmpno_ketetapan'])) {
// 															$tmpno_ketetapan = $_SESSION['tmpno_ketetapan'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmpno_ketetapan)."</td></tr>";
// 														$no_ketetapan = end($tmpno_ketetapan);

// 														if (isset($_SESSION['tmpjml_setor'])) {
// 															$tmpjml_setor = $_SESSION['tmpjml_setor'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmpjml_setor)."</td></tr>";
// 														$jml_setor = end($tmpjml_setor);

// 														if (isset($_SESSION['tmpterbilang'])) {
// 															$tmpterbilang = $_SESSION['tmpterbilang'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmpterbilang)."</td></tr>";
// 														$terbilang = end($tmpterbilang);

// 														if (isset($_SESSION['tmpuraian'])) {
// 															$tmpuraian = $_SESSION['tmpuraian'];
// 														}

// 														echo "<tr>";
// 														echo "<td>".end($tmpuraian)."</td></tr>";
// 														$uraian = end($tmpuraian);

														?>





													</div>
												</div>
											</div>
										</div>
									</a>
									<!-- end membuat card e filling -->
									<br/>
								</div>
								<!-- end membuat kolom kanan-->
							</div>
							<!-- end agar kolom tidak ada batas row  -->

							<!-- membuat card e filling -->
						<!-- <div class="row">

							<div class="col-sm-4">
								<div class="card mb-3 card_4" style="width: 23rem; height: 29rem;">
									<br/>
									<img src="img/e-billing.png" class="card-img img_efilling" style="width:200px; " alt="...">
									<hr>
									<div class="card-body">
										<div align="center">
											<h5 class="card-title p_text_2"><b> e-Billing</b></h5>

											<p class="card-text p_text_2"><small>Aplikasi pembuatan kode billing untuk pembayaran pajak</small></p>
											<p class="card-text p_text_3"><small>FAQ / Pertanyaan Umum</small></p>
										</div>
									</div>
									<br/>
								</div>
							</div>

						</div> -->
						<!-- end membuat card e filling -->
						<br/>


					</div>
					<!-- end panel body -->
				</div>
				<!-- end panel -->
			</div>
			<!-- end tab pane -->
		</div>
		<!-- end tab content -->
	</form>
</div>
<!-- end container box -->
<script type="text/javascript" src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" >

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<?php include'footer 1.html'; ?>
</body>
</html> 
