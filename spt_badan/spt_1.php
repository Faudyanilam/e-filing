<?php session_start(); error_reporting(false); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SPT 1771 | Politeknik Negeri Batam</title>
	<link href="../assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
	<script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>  
</head>
<body class="bg-body">
	<?php include'header.html'; ?>

	<?php 
	include '../koneksi';
	
	// CODINGAN TAMPUNG SESSION UPLOAD FILE
	if(isset($_POST['upload2'])){
		$file_spt_1771 = $_FILES['file']['name'];
		$lampiran_1771 = $_FILES['lampiran_1771']['name'];


		$_SESSION['file_spt_1771'] = $file_spt_1771;
		$_SESSION['lampiran_keuangan'] = $lampiran_1771;
	}
	?>
	<!-- end TAMPUNG -->
	<br />

	<div class="container box"> 
		<br />
		<form method="post" action="" enctype="multipart/form-data">
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
													<a href="arsip_spt.php">Arsip SPT</a>
												</li>
												<li class="nav-item grey-nav">
													<a href="form_spt.php" class="font-dark-blue">Buat SPT</a>
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
											<img src="../img/eFilingSpt.png" width="85px" height="45px">
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
									<b>Upload SPT Masa/Tahunan</b>
								</div>
								<!-- end card header -->

								<!-- card body -->
								<div class="card-body card-body_2">  
									<p class="p_text_2 card_7" style="font-weight: bold;padding-top: 3%; font-size: 20px"> Kirim </p>

									<!-- progress bar -->
									<div class="progress">
										<div class="progress-bar progress-bar-striped" style="width:100%; background-color: rgb(255, 157, 49);"><small>100.00%</small></div>
									</div>
									<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 2 dari 2</small></p><br>
									<!-- end progress bar -->
									
									<button disabled style="background-color: green; border-radius: 25px; color: white; border:none; height: 30px; width: 100%; margin-bottom: 20px;"><small>SPT TELAH BERHASIL DIUPLOAD</small></button>

									
									
									
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
