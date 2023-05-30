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
	<!-- container box -->
	<div class="container box"> 
		<br />
		<!-- form -->
		<form >
			<!-- membuat tab -->
			<!-- <ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="informasi.php">Informasi</a>
				</li>
				<li class="nav-item" style="background-color: #f5f5f5;">
					<a href="dasboard.php" style="color: #191970;">Dasboard</a>
				</li>
				<li class="nav-item">
					<a href="profil.php">Profil</a>
				</li>
				<li class="nav-item">
					<a href="bayar.php">Bayar</a>
				</li>
				<li class="nav-item">
					<a href="lapor.php">Lapor</a>
				</li>
				<li class="nav-item">
					<a href="layanan.php">Layanan</a>
				</li>
			</ul> -->
			<!-- end membuat tab -->

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
												<li class="nav-item grey-nav">
													<a href="dasboard.php" class="font-dark-blue">Dasboard</a>
												</li>
												<li class="nav-item">
													<a href="profil.php">Profil</a>
												</li>
												<li class="nav-item">
													<a href="bayar.php">Bayar</a>
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

										<!-- menambahkan gambar e-filling -->
										<!-- <div align="right" class="col-sm-3" style="padding-right: 30px;">
											<img src="img/e-filling.png" width="100px" >
										</div> -->
										<!-- end menambahkan gambar e-filling -->

									</div>
									<!-- end membuat row -->
								</div>
							</div>
							<!-- end membuat card navbar -->

							<br/>

							<!-- agar colom tidak ada batasn row -->
							<div class="row no-gutters">
								<!-- membuat kolom sebelah kiri -->
								<div class="col-6 col-md-4">
									<!-- card profil -->
									<div class="card bg-light mb-3 card_2">
										<div class="card-header card-header_2"><i class="fas fa-user"></i> <b>Profil Singkat</b></div>
										<div class="card-body">
											<br/>
											<h5 class="card-title card-title_1" style="color: rgb(4, 153, 195)"><b>NAMA WAJIB PAJAK BADAN</b></h5>
											<hr>
											<p class="card-text card-text_1" style="color: rgb(4, 153, 195)"><b>NPWP</b></p>
											<hr>
											<p class="card-text card-text_1" style="color: rgb(4, 153, 195)"><b>Alamat</b></p>
											<hr>
											<p class="card-text card-text_1" style="color: rgb(4, 153, 195)"><b>KPP Administrasi</b></p>
											<hr>
											<p class="card-text card-text_1" style="color: rgb(4, 153, 195)"><b>Account Representative</b></p>
											<hr>
											<p class="card-text card-text_1" style="color: rgb(4, 153, 195)"><b>Email</b></p>
											<hr>
											<p class="card-text card-text_1" style="color: rgb(4, 153, 195)"><b>Jenis Usaha</b></p>
											<br/>
										</div>
									</div>
									<!-- end card petunjuk pengisian -->
								</div>
								<!-- end membuat kolom sebelah kiri -->

								<!-- membuat kolom sebelah kanan -->
								<div class="col-sm-6 col-md-8">
									<!-- card Riwayat Pelaporan -->
									<div class="card bg-light mb-3 card_5">
										<div class="card-header card-header_3"><i class="fas fa-file-alt"></i> <b>Riwayat Pelaporan</b></div>
										<div class="card-body card-body_2">  
											<br/>

											<!-- ======= Riwayat Pelaporan ======= -->
											<section id="resume" class="resume">
												
												<div class="row">
													<div class="col-sm-2">
														<p style="padding-left: 0px; padding-top: 0px; color: rgb(4, 153, 195)">21 Apr 2020</p>
													</div>
													<div class="col-sm-10">
														<div class="resume-item pb-0">
															<p style="padding-left: 20px; padding-top: 0px; color: rgb(4, 153, 195)">Anda telah melaporkan SPT Tahunan PPh Badan dengan status
																<button type="button" data-toggle="modal" data-target="#exampleModal2" style="border: none; background-color: orange;">NIHIL</button>
															</p>
														</div>		
													</div>
												</div>

												<div class="row">
													<div class="col-sm-2">
														<p style="padding-left: 0px; padding-top: 0px; color: rgb(4, 153, 195)">30 Apr 2018</p>
													</div>
													<div class="col-sm-10">
														<div class="resume-item pb-0">
															<p style="padding-left: 20px; padding-top: 0px; color: rgb(4, 153, 195)">Anda telah melaporkan SPT Tahunan PPh Badan dengan status 
																<button type="button" data-toggle="modal" data-target="#exampleModal2" style="border: none; background-color: orange;">NIHIL</button>
															</p>
														</div>		
													</div>
												</div>
											</section>
											<!-- End riwayat pelaporan -->

										</div>
									</div>
									<!-- end card Riwayat Pelaporan -->
									<br/>

								</div>
								<!-- end kolom sebelah kanan -->
							</div>
							<!-- end row gutters -->
						</div>
						<!-- end panel body -->
					</div>
					<!-- end panel -->
				</div>
				<!-- end tab pane -->
			</div> 
			<!-- end tab content -->
		</form>
		<!-- end form -->
	</div>
	<!-- end container box -->
	<?php include'footer 1.html'; ?>
</body>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</html>

