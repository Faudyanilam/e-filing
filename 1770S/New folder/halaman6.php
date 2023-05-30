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
								<div class="progress-bar progress-bar-striped" style="width:33.33%; background-color: rgb(255, 157, 49);"><small>33.33%</small></div>
							</div>
							<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 6 dari 18</small></p><br>
							<!-- end progress bar -->

							<!-- Pertanyaan -->
							<form action="proses_halaman6.php" method="post" name="form">
							<p><b>Apakah Anda memiliki penghasilan yang Tidak termasuk Objek Pajak?</b></p>
							<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
								<div class="form-check">
									<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="penghasilan_tob" id="yes" value="Ya">
									<label class="form-check-label" for="exampleRadios">Ya</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="penghasilan_tob" id="no" value="tidak">
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
															<input type="text" name="sumbangan" id="angkaSatu" oninput="hapus()" class="uang form-control" style="text-align: right;" />

															<input type="text" name="sumbangan" id="tes"  style="text-align: right;" hidden/>

															<span id="error_first_name" class="text-danger"></span>
														</td>
													</div>
												</tr>
												<tr>
													<div class="form-group">
														<td><small><b>2. </b></small></td>
														<td><small><b>Warisan</b></small></td>
														<td>
															<input type="text" name="warisan" id="angkaDua" oninput="hapus()" class="uang form-control" style="text-align: right;" />

															<input type="text" name="warisan" id="tes2"  style="text-align: right;" hidden/>

															<span id="error_last_name" class="text-danger"></span>
														</td>
													</div>
												</tr>
												<tr>
													<div class="form-group">
														<td><small><b>3. </b></small></td>
														<td><small><b>Bagian Laba Anggota Perseroan Komanditer tidak atas saham, persekutuan, perkumpulan, firma, kogsi</b></small></td>
														<td>
															<input type="text" name="laba_perseroan" id="angkaTiga" oninput="hapus()" class="uang form-control" style="text-align: right;"/>

															<input type="text" name="laba_perseroan" id="tes3" style="text-align: right;" hidden/>

															<span id="error_last_name" class="text-danger"></span>
														</td>
													</div>
												</tr>
												<tr>
													<div class="form-group">
														<td><small><b>4. </b></small></td>
														<td><small><b>Klaim Asuransi Kesehatan, Kecelakaan, Jiwa, Dwiguna, Beasiswa</b></small></td>
														<td>
															<input type="text" name="asuransi" id="angkaEmpat" oninput="hapus()" class="uang form-control" style="text-align: right;" />

															<input type="text" name="asuransi" id="tes4" style="text-align: right;" hidden/>

															<span id="error_last_name" class="text-danger"></span>
														</td>
													</div>
												</tr>
												<tr>
													<div class="form-group">
														<td><small><b>5. </b></small></td>
														<td><small><b>Beasiswa</b></small></td>
														<td>
															<input type="text" name="beasiswa" id="angkaLima" oninput="hapus()" class="uang form-control" style="text-align: right;"/>

															<input type="text" name="beasiswa" id="tes5" style="text-align: right;"hidden/>

															<span id="error_last_name" class="text-danger"></span>
														</td>
													</div>
												</tr>
												<tr>
													<div class="form-group">
														<td><small><b>6. </b></small></td>
														<td><small><b>Penghasilan Lainnya yang tidak termasuk Objek Pajak</b></small></td>
														<td>
															<input type="text" name="penghasilan_lain_tob" id="angkaEnam" onkeyup="jumlah();" oninput="hapus()"  class="uang form-control" style="text-align: right;"/>

															<input type="text" name="penghasilan_lain_tob" id="tes6" onkeyup="jumlah();" style="text-align: right;" hidden/>

															<span id="error_last_name" class="text-danger"></span>
														</td>
													</div>
												</tr>
												<tr>
													<div class="form-group">
														<td></td>
														<td style="padding-left: 200px"><small><strong>Jumlah Bagian B</strong></small></td>

														<td>
															<input type="text" name="jbb_hal6" value="0" id="angkaTujuh" oninput="hapus()" readonly class="uang form-control" style="text-align: right;"/>

															<input type="text" name="jbb_hal6" value="0" id="tes7" readonly  style="text-align: right;" hidden/>

															<span id="error_last_name" class="text-danger"></span>
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
		
	</div>

<table>
<tr>
   <td>Jawaban</td>
 </tr>
<?php
   // Ambil data dari session
   if (isset($_SESSION['tmppenghasilan_ln'])) {
    $tmppenghasilan_ln = $_SESSION['tmppenghasilan_ln'];
   }
 
   // End script ambil data

   // Cetak dengan cara uraikan isi arraynya
   for ($i=0; $i < count($tmppenghasilan_ln); $i++) {
    echo "<tr>";
    echo "<td>".$tmppenghasilan_ln[$i]."</td></tr>";
   }
   // End script urai array
   //session_destroy();
  ?>
</table>

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

        });
       </script>
	<script type="text/javascript" >
    	//pertanyaan

    	function yesnoCheck() {

    		if(document.getElementById('yes').checked) {
    			document.getElementById('ifYes').style.display = 'block';
    		}
    		else document.getElementById('ifYes').style.display = 'none';
    	}
    	function replaceAll(string,search,replace){
    		return string.split(search).join(replace);
		}
    	
    	//Jumlah Bagian B
    	function jumlah(){
    	  satu = eval(form.tes.value);
  		  dua = eval(form.tes2.value);
  		  tiga = eval(form.tes3.value);
  		  empat = eval(form.tes4.value);
  		  lima = eval(form.tes5.value);
  		  enam = eval(form.tes6.value);
  		  // tujuh = eval(form.angkaTujuh.value);
  		  // delapan = eval(form.angkaDelapan.value);

  		  tujuh = parseInt(satu) + parseInt(dua) + parseInt(tiga) + parseInt(empat) + parseInt(lima) + parseInt(enam);

  		  document.getElementById('angkaTujuh').value = parseInt(tujuh);
  		}

  		function hapus(){
				//cara menambahkan dan menghilangkan titik dari 2 text input
				id1 = "angkaSatu";
				id2 = "angkaDua";
				id3 = "angkaTiga";
				id4 = "angkaEmpat";
				id5 = "angkaLima";
				id6 = "angkaEnam";
				id7 = "angkaTujuh";

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

				id7_val = document.getElementById(id7).value;
				tes7_val = replaceAll(id7_val,'.','');
				document.getElementById('tes7').value = tes7_val;
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
