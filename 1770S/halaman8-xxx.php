
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
	<link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
	<script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body class="bg-body">
	<?php
	include "../koneksi.php";
	include'../header1.html'; ?>
	<br />

	<div class="container container-fluid box"> 
		<br />
		<!-- <h2 align="center"></h2><br /> -->


			<!-- <ul class="nav nav-tabs">
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
			</ul> -->



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
										<div class="progress-bar progress-bar-striped" style="width:44.44%; background-color: rgb(255, 157, 49);"><small>44.44%</small></div>
									</div>
									<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 8 dari 18</small></p><br>

									<br>
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
										<!-- end button tambah dan spt-->

										<!-- table responsive -->
										<!-- <form method="post" action="proses_halaman8.1.php"> -->
											<div class="table-responsive table_1">

												<table class="table table_2" style="border: 1px solid #ccc;">
													<thead class="thead-dark table_3">
														<tr>
															<th scope="col" class="font_table"><small>KODE HARTA</small></th>
															<th scope="col" class="font_table"><small>NAMA HARTA</small></th>
															<th scope="col" class="font_table"><small>TAHUN PEROLEHAN</small></th>
															<th scope="col" class="font_table"><small>HARGA PEROLEHAN</small></th>
															<th scope="col" class="font_table"><small>KETERANGAN</small></th>
															<th scope="col" class="font_table"><small>AKSI</small></th>

														</tr>
														<?php
                                                    // Ambil data dari session
														if (isset($_SESSION['tmpkode_harta'])) {
															$tmpkode_harta = $_SESSION['tmpkode_harta'];
														}
														if (isset($_SESSION['tmpnama_harta'])) {
															$tmpnama_harta = $_SESSION['tmpnama_harta'];
														}
														if (isset($_SESSION['tmptahun_perolehan'])) {
															$tmptahun_perolehan = $_SESSION['tmptahun_perolehan'];
														}
														if (isset($_SESSION['tmpharga_perolehan'])) {
															$tmpharga_perolehan = $_SESSION['tmpharga_perolehan'];
														}
														if (isset($_SESSION['tmpketerangan'])) {
															$tmpketerangan = $_SESSION['tmpketerangan'];
														}
                                                    // End script ambil data
														?>
													</thead>
													<tbody>
														<?php 
														$jumlah_hal8 = 0;

														for ($i=0; $i < count($tmpkode_harta); $i++) { ?>

															<tr style="font-weight: bold;">
																<td>
																	<?php echo $tmpkode_harta[$i] ?>
																</td>

																<td>
																	<?php echo $tmpnama_harta[$i] ?>
																</td>

																<td>
																	<?php echo $tmptahun_perolehan[$i] ?>
																</td>

																<td>
																	<?php echo $tmpharga_perolehan[$i] ?>
																</td>

																<td>
																	<?php echo $tmpketerangan[$i] ?>
																</td>

																<td>
																	<a href="proses_hapus_hal8.php">
																		<i style="color: black" class="fas fa-trash-alt">
																		</i>
																	</a>
																</td>

															</tr>

															<?php



															$A = substr($tmpharga_perolehan[$i], 4);

															$A = (int) str_replace(".", "", $A );

															$jumlah_hal8 = $jumlah_hal8 + $A;

														// echo $tmpjumlah_pph[$i];


														} 



														$jumlah_hal8 = number_format($jumlah_hal8,0,",",".");

														$jumlah_hal8 = "Rp. " .$jumlah_hal8;
														?>			

													</tbody>
												</table>
												<div class="form-group row">
													<label class="col-sm-8 col-form-label" style="padding-left: 300px; padding-top: 5px">Sub Total</label>
													<div class="col-sm-4">
														<b><input class="form-control" value="<?php echo $jumlah_hal8; ?>" disabled></b>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-8 col-form-label" style="padding-left: 300px; padding-top: 5px">Jumlah Bagian B (JBB)</label>
													<div class="col-sm-4">
														<b><input class="form-control" value="<?php echo $jumlah_hal8; ?>" disabled></b>
													</div>
												</div>
											</div>
											<!-- end tabel responsive -->



											<!-- button sebelum dan selanjutnya-->
											<hr>
											<div class="form-group row" style="padding-bottom: 	15px">
												<div class="col-sm-6">
													<a href="halaman7-xxx.php">
														<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
													</div>
													<div class="col-sm-6" style="padding-left: 253px;">
														<a href="halaman9-xxx.php">
															<button type="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
														</div>
													</div>
													<!-- end button sebelum dan selanjutnya-->
												<!-- </form> -->

												<!-- Modal bukti potong -->
												<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">

														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Harta Baru/ New Asset</h4>
																<button type="button" class="close" data-dismiss="modal">&times;</button>		
															</div>
															<div class="modal-body">
																<form method="post" action="proses_halaman8.php">
																	<div class="form-group row">
																		<label for="jenis_pajak" class="col-sm-7 col-form-label">Kode Harta</label>
																		<div class="col-sm-5">
																			<select class="form-control" name="kode_harta" id="kode_harta" oninput="validasi(this)" oninvalid="validasi(this)" required>
																				<option value="">Pilih...</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Kas dan Setara Kas</option>
																				<option value="011">011-Uang Tunai</option>
																				<option value="012">012-Tabungan</option>
																				<option value="013">013-Giro</option>
																				<option value="014">014-Deposito</option>
																				<option value="019">019-Setara Kas Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Piutang</option>
																				<option value="021">021-Piutang</option>
																				<option value="022">022-Piutang Afiliasi (Piutang kepada pihak yang mempunyai hubungan istimewa sebagaimana dimaksud dalam Pasal 18 ayat (4) UU PPh)</option>
																				<option value="023">023-Persediaan Usaha</option>
																				<option value="029">029-Piutang Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Investasi</option>
																				<option value="031">031-Saham yang dibeli untuk dijual kembali</option>
																				<option value="032">032-Saham</option>
																				<option value="033">033-Obligasi Perusahaan</option>
																				<option value="034">034-Pemerintah Indonesia (ORI, Surat Berharga Syariah Negara, dll</option>
																				<option value="035">035-Surat Utang Lainnya</option>
																				<option value="036">036-Reksadana</option>
																				<option value="037">037-Instrument Derivatif</option>
																				<option value="038">038-Pernyertaan Modal dalam perusahaan lain yang tidak atas saham meliputi penyertaan modal pada CV, Firma dan sejenisnya</option>
																				<option value="039">039-Investasi Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Alat Transportasi</option>
																				<option value="041">041-Sepeda</option>
																				<option value="042">042-Sepeda Motor</option>
																				<option value="043">043-Mobil</option>
																				<option value="049">049-Alat Transportasi Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Bergerak</option>
																				<option value="051">051-Logam Mulia (emas batangan, emas perhiasan, platina batangan, platina perhiasan, logam mulia lainnya)</option>
																				<option value="053">053-Barang-Barang seni dan antik</option>
																				<option value="054">054-Kapal Pesiar, Pesawat Terbang, Helikopter, Jetski, Peralatan Olah Raga Khusus</option>
																				<option value="055">055-Peralatan Elektronik, Furnitur</option>
																				<option value="059">059-Harta Bergerak Lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Tidak Bergerak</option>
																				<option value="061">061-Tanah dan/atau bangunan untuk tempat tinggal</option>
																				<option value="062">062-Tanah dan/atau bangunan untuk usaha (Toko, pabrik, gudang dan sejenisnya)</option>
																				<option value="063">063-Tanah atau lahan untuk usaha (lahan pertanian, perkebunan, perikanan darat dan sejenisnya)</option>
																				<option value="069">069-Harta tidak bergerak lainnya</option>
																				<option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Tidak Berwujud</option>
																				<option value="071">071-Paten</option>
																				<option value="072">072-Royalti</option>
																				<option value="073">073-Merek Dagang</option>
																				<option value="079">079-Harta tidak berwujud lainya</option>
																			</select>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Nama Harta</label>
																		<div class="col-sm-5">
																			<textarea class="form-control" name="nama_harta" id="nama_harta" 
																			type="text"></textarea>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Tahun Perolehan</label>
																		<div class="col-sm-5">
																			<select name="tahun_perolehan" id="tahun_perolehan" class="form-control mb-3" style="max-width: 240px;">
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
																			<input class="form-control" name="harga_perolehan" id="harga_perolehan" 
																			type="text">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Keterangan</label>
																		<div class="col-sm-5">
																			<textarea class="form-control" name="keterangan" id="keterangan" 
																			type="text"></textarea>
																		</div>
																	</div>

																</div>
																<div class="modal-footer">
																	<input type="submit" class="btn btn-primary btn-sm" name="submit" id="submit" value="Simpan" style="border-radius: 25px; background-color: rgb(4, 153, 195);"/>
																	<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px;">Batal</button>
																</form>
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
					</div>
					<!-- end container box -->

					<script src="jquery-1.12.4.min.js"></script>
					<script src="datepicker/dist/js/bootstrap-datepicker.js"></script>
					<script type="text/javascript"> 

					   //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 4
					   var harga_perolehan =document.getElementById('harga_perolehan');
					   harga_perolehan.addEventListener('keyup', function(e){
					   	harga_perolehan.value = formatharga_perolehan(this.value, 'Rp.');
					   });

					   function formatharga_perolehan(angka, prefix){
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