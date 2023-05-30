<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SPT 1770S | Politeknik Negeri Batam</title>
	<link href="../assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="jquery.min.js"></script>  
	<script src="jquery-ui.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>  

	<script>
		$(document).ready(function () {
			$('#simpan').click(function (e) {
				e.preventDefault();
				var sumber_penghasilan = $('#sumber_penghasilan').val();
				var DPP = $('#DPP').val();
				var PPh_terutang = $('#PPh_terutang').val();
				$.ajax
				({
					type: "POST",
					url: "proses_input_halaman7.php",
					data: { "sumber_penghasilan": sumber_penghasilan, "DPP": DPP, "PPh_terutang": PPh_terutang },
					success: function (data) {
						$('.result').html(data);
						$('#contactform')[0].reset();
						// $('.tampildata').load("list_siswa.php");
						$('#exampleModal').modal('hide');
					}
				});
			});
		});
	</script>
</head>
<body class="bg-body">
	<br />

	<div class="container box"> 
		<br />
		<!-- <h2 align="center"></h2><br /> -->

		<form>
			<ul class="nav nav-tabs">
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
			</ul>

			<!-- tab content -->
			<div class="tab-content">
				<!-- tab pane -->
				<div class="tab-pane active" id="lapor_detail" >
					<!-- panel -->
					<div class="panel panel-default">
						<!-- panel body -->
						<div class="panel-body">

							<!-- Card bg-->
							<div class="card bg-light mb-3" style="width:735px; background-color: white;">
								<!-- card header -->
								<div class="card-header card-header_1">
									<i class="fas fa-file mr-1"></i>
									<b>SPT 1770 SS</b>
								</div>
								<!-- end card header -->

								<!-- card body -->
								<div class="card-body card-body_2">  
									<p class="p_text_2 card_7"></p>

									<!-- progress bar -->
									<div class="progress">
										<div class="progress-bar progress-bar-striped" style="width:40%; background-color: rgb(255, 157, 49);">40%</div>
									</div>
									<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 7 dari 18</small></p><br/>
									<!-- end progress bar -->

									<!-- Pertanyaan -->
									<p><b>Apakah Anda memiliki penghasilan yang pajaknya sudah dipotong secara final?</b></p>
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="yes" value="option1">
											<label class="form-check-label" for="exampleRadios">Ya</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="no" value="option2">
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
												<!-- button tambah -->
												<div align="right">
													<button type="button" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 25px"><small>Tambah +</small></button>
												</div>
												<br>
												<!-- end button tambah -->

												<!--Untuk menampilkan data -->
												<!-- <div class="tampildata"></div> -->
												<?php include("fetch_halaman7.php"); ?>
												<!-- end menampilkan data -->
												

											</span>
										</div>
									</div>
									<!-- end jika memilih jawaban Ya  -->

									<!-- button sebelum dan selanjutnya-->
									<hr>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-6">
											<a href="halaman6.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
											</div>
											<div class="col-sm-6" style="padding-left: 253px;">
												<a href="halaman8.php">
													<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
												</div>
											</div>
											<!-- end button sebelum dan selanjutnya-->




											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel"><b>Modal Title</b></h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form id="contactform" action="" method="POST">
																<div class="form-group row">
																	<label class="col-sm-6">Sumber/ jenis Penghasilan</label>
																	<div class="col-sm-6">
																		<select class="form-control" name="sumber_penghasilan" id="sumber_penghasilan">
																			<option value="">Pilih...</option>
																			<option>1. Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara</option>
																			<option value="Bunga/Diskonto Obligasi">2. Bunga/Diskonto Obligasi</option>
																			<option value="Penjualan Saham di Bursa Efek">3. Penjualan Saham di Bursa Efek</option>
																			<option value="Hadiah Undian">4. Hadiah Undian</option>
																			<option value="Pesangon, Tunjangan Hari Tua, dan tebusan Pensiun yang dibayarkan sekaligus">5. Pesangon, Tunjangan Hari Tua, dan tebusan Pensiun yang dibayarkan sekaligus</option>
																			<option value="Honoranium Atas Beban APBD/APBN">6. Honoranium Atas Beban APBD/APBN</option>
																			<option value="Pengalihan Hak Atas Tanah dan Bangunan">7. Pengalihan Hak Atas Tanah dan Bangunan</option>
																			<option value="Sewa Atas Tanah dan Bangunan">8. Sewa Atas Tanah dan Bangunan</option>
																			<option value="Bangunan yang diterima dalam rangka Bangun Guna Serah">9. Bangunan yang diterima dalam rangka Bangun Guna Serah</option>
																			<option value="Bunga Simpanan yang diserahkan oleh Koperasi kepada Anggota Koperasi">10. Bunga Simpanan yang diserahkan oleh Koperasi kepada Anggota Koperasi</option>
																			<option value="Transaksi Derivatif">11. Transaksi Derivatif</option>
																			<option value="Dividen">12. Dividen</option>
																			<option value="Penghasilan Istri Dari Satu Pemberi Kerja">13. Penghasilan Istri Dari Satu Pemberi Kerja</option>
																			<option value="Penghasilan Lain Yang Dikenakan Pajak Final Dan/Atau bersifat Final">14. Penghasilan Lain Yang Dikenakan Pajak Final Dan/Atau bersifat Final</option>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-6">DPP/Penghasilan Bruto</label>
																	<div class="col-sm-6">
																		<input type="text" name="DPP" id="DPP" class="form-control" />
																	</div>
																</div>               
																<div class="form-group row">
																	<label class="col-sm-6">PPH Terutang</label>
																	<div class="col-sm-6">
																		<input type="text" name="PPh_terutang" id="PPh_terutang" class="form-control" />
																	</div>
																</div>
																<button id="simpan" type="submit" class="btn btn-primary">Submit</button>
															</form>
														</div>
														<div class="modal-footer">   
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button  type="button" class="btn btn-primary">Save changes</button>
														</div>
													</div>
												</div>
											</div>
											<!-- end modal -->

											<!-- Modal content-->
				<!-- <div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Bagian A. Penghasilan yang dikenakan PPh Final dan/atau bersifat final</h4>
					</div>
					<div class="modal-body">
						<form method="post" id="user_form">
							<div class="form-group row">
								<label for="" class="col-sm-7 col-form-label">Sumber/Jenis Penghasilan</label>
								<div class="col-sm-5">
									<select class="form-control" name="sumber_penghasilan" id="sumber_penghasilan">
										<option value="">Pilih...</option>
										<option>1. Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara</option>
										<option>2. Bunga/Diskonto Obligasi</option>
										<option>3. Penjualan Saham di Bursa Efek</option>
										<option>4. Hadiah Undian</option>
										<option>5. Pesangon, Tunjangan Hari Tua, dan tebusan Pensiun yang dibayarkan sekaligus</option>
										<option>6. Honoranium Atas Beban APBD/APBN</option>
										<option>7. Pengalihan Hak Atas Tanah dan Bangunan</option>
										<option>8. Sewa Atas Tanah dan Bangunan</option>
										<option>9. Bangunan yang diterima dalam rangka Bangun Guna Serah</option>
										<option>10. Bunga Simpanan yang diserahkan oleh Koperasi kepada Anggota Koperasi</option>
										<option>11. Transaksi Derivatif</option>
										<option>12. Dividen</option>
										<option>13. Penghasilan Istri Dari Satu Pemberi Kerja</option>
										<option>14. Penghasilan Lain Yang Dikenakan Pajak Final Dan/Atau bersifat Final</option>

									</select>
								</div>
								<span id="error_sumber_penghasilan" class="text-danger"></span>
							</div>
							<div class="form-group row">
								<label class="col-sm-7 col-form-label">DPP/Penghasilan Bruto</label>
								<div class="col-sm-5">
									<input  type="text" name="DPP" id="DPP" class="form-control" />
								</div>
								<span id="error_DPP" class="text-danger"></span>
							</div>
							<div class="form-group row">
								<label class="col-sm-7 col-form-label">PPh Terutang</label>
								<div class="col-sm-5">
									<input type="text" name="PPh_terutang" id="PPh_terutang" class="form-control" />
								</div>
								<span id="error_PPh_terutang" class="text-danger"></span>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="form-group">
							<input type="hidden" name="action" id="action" value="insert" />
							<input type="hidden" name="hidden_id" id="hidden_id" />
							<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" style="border-radius: 25px; background-color: rgb(4, 153, 195);"/>
							<input class="btn btn-info" value="Batal" style="border-radius: 25px; background-color: rgb(4, 153, 195);"/>
						</div> -->
						<!-- <button type="submit" class="btn btn-primary btn-sm" name="btn_save_details" value="save" id="btn_save_details" style="border-radius: 25px; background-color: rgb(4, 153, 195);">Simpan</button>
							<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px;">Batal</button> -->
					<!-- 	</div>
					</div> -->
					<!-- end modal content -->
			<!-- 	</div>
			</div>  -->
			<!-- End Modal -->

		<!-- 	<div id="action_alert" title="Action">

			</div>

			<div id="delete_confirmation" title="Confirmation">
				<p>Are you sure you want to Delete this data?</p>
			</div> -->

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

<script type="text/javascript"> 
	function yesnoCheck() {

		if(document.getElementById('yes').checked) {
			document.getElementById('ifYes').style.display = 'block';
		}
		else document.getElementById('ifYes').style.display = 'none';
	}

</script>
</body>
</html> 
