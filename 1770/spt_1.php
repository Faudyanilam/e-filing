<?php error_reporting(false); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Registrasi | Tax Center Politeknik Negeri Batam</title>
	<link href="../assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script type="text/javascript">
		function hello(){
			alert("Proses Upload Selesai");
		}
	</script>
</head>
<body class="bg-body" onload="hello();">
	<?php include'../header.html'; ?>
	<br/>
	<div class="container box">
		<br/>
		<form enctype="multipart/form-data">
			<div class="tab-content">
				<div class="tab-pane active" id="lapor_detail" >
					<div class="panel panel-default">
						<div class="panel-body">

							<!-- membuat card navbar -->
							<div class="card card_8">
								<div class="card-body">

									<!-- membuat row -->
									<div class="row">
										<?php echo $_SESSION['file']; ?>

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
													<a href="bantuan_spt.php">Bantuan</a>
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
										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%; background-color: rgb(255, 157, 49)"><small>100.00%</small></div>
									</div>
									<p style="padding-left: 0px; padding-top: 0px; padding-bottom: 10px; color: rgb(4, 153, 195)">Halaman dari ke 2 dari 2</p>
									<h5 id="exampleModalLabel"><b>SPT Anda</b></h5>
								</div>
								
								<!-- Membuat SPT ANDA -->
								<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
									
									<div class="form-group row" style="padding-left: 150px; padding-top: 0px; padding-bottom: 10px">
										<label class="col-sm-3 col-form-label" ><small>Jenis Formulir</small></label>
										<div class="col-sm-5" style="padding-right: 50px">
											<input class="form-control" name="perusahaan" id="perusahaan" value="SPT Tahunan OP" style="height:25px; width: 250px" disabled>
										</div>
									</div>

									<div class="form-group row" style="padding-left: 150px; padding-top: 0px; padding-bottom: 10px">
										<label class="col-sm-3 col-form-label" ><small>Tahun / Masa Pajak</small></label>
										<div class="col-sm-5" style="padding-right: 50px">
											<input class="form-control" name="perusahaan" id="perusahaan" value="2018/1" style="height:25px; width: 250px" disabled>
										</div>
									</div>

									<div class="form-group row" style="padding-left: 150px; padding-top: 0px; padding-bottom: 0px">
										<label class="col-sm-3 col-form-label" ><small>Pembetulan Ke</small></label>
										<div class="col-sm-5" style="padding-right: 50px">
											<input class="form-control" name="perusahaan" id="perusahaan" value="0" style="height:25px; width: 250px" disabled>
										</div>
									</div>

									<div class="form-group row" style="padding-left: 150px; padding-top: 0px; padding-bottom: 0px">
										<label class="col-sm-3 col-form-label" ><small>Status SPT</small></label>
										<div class="col-sm-5" style="padding-right: 50px">
											<input class="form-control" name="perusahaan" id="perusahaan" value="Nihil" style="height:25px; width: 250px" disabled>
										</div>
									</div>

									<div class="form-group row" style="padding-left: 150px; padding-top: 0px; padding-bottom: 0px">
										<label class="col-sm-3 col-form-label" ><small>Jumlah</small></label>
										<div class="col-sm-5" style="padding-right: 50px">
											<input style="text-align: right;" class="form-control" name="perusahaan" id="perusahaan" value="0" style="height:25px; width: 250px" disabled>
										</div>    
									</div>
									<div class="form-group row" style="padding-left: 150px; padding-top: 0px; padding-bottom: 0px">
										<label class="col-sm-3 col-form-label" ><small>Catatan</small></label>
										<div class="col-sm-5" style="padding-right: 50px;">
											<textarea class="form-control" name="catatan" id="catatan" value="" style="height:52px; width: 250px;">Kewajiban Dokumen yang Harus Dilampirkan</textarea>
										</div>    
									</div>

									
									<div class="form-group row" style="padding-left: 150px; padding-top: 0px; padding-bottom: 0px">
										<label class="col-sm-3 col-form-label" >Ambil kode verifikasi</label>
										<div class="col-sm-6" style="padding-right: 50px"><small>
											<button type="button" data-toggle="modal" data-target="#exampleModal2" style="border: none; background-color: orange;">[di sini]</button><br>Perhatikan server code yang anda diterima sesuai</small>
										</div>
									</div>

									<div class="form-group row" style="padding-left: 150px; padding-top: 0px; padding-bottom: 0px">
										<label class="col-sm-3 col-form-label" >Masukkan Kode Verifikasi</label>
										<div class="col-sm-5" style="padding-right: 50px">
											<input class="form-control" name="verif" id="verif" value="" style="height:25px; width: 100px">
										</div>    
									</div>
									<br/>

									<div align="center">
										<a href="../lapor.php">
											<button type="button" class="btn btn-secondary" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white;" data-dismiss="modal"><i class="fas fa-paper-plane"></i> Kirim SPT</button>
										</a>
									</div>
								<br/>
								<hr/>
								<div align="left"  style="padding-left: 10px;">
									<a href="upload_spt.php">
										<button type="button" class="btn btn-warning" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; height: 31px"><i class="fas fa-chevron-left"></i>Kembali</button>
									</a>
								</div>
								<br/>
							</div>



								<!-- Modal -->
							<!-- <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" style="max-width: 330px">
									<div class="modal-content">
										<div class="modal-body">
											<div align="center">
												<i class="fas fa-info-circle fa-5x" style="color: rgb(161, 204, 247); padding-top: 40px;"></i>
											</div>
											<h4 align="center">INFO</h4>
											<p align="center" style="color: #191970">
												Jumlah penghasilan Bruto Anda (Penjumlahan angka 1, 8 dan 10) lebih dari Rp.60.000.000. Anda harus menggunakan formulir 1770 S
											</p>
										</div>
										<div align="center">
											<a href ="spt_1.php">
												<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="far fa-thumbs-up"></i> Ya</button>
											</a>
										</div>
										<br/>
									</div>
								</div>
							</div> -->
							<!-- end modal -->

						</div>	
						<!-- End SPT ANDA -->
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
		// swal.fire({
			// title: 'Proses Upload Selesai',
			// text:  'Selanjutnya adalah dapatkan kode verifikasi',
			// type: 'info',
			// timer: 10000,
			// html:
			// 'Selanjutnya adalah dapatkan kode verifikasi',
			// focusConfirm: false,
			// confirmButtonText:
			// '<i class="a fa-thumbs-up"></i>Ya',

			// buttons: [false, "<i class='a fa-thumbs-up'></i>Ya"],
			// showConfirmButton: false
			// '<i class="fa fa-thumbs-up"></i>Ya',
	// 	});  
	// },500); 
	// setTimeout(function () { 
	// 	swal({
	// 		title: 'Proses Upload Selesai',
	// 		text:  'Selanjutnya adalah dapatkan kode verifikasi',
	// 		icon: 'info',
	// 		timer: 10000,

	// 		buttons: [false, "<i class='a fa-thumbs-up'></i>Ya"],
	// 		// showConfirmButton: false
	// 		// '<i class="fa fa-thumbs-up"></i>Ya',
	// 	});  
	// },500); 
	
</script>
<br/>
<br/>
<br/>
<br/>
<?php include'../footer.html'; ?>
</body>
</html>