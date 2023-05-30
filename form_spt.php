<!DOCTYPE html>
<html>
<head>
	<title>Formulir SPT</title>
	<link href="../assets/img/logo.png" rel="icon">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
	<!-- Vendor CSS Files -->
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
</head>
<body class="bg-body">
	<?php include'header2.html'; ?>
	<br/>
	<div class="container box">
		<br>
		<!-- form -->
		<form>
			<!-- membuat tab -->
			<!-- <ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="arsip_spt.php">Arsip SPT</a>
				</li>
				<li class="nav-item" style="background-color: #f5f5f5;">
					<a href="buat_spt.php" style="color: #191970;">Buat SPT</a>
				</li>
				<li class="nav-item">
					<a href="draft_spt.php">Draft SPT</a>
				</li>
				<li class="nav-item">
					<a href="bantuan_spt.php">Bantuan</a>
				</li>
			</ul> -->
			<!-- end membuat tab -->

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
												<li class="nav-item grey-nav">
													<a href="form_spt.php" class="font-dark-blue">Buat SPT</a>
												</li>
												<li class="nav-item">
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
											<img src="img/eFiling.png" width="85px" height="45px" >
										</div>
										<!-- end menambahkan gambar e-filling -->

									</div>
									<!-- end membuat row -->
								</div>
							</div>
							<!-- end membuat card navbar -->

							<br/>

							<!-- Membuat pertanyaan SPT -->
							<div class="card bg-light mb-3" style="width:735px; background-color: white;">
								<div class="card-header card-header_1">
									<i class="fas fa-file mr-1"></i>
									<b>Formulir SPT</b>
								</div>
								
								<!-- container -->
								<div class="container"> 
									<!-- pertanyaan 1 -->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<label for="exampleFormControlInput1" style="padding-top: 15px ">Apakah Anda Menjalankan Usaha atau Pekerjaan bebas?</label>
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="ya" value="option1">
											<label class="form-check-label" for="ya">Ya</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="tdk" value="option2">
											<label class="form-check-label" for="tdk">
												Tidak
											</label>
										</div>
									</div>

									<!-- jika jawaban pertama ya -->
									<div class="form-check">
										<span id="ifYes" style="display:none" >
											<label for="exampleFormControlInput1">Anda dapat menggunakan fasilitas upload CSV dari e-SPT</label><br>
											<a href="1770/upload_spt.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49);border-radius: 25px; color: white; height: 30px; width: 100px; border: none;"><strong>Upload SPT</strong></button>
											</a>
										</span>
									</div>

									<!-- membuat jawaban kedua tidak -->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<span id="ifNo" style="display:none" >
												<label for="exampleFormControlInput1" style="width: 700px;">Apakah Anda Seorang Suami atau Istri yang menjalankan kewajiban perpajakan terpisah (MT) atau Pisah Harta(PH)?</label>
												<div class="form-check">
													<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck2();" name="exampleRadios2" id="ya2" value="option3">
													<label class="form-check-label" for="ya2">Ya</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck2();" name="exampleRadios2" id="tdk2" value="option4">
													<label class="form-check-label" for="tdk2">
														Tidak
													</label>
												</div>
											</span>
										</div>
									</div>

									<!-- Jika jawaban pertanyaan MT atau PH tidak -->
									<div class="form-check">
										<span id="ifYes2" style="display:none" >
											<label for="exampleFormControlInput1">Apakah Penghasilan Bruto Yang Anda Peroleh selama setahun Kurang dari 60 Juta Rupiah?</label><br>
											<div class="form-check">
												<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck3();" name="exampleRadios3" id="ya3" value="option5">
												<label class="form-check-label" for="ya3">Ya</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck3();" name="exampleRadios3" id="tdk3" value="option6">
												<label class="form-check-label" for="tdk3">
													Tidak
												</label>
											</div>
										</span>
									</div>

									<!-- JIka jawaban pertanyaan MT atau HB ya, pertanyaan bruto tidak-->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<span id="ifNo2" style="display:none;padding-top: " >
											<label for="exampleFormControlInput1">Anda Dapat Menggunakan Formulir 1770 S, pilihlah form yang akan digunakan</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck4();" name="exampleRadios4" id="formulir" value="option7">
												<label class="form-check-label" for="formulir">Dengan bentuk formulir</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck4();" name="exampleRadios4" id="panduan" value="option8">
												<label class="form-check-label" for="panduan">
													Dengan panduan
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck4();" name="exampleRadios4" id="u_spt" value="option9">
												<label class="form-check-label" for="u_spt">
													Dengan upload SPT
												</label>
											</div>
										</span>
									</div>

									<!-- Jika jawaban pertanyaan bruto Ya -->
									<div class="form-check">
										<span id="ifYes3" style="display:none" >
											<a href="1770SS/isi_data_formulir_SS.php"><button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; height: 30px; width: 110px; border: none;"><strong>SPT 1770 SS</strong> </button></a>
										</span>
									</div>

									<!-- Membuat pilihan dengan panduan -->
									<div class="form-check">
										<span id="ifPanduan" style="display:none" >
											<a href="1770S/halaman1.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; height: 35px; width: 230px; border: none;"><strong>SPT 1770 S dengan panduan</strong></button>
											</a>
										</span>
									</div>
									<br/>

								</div>
								<!-- end container -->
							</div>
							<!-- end membuat pertanyaan spt -->
						</div>
						<!-- end panel body -->
					</div>
					<!-- end panel panel -->
				</div>
				<!-- end tab pane active -->
			</div>
			<!-- end tab content -->
		</form>
		<!-- end form -->
	</div>
	<!-- end container box -->

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script type="text/javascript" >
		//membuat yes no pertama

		function yesnoCheck() {
			if (document.getElementById('ya').checked) {
				document.getElementById('ifYes').style.display = 'block';
			}
			else document.getElementById('ifYes').style.display = 'none';
			document.getElementById('ifYes2').style.display = 'none';
			document.getElementById('ifNo2').style.display = 'none';
			document.getElementById('ifYes3').style.display = 'none';
			document.getElementById('ifPanduan').style.display = 'none';


			if(document.getElementById('tdk').checked) {
				document.getElementById('ifNo').style.display = 'block';
			}
			else document.getElementById('ifNo').style.display = 'none';
			document.getElementById('ifYes2').style.display = 'none';
			document.getElementById('ifNo2').style.display = 'none';
			document.getElementById('ifYes3').style.display = 'none';
			document.getElementById('ifPanduan').style.display = 'none';

		}
		function yesnoCheck2() {
			if(document.getElementById('tdk2').checked) {
				document.getElementById('ifYes2').style.display = 'block';
			}
			else document.getElementById('ifYes2').style.display = 'none';
			document.getElementById('ifYes3').style.display = 'none';
			document.getElementById('ifPanduan').style.display = 'none';

			if(document.getElementById('ya2').checked) {
				document.getElementById('ifNo2').style.display = 'block';
			}
			else document.getElementById('ifNo2').style.display = 'none';
			document.getElementById('ifYes3').style.display = 'none';
			document.getElementById('ifPanduan').style.display = 'none';

		}
		function yesnoCheck3() {
			if(document.getElementById('ya3').checked) {
				document.getElementById('ifYes3').style.display = 'block';
			}
			else document.getElementById('ifYes3').style.display = 'none';
			document.getElementById('ifPanduan').style.display = 'none';


			if(document.getElementById('tdk3').checked) {
				document.getElementById('ifNo2').style.display = 'block';
			}
			else document.getElementById('ifNo2').style.display = 'none';
			document.getElementById('ifPanduan').style.display = 'none';

		}
		function yesnoCheck4() {
			if(document.getElementById('panduan').checked) {
				document.getElementById('ifPanduan').style.display = 'block';
			}
			else document.getElementById('ifPanduan').style.display = 'none';
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
	<script src="assets/demo/chart-area-demo.js"></script>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php include'footer 1.html'; ?>
</body>
</html>