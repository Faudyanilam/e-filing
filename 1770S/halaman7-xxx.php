
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
									<div class="progress-bar progress-bar-striped" style="width:38.89%; background-color: rgb(255, 157, 49);"><small>38.89%</small></div>
								</div>
								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 7 dari 18</small></p><br>
								<!-- end progress bar -->

								<!-- Pertanyaan -->
								<form method="post" action="proses_halaman7.1.php">
									<p><b>Apakah Anda memiliki penghasilan yang pajaknya sudah dipotong secara final?</b></p>
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="pajak_dipotong_final" id="yes" value="Ya" checked>
											<label class="form-check-label" for="exampleRadios">Ya</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="pajak_dipotong_final" id="no" value="0">
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
													<button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 25px"><small>Tambah +</small></button>
												</div>
												<br/>
												<!-- end button tambah -->

												<!-- table responsive -->
												<div class="table-responsive table_1">
													<table class="table table_2" style="border: 1px solid #ccc;">
														<thead class="thead-dark table_3">
															<tr>
																<th scope="col" class="font_table"><small>SUMBER/JENIS PENGHASILAN</small></th>
																<th scope="col" class="font_table"><small>PENGHASILAN BRUTO</small></th>
																<th scope="col" class="font_table"><small>PPH TERUTANG</small></th>
																<th scope="col" class="font_table"><small>AKSI</small></th>
															</tr>
															<?php
                                                    // Ambil data dari session
															if (isset($_SESSION['tmpsumber_penghasilan'])) {
																$tmpsumber_penghasilan = $_SESSION['tmpsumber_penghasilan'];
															}
															if (isset($_SESSION['tmpdpp'])) {
																$tmpdpp = $_SESSION['tmpdpp'];
															}
															if (isset($_SESSION['tmppph_terutang'])) {
																$tmppph_terutang = $_SESSION['tmppph_terutang'];
															}
                                                    // End script ambil data
															?>
														</thead>
														<tbody>
															<?php 
															$jumlah_hal7 = 0;

															for ($i=0; $i < count($tmpsumber_penghasilan); $i++) { ?> 

																<tr style="font-weight: bold;">
																	<td>
																		<?php echo $tmpsumber_penghasilan[$i] ?>
																	</td>

																	<td>
																		<?php echo $tmpdpp[$i] ?>
																	</td>

																	<td>
																		<?php echo $tmppph_terutang[$i] ?>
																	</td>
																	<td>
																		<a href="proses_hapus_hal7.php">
																			<i style="color: black" class="fas fa-trash-alt">
																			</i>
																		</a>
																	</td>
																</tr>

																<?php

																$A = substr($tmppph_terutang[$i], 4);

																$A = (int) str_replace(".", "", $A );

																$jumlah_hal7 = $jumlah_hal7 + $A;

															} 

															$jumlah_hal7 = number_format($jumlah_hal7,0,",",".");

															$jumlah_hal7 = "Rp. " .$jumlah_hal7;
															?>						
														</tbody>
													</table>

													<div class="form-group row">
														<label class="col-sm-8 col-form-label" style="padding-left: 450px; padding-top: 5px">Jumlah</label>
														<div class="col-sm-4">
															<b><input class="form-control" value="<?php echo $jumlah_hal7; ?>" disabled></b>
														</div>
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
											<a href="halaman6.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
											</div>
											<div class="col-sm-6" style="padding-left: 253px;">
												<a href="proses_halaman7.1.php">
													<input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px"></a>
												</div>
											</div>
										</form>
										<!-- end button sebelum dan selanjutnya-->

										<!-- Modal bukti potong -->
										<form method="post" action="proses_halaman7.php">
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title">Bagian A. Penghasilan yang dikenakan PPh Final dan/atau bersifat final</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>

														</div>
														<div class="modal-body">
															<div class="form-group row">
																<label class="col-sm-6">Sumber/ jenis Penghasilan</label>
																<div class="col-sm-6">
																	<select class="form-control" name="sumber_penghasilan" id="sumber_penghasilan">
																		<option>Pilih...</option>
																		<option value="Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara">1. Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara</option>
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
																<!-- <span id="error_sumber_penghasilan" class="text-danger"></span> -->
															</div>
															<div class="form-group row">
																<label class="col-sm-6">DPP/Penghasilan Bruto</label>
																<div class="col-sm-6">
																	<input type="text" name="dpp" id="DPP" class="form-control" />
																</div>
																<!-- <span id="error_DPP" class="text-danger"></span> -->
															</div>               
															<div class="form-group row">
																<label class="col-sm-6">PPH Terutang</label>
																<div class="col-sm-6">
																	<input type="text" name="pph_terutang" id="PPh_terutang" class="form-control" />
																</div>
																<!-- <span id="error_PPh_terutang" class="text-danger"></span> -->
															</div>
															<!-- <input type="submit" class="btn btn-primary btn-sm" name="submit" id="submit" value="Simpan" style="border-radius: 25px; background-color: rgb(4, 153, 195);"/> -->
															<!-- </form> -->
														</div>
														<div class="modal-footer">
															<input type="submit" class="btn btn-primary btn-sm" name="submit" id="submit" value="Simpan" style="border-radius: 25px; background-color: rgb(4, 153, 195);"/>
															<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px;">Batal</button>
														</div>
													</div>
													<!-- end modal content -->
												</div>
											</div> 
											<!-- End Modal -->
										</form>
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

				//format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 2
				var DPP =document.getElementById('DPP');
				DPP.addEventListener('keyup', function(e){
					DPP.value = formatDPP(this.value, 'Rp.');
				});

				function formatDPP(angka, prefix){
					var number_string = angka.replace(/[^,\d]/g, '').toString(),
					split             = number_string.split(','),
					sisa              = split[0].length % 3,
					rupiah            = split[0].substr(0, sisa),
					ribuan            = split[0].substr(sisa).match(/\d{3}/gi);

					if(ribuan){
						separator = sisa ? '.' : '';
						rupiah    += separator + ribuan.join('.');
					}
					rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
					return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
				}

				//format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 1
				var PPh_terutang =document.getElementById('PPh_terutang');
				PPh_terutang.addEventListener('keyup', function(e){
					PPh_terutang.value = formatPPh_terutang(this.value, 'Rp.');
				});

				function formatPPh_terutang(angka, prefix){
					var number_string = angka.replace(/[^,\d]/g, '').toString(),
					split             = number_string.split(','),
					sisa              = split[0].length % 3,
					rupiah            = split[0].substr(0, sisa),
					ribuan            = split[0].substr(sisa).match(/\d{3}/gi);

					if(ribuan){
						separator = sisa ? '.' : '';
						rupiah    += separator + ribuan.join('.');
					}
					rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
					return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
				}

			</script>

			<br/>
			<br/>
			<br/>
			<br/>
			<?php include'../footer.html'; ?>
		</body>
		</html> 
