<!DOCTYPE html>
<html>
<head>
	<title>Formulir SPT</title>
	<link href="../assets/img/logo.png" rel="icon">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-body">
	<?php include'header.html'; ?>
	<br>
	<div class="container box">
		<br>
		<!-- form -->
		<form>
			<!-- tab content -->
			<div class="tab-content">
				<!-- tab pane -->
				<div class="tab-pane active" id="lapor_detail" >
					<!-- tab panel -->
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
												<li class="nav-item">
													<a href="form_spt.php">Buat SPT</a>
												</li>
												
												<li class="nav-item grey-nav">
													<a href="bantuan_spt.php" class="font-dark-blue">Bantuan</a>
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

							<div class="card" style="max-width: 800px; padding-left: 12px; padding-right: 15px; background-color: white; border-radius: 7px;">
								<div class="card" style="padding: 10px">
									<div class="card-header_c2" id="daftar_dok" style="border-radius: 4px;">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left button_1" id="tombol_dft_dok" type="button">
												<b>1. Daftar dokumen dan penamaan file untuk SPT Tahunan PPh Orang Pribadi 1770</b>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<i class="fa fa-caret-right" style="color:grey;"></i>
											</button>
										</h2>
									</div>
									
									<div class="card-header_c1" id="daftar_dok" style="border-radius: 4px;">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left button_1" id="tombol_dft_dok" type="button">
												<b>2. Daftar dokumen dan penerimaan file untuk SPT Tahunan Badan(1771)</b>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<i class="fa fa-caret-right" style="color:grey;"></i>
											</button>
										</h2>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<?php include'../footer.html'; ?>
</body>
</html>
