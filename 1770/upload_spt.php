<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SPT 1770 | Politeknik Negeri Batam</title>
	<link href="../assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="../1770S/bootstrap/js/jquery.js"></script>
	<script src="../1770S/bootstrap/js/bootstrap.min.js"></script>  
	<style type="text/css">
		.fileUpload{
			position: absolute;
			overflow: hidden;
			margin: 0;
		}
	</style>
</head>
<body class="bg-body">
	<?php include'../header1.html'; ?>
	<br/>
	<div class="container box">
		<br>
		<form enctype="multipart/form-data" name="form" action="spt_anda.php" method="post">
			<div class="tab-content">
				<div class="tab-pane active" id="lapor_detail" >
					<div class="panel panel-default">
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
													<a href="arsip_spt.php">Arsip SPT</a>
												</li>
												<li class="nav-item grey-nav">
													<a href="../upload_spt.php" class="font-dark-blue">Buat SPT</a>
												</li>
												<li class="nav-item jarak-nav">
													<a href="draft_spt.php">Draft SPT</a>
												</li>
												<li class="nav-item">
													<a href="bantuan_spt.php">Bantuan</a>
												</li>
											</ul>
										</div>
										<!-- end membuat tab -->

										<!-- menambahkan gambar e-filling -->
										<div align="right" class="col-sm-3" style="padding-right: 30px;">
											<img src="../img/eFilingSpt.png" width="85px" height="45px" >
										</div>
										<!-- end menambahkan gambar e-filling -->

									</div>
									<!-- end membuat row -->
								</div>
							</div>
							<!-- end membuat card navbar -->

							<br/>


							<div class="card bg-light mb-3" style="width:735px; background-color: white;">
								<div class="card-header card-header_1">
									<i class="fas fa-file mr-1"></i>
									<strong>Upload SPT Masa/Tahunan</strong>
								</div>
								<!-- Membuat Upload SPT -->
								<div class="card-body card-body_2">  
									<p class="p_text_2 card_7"><h4><b> Upload SPT </b></h4></p>

									<!-- progress bar -->
									<div class="progress">
										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%; background-color: rgb(255, 157, 49)"><small>50.00%</div>
										</div>

										<p style="padding-left: 0px; padding-top: 0px; padding-bottom: 10px; color: rgb(4, 153, 195)">Halaman dari ke 1 dari 2</p>
										<h5><strong>Silahkan membaca bagian Petunjuk terlebih dahulu</strong></h5>
									</div>
									<div class="form-group row" style="padding-left: 150px; padding-right: 40px; padding-top: 5px">
										<label class="col-sm-3 col-form-label" style="padding-top: 6px">NPWP</label>
										<div class="col-sm-5">
											<input class="form-control" name="npwp" id="npwp" value="<?php echo $_SESSION['npwp']; ?>" style="height:28px; width: 250px" disabled>
										</div>
									</div>
									<div class="form-group row" style="padding-left: 150px; padding-right: 40px">
										<label class="col-sm-3 col-form-label" style="padding-top: 6px">File SPT <font color="red">*</font></label>
										<div class="col-sm-9">						
											<div class="fileUpload">
												<input type="file" class="form-control-file" id="file" name="file" accept=".xlsx" style="width: 400px;font-size: 80%; color: grey; font-weight: bold">
											</div>
											<div style="padding-left: 65%">
												<font color="blue" size="1" >Pastikan eksternal file .xlsx</font>
											</div>
										</div>
										<br>
										<br>
									</div>

									<!-- Membuat Lampiran -->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<span id="idupload" style="display:none" >
												<!-- LAmpiran 1 Wajib-->
												<div class="form-group row" style="padding-left: 150px; padding-right: 40px">
													<label class="col-sm-3 col-form-label" style="padding-top: 6px">Lampiran 1 <font color="red">*</font></label>
													<div class="col-sm-9">						
														<div class="fileUpload">
															<input type="file" class="form-control-file" id="lampiran_1" name="lampiran_1" accept=".pdf" style="width: 400px;font-size: 80%; color: grey; font-weight: bold">
														</div>
														<div style="padding-left: 65%">
															<font color="blue" size="1">Laporan Keuangan-(namaxlsx) LK.pdf</font>
														</div>
													</div>
												</div>

												<!-- Lampiran 2 Wajib -->
												<div class="form-group row" style="padding-left: 150px; padding-right: 40px">
													<label class="col-sm-3 col-form-label" style="padding-top: 6px">Lampiran 2</label>
													<div class="col-sm-9">						
														<div class="fileUpload">
															<input type="file" class="form-control-file" id="lampiran_2" name="lampiran_2" accept=".pdf" style="width: 400px;font-size: 80%; color: grey; font-weight: bold">
														</div>
														<div style="padding-left: 65%">
															<font color="blue" size="1">Perkapitulasi Peredaran Bruto PP 23 (namaxlsx) RK.pdf</font>
														</div>
													</div>
												</div>

												<!-- Lampiran 3 -->
												<div class="form-group row" style="padding-left: 150px; padding-right: 40px">
													<label class="col-sm-3 col-form-label" style="padding-top: 6px">Lampiran 3 </label>
													<div class="col-sm-9">						
														<div class="fileUpload">
															<input type="file" class="form-control-file" id="lampiran_3" name="lampiran_3" accept=".pdf" style="width: 400px;font-size: 80%; color: grey; font-weight: bold">
														</div>
														<div style="padding-left: 65%">
															<font color="blue" size="1">Bukti Potong-(namaxlsx)BP.pdf</font>
														</div>
													</div>
												</div>

												<!-- Lampiran 4 -->
												<div class="form-group row" style="padding-left: 150px; padding-right: 40px">
													<label class="col-sm-3 col-form-label" style="padding-top: 6px">Lampiran 4 </label>
													<div class="col-sm-9">						
														<div class="fileUpload">
															<input type="file" class="form-control-file" id="lampiran_4" name="lampiran_4" accept=".pdf" style="width: 400px;font-size: 80%; color: grey; font-weight: bold">
														</div>
														<div style="padding-left: 65%">
															<font color="blue" size="1">Dokumen Lampiran Lainnya-(namaxlsx) DL.pdf</font>
														</div>
													</div>
												</div>
											</span>
										</div>
									</div>
									<!-- End Lampiran -->

									<div style="padding-left: 620px;padding-top: 40px;padding-bottom: 10px">
										<button type="button" id="upload" name="upload" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px;" onclick="javascript:csvupload();"><small>Start Upload</small> <i class="fas fa-chevron-right"></i></button>
										<!-- <a href="spt_anda.php"> -->
											<button type="submit" id="upload2" name="upload2" data-toggle="modal" data-target="#exampleModal3" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px;" onclick="javascript:window.history.next();"><small>Start Upload</small> <i class="fas fa-chevron-right"></i></button>
											<!-- </a> -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<script type="text/javascript">
		// var p_kontainer=document.getElementById("fileUpload");
		function csvupload() {
			if (document.getElementById('upload').id) {
				// p_kontainer.innerHTML="<strong style='color: red;'></strong>";
				document.getElementById('idupload').style.display = 'block';
				$('#upload2').show(300);
				$('#upload').hide(300);

			// $('#upload').hide(500);
		}
		else document.getElementById('idupload').style.display = 'none';
		$('#upload2').show(300);
	}

	// if (form.file_spt.id.onclick) {
	// 	document.getElementById('upload').disabled = false;
	// }
	// if ($('#ya').onclick){
		// window.location.href="spt_1.php";
	// }

	$('#upload2').hide(300);
	// if (document.getElementById('idupload').style.display = 'block'){
		// 	window.location.href = "1770/spt_1.php";
		// }
	</script>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php include'../footer.html'; ?>
</body>
</html>