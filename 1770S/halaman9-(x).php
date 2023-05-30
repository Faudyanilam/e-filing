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
										<div class="progress-bar progress-bar-striped" style="width:50.00%; background-color: rgb(255, 157, 49);"><small>50.00%</small></div>
									</div>
									<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 9 dari 18</small></p><br>
									<!-- end progress bar -->

									<!-- Pertanyaan -->
									<p><b>Apakah Anda memiliki utang?</b></p>
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
												<!-- button tambah dan spt-->
												<div class="form-group row" style="padding-bottom: 	15px">
													<div class="col-sm-6">
														<a href="">
															<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"><small>Utang Pada SPt Tahun Lalu</small></button></a>
														</div>
														<div class="col-sm-6" style="padding-left: 253px;">
															<button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Tambah +</small></button>
														</div>
													</div>
													<br>
													<!-- end button tambah dan spt-->

													<!-- table responsive -->
													<div class="table-responsive table_1">
														<table class="table table_2" style="border: 1px solid #ccc;">
															<thead class="thead-dark table_3">
																<tr>
																	<th scope="col" class="font_table"><small>NO</small></th>
																	<th scope="col" class="font_table"><small>SUMBER/JENIS PENGHASILAN</small></th>
																	<th scope="col" class="font_table"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDPP/PENGHASILAN BRUTO</small></th>
																	<th scope="col" class="font_table"><small>PPH TERUTANG&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</small></th>
																	<th scope="col" class="font_table"><small>AKSI&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</small></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<!--  <th scope="row">1</th> -->
																	<td style="color: white;"><small><b>ffffffffffddddddddddhhhhhhhh </b></small></td>
																	<td><small><b> </b></small></td>
																	<td><small><b> </b></small></td>
																	<td><small><b> </b></small></td>
																	<td><small><b> </b></small></td>
																</tr>
															</tbody>
														</table>
													</div>
													<!-- end tabel responsive -->
												</span>
											</div>
										</div>
										<!-- end jika memilih jawaban Ya -->

										<!-- button sebelum dan selanjutnya-->
										<hr>
										<div class="form-group row" style="padding-bottom: 	15px">
											<div class="col-sm-6">
												<a href="halaman8.php">
													<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
												</div>
												<div class="col-sm-6" style="padding-left: 253px;">
													<a href="halaman10.php">
														<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
													</div>
												</div>
												<!-- end button sebelum dan selanjutnya-->

												<!-- Modal bukti potong -->
												<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">

														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Utang</h4>
															</div>
															<div class="modal-body">
																<form action="submit-form.php" method="POST">
																	<div class="form-group row">
																		<label for="jenis_pajak" class="col-sm-7 col-form-label">Kode Utang</label>
																		<div class="col-sm-5">
																			<select class="form-control" name="jenis_pajak" id="jenis_pajak" oninput="validasi(this)" oninvalid="validasi(this)" required>
																				<option value="">Pilih...</option>
																				<option>101-Utang Bank/Lembaga Keuangan bukan Bank(KPR, Leasing Kendaraan Bermotor dan sejenisnya)</option>
																				<option>102-Kartu Kredit</option>
																				<option>103-Utang Afiliasi(Pinjaman dari pihak yang memiliki hubungan istimewa sebagaimana dimaksud dalam pasal 18 ayat(4) UU PPh)</option>
																				<option>109-Utang Lainnya</option>
																			</select>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Nama Pemberi Pinjaman</label>
																		<div class="col-sm-5">
																			<input class="form-control" name="npwp" id="npwp" 
																			type="text" required="">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Alamat Pemberi Pinjaman</label>
																		<div class="col-sm-5">
																			<textarea class="form-control" name="npwp" id="npwp" 
																			type="text" required=""></textarea>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Tahun Peminjaman</label>
																		<div class="col-sm-5">
																			<select name="tahun" id="" class="form-control mb-3" style="max-width: 240px;">
																				<option selected="selected">Tahun</option>
																				<?php
																				for($i=date('Y'); $i>=date('Y')-32; $i-=1){
																					echo"<option value='$i'> $i </option>";
																				}
																				?>
																			</select>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Jumlah</label>
																		<div class="col-sm-5">
																			<input class="form-control" name="nomor_bukti" id="nomor_bukti" onkeypress="return isNumericBukti(event)" oninput="maxLengthCheckBukti(this)" 
																			type="text" maxlength = "18" min = "1" max = "999999999999999" required="">
																		</div>
																	</div>
																</form>
															</div>
															<div class="modal-footer">
																<button type="submit" class="btn btn-primary btn-sm" name="btn_save_details" value="save" id="btn_save_details"style="border-radius: 25px; background-color: rgb(4, 153, 195)">Simpan</button>
																<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px;">Batal</button>
															</div>
														</div>
														<!-- end modal content -->
													</div>
												</div> 
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
					$('#ifYes').hide(500);
				</script>
				<br/>
				<br/>
				<br/>
				<br/>
				<?php include'../footer.html'; ?>
			</body>
			</html> 
