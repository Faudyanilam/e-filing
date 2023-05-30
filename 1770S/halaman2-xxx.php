
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
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

</head>
<?php
// session_start();
// echo $_SESSION['pembetulan_ke'];
// echo $_SESSION['tahun'];

?>
<body class="bg-body">
	<?php include'../header1.html'; ?>
</table>
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

			<!-- <form method="post" action="proses_halaman2.php"> -->
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
												<img src="../img/eFiling.png" width="85px" height="45px" >
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
											<div class="progress-bar progress-bar-striped" style="width:11.4%; background-color: rgb(255, 157, 49);"><small>11.4%</small></div>
										</div>
										<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 2 dari 18</small></p><br>
										<p><b>Daftar Pemotongan/Pemungutan PPh Oleh Pihak Lain dan PPh Yang Ditanggung Pemerintah</b></p>
										<br>
										<!-- end progress bar -->

										<!-- button tambah -->
										<div align="right">
											<button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 25px"><small>Tambah +</small></i></button>
										</div>
										<br>
										<!-- end button tambah -->

										<!-- table responsive -->
										<form method="post" action="proses_halaman2.1.php">
										<div class="table-responsive table_1">
											<table class="table table_2" style="border: 1px solid #ccc;">
												<thead class="thead-dark table_3">
													<tr>
														<th scope="col" class="font_table"><small>NAMA PEMOTONG/PEMUNGUT PAJAK</small></th>
														<th scope="col" class="font_table"><small>NPWP PEMOTONG/PEMUNGUT PAJAK</small></th>
														<th scope="col" class="font_table"><small>NOMOR BUKTI PEMOTONGAN/PEMUNGUTAN</small></th>
														<th scope="col" class="font_table"><small>TANGGAL BUKTI PEMOTONGAN/PEMUNGUTAN</small></th>
														<th scope="col" class="font_table"><small>JENIS PAJAK</small></th>
														<th scope="col" class="font_table"><small>JUMLAH PAJAK DIPOTONG/DIPUNGUT</small></th>
														<th scope="col" class="font_table"><small>AKSI</small></th>
													</tr>
													<?php
                                                    // Ambil data dari session
													if (isset($_SESSION['tmpnama_pemotong'])) {
														$tmpnama_pemotong = $_SESSION['tmpnama_pemotong'];
													}
													if (isset($_SESSION['tmpnpwp_pemotong'])) {
														$tmpnpwp_pemotong = $_SESSION['tmpnpwp_pemotong'];
													}
													if (isset($_SESSION['tmpnomor_bukti'])) {
														$tmpnomor_bukti = $_SESSION['tmpnomor_bukti'];
													}
													if (isset($_SESSION['tmptanggal_bukti'])) {
														$tmptanggal_bukti = $_SESSION['tmptanggal_bukti'];
													}
													if (isset($_SESSION['tmpjenis_pajak'])) {
														$tmpjenis_pajak = $_SESSION['tmpjenis_pajak'];
													}
													if (isset($_SESSION['tmpjumlah_pph'])) {
														$tmpjumlah_pph = $_SESSION['tmpjumlah_pph'];
													}
                                                    // End script ambil data
													?>
												</thead>

												<tbody>
													<?php 
													$jumlah = 0;

													for ($i=0; $i < count($tmpnama_pemotong); $i++) { ?>

														<tr style="font-weight: bold;">
															<td>
																<?php echo $tmpnama_pemotong[$i] ?>
															</td>

															<td>
																<?php echo $tmpnpwp_pemotong[$i] ?>
															</td>

															<td>
																<?php echo $tmpnomor_bukti[$i] ?>
															</td>

															<td>
																<?php echo $tmptanggal_bukti[$i] ?>
															</td>
															
															<td>
																<?php echo $tmpjenis_pajak[$i] ?>
															</td>

															<td>
																<?php echo $tmpjumlah_pph[$i] ?>
															</td>

															<td>
															<a href="proses_hapus_hal2.php">
																<i style="color: black" class="fas fa-trash-alt">
																	</i>
															</a>
															</td>
														</tr>

														<?php


													// 50.000


														$A = substr($tmpjumlah_pph[$i], 4);

														$A = (int) str_replace(".", "", $A );

														$jumlah = $jumlah + $A;

														// echo $tmpjumlah_pph[$i];


													} 

													session_start();
													$_SESSION['jumlah_norp'] = $jumlah; 

													
													$jumlah = number_format($jumlah,0,",",".");
													$jumlah = "Rp. " .$jumlah; 

													$_SESSION['jumlah_rp'] = $jumlah; 


													?>			

												</tbody>
											</table>

											<div class="form-group row">
												<label class="col-sm-8 col-form-label" style="padding-left: 450px; padding-top: 5px">JAC</label>
												<div class="col-sm-4">
													<b><input class="form-control" value="<?php echo $jumlah; ?>" disabled></b>
												</div>
											</div>

										</div>
										<!-- end tabel responsive -->

										<!-- button sebelum dan selanjutnya-->
										<hr/>
										<div class="form-group row" style="padding-bottom: 	15px">
											<div class="col-sm-6">
												<a href="halaman1.php">
													<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button>
													</a>
												</div>
												<!-- <script> -->
													<!-- function goBack() { -->
														<!-- window.history.go(-1); -->
														 <!-- return false; -->
														 <!-- window.location='halaman1.php'; -->
													<!-- } -->
												<!-- </script> -->
												<div class="col-sm-6" style="padding-left: 253px;">
													<a href="halaman3.php">
														<input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 25px">
													</a>
												</div>
													<!-- <script>
														function next() {
															window.history.go(1);
														}
													</script> -->
												</div>
											</form>
												<!-- end button sebelum dan selanjutnya-->

												<!-- Modal bukti potong -->
												<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

													<div class="modal-dialog">



														<!-- Modal content-->
														<form action="proses_halaman2.php" method="post">
															<div class="modal-content">

																<div class="modal-header">
																	<h4 class="modal-title">Bukti Potong Baru</h4>
																	<button type="button" class="close" data-dismiss="modal">&times;</button>

																</div>
																<div class="modal-body">
																	

																	<div class="form-group row">
																		<label for="jenis_pajak" class="col-sm-7 col-form-label">Jenis Pajak</label>
																		<div class="col-sm-5">
																			<select class="form-control" name="jenis_pajak" id="jenis_pajak" oninput="validasi(this)" oninvalid="validasi(this)" required>
																				<option value="">Pilih...</option>
																				<option value="Pasal 21">Pasal 21</option>
																				<option value="Pasal 22">Pasal 22</option>
																				<option value="Pasal 23">Pasal 23</option>
																				<option value="Pasal 24">Pasal 24</option>
																				<option value="Pasal 26">Pasal 26</option>
																				<option value="DTP">DTP</option>
																			</select>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">NPWP Pemotong/Pemungutan Pajak *</label>
																		<div class="col-sm-5">
																			<input class="form-control" name="npwp_pemotong" id="npwp_pemotong" onkeyup="autofill()" value="<?php echo $_SESSION['npwp']; ?>" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" 
																			type="text" maxlength = "15" min = "1" max = "999999999999999" readonly>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Nama Pemotong/Pemungut Pajak</label>
																		<div class="col-sm-5">
																			<input class="form-control" value="<?php echo $_SESSION['nama_ktp']; ?>" name="nama_pemotong" id="nama_pemotong" readonly=""></input>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Nomor Bukti Pemotongan/Pemungutan *</label>
																		<div class="col-sm-5">
																			<input class="form-control" name="nomor_bukti" id="nomor_bukti" onkeypress="return isNumericBukti(event)" oninput="maxLengthCheckBukti(this)" 
																			type="text" maxlength = "18" min = "1" max = "999999999999999" value="<?php echo $_SESSION['id_paket']; ?>" readonly>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Tanggal Bukti Pemotongan/Pemungutan *</label>
																		<div class="col-sm-5">
																			<div class="">
																				<input type="date" class="form-control" name="tanggal_bukti" required="">
																				<!-- <input type="text" id="datepicker" class="form-control" name="tanggal_bukti" required=""> -->
																			</div>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-7 col-form-label">Jumlah PPh Yang Dipotong/Dipungut</label>
																		<div class="col-sm-5">
																			<input type="text" class="form-control" name="jumlah_pph" id="jumlah_pph">
																		</div>
																	</div>


																</div>
																<div class="modal-footer">
																	<!-- <input type="submit" class="btn btn-primary btn-sm" name="submit" id="submit" value="Simpan" style="border-radius: 25px; background-color: rgb(4, 153, 195);"/>
																	-->
																	<input type="submit" class="btn btn-primary btn-sm" name="submit" id="submit" value="Simpan" style="border-radius: 25px; background-color: rgb(4, 153, 195);"/>
																	<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px;">Batal</button>
																</div>

															</div>
															<!-- end modal content -->
															</form>
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
						<!-- </form> -->
					</div>
					<!-- end container box -->
					<script src="jquery-1.12.4.min.js"></script>
					<script src="datepicker/dist/js/bootstrap-datepicker.js"></script>
					<script type="text/javascript"> 

