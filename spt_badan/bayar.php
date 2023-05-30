<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dasboard | Politeknik Negeri Batam</title>
	<link href="../assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-body">  
	<?php include'../header.html'; ?>
	<br />

	<div class="container box"> 
		<br />
		<!-- <h2 align="center"></h2><br /> -->

		<form>

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
							<!-- membuat card highlight -->
							<div class="card card_3">
								<div class="card-body card-body_1"><small><b>
								"Menu Bayar menampilkan aplikasi e-blling yang digunakan dalam pembuatan kode billing pembayaran pajak."</b></small>
							</div>
						</div>
						<!-- end membuat card highlight -->
						<br/>

						<!-- membuat card e filling -->
						<div class="row">

							<div class="col-sm-4">
								<div class="card mb-3 card_4" style="width: 23rem; height: 29rem;">
									<br/>
									<img src="../img/e-billing.png" class="card-img img_efilling" style="width:200px; " alt="...">
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

						</div>
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
<?php include'../footer.html'; ?>
</body>
</html> 
