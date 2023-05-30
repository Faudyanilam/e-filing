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
										<div class="progress-bar progress-bar-striped" style="width:44.44%; background-color: rgb(255, 157, 49); "><small>44.44%</small></div>
									</div>
									<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 8 dari 18</small></p><br>
									<!-- end progress bar -->


									<!-- button tambah dan spt-->
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-6">
											<a href="">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"><small>Harta Pada SPt Tahun Lalu</small></button></a>
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

										<!-- button sebelum dan selanjutnya-->
										<hr>
										<div class="form-group row" style="padding-bottom: 	15px">
											<div class="col-sm-6">
												<a href="halaman7.php">
													<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
												</div>
												<div class="col-sm-6" style="padding-left: 253px;">
													<a href="halaman9.php">
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
																<h4 class="modal-title">Harta Baru/New Asset</h4>
															</div>
															<div class="modal-body">
																<form action="submit-form.php" method="POST">
																	<div class="form-group row">
																		<label for="jenis_pajak" class="col-sm-7 col-form-label">Kode Harta</label>
																		<div class="col-sm-5">
																			<select class="form-control" name="jenis_pajak" id="jenis_pajak" oninput="validasi(this)" oninvalid="validasi(this)" required>
																				<option value="">Pilih...</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Kas dan Setara Kas</option>
																				<option>011-Uang Tunai</option>
																				<option>012-Tabungan</option>
																				<option>013-Giro</option>
																				<option>014-Deposito</option>
																				<option>019-Setara Kas Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Piutang</option>
																				<option>021-Piutang</option>
																				<option>022-Piutang Afiliasi (Piutang kepada pihak yang mempunyai hubungan istimewa sebagaimana dimaksud dalam Pasal 18 ayat (4) UU PPh)</option>
																				<option>023-Persediaan Usaha</option>
																				<option>029-Piutang Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Investasi</option>
																				<option>031-Saham yang dibeli untuk dijual kembali</option>
																				<option>032-Saham</option>
																				<option>033-Obligasi Perusahaan</option>
																				<option>034-Pemerintah Indonesia (ORI, Surat Berharga Syariah Negara, dll</option>
																				<option>035-Surat Utang Lainnya</option>
																				<option>036-Reksadana</option>
																				<option>037-Instrument Derivatif</option>
																				<option>038-Pernyertaan Modal dalam perusahaan lain yang tidak atas saham meliputi penyertaan modal pada CV, Firma dan sejenisnya</option>
																				<option>039-Investasi Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Alat Transportasi</option>
																				<option>041-Sepeda</option>
																				<option>042-Sepeda Motor</option>
																				<option>043-Mobil</option>
																				<option>049-Alat Transportasi Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Bergerak</option>
																				<option>051-Logam Mulia (emas batangan, emas perhiasan, platina batangan, platina perhiasan, logam mulia lainnya)</option>
																				<option>052-Batu Mulia (Intan, Berlian, Batu Mulia lainnya)</option>
																				<option>053-Barang-Barang seni dan antik</option>
																				<option>054-Kapal Pesiar, Pesawat Terbang, Helikopter, Jetski, Peralatan Olah Raga Khusus</option>
																				<option>055-Peralatan Elektronik, Furnitur</option>
																				<option>059-Harta Bergerak Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Tidak Bergerak</option>
																				<option>061-Tanah dan/atau bangunan untuk tempat tinggal</option>
																				<option>062-Tanah dan/atau bangunan untuk usaha (Toko, pabrik, gudang dan sejenisnya)</option>
																				<option>063-Tanah atau lahan untuk usaha (lahan pertanian, perkebunan, perikanan darat dan sejenisnya)</option>
																				<option>069-Harta tidak bergerak lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Tidak Berwujud</option>
																				<option>071-Paten</option>
																				<option>072-Royalti</option>
																				<option>073-Merek Dagang</option>
																				<option>079-HArta tidak berwujud lainya</option>



																			</select>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Nama Harta</label>
																		<div class="col-sm-5">
																			<textarea class="form-control" name="npwp" id="npwp" 
																			type="text" required=""></textarea>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Tahun Perolehan</label>
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
																		<label class="col-sm-7 col-form-label">Harga Perolehan</label>
																		<div class="col-sm-5">
																			<input class="form-control" name="nomor_bukti" id="nomor_bukti" onkeypress="return isNumericBukti(event)" oninput="maxLengthCheckBukti(this)" 
																			type="text" maxlength = "18" min = "1" max = "999999999999999" required="">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Keterangan</label>
																		<div class="col-sm-5">
																			<textarea class="form-control" name="npwp" id="npwp" 
																			type="text" required=""></textarea>
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
</script>
<br/>
<br/>
<br/>
<br/>
<?php include'../footer.html'; ?>
</body>
</html> 
