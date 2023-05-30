<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SPT 1770S | Politeknik Negeri Batam</title>
	<link href="../assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-body">
	<?php include'../header1.html'; ?>
	<br />

	<div class="container box"> 
		<br />
		<!-- <h2 align="center"></h2><br /> -->

		
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
												<a href="../arsip_spt.php">Arsip SPT</a>
											</li>
											<li class="nav-item grey-nav">
												<a href="../form_spt.php" class="font-dark-blue">Buat SPT</a>
											</li>
											<li class="nav-item jarak-nav">
												<a href="../draft_spt.php">Draft SPT</a>
											</li>
											<li class="nav-item">
												<a href="../bantuan_spt.php">Bantuan</a>
											</li>
										</ul>
									</div>
									<!-- end membuat tab -->

									<!-- menambahkan gambar e-filling -->
									<div align="right" class="col-sm-3" style="padding-right: 30px;">
										<img src="../img/e-filling.png" width="100px" >
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
								<b>SPT 1770 S</b>
							</div>
							<!-- end card header -->

							<!-- card body -->
							<div class="card-body card-body_2">  
								<p class="p_text_2 card_7"></p>

								<!-- progress bar -->
								<div class="progress">
									<div class="progress-bar progress-bar-striped" style="width:88.89%; background-color: rgb(255, 157, 49);"><small>88.89%</small></div>
								</div>
								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 16 dari 18</small></p><br>
								<!-- end progress bar -->

								<p><b>Proses Kurang/Lebih Bayar</b></p>
								<br>
								<!-- <?php echo $tmpstatus_hasil_s; ?> -->
								<div class="form-group row">
									<small><p style="padding-left: 20px" class="col-sm-6">Permohonan : PPh Lebih Bayar pada angka 16 mohon</p></small>

									<div class="col-sm-5">
										<select style="width: 300px; height: 25px; font-size: 10px" id="permohonan" >
											<option value="" selected hidden>-- Pilih  --</option>
											<option >Direstitusikan</option>
											<option >Diperhitungkan dengan Utang Pajak</option>
											<option >Dikembalikan dengan SKPPKP Pasal 17 C (WP Patuh)</option>
											<option >Dikembalikan dengan SKPPKP Pasal 17 D (WP Tertentu)</option>
										</select>
									</div>
								</div>


								<div class="card bg-light mb-3" id="card_kurang_bayar" style="width:708px; background-color: white; display: block" >
									<div class="card-header card-header_2" style="height:auto" >
										<p style="font-size: 12px; font-weight: bold; text-align: justify; padding-right: 10px;">Status SPT Anda adalah Lebih Bayar, Anda harus melampirkan keterangan dan/atau dokumen yang disyaratkan dalam SPT Elektronik sesuai dengan ketentuan perpajakan. Dokumen yang dilampirkan dapat dilihat <font color="black">di sini</font></p>
									</div>
									<div class="card-body card-body_4">
										<br/>

										<!-- lampiran  -->
										<div class="form-group row" style="padding-left: 150px; padding-right: 40px">
											<label class="col-sm-3 col-form-label" style="padding-top: 6px">Lampiran <font color="red">*</font></label>
											<div class="col-sm-9">						
												<div class="fileUpload">
													<input type="file" class="form-control-file" id="file_spt" name="file_spt" accept=".pdf," style="width: 400px;font-size: 80%; color: grey; font-weight: bold; padding-top: 7px">
												</div>
												<div style="padding-left: 65%; padding-top: 7px">
													<font color="blue" size="1">Pastikan ekstensi file.pdf</font>
												</div>
											</div>

											<div style="padding-left: 28%;padding-top: 10%;padding-bottom: 10px">
												<p style="font-size: 12px; font-weight: bold; text-align: right;">0%</p>
												<button type="button" id="upload" name="upload" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px;" onclick=""><small>Start Upload</small> <i class="fas fa-chevron-right"></i></button>
											</div>
										</div>

										<!-- akhir lampiran -->

									</div>
								</div>



								<!-- button sebelum dan selanjutnya-->
								<hr/>
								<div class="form-group row" style="padding-bottom: 	15px">
									<form action="proses_halaman15.php" method="post">
										<div class="col-sm-6">
											<a href="halaman15.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
											</div>
											<div class="col-sm-6" style="padding-left: 253px;">
												<a href="halaman17.php">
													<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
												</div>
											</form>
										</div>

										<!-- end button sebelum dan selanjutnya-->

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
				
			</div>
			<!-- end container box -->
			<script type="text/javascript" src="script.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
			<script type="text/javascript" >

			</script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
			<script src="assets/demo/chart-area-demo.js"></script>
			<br/>
			<br/>
			<br/>
			<br/>
			<?php include'../footer.html'; ?>
		</body>
		</html> 
