<html>
<?php
error_reporting(false);
session_start();
?>
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
	<?php include '../header.html'; ?>
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
									<b>SPT 1770 SS</b>
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
									<form action="proses_halaman12.php" method="post"> 
									<p><b>Status Kewajiban Perpajakan Suami Istri</b></p>
									<div class="col-sm-6" style="padding-left: 30%;padding-top: 2%">
										<p><b>Status Perkawinan</b></p>
									</div>
									<div class="col-sm-6">
										<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
											<div class="form-check">
												<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();disa();" name="status_perkawinan" id="no" value="Tidak Kawin">
												<label class="form-check-label" for="exampleRadios">Tidak Kawin</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();disa();" name="status_perkawinan" id="yes" value="Kawin">
												<label class="form-check-label" for="exampleRadios">
													Kawin
												</label>
											</div>
										</div>
									</div>
									<br>
									<!-- end pertanyaan -->

									<!-- Jika pilih jawaban kawin -->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<span id="ifYes" style="display:none" >
												<div class="form-group row">
													<label for="jenis_pajak" class="col-sm-6 col-form-label">Status Kewajiban Perpajakan Suami-Isteri</label>
										 			<div class="col-sm-4" id="testing">
														<select class="form-control" name="status_pjk" id="status_pjk" oninput="validasi(this)" oninvalid="validasi(this)" onchange="phmt();">
															<option value="" readonly>Pilih</option>
															<option value="tkw" disabled>Tidak Kawin</option>
															<option value="kk" >KK / Kepala Keluarga</option>
															<option value="hb">HB / Hidup Berpisah </option>
															<option value="ph">PH / Pisah Harta </option>
															<option value="mt">MT / Memilih Terpisah </option>
														</select>
													</div>
													<!-- <script type="text/javascript">
														
													</script> -->
												</div>
												<div class="form-group row" style="padding-bottom: 	15px">
													<div class="col-sm-6">
														<p style="font-weight: bold">NPWP Isteri/Suami</p>
													</div>
													<div class="col-sm-4">
														<input type="text" name="npwp_istri_suami" style="width: 215px" placeholder="NPWP" id="npwp" disabled>
													</div>
												</div>
											</span>
										</div>
									</div>
									<!-- end Jika pilih jawaban kawin -->


									<!-- input text -->
									<p><b>Pilih Golongan PTKP Anda</b></p>
									<div class="form-group row" style="padding-left: 30px;">
										<label for="jenis_pajak" class="col-sm-6 col-form-label">7. Penghasilan Tidak Kena Pajak/Jumlah Tanggungan</label>
										<div class="col-sm-4">
											<select class="form-control" name="ptkp" id="ptkp" oninput="validasi(this)" oninvalid="validasi(this)" onchange="phmt()" required>
												<option value="tk" id="tk">Tidak Kawin/TK</option>
												<option value="kw" id="kw">Kawin/K</option>
												<option value="kw_gabung" id="kw_gabung">Kawin Penghasilan istri Di gabung(K/I)</option>
											</select>
										</div>
										<div class="col-sm-2">
											<select class="form-control" name="jumlah_tanggungan" id="jumlah_tanggungan" oninput="validasi(this)" oninvalid="validasi(this)">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
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
												<div class="row">
													<div class="col-sm-4">
														<p>Lapor Sebagai</p>
													</div>
													<div class="col-sm-4">
														<div class="form-check">
															<input class="form-check-input" type="radio" onclick="javascript:lapor_s_i();" name="lapor_sebagai" id="suami" value="Suami">
															<label class="form-check-label" for="exampleRadios">Suami</label>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-check">
															<input class="form-check-input" type="radio" onclick="javascript:lapor_s_i();" name="lapor_sebagai" id="istri" value="Istri">
															<label class="form-check-label" for="exampleRadios">
																Istri
															</label>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group row" style="padding-bottom: 	15px">
												<div class="col-sm-6">
													<p>Penghasilan Netto Suami</p>
												</div>
												<div class="col-sm-4">
													<input text-align="right" name="neto_suami" type="text" id="t_suami" style="width: 250px;"  disabled>
												</div>
											</div>

											<div class="form-group row" style="padding-bottom: 	15px">
												<div class="col-sm-6">
													<p>Penghasilan Netto Istri</p>
												</div>
												<div class="col-sm-4">
													<input type="text" name="neto_istri" style="width: 250px;" id="t_istri" disabled>
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
													<input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px"></a>
												</div>
											</div>
										</form>
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

					<table>
					<tr>
						<td>Jawaban</td>
					</tr>
					<?php
   // Ambil data dari session
					if (isset($_SESSION['tmpmembayar_zakat'])) {
						$tmpmembayar_zakat = $_SESSION['tmpmembayar_zakat'];
					}
					if (isset($_SESSION['tmpzakat_sumbangan'])) {
						$tmpzakat_sumbangan = $_SESSION['tmpzakat_sumbangan'];
					}

   // End script ambil data

   // Cetak dengan cara uraikan isi arraynya
					for ($i=0; $i < count($tmpmembayar_zakat); $i++) {
						echo "<tr>";
						echo "<td>".$tmpmembayar_zakat[$i]."</td></tr>";
						echo "<td>".$tmpzakat_sumbangan[$i]."</td></tr>";

					}
   // End script urai array
   //session_destroy();
					?>
				</table> 
			</div>
			<!-- end container box -->
			<script type="text/javascript"> 
				function yesnoCheck() {

					if(document.getElementById('yes').checked) {
						document.getElementById('ifYes').style.display = 'block';
					}
					else document.getElementById('ifYes').style.display = 'none';

				}
				function phmt(){
					var tes = document.getElementById("status_pjk").value;
					var tes2 = document.getElementById("ptkp").value;
					if (tes == 'tkw' ){
						document.getElementById('card_kurang_bayar').style.display = 'none';

					}else if (tes == 'kk'){
						document.getElementById('npwp').disabled = true;
						document.getElementById('tk').disabled = true;
						document.getElementById('kw').disabled = false;
						document.getElementById('kw_gabung').disabled = false;
						if (tes == 'kk' && tes2 == 'kw_gabung'){
							document.getElementById('card_kurang_bayar').style.display = 'block';

						}else if(tes == 'kk' && tes2 == 'kw'){
							document.getElementById('card_kurang_bayar').style.display = 'block';
						}
					}else if (tes == 'hb'){
						document.getElementById('card_kurang_bayar').style.display = 'none';
						document.getElementById('npwp').disabled = false;
						document.getElementById('tk').disabled = false;
						document.getElementById('kw').disabled = true;
						document.getElementById('kw_gabung').disabled = true;
					}
					else if (tes == 'ph'){
						document.getElementById('npwp').disabled = false;
						document.getElementById('tk').disabled = true;
						document.getElementById('kw').disabled = true;
						document.getElementById('kw_gabung').disabled = false;
						if (tes == 'ph' && tes2 == 'kw_gabung'){
							document.getElementById('card_kurang_bayar').style.display = 'block';

						}
					}
					else if (tes == 'mt'){
						document.getElementById('npwp').disabled = false;
						document.getElementById('tk').disabled = true;
						document.getElementById('kw').disabled = true;
						document.getElementById('kw_gabung').disabled = false;
						if (tes == 'mt' && tes2 == 'kw_gabung'){
							document.getElementById('card_kurang_bayar').style.display = 'block';
						}
					}
					else document.getElementById('card_kurang_bayar').style.display = 'none';

				}

				function disa(){

					if(document.getElementById('no').checked) {
						document.getElementById('kw').disabled = true;
						document.getElementById('kw_gabung').disabled = true;
					}else if (document.getElementById('no').checked){
						document.getElementById('kw').disabled = false;
						document.getElementById('kw_gabung').disabled = false;
					}
				}

				function lapor_s_i(){
					if(document.getElementById('suami').checked) {
						document.getElementById('t_suami').disabled = false;
						document.getElementById('t_istri').disabled = true;
					}
					else if(document.getElementById('istri').checked) {
						document.getElementById('t_suami').disabled = true;
						document.getElementById('t_istri').disabled = false;
					}

				}
				$('#ifYes').hide(500);
			</script>
			<br />
			<br />
			<br />
			<br />
			<?php include '../footer.html'; ?>
		</body>
		</html> 
