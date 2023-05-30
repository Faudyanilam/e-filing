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
	<?php
	// include "../koneksi.php";

	if (isset($_GET['hasil'])) {
		if ($_GET['hasil'] == "berhasil"){
			echo "<script>
			Swal.fire(
			'Berhasil',
			'Anda Berhasil Logout',
			'success'
		) </script>";
	} else if($_GET['hasil'] == "gagal"){
		echo "<script>
		Swal.fire(
		'Gagal',
		'NPWP atau Password Salah',
		'error'
	) </script>";
} 
}
?>

<?php
// session_start();
// $_SESSION['kode_verif'] = $token2;
// echo $_SESSION['kode_verif_s'];

$pesan='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (isset($_POST['kode_verif_1770s'])) {
		if ($_SESSION['kode_verif_s']!=$_POST['kode_verif_1770s']){
			$pesan="<div class='alert alert-danger' style='width: auto;'><font size ='2'><strong>Error!</strong> Kode yang dimasukan salah.</font></div>";
                // session_destroy();
		}else {
			$pesan="<div class='alert alert-success' style='width: auto;'><font size ='2'><strong>Sukses!</strong> Kode yang dimasukan benar. </font></div>";
			header('location:../berhasil_lapor_s.php?hasil=berhasil');
			// include 'cek_kode_1770.php';
		}
	}
}
?>

