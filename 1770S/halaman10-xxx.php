<html>
<?php
error_reporting(false);
session_start();
?>
<head>
	<title>SPT 1770S | Politeknik Negeri Batam</title> 
	<link href="../assets/img/logo.png" rel="icon">
	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="jquery.min.js"></script>  
	<script src="jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>  
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-body">
	<?php include'../header1.html'; ?>
	<br />

	<div class="container container-fluid box"> 
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
									<div class="progress-bar progress-bar-striped" style="width:55.56%; background-color: rgb(255, 157, 49);"><small>55.56%</small></div>
								</div>
								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 10 dari 18</small></p><br>
								<!-- end progress bar -->

								<!-- Pertanyaan -->
								<!-- <form method="post" action="proses_halaman10.1.php"> -->
									<p><b>Apakah Anda memiliki Tanggungan?</b></p>
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="punya_tanggungan" id="yes" value="Ya" checked>
											<label class="form-check-label" for="exampleRadios">Ya</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="punya_tanggungan" id="no" value="Tidak">
											<label class="form-check-label" for="exampleRadios">
												Tidak
											</label>
										</div>
									</div>
									<!-- end pertanyaan -->

									<!-- Jika memilih jawaban Ya  -->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<span id="ifYes" style="display:none" >

												<!-- button tambah dan spt-->
												<div class="form-group row" style="padding-bottom: 	15px">
													<div class="col-sm-6">
														<a href="">
															<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"><small>Tanggungan Pada SPt Tahun Lalu</small></button></a>
														</div>
														<div class="col-sm-6" style="padding-left: 253px;">
															<button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Tambah +</small></button>
														</div>
													</div>
													<!-- end button tambah dan spt-->

													<!-- table responsive -->
													<div class="table-responsive table_1">
														<table class="table table_2" style="border: 1px solid #ccc;">
															<thead class="thead-dark table_3">
																<tr>
																	<th scope="col" class="font_table"><small>NAMA</small></th>
																	<th scope="col" class="font_table"><small>NIK</small></th>
																	<th scope="col" class="font_table"><small>HUBUNGAN KELUARGA </small></th>
																	<th scope="col" class="font_table"><small>PEKERJAAN</small></th>
																	<th scope="col" class="font_table"><small>AKSI</small></th>
																</tr>
																<?php
                                                    // Ambil data dari session
																if (isset($_SESSION['tmppunya_tanggungan'])) {
																	$tmppunya_tanggungan = $_SESSION['tmppunya_tanggungan'];
																}
																if (isset($_SESSION['tmpnama_keluarga'])) {
																	$tmpnama_keluarga = $_SESSION['tmpnama_keluarga'];
																}
																if (isset($_SESSION['tmpnik_keluarga'])) {
																	$tmpnik_keluarga = $_SESSION['tmpnik_keluarga'];
																}
																if (isset($_SESSION['tmphubungan_keluarga'])) {
																	$tmphubungan_keluarga = $_SESSION['tmphubungan_keluarga'];
																}
																if (isset($_SESSION['tmppekerjaan_keluarga'])) {
																	$tmppekerjaan_keluarga = $_SESSION['tmppekerjaan_keluarga'];
																}
                                                    // End script ambil data
																?>  
															</thead>
															<tbody>
																<?php 
																$jumlah = 0;

																for ($i=0; $i < count($tmpnama_keluarga); $i++) { ?>

																	<tr style="font-weight: bold;">

																		<td>
																			<?php echo $tmpnama_keluarga[$i] ?>
																		</td>


																		<td>
																			<?php echo $tmpnik_keluarga[$i] ?>
																		</td>

																		<td>
																			<?php echo $tmphubungan_keluarga[$i] ?>
																		</td>

																		<td>
																			<?php echo $tmppekerjaan_keluarga[$i] ?>
																		</td>
																		<td>
																			<a href="proses_hapus_hal10.php">
																				<i style="color: black" class="fas fa-trash-alt">
																				</i>
																			</a>
																		</td>

																	</tr>

																	<?php
																} 
																
																?>			
															</tbody>
														</table>
														
														<div class="form-group row">
															
														</div>
													</div>
													<!-- end tabel responsive -->
												</span>
											</div>
										</div>
										<!-- end jika jawaban ya -->

										<!-- button sebelum dan selanjutnya-->
										<hr>
										<div class="form-group row" style="padding-bottom: 	15px">
											<div class="col-sm-6">
												<a href="halaman9-xxx.php">
													<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
												</div>
												<div class="col-sm-6" style="padding-left: 253px;">
													<a href="proses_halaman10.1.php">
														<button type="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
													</div>
												</div>
												<!-- </form> -->
												<!-- end button sebelum dan selanjutnya-->

												<!-- Modal bukti potong -->
												<form method="post" action="proses_halaman10.php">
													<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog">

															<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<h4 class="modal-title">Input Data Keluarga</h4>
																	<button type="button" class="close" data-dismiss="modal">&times;</button>

																</div>
																<div class="modal-body">
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Nama</label>
																		<div class="col-sm-5">
																			<input class="form-control" name="nama_keluarga" id="nama_keluarga" 
																			type="text" required="">
																		</div>
																	</div>

																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">NIK</label>
																		<div class="col-sm-5">
																			<input class="form-control" name="nik_keluarga" id="nik_keluarga" onkeypress="return isNumericBukti(event)" oninput="maxLengthCheckBukti(this)" 
																			type="text" maxlength = "18" min = "1" max = "999999999999999" required="">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Hubungan Keluarga</label>
																		<div class="col-sm-5">
																			<input class="form-control" name="hubungan_keluarga" id="hubungan_keluarga" 
																			type="text" required="">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Pekerjaan</label>
																		<div class="col-sm-5">
																			<input class="form-control" name="pekerjaan_keluarga" id="pekerjaan_keluarga" 
																			type="text" required="">
																		</div>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="submit" class="btn btn-primary btn-sm" name="simpan" value="Simpan" id="btn_save_details"style="border-radius: 25px; background-color: rgb(4, 153, 195);">Simpan</button>
																	<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px;">Batal</button>
																</div>
															</div>
															<!-- end modal content -->
														</div>
													</div> 
												</form>
												<!-- End Modal -->
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
					<script src="jquery-1.12.4.min.js"></script>
					<script src="datepicker/dist/js/bootstrap-datepicker.js"></script>
					<script type="text/javascript"> 

						function yesnoCheck() {

							if(document.getElementById('yes').checked) {
								document.getElementById('ifYes').style.display = 'block';
							}
							else document.getElementById('ifYes').style.display = 'none';
						}
						document.getElementById('ifYes').style.display = 'block';
					</script>

					<br/>
					<br/>
					<br/>
					<br/>
					<?php include'../footer.html'; ?>
				</body>
				</html> 