//autofill
function autofill(){
	var npwp_pemotong = $("#npwp_pemotong").val();
	$.ajax({
		url : 'autofill-ajax.php',
		data :"npwp_pemotong="+npwp_pemotong,
	}).success(function(data){
		var json = data,
		obj = JSON.parse(json);
		$('#nama_pemotong').val(obj.nama_pemotong);
	});
}

//Proses tanggal Bukti
$(function(){
	$("#datepicker").datepicker({
		format: 'yyyy-mm-dd',
		autoclose: true,
		todayHighlight: true,
		language: 'id  '
	});
});

//format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik)
var jumlah_pph =document.getElementById('jumlah_pph');
jumlah_pph.addEventListener('keyup', function(e){
	jumlah_pph.value = formatJumlah_pph(this.value, 'Rp.');
});

function formatJumlah_pph(angka, prefix){
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


//pembatasan length inputan dan tipe inputan harus numberic (Regular Expressions)
function maxLengthCheck(object) {
	if (object.value.length > object.maxLength)
		object.value = object.value.slice(0, object.maxLength)
}

function isNumeric (evt) {
	var theEvent = evt || window.event;
	var key = theEvent.keyCode || theEvent.which;
	key = String.fromCharCode (key);
	var regex = /[0-9]/;
	if ( !regex.test(key) ) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
	}
}

  //pembatasan length inputan dan tipe inputan harus numberic (Regular Expressions), (pemberian tanda "." dan "-")
  function maxLengthCheckBukti(object) {
  	if (object.value.length > object.maxLength)
  		object.value = object.value.slice(0, object.maxLength)
  }

  function isNumericBukti (evt) {
  	var theEvent = evt || window.event;
  	var key = theEvent.keyCode || theEvent.which;
  	key = String.fromCharCode (key);
  	var regex = /[0-9]|\.|\-/;
  	if ( !regex.test(key) ) {
  		theEvent.returnValue = false;
  		if(theEvent.preventDefault) theEvent.preventDefault();
  	}
  }
</script>

<br/>
<br/>
<br/>
<br/>
<?php include'../footer.html'; ?>
</body>
</html> 
