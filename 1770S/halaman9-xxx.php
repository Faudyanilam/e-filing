
<?php
error_reporting(false);
session_start();
?>
<html>
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

		<!-- <form method="post" action="proses_halaman9.php"> -->
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
										<div class="progress-bar progress-bar-striped" style="width:50.00%; background-color: rgb(255, 157, 49);"><small>50.00%</small></div>
									</div>
									<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 9 dari 18</small></p><br>
									<!-- end progress bar -->

									<!-- Pertanyaan -->
									<form method="post" action="proses_halaman9.1.php">
										<p><b>Apakah Anda memiliki utang?</b></p>
										<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
											<div class="form-check">
												<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="utang" id="yes" value="Ya" checked>
												<label class="form-check-label" for="exampleRadios">Ya</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="utang" id="no" value="0">
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
																<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"><small>Utang Pada SPT Tahun Lalu</small></button></a>
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
																		<th scope="col" class="font_table"><small>KODE UTANG</small></th>
																		<th scope="col" class="font_table"><small>NAMA PEMBERI PINJAMAN</small></th>
																		<th scope="col" class="font_table"><small>ALAMAT PEMBERI PINJAMAN </small></th>
																		<th scope="col" class="font_table"><small>TAHUN PEMINJAMAN </small></th>
																		<th scope="col" class="font_table"><small>JUMLAH </small></th>
																		<th scope="col" class="font_table"><small>AKSI</small></th>

																	</tr>
																	<?php
                                                    // Ambil data dari session
																	if (isset($_SESSION['tmpkode_utang'])) {
																		$tmpkode_utang = $_SESSION['tmpkode_utang'];
																	}
																	if (isset($_SESSION['tmpnama_pemberi_pinjaman'])) {
																		$tmpnama_pemberi_pinjaman = $_SESSION['tmpnama_pemberi_pinjaman'];
																	}
																	if (isset($_SESSION['tmpalamat_pemberi_pinjaman'])) {
																		$tmpalamat_pemberi_pinjaman = $_SESSION['tmpalamat_pemberi_pinjaman'];
																	}
																	if (isset($_SESSION['tmptahun_peminjaman'])) {
																		$tmptahun_peminjaman = $_SESSION['tmptahun_peminjaman'];
																	}
																	if (isset($_SESSION['tmpjumlah_utang'])) {
																		$tmpjumlah_utang = $_SESSION['tmpjumlah_utang'];
																	}

                                                    // End script ambil data
																	?>
																</thead>
																<tbody>
																	<?php 
																	$jumlah_hal9 = 0;

																	for ($i=0; $i < count($tmpkode_utang); $i++) { ?>

																		<tr style="font-weight: bold;">
																			<td>
																				<?php echo $tmpkode_utang[$i] ?>
																			</td>

																			<td>
																				<?php echo $tmpnama_pemberi_pinjaman[$i] ?>
																			</td>

																			<td>
																				<?php echo $tmpalamat_pemberi_pinjaman[$i] ?>
																			</td>

																			<td>
																				<?php echo $tmptahun_peminjaman[$i] ?>
																			</td>

																			<td>
																				<?php echo $tmpjumlah_utang[$i] ?>
																			</td>
																			<td>
																				<a href="proses_hapus_hal9.php">
																					<i style="color: black" class="fas fa-trash-alt">
																					</i>
																				</a>
																			</td>

																		</tr>

																		<?php



																		$A = substr($tmpjumlah_utang[$i], 4);

																		$A = (int) str_replace(".", "", $A );

																		$jumlah_hal9 = $jumlah_hal9 + $A;

														// echo $tmpjumlah_pph[$i];


																	} 



																	$jumlah_hal9 = number_format($jumlah_hal9,0,",",".");

																	$jumlah_hal9 = "Rp. " .$jumlah_hal9;
																	?>			

																</tbody>
															</table>
															<div class="form-group row">
																<label class="col-sm-8 col-form-label" style="padding-left: 300px; padding-top: 5px">Sub Total</label>
																<div class="col-sm-4">
																	<b><input class="form-control" value="<?php echo $jumlah_hal9; ?>" disabled></b>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-8 col-form-label" style="padding-left: 300px; padding-top: 5px">Sub Bagian C (UBC)</label>
																<div class="col-sm-4">
																	<b><input class="form-control" value="<?php echo $jumlah_hal9; ?>" disabled></b>
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
													<a href="halaman8-xxx.php">
														<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
													</div>
													<div class="col-sm-6" style="padding-left: 253px;">
														<a href="halaman10-xxx.php">
															<input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px"></a>
														</div>
													</div>
												</form>
												<!-- end button sebelum dan selanjutnya-->

												<!-- Modal bukti potong -->
												<form method="post" action="proses_halaman9.php">
													<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog">

															<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<h4 class="modal-title">Utang</h4>
																	<button type="button" class="close" data-dismiss="modal">&times;</button>

																</div>
																<div class="modal-body">
																	<!-- <form action="submit-form.php" method="POST"> -->
																		<div class="form-group row">
																			<label for="jenis_pajak" class="col-sm-7 col-form-label">Kode Utang</label>
																			<div class="col-sm-5">
																				<select class="form-control" name="kode_utang" id="kode_utang" oninput="validasi(this)" oninvalid="validasi(this)" required>
																					<option value="">Pilih...</option>
																					<option value="	101">101-Utang Bank/Lembaga Keuangan bukan Bank(KPR, Leasing Kendaraan Bermotor dan sejenisnya)</option>
																					<option value="102">102-Kartu Kredit</option>
																					<option value="103">103-Utang Afiliasi(Pinjaman dari pihak yang memiliki hubungan istimewa sebagaimana dimaksud dalam pasal 18 ayat(4) UU PPh)</option>
																					<option value="109">109-Utang Lainnya</option>
																				</select>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-sm-7 col-form-label">Nama Pemberi Pinjaman</label>
																			<div class="col-sm-5">
																				<input class="form-control" name="nama_pemberi_pinjaman" id="nama_pemberi_pinjaman	" 
																				type="text" required="">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-sm-7 col-form-label">Alamat Pemberi Pinjaman</label>
																			<div class="col-sm-5">
																				<textarea class="form-control" name="alamat_pemberi_pinjaman" id="alamat_pemberi_pinjaman" 
																				type="text" required=""></textarea>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-sm-7 col-form-label">Tahun Peminjaman</label>
																			<div class="col-sm-5">
																				<select name="tahun_peminjaman" id="tahun_peminjaman" class="form-control mb-3" style="max-width: 240px;">
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
																				<input class="form-control" name="jumlah_utang" id="jumlah_utang" required="">
																			</div>
																		</div>
																		<!-- </form> -->
																	</div>
																	<div class="modal-footer">
																		<button type="submit" class="btn btn-primary btn-sm" name="simpan" value="Simpan" id="btn_save_details"style="border-radius: 25px; background-color: rgb(4, 153, 195);">Simpan</button>
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
						</form>
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

					   //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 5
					   var jumlah_utang =document.getElementById('jumlah_utang');
					   jumlah_utang.addEventListener('keyup', function(e){
					   	jumlah_utang.value = formatjumlah_utang(this.value, 'Rp.');
					   });

					   function formatjumlah_utang(angka, prefix){
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
