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
				<li class="nav-item" style="background-color: #f5f5f5;">
					<a href="profil.php" style="color: #191970;">Profil</a>
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
												<li class="nav-item grey-nav">
													<a href="profil.php" class="font-dark-blue">Profil</a>
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

							<!-- membuat card highlight -->
							<div class="card card_3">
								<div class="card-body card-body_1"><small><b>
								"Apabila terdapat data yang tidak sesuai, silahkan menghubungi KPP Administrasi"</b></small>
							</div>
						</div>
						<!-- end membuat card highlight -->
						<br/>

						<!-- Card bg-->
						<div class="card bg-light mb-3" style="width:735px; background-color: white;">
							<!-- card header -->
							<div class="card-header card-header_1">
								<i class="fas fa-user"></i>
								<b>Data Profil</b>
							</div>
							<!-- end card header -->

							<!-- card body -->
							<div class="card-body card-body_2">  
								<p class="p_text_2 card_7"><b></p>

									<!-- Form Data Profil-->		
									<form method="post" id="">
										<div class="form-group row">
											<div class="col-sm-6 " style="padding-left:20px">
												<label class="">Nama</label>
												<input class="form-control" required="">
											</div>
											<div class="col-sm-6" style="padding-right:20px">
												<label class="">Bentuk Badan</label>
												<input class="form-control" required="">
											</div>
											<span id="" class="text-danger"></span>
										</div>

										<div class="form-group row">
											<div class="col-sm-6" style="padding-left:20px">
												<label class="">NPWP</label>
												<input class="form-control" required="">
											</div>
											<div class="col-sm-6" style="padding-right:20px">
												<label class="">Nomor Telepon</label>
												<input class="form-control" required="">
											</div>
											<span id="" class="text-danger"></span>
										</div>

										<div class="form-group row">
											<div class="col-sm-6 " style="padding-left:20px">
												<label class="">Jenis Usaha</label>
												<input class="form-control" required="">
											</div>
											<div class="col-sm-6" style="padding-right:20px">
												<label class="">Email DJP Online</label>
												<input class="form-control" required="">
											</div>
											<span id="" class="text-danger"></span>
										</div>

										<div class="form-group row">
											<div class="col-sm-6" style="padding-left:20px">
												<label class="">Alamat Tempat Kedudukan</label>
												<textarea class="form-control" required=""></textarea> 
											</div>
											<div class="col-sm-6">
												
											</div>
											<span id="" class="text-danger"></span>
										</div>
									</form>
									<!-- end Data Profil -->

									<!-- button ubah kata sandi -->
									<a href="ubah_kata_sandi.php"><button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="background-color: orange; border-radius: 25px; color: white; border: none; height: 30px; width: 150px;"><small>Ubah Kata Sandi</small><i class="fas fa-chevron-right"></i></button></a>
									<!-- end button ubah kata sandi -->

									<!-- button Ubah Profil dan Batal-->
									<hr>
									<div align="right">
										<a href="isi_data_form_1770ss.php">
											<button type="button" class="" style="background-color: orange; border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Batal</small></button></a>
											
											<button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 70px;"><small>Simpan</small></button>
										</div>
										<!-- end button Ubah Profil dan Batal-->
										<br/>

									</div>
									<!-- end card body -->
								</div>
								<!-- end card bg -->
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
