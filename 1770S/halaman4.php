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
<?php
// session_start();
// echo $_SESSION['neto_dn'];
?>
<body class="bg-body">
	<?php include'../header1.html'; ?>
	<br />
	<div class="container box"> 
		<br />
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
									<div class="progress-bar progress-bar-striped" style="width:22.22%; background-color: rgb(255, 157, 49);"><small>22.22%</small></div>
								</div>
								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 4 dari 18</small></p><br>
								<!-- end progress bar -->

								<!-- Pertanyaan -->
								<form name="form" action="proses_halaman4.php" method="post">
									<p><b>Apakah Anda memiliki penghasilan Dalam Negeri Lainnya?</b></p>
									<div class="custom-control custom-radio">
										<input type="radio" id="ya" name="ContohRadio" class="custom-control-input" onclick="javascript:yesnoCheck();">
										<label class="custom-control-label" for="ya" style="">Ya</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="tdk" name="ContohRadio" class="custom-control-input" onclick="javascript:yesnoCheck();">
										<label class="custom-control-label" for="tdk" style="">Tidak</label>
									</div>
									<!-- end pertanyaan -->
									
									<!-- Jika memilih jawaban Ya  -->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<span id="ifYes" style="display:none" >
												<!-- Tabel -->
												<div class="table-responsive tabel-striped">
													<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
														<tr>
															<div class="form-group">
																<td ><small><b>1. </b></small></td>
																<td ><small><b>Bunga</b></small></td>
																<td >
																	<div class="input-group">
																		<span class="input-group-addon" id="basic-addon1">Rp</span>
																		<input type="text" name="bunga" id="angkaSatu" value="0" oninput="hapus()" class="uang form-control" style="text-align: right;" onkeyup="jumlah();" />

																		<input type="text" name="bunga" id="tes" value="0" style="text-align: right;" onkeyup="jumlah();" hidden />

																		<span id="error_first_name" class="text-danger"></span>
																	</div>
																</td>
															</div>
														</tr>
														<tr>
															<div class="form-group">
																<td><small><b>2. </b></small></td>
																<td><small><b>Royalti</b></small></td>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon" id="basic-addon1">Rp</span>
																		<input type="text" name="royalti" id="angkaDua" class="uang form-control" style="text-align: right;" value="0" oninput="hapus()" onkeyup="jumlah();"/>

																		<input type="text" name="royalti" id="tes2" value="0" style="text-align: right;" onkeyup="jumlah();" hidden/>

																		<span id="error_last_name" class="text-danger"></span>
																	</div>
																</td>
															</div>
														</tr>
														<tr>
															<div class="form-group">
																<td><small><b>3. </b></small></td>
																<td><small><b>Sewa</b></small></td>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon" id="basic-addon1">Rp</span>
																		<input type="text" name="sewa" id="angkaTiga" class="uang form-control" style="text-align: right;" value="0" oninput="hapus()" onkeyup="jumlah();"/>


																		<input type="text" name="sewa" id="tes3" value="0" style="text-align: right;" onkeyup="jumlah();" hidden/>

																		<span id="error_last_name" class="text-danger"></span>
																	</div>
																</td>
															</div>
														</tr>
														<tr>
															<div class="form-group">
																<td><small><b>4. </b></small></td>
																<td><small><b>Hadiah</b></small></td>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon" id="basic-addon1">Rp</span>
																		<input type="text" name="hadiah" id="angkaEmpat" class="uang form-control" style="text-align: right;" value="0" onkeyup="jumlah();" oninput="hapus()"/>

																		<input type="text" name="hadiah" id="tes4" value="0" style="text-align: right;" onkeyup="jumlah();" hidden/>

																		<span id="error_last_name" class="text-danger"></span>
																	</div>
																</td>
															</div>
														</tr>
														<tr>
															<div class="form-group">
																<td><small><b>5. </b></small></td>
																<td><small><b>Keuntungan dari Penjualan/Penghasilan Harta</b></small></td>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon" id="basic-addon1">Rp</span>
																		<input type="text" name="keuntungan" id="angkaLima" class="uang form-control" onkeyup="jumlah();" style="text-align: right;" value="0" oninput="hapus()"/>

																		<input type="text" name="keuntungan" id="tes5" style="text-align: right;" onkeyup="jumlah();"  value="0" hidden/>

																		<span id="error_last_name" class="text-danger"></span>
																	</div>
																</td>
															</div>
														</tr>
														<tr>
															<div class="form-group">
																<td><small><b>6. </b></small></td>
																<td><small><b>Penghasilan Lain</b></small></td>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon" id="basic-addon1">Rp</span>
																		<input type="text" name="p_lain" id="angkaEnam"  value="0" class="uang form-control" onkeyup="jumlah();" oninput="hapus()" style="text-align: right;" />

																		<input type="text" name="p_lain" id="tes6"  value="0" onkeyup="jumlah();" style="text-align: right;" hidden/>

																		<span id="error_last_name" class="text-danger"></span>
																	</div>
																</td>
															</div>
														</tr>
														<tr>
															<div class="form-group">
																<td></td>
																<td style="padding-left: 200px"><small><strong>Jumlah Bagian A</strong></small></td>

																<td>
																	<!-- <input type="text" name="jml_a" value="0" id="tesing" class="uang1 form-control" oninput="jumlah()" style="text-align: right;"/> -->
																	<div class="input-group">
																		<span class="input-group-addon" id="basic-addon1">Rp</span>

																		<input type="text" name="jml_a" value="0" id="angkaTujuh" class="uang1" style="text-align: right;" hidden/>

																		<input type="text" class="form-control" name="jml_a" value="0" id="tes7"  style="text-align: right;" readonly  />

																		<span id="error_last_name" class="text-danger"></span>
																	</div>
																</td>
															</div>
														</tr>
													</table>
												</div>
												<!-- end tabel -->
											</span>
										</div>
									</div>
									<!-- end jika memilih jawaban Ya -->

									<!-- button sebelum dan selanjutnya-->
									<hr>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-6">
											<a href="halaman3.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
											</div>
											<div class="col-sm-6" style="padding-left: 253px;">
												<a href="proses_halaman4.php">
													<input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 25px">
												</a>
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
		</div>
		<!-- end container box -->
		<script type="text/javascript" src="script.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script  src="js/dist/jquery.mask.min.js"></script>
		<script  src="js/dist/jquery.mask.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
        			// format mata uang
        			$( '.uang' ).mask('00.000.000', {reverse: true});
        			$( '.uang1' ).mask('00.000.000', {reverse: true});


        		});
        	</script>
        	<script type="text/javascript" >

				//Pertanyaan
				function yesnoCheck() {

					if(document.getElementById('ya').checked) {
						document.getElementById('ifYes').style.display = 'block';
					}
					else document.getElementById('ifYes').style.display = 'none';
				}
				//Jumlah Bagian A
				function replaceAll(string,search,replace){
					return string.split(search).join(replace);
				}
				function jumlah(){
					satu = eval(form.tes.value);
					dua = eval(form.tes2.value);
					tiga = eval(form.tes3.value);
					empat = eval(form.tes4.value);
					lima = eval(form.tes5.value);
					enam = eval(form.tes6.value);

					tujuh = (parseInt(satu) + parseInt(dua) + parseInt(tiga) + parseInt(empat) + parseInt(lima) + parseInt(enam));
					// if(document.getElementById('angkaEnam').value == '' && document.getElementById('angkaEnam').value == '' ){
					// 	document.getElementById('angkaTujuh').value = 0;
					// }
					if (!isNaN(tujuh)) {
						document.getElementById('tes7').value =  tujuh;

						// document.getElementById('angkaTujuh').value =  28000000;

					}
				}
				function hapus(){
				     //cara menambahkan dan menghilangkan titik dari 2 text input
				     id1 = "angkaSatu";
				     id2 = "angkaDua";
				     id3 = "angkaTiga";
				     id4 = "angkaEmpat";
				     id5 = "angkaLima";
				     id6 = "angkaEnam";
				     // id7 = "angkaTujuh";

				     id1_val = document.getElementById(id1).value;
				     tes_val = replaceAll(id1_val,'.','');
				     document.getElementById('tes').value = tes_val;

				     id2_val = document.getElementById(id2).value;
				     tes2_val = replaceAll(id2_val,'.','');
				     document.getElementById('tes2').value = tes2_val;

				     id3_val = document.getElementById(id3).value;
				     tes3_val = replaceAll(id3_val,'.','');
				     document.getElementById('tes3').value = tes3_val;

				     id4_val = document.getElementById(id4).value;
				     tes4_val = replaceAll(id4_val,'.','');
				     document.getElementById('tes4').value = tes4_val;

				     id5_val = document.getElementById(id5).value;
				     tes5_val = replaceAll(id5_val,'.','');
				     document.getElementById('tes5').value = tes5_val;

				     id6_val = document.getElementById(id6).value;
				     tes6_val = replaceAll(id6_val,'.','');
				     document.getElementById('tes6').value = tes6_val;

				     // id7_val = document.getElementById(id7).value;
				     // tes7_val = replaceAll(id7_val,'.','');
				     // document.getElementById('tes7').value = tes7_val;
				    //akhir copas panggil hilang
				}

				document.form.angkaSatu.focus();
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
