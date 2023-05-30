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
	<?php include'../header.html'; ?>
	<br />

	<div class="container box"> 
		<br />
		<!-- <h2 align="center"></h2><br /> -->

		<form>
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="../arsip_spt.php">Arsip SPT</a>
				</li>
				<li class="nav-item" style="background-color: #f5f5f5;">
					<a href="../buat_spt.php" style="color: #191970;">Buat SPT</a>
				</li>
				<li class="nav-item">
					<a href="../draft_spt.php">Draft SPT</a>
				</li>
				<li class="nav-item">
					<a href="../bantuan_spt.php">Bantuan</a>
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
									<b>SPT 1770 S</b>
								</div>
								<!-- end card header -->

								<!-- card body -->
								<div class="card-body card-body_2">  
									<p class="p_text_2 card_7"></p>

									<!-- progress bar -->
									<div class="progress">
										<div class="progress-bar progress-bar-striped" style="width:66.67%; background-color: rgb(255, 157, 49);"><small>66.67%</small></div>
									</div>
									<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 12 dari 18</small></p><br>
									<!-- end progress bar -->

									<!-- Pertanyaan -->
									<p><b>Apakah Anda membayar Zakat/Sumbangan Keagamaan Kegiatan Wajib?</b></p>
									<p style=""><b>Status Perkawinan</b></p>
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="no" value="option1">
											<label class="form-check-label" for="exampleRadios">Tidak Kawin</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="yes" value="option2">
											<label class="form-check-label" for="exampleRadios">
												Kawin
											</label>
										</div>
									</div>
									<br>
									<!-- end pertanyaan -->

									<!-- Jika pilih jawaban kawin -->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<span id="ifYes" style="display:none" >
												<div class="form-group row">
													<label for="jenis_pajak" class="col-sm-6 col-form-label"><small>Status Kewajiban Perpajakan Suami-Isteri</small></label>
													<div class="col-sm-4">
														<select class="form-control" name="" id="status_pjk" oninput="validasi(this)" oninvalid="validasi(this)"  required>
															<option id="tkw">Tidak Kawin</option>
															<option id="kk">KK / Kepala Keluarga</option>
															<option id="hb">HB / Hidup Berpisah </option>
															<option id="ph">PH / Pisah Harta </option>
															<option id="mt">MT / Memilih Terpisah </option>
														</select>
													</div>
												</div>
												<div class="form-group row" style="padding-bottom: 	15px">
													<div class="col-sm-6">
														<p style="">NPWP Isteri/Suami</p>
													</div>
													<div class="col-sm-4">
														<input type="text" style="width: 215px" maxlength="15" value="NPWP" disabled>
													</div>
												</div>
											</span>
										</div>
									</div>
									<!-- end Jika pilih jawaban kawin -->


									<!-- input text -->
									<p><b>Pilih Golongan PTKP Anda</b></p>
									<div class="form-group row">
										<label for="jenis_pajak" class="col-sm-6 col-form-label">7. Penghasilan Tidak Kena Pajak/Jumlah Tanggungan</label>
										<div class="col-sm-4">
											<select class="form-control" name="" id="" oninput="validasi(this)" oninvalid="validasi(this)" onchange="ptkp()" required>
												<option id="tk">Tidak Kawin/TK</option>
												<option id="kw">Kawin/K</option>
												<option id="kw_gabung">Kawin Penghasilan istri Di gabung(K/I)</option>
											</select>
										</div>
										<div class="col-sm-2">
											<select class="form-control" name="" id="" oninput="validasi(this)" oninvalid="validasi(this)" required>
												<option value="">0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
										</div>
									</div>
									<!-- end input text -->

									<!-- Card jika MT/HB -->
									<div class="card bg-light mb-3" id="card_kurang_bayar" style="width:708px; background-color: white; display: none" >
										<div class="card-header card-header_2" >
											<i class="fas fa-file mr-1"></i>
											<b>Panel Perhitungan PPh Untuk Status PH atau MT</b>
										</div>
										<div class="card-body card-body_4">
											<br/>

											<!-- pertanyaan  -->
											<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
												<p>Lapor Sebagai</p>
												<div class="form-check">
													<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="no" value="option1">
													<label class="form-check-label" for="exampleRadios">Suami</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="yes" value="option2">
													<label class="form-check-label" for="exampleRadios">
														Istri
													</label>
												</div>
											</div>

											<div class="form-group row" style="padding-bottom: 	15px">
												<div class="col-sm-6">
													<p style=" color: rgb(4, 153, 195)">Penghasilan Netto Suami</p>
												</div>
												<div class="col-sm-4">
													<input type="text" style="width: 250px; border: 1px solid rgb(4, 153, 195)" value="0">
												</div>
											</div>

											<div class="form-group row" style="padding-bottom: 	15px">
												<div class="col-sm-6">
													<p style="color: rgb(4, 153, 195)">Penghasilan Netto Istri</p>
												</div>
												<div class="col-sm-4">
													<input type="text" style="width: 250px; border: 1px solid rgb(4, 153, 195)" value="0">
												</div>
											</div>
											<!-- akhir pertanyaan -->

										</div>
									</div>
									<!-- end card MT/HB-->

									<!-- button sebelum dan selanjutnya-->
									<hr>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-6">
											<a href="halaman11.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
											</div>
											<div class="col-sm-6" style="padding-left: 253px;">
												<a href="halaman13.php">
													<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
												</div>
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
				// function ptkp(){
				// 	var status_pjk = document.getElementById('status_pjk').value;
				// 	document.getElementById('card_kurang_bayar').style.display = 'block';
					// if ((document.getElementById('ph').select) || (document.getElementById('kw_gabung').select)){
					// 	document.getElementById('card_kurang_bayar').style.display = 'block';
					// }document.getElementById('card_kurang_bayar').style.display = 'none';
				// }
				$('#ifYes').hide(500);
			</script>
			<br/>
			<br/>
			<br/>
			<br/>
			<?php include'../footer.html'; ?>
		</body>
		</html> 
