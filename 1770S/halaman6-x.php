<!-- <?php 
// mengdefiniskan variabel dan diset kosong
// $sumbangan_hibah = $warisan = $laba_perseroan = $asuransi_jiwa= $beasiswa = $tdk_objek_pajak ="";

// $no=1;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// 	$sumbangan_hibah     = $_POST['sumbangan_hibah'];
// 	$warisan    = $_POST["warisan"];
// 	$laba_perseroan  = $_POST["laba_perseroan"];
// 	$asuransi_jiwa = $_POST['asuransi_jiwa'];
// 	$beasiswa = $_POST['beasiswa'];
// 	$tdk_objek_pajak = $_POST['tdk_objek_pajak'];
// }

// $total= $sumbangan_hibah + $warisan;

 ?> -->

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
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
										<b>SPT 1770 S</b>
									</div>
									<!-- end card header -->

									<!-- card body -->
									<div class="card-body card-body_2">  
										<p class="p_text_2 card_7"></p>

										<!-- progress bar -->
										<div class="progress">
											<div class="progress-bar progress-bar-striped" style="width:33.33%; background-color: rgb(255, 157, 49);"><small>33.33%</small></div>
										</div>
										<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 6 dari 18</small></p><br>
										<!-- end progress bar -->

										<!-- Pertanyaan -->
										<p><b>Apakah Anda memiliki penghasilan yang Tidak termasuk Objek Pajak?</b></p>
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
													<!-- Tabel -->
													<div class="table-responsive tabel-striped">
														<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
															<tr>
																<div class="form-group">
																	<td ><small><b>1. </b></small></td>
																	<td ><small><b>Bantuan/Sumbangan/Hibah</b></small></td>
																	<td >
																		<input type="text" name="sumbangan_hibah" id="sumbangan_hibah" class="form-control" required="" />
																		<!-- <span id="error_first_name" class="text-danger"></span> -->
																	</td>
																</div>
															</tr>
															<tr>
																<div class="form-group">
																	<td><small><b>2. </b></small></td>
																	<td><small><b>Warisan</b></small></td>
																	<td>
																		<input type="text" name="warisan" id="warisan" class="form-control" required=""/>
																		<!-- <span id="error_last_name" class="text-danger"></span> -->
																	</td>
																</div>
															</tr>
															<tr>
																<div class="form-group">
																	<td><small><b>3. </b></small></td>
																	<td><small><b>Bagian Laba Anggota Perseroan Komanditer tidak atas saham, persekutuan, perkumpulan, firma, kogsi</b></small></td>
																	<td>
																		<input type="text" name="laba_perseroan" id="laba_perseroan" class="form-control" required=""/>
																		<!-- <span id="error_last_name" class="text-danger"></span> -->
																	</td>
																</div>
															</tr>
															<tr>
																<div class="form-group">
																	<td><small><b>4. </b></small></td>
																	<td><small><b>Klaim Asuransi Kesehatan, Kecelakaan, Jiwa, Dwiguna, Beasiswa</b></small></td>
																	<td>
																		<input type="text" name="asuransi_jiwa" id="asuransi_jiwa" class="form-control" required=""/>
																		<!-- <span id="error_last_name" class="text-danger"></span> -->
																	</td>
																</div>
															</tr>
															<tr>
																<div class="form-group">
																	<td><small><b>5. </b></small></td>
																	<td><small><b>Beasiswa</b></small></td>
																	<td>
																		<input type="text" name="beasiswa" id="beasiswa" class="form-control" required=""/>
																		<!-- <span id="error_last_name" class="text-danger"></span> -->
																	</td>
																</div>
															</tr>
															<tr>
																<div class="form-group">
																	<td><small><b>6. </b></small></td>
																	<td><small><b>Penghasilan Lainnya yang tidak termasuk Objek Pajak</b></small></td>
																	<td>
																		<input type="text" name="tdk_objek_pajak" id="tdk_objek_pajak" class="form-control" required="" onclick="hitung();" />
																		<span id="error_last_name" class="text-danger"></span>
																	</td>
																</div>
															</tr>
															<tr>
																<div class="form-group">
																	<td></td>
																	<td style="padding-left: 200px"><small><strong>Jumlah Bagian B</strong></small></td>

																	<td>
																		<input type="text" name="jumlah_bagianB" value="0" id="jumlah_bagianB" readonly class="form-control" value="<?php echo $total?>" />
																		<!-- <span id="error_last_name" class="text-danger"></span> -->
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
												<a href="halaman5.php">
													<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
												</div>
												<div class="col-sm-6" style="padding-left: 253px;">
													<a href="halaman7-xxx.php">
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
				<script type="text/javascript" src="script.js"></script>
				<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
				<script src="jquery-1.12.4.min.js"></script>
				<script type="text/javascript" >
    //pertanyaan

    function yesnoCheck() {

    	if(document.getElementById('yes').checked) {
    		document.getElementById('ifYes').style.display = 'block';
    	}
    	else document.getElementById('ifYes').style.display = 'none';
    }
    // $('#ifYes').hide(500);


    //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 1
    var sumbangan_hibah =document.getElementById('sumbangan_hibah');
    sumbangan_hibah.addEventListener('keyup', function(e){
    	sumbangan_hibah.value = formatSumbangan_hibah(this.value, 'Rp.');
    });

    function hitung(){
    	document.getElementById("jumlah_bagianB").value="Rp. 650.000.000";
    	
    }

    function formatSumbangan_hibah(angka, prefix){
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

	   //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 2
	   var warisan =document.getElementById('warisan');
	   warisan.addEventListener('keyup', function(e){
	   	warisan.value = formatwarisan(this.value, 'Rp.');
	   });

	   function formatwarisan(angka, prefix){
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

		//format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 3
		var laba_perseroan =document.getElementById('laba_perseroan');
		laba_perseroan.addEventListener('keyup', function(e){
			laba_perseroan.value = formatlaba_perseroan(this.value, 'Rp.');
		});

		function formatlaba_perseroan(angka, prefix){
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

		//format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 4
		var asuransi_jiwa =document.getElementById('asuransi_jiwa');
		asuransi_jiwa.addEventListener('keyup', function(e){
			asuransi_jiwa.value = formatasuransi_jiwa(this.value, 'Rp.');
		});

		function formatasuransi_jiwa(angka, prefix){
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

		   //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 5
		   var beasiswa =document.getElementById('beasiswa');
		   beasiswa.addEventListener('keyup', function(e){
		   	beasiswa.value = formatbeasiswa(this.value, 'Rp.');
		   });

		   function formatbeasiswa(angka, prefix){
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

			   //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 6
			   var tdk_objek_pajak =document.getElementById('tdk_objek_pajak');
			   tdk_objek_pajak.addEventListener('keyup', function(e){
			   	tdk_objek_pajak.value = formattdk_objek_pajak(this.value, 'Rp.');
			   });

			   function formattdk_objek_pajak(angka, prefix){
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

				//format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 7
				var jumlah_bagianB =document.getElementById('jumlah_bagianB');
				jumlah_bagianB.addEventListener('keyup', function(e){
					jumlah_bagianB.value = formatjumlah_bagianB(this.value, 'Rp.');
				});

				function formatjumlah_bagianB(angka, prefix){
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
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
			<script src="assets/demo/chart-area-demo.js"></script>
			<br/>
			<br/>
			<br/>
			<br/>
			<?php include'../footer.html'; ?>
		</body>
		</html> 