<br />
<div class="container box"> 
	<br />
	<!-- <form method="post" action="../lapor_s.php" enctype="multipart/form-data"> -->
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
										<img src="../img/eFilingSpt.png" width="85px" height="45px" >
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
									<div class="progress-bar progress-bar-striped" style="width:100%; background-color: rgb(255, 157, 49);"><small>100.00%</small></div>
								</div>
								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 18 dari 18</small></p><br>
								<!-- end progress bar -->

								<!-- Judul -->
								<p><b>SPT Anda</b></p>
								<br>
								<!-- end judul -->

								<!-- Form-->
								<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
									<div class="form-group row">
										<label class="col-sm-6 col-form-label font-13px" style="padding-left: 80px; color: rgb(4, 153, 195)">Jenis Formulir</label>
										<div class="col-sm-6" style="padding-right: 50px">
											<input class="form-control" name="perusahaan" id="perusahaan" value="1770S" disabled>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-6 col-form-label font-13px" style="padding-left: 80px; color: rgb(4, 153, 195)">Tahun Pajak</label>
										<div class="col-sm-6" style="padding-right: 50px">

											<input class="form-control" name="tahun_pajak" id="" value="<?php if (isset($_SESSION['tmptahun_pajak'])) {
												$tmptahun_pajak = $_SESSION['tmptahun_pajak'];
											}

											echo end($tmptahun_pajak);
											$tahun_pajak = end($tmptahun_pajak);
											?>" readonly>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-6 col-form-label font-13px" style="padding-left: 80px; color: rgb(4, 153, 195)">Pembetulan Ke</label>
										<div class="col-sm-6" style="padding-right: 50px">
											<input class="form-control" name="pembetulan_ke" id="" value="<?php if (isset($_SESSION['tmppembetulan_ke'])) {
												$tmppembetulan_ke = $_SESSION['tmppembetulan_ke'];
											}

											echo end($tmppembetulan_ke);
											$pembetulan_ke = end($tmppembetulan_ke);
											?>" readonly/>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-6 col-form-label font-13px" style="padding-left: 80px; color: rgb(4, 153, 195)">Status SPT</label>
										<div class="col-sm-6" style="padding-right: 50px">
											<input class="form-control" name="" id="" value="<?php if (isset($_SESSION['tmpstatus_hasil_s'])) {
												$tmpstatus_hasil_s = $_SESSION['tmpstatus_hasil_s'];
											}

											echo end($tmpstatus_hasil_s);
											$status_hasil_s = end($tmpstatus_hasil_s);
											?>" readonly>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-6 col-form-label font-13px" style="padding-left: 80px; color: rgb(4, 153, 195)">Jumlah</label>
										<div class="col-sm-6" style="padding-right: 50px">
											<input style="text-align: right;" class="form-control" name="" id="" value="<?php if (isset($_SESSION['tmpjumlah_hasil_akhir'])) {
												$tmpjumlah_hasil_akhir = $_SESSION['tmpjumlah_hasil_akhir'];
											}

											echo end($tmpjumlah_hasil_akhir);
											$jumlah_hasil_akhir = end($tmpjumlah_hasil_akhir);
											?>" readonly>
										</div>    
									</div>

									<div class="form-group row">
										<label class="col-sm-6 col-form-label font-13px" style="padding-left: 80px; color: rgb(4, 153, 195)">Catatan</label>
										<div class="col-sm-6" style="padding-right: 50px">
											<textarea class="form-control" name="perusahaan" id="perusahaan" disabled>Lengkap</textarea>
										</div>    
									</div>

									<div class="form-group row">
										<label class="col-sm-6 col-form-label font-13px" style="padding-left: 80px; color: rgb(4, 153, 195)">Ambil kode verifikasi</label>
										<div class="col-sm-6" style="padding-right: 45px; color: rgb(4, 153, 195)">
											<button type="button" data-toggle="modal" data-target="#exampleModal2" style="border: none; background-color: orange; color: black;">[di sini]</button> 
											Perhatikan server code yang anda diterima sesuai
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-6 col-form-label font-13px" style="padding-left: 80px; color: rgb(4, 153, 195)">Masukkan kode verifikasi</label>
										<div class="col-sm-6" style="padding-right: 50px">
											<input class="form-control" name="kode_verif_1770s" id="" value="" required>
											<?php echo $pesan; ?>
											
										</div>    
									</div>
									<br/>
									<br/>

									<div align="center">
										<a href="../berhasil_lapor_s.php">
											<button type="submit" class="btn btn-secondary" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white;" data-dismiss="modal"><i class="fas fa-paper-plane"></i> Kirim SPT</button>
										</a>
									</div>
								</form>
								<!-- end form -->

								<!-- button sebelum dan selanjutnya-->
								<hr>
								<div class="form-group row" style="padding-bottom: 	15px">
									<div class="col-sm-6">
										<a href="halaman17.php">
											<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
										</div>
									</div>
									<!-- end button sebelum dan selanjutnya-->

									<!-- Modal Verifikasi -->
									<form action="proses_kode_verif_s.php" method="post">
										<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 200px;">
											<div class="modal-dialog">
												<div class="modal-content">

													<button type="button" class="close" data-dismiss="modal" style="padding-right: 10px; padding-top: 5px;" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<h5 class="modal-title" id="exampleModalLabel" style="padding-left: 20px; padding-top: 15px;"><b>Kirim Kode Verifikasi</b></h5>

													<div class="modal-body">

														<!-- <div class="custom-control custom-radio"> -->
															<!-- <input type="radio" id="ContohRadio1" name="ContohRadio" class="custom-control-input"> -->
															<div class="row" style="padding-left: 20px">
																<div class="col-sm-3">
																	<label class="custom-control-label" for="ContohRadio1">email/label</label>
																</div>
																<div class="col-sm-3">
																	<input type="text" name="nama_email" placeholder="Masukkan Email Anda">
																</div>
															</div>
															<!-- </div> -->
															<!-- <div class="custom-control custom-radio"> -->
																<!-- <input type="radio" id="ContohRadio2" name="ContohRadio" class="custom-control-input"> -->
																<!-- <label class="custom-control-label" for="ContohRadio2">nomor Handphone</label> -->
																<!-- </div> -->

															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" style="border-radius: 25px;" data-dismiss="modal"> Batal </button>
																<!-- <a href="../kode_verif.php"> -->
																	<button type="submit" class="btn btn-primary" style="border-radius: 25px;"> Ok </button>
																	<!-- </a> -->
																</div>
															</div>
														</div>
													</div>
													<!-- end modal verifikasi-->
												</div>
												<!-- end card body -->
											</form>
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
