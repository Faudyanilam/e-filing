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
									<div class="progress-bar progress-bar-striped" style="width:83.33%; background-color: rgb(255, 157, 49);"><small>83.33%</small></div>
								</div>
								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 15 dari 18</small></p><br>
								<!-- end progress bar -->


								<table hidden >
									<tr>
										<td>Jawaban</td>
									</tr>
									<?php

												//POINT 1

												// Halaman 3
									if (isset($_SESSION['tmpneto_dn'])) {
										$tmpneto_dn = $_SESSION['tmpneto_dn'];
									}

									echo "<tr>";
									echo "<td>".end($tmpneto_dn)."</td></tr>";
									$neto_dn = end($tmpneto_dn);


												//Halaman 4
									if (isset($_SESSION['tmpjml_a'])) {
										$tmpjml_a = $_SESSION['tmpjml_a'];
									}

									echo "<tr>";
									echo "<td>".end($tmpjml_a)."</td></tr>";
									$jml_a = end($tmpjml_a);


												// Halaman 5
									if (isset($_SESSION['tmpluar_negeri'])) {
										$tmpluar_negeri = $_SESSION['tmpluar_negeri'];
									}

									echo "<tr>";
									echo "<td>".end($tmpluar_negeri)."</td></tr>";
									$luar_negeri = end($tmpluar_negeri);

												//Halaman 11
									if (isset($_SESSION['tmpzakat_sumbangan'])) {
										$tmpzakat_sumbangan = $_SESSION['tmpzakat_sumbangan'];
									}
									echo "<tr>";
									echo "<td>".end($tmpzakat_sumbangan)."</td></tr>";
									$zakat_sumbangan = end($tmpzakat_sumbangan);

												//Halaman 13
									if (isset($_SESSION['tmppengurangan_pph21'])) {
										$tmppengurangan_pph21 = $_SESSION['tmppengurangan_pph21'];
									}

									echo "<tr>";
									echo "<td>".end($tmppengurangan_pph21)."</td></tr>";
									$pengurangan_pph21 = end($tmppengurangan_pph21);

												//Halaman 14
									if (isset($_SESSION['tmppembayaran_pph25'])) {
										$tmppembayaran_pph25 = $_SESSION['tmppembayaran_pph25'];
									}

									echo "<tr>";
									echo "<td>".end($tmppembayaran_pph25)."</td></tr>";
									$pembayaran_pph25 = end($tmppembayaran_pph25);

									if (isset($_SESSION['tmppembayaran_stp_pph25'])) {
										$tmppembayaran_stp_pph25 = $_SESSION['tmppembayaran_stp_pph25'];
									}

									echo "<tr>";
									echo "<td>".end($tmppembayaran_stp_pph25)."</td></tr>";
									$pembayaran_stp_pph25 = end($tmppembayaran_stp_pph25);


												//POINT 1 penjumlahan halaman 3,4,5,11
									$hasil_neto = abs($neto_dn + $jml_a + $luar_negeri - $zakat_sumbangan);

									$hasil_neto = number_format($hasil_neto,0,",",".");

									$hasil_neto = "Rp. " .$hasil_neto;

												//END POINT 1

												 // POINT 2 
									if (isset($_SESSION['tmpptkp'])) {
										$tmpptkp = $_SESSION['tmpptkp'];
									}
									if (isset($_SESSION['tmpjumlah_tanggungan'])) {
										$tmpjumlah_tanggungan = $_SESSION['tmpjumlah_tanggungan'];
									}

									echo "<tr>";
									echo "<td>".end($tmpptkp)."</td></tr>";
									echo "<td>".end($tmpjumlah_tanggungan)."</td></tr>";
									$ptkp = end($tmpptkp);
									$tanggungan = end($tmpjumlah_tanggungan);


									if ($tanggungan == "0" && $ptkp == "tk"){
										$hasil = '54000000';
									}
									else if ($tanggungan == "1" && $ptkp == "tk"){
										$hasil = '58500000';
									}
									else if ($tanggungan == "2" && $ptkp == "tk"){
										$hasil = '63000000';
									}
									else if ($tanggungan == "3" && $ptkp == "tk"){
										$hasil = '67500000';
										echo $hasil;
									}
									else if ($tanggungan == "0" && $ptkp == "kw"){
										$hasil = '58500000';
									}
									else if ($tanggungan == "1" && $ptkp == "kw"){
										$hasil = '63000000';
									}
									else if ($tanggungan == "2" && $ptkp == "kw"){
										$hasil = '67500000';
									}
									else if ($tanggungan == "3" && $ptkp == "kw"){
										$hasil = '72000000';
									}
									else if ($tanggungan == "0" && $ptkp == "kw_gabung"){
										$hasil = '112500000';
									}
									else if ($tanggungan == "1" && $ptkp == "kw_gabung"){
										$hasil = '117000000';
									}
									else if ($tanggungan == "2" && $ptkp == "kw_gabung"){
										$hasil = '121500000';
									}


									$hasil = number_format($hasil,0,",",".");

									$hasil = "Rp. " .$hasil;

												// END POINT 2


												//POINT 3
									$jumlah_point1 = substr($hasil_neto, 4);
									$jumlah_point1 = str_replace(".", "", $jumlah_point1 );

									$jumlah_point2 = substr($hasil, 4);
									$jumlah_point2 = str_replace(".", "", $jumlah_point2 );

									$jumlah3 =  ($jumlah_point1 -  $jumlah_point2) ;

									if($jumlah3<0){
										$jumlah3 = 0;
									}

									$jumlah3 = number_format($jumlah3,0,",",".");

									$jumlah3 = "Rp. " .$jumlah3;
												//END POINT 3


												//POINT 4
									$jumlah_point4 = substr($jumlah3, 4);
									$jumlah_point4 = str_replace(".", "", $jumlah_point4 );

									if($jumlah_point4<=50000000){
										$pph_terutang = abs($jumlah_point4*(5/100));
									}else if($jumlah_point4>50000000 && $jumlah_point4<=250000000){
										$point3 = substr($jumlah3, 4);
										$point3 = str_replace(".", "", $point3 );

										$kurang_tarif = abs($point3-50000000);
										$kali_tarif = abs($kurang_tarif*(15/100));
										$pph_terutang = abs($kali_tarif+((5/100)*50000000));
												// echo $kurang_tarif;
									}else if($jumlah_point4>250000000 && $jumlah_point4<=500000000){
										$point3 = substr($jumlah3, 4);
										$point3 = str_replace(".", "", $point3 );

										$kurang_tarif = abs($point3-250000000);
										$kali_tarif = abs($kurang_tarif*(25/100));
										$pph_terutang = abs($kali_tarif+((5/100)*50000000)+((15/100)*200000000));

									}else{
										$point3 = substr($jumlah3, 4);
										$point3 = str_replace(".", "", $point3 );

										$kurang_tarif = abs($point3-500000000);
										$kali_tarif = abs($kurang_tarif*(30/100));
										$pph_terutang = abs($kali_tarif+((5/100)*50000000)+((15/100)*200000000)+((25/100)*200000000));
									}

									$pph_terutang = number_format($pph_terutang,0,",",".");

									$pph_terutang = "Rp. " .$pph_terutang;

												//END POINT 4

												//POINT 5
									$hasil_point4= substr($pph_terutang, 4);
									$hasil_point4 = str_replace(".", "", $hasil_point4 );

									$jumlah_point5 = abs($pengurangan_pph21+$hasil_point4);

									$jumlah_point5 = number_format($jumlah_point5,0,",",".");

									$jumlah_point5 = "Rp. " .$jumlah_point5;
												//END POINT 5

												//POINT 6

									if (isset($_SESSION['jumlah_rp'])) {
													// echo $_SESSION['jumlah_rp']; 
									}

									$jumlah_point6 = $_SESSION['jumlah_rp'];

									$hilang6 = substr($jumlah_point6, 4);
									$hilang6 = str_replace(".", "", $hilang6);
												//END POINT 6

												//POINT 7
									$hasil_point5= substr($jumlah_point5, 4);
									$hasil_point5 = str_replace(".", "", $hasil_point5);

									$hasil_point6= substr($jumlah_point6, 4);
									$hasil_point6 = str_replace(".", "", $hasil_point6);


									$jumlah_point7 = abs($hasil_point5-$hasil_point6);

									$jumlah_point7_rp = number_format($jumlah_point7,0,",",".");

									$jumlah_point7_rp = "Rp. " .$jumlah_point7_rp;
												//END POINT 7

												//POINT 8
									$jumlah_point8 = abs($pembayaran_pph25 + $pembayaran_stp_pph25);
									$jumlah_point8 = number_format($jumlah_point8,0,",",".");

									$jumlah_point8 = "Rp. " .$jumlah_point8;
												//END POINT 8

									?>
								</table>

								<p><b>Perhitungan Pajak Penghasilan (PPh)</b></p>
								<br>
								<!-- action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  -->
								<form name="form" action="proses_halaman15.php" method="post">
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-7">
											<p class="font-13px" style="color: rgb(4, 153, 195)">Jumlah Penghasilan Neto setelah Pengurangan Zakat/Sumbangan Keagamaan yang sifatnya Wajib (4-5)</p>
										</div>
										<div class="col-sm-5" style="padding-left: 113px; ">
											<input style="text-align: right;" class="form-control" name="hasil_pengurangan_neto_zakat" type="text" value="<?php echo $hasil_neto; ?>" readonly>

										</div>
									</div>

									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-7">
											<p class="font-13px" style="color: rgb(4, 153, 195)">Penghasilan Tidak Kena Pajak/Jumlah Tanggungan</p>
										</div>
										<div class="col-sm-5" style="padding-left: 113px; ">
											<input style="text-align: right;" name="ptkp_jml_tanggungan" class="form-control" type="text" value="<?php echo $hasil; ?>" readonly>
										</div>
									</div>

									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-7">
											<p class="font-13px" style="color: rgb(4, 153, 195)">Penghasilan Kena Pajak (6-7)</p>
										</div>
										<div class="col-sm-5" style="padding-left: 113px; ">
											<?php 
											if ($ptkp == "kw_gabung"){
												if ($jumlah_point4<0){
													$jumlah3 = "0";
													$pph_terutang = "0";
													$jumlah_point5 = "0";

												}
											}

											?>
											<input style="text-align: right;" name="pkp" class="form-control" type="text" value="<?php echo $jumlah3; ?>" readonly>

										</div>
									</div>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-7">
											<p class="font-13px" style="color: rgb(4, 153, 195)">PPh Terutang (Tarif Pasal 17 UU PPh *  8)</p>
										</div>
										<div class="col-sm-5" style="padding-left: 113px; ">
											<input style="text-align: right;" name="pph_terutang_tarif" class="form-control" type="text" value="<?php echo $pph_terutang; ?>" 
											readonly>
										</div>
									</div>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-7">
											<p class="font-13px" style="color: rgb(4, 153, 195)">Jumlah PPh Terutang (9+10)</p>
										</div>
										<div class="col-sm-5" style="padding-left: 113px; ">
											<input style="text-align: right;" name="jumlah_pph_terutang" class="form-control" type="text" value="<?php echo $jumlah_point5 ?>" readonly>
											<!-- <input style="text-align: right;" class="form-control" type="text" id="pph_terutang" value="" oninput="tes();"> -->

										</div>
									</div>

									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-7">
											<p class="font-13px" style="color: rgb(4, 153, 195)">PPh yang dipotong/dipungut pihak lain/ditanggung pemerintah dan/atau Kredit Pajak Luar Negeri dan/atau terutang di luar negeri</p>
										</div>

										<div class="col-sm-5" style="padding-left: 113px; ">
											<input style="text-align: right;" name="pph_dipotong_pihak_lain" class="form-control" type="text" value="<?php echo $jumlah_point6 ?>" readonly>
											<!-- <input style="text-align: right;" class="form-control" type="text" id="pph_dipotong" value=""  > -->
										</div>
									</div>

									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-7">
											<p class="font-13px" style="color: rgb(4, 153, 195)">PPh yang Harus Dibayar Sendiri</p>
										</div>
										<div class="col-sm-5" style="padding-left: 113px; ">
											<?php 
												// $jum_7 = abs($jumlah_point5-$hasil_point6);

											$jum_7 = number_format($jumlah_point7,0,",",".");

											$jum_7 = "Rp. " .$jum_7;
											?>
											<input style="text-align: right;" name="pph_dibayar_sendiri" class="form-control" type="text" value="<?php echo $jum_7; ?>" readonly>
											<!-- <input style="text-align: right;"  type="text" name="status_dibayar" id="status_dibayar"  > -->

										</div>
									</div>

									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-7">
											<p class="font-13px" style="color: rgb(4, 153, 195)">Jumlah Kredit Pajak (14a+14b+14c)</p>
										</div>
										<div class="col-sm-5" style="padding-left: 113px; ">
											<input style="text-align: right;" name="jumlah_kredit" class="form-control" type="text" value="<?php echo $jumlah_point8;?>" readonly>
										</div>
									</div>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-7">
											<label name="status_hasil_s">
												<?php 
												if ($hasil_point5 < $hilang6){
													echo "<p class='font-13px' id='penentuan' name='status_hasil'><strong style='color: red;'>Kurang Bayar</strong></p>";
													echo "<input type='text' name='status_hasil_s' id='status_hasil_s' value='Kurang Bayar' hidden>";
													// $jumlah_point8 = 0;

												}else if($hasil_point5 > $hilang6){
													echo "<p class='font-13px' id='penentuan' name='status_hasil'><strong style='color: red;'>Kurang Bayar</strong></p>";
													echo "<input type='text' name='status_hasil_s' id='status_hasil_s' value='Kurang Bayar' hidden>";

												}else if ($hasil_point5 == $hilang6){
													echo "<p class='font-13px' id='penentuan' name='status_hasil'><strong>Nihil</strong></p>";
													echo "<input type='text' name='status_hasil_s' id='stat_hasil' value='Nihil' hidden>";
												}
												?>
											</label>
										</div>
										<div class="col-sm-5" style=" padding-left: 113px; ">
											<input style="text-align: right;" name="jumlah_hasil_akhir" class="form-control" type="text" value="<?php echo $jumlah_point8;?>" readonly>
										</div>
									</div>
									<!-- end form input --> 
									<!-- <script type='text/javascript'>
										document.getElementById('stat_hasil').value = "Lebih Bayar";
									</script>
									<input type="text" name="stat_hasil" id="stat_hasil" value=""> -->

									<!-- button sebelum dan selanjutnya-->
									<hr>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-6">

											<a href="halaman14.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
											</div>
											<div class="col-sm-6" style="padding-left: 253px;">
												<?php 
												if ($hasil_point5 > $hilang6){

													?>
													<!-- <a href="halaman_16_lebih.php"> -->
														<input type="submit" value="Selanjutnya" name="submit1" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px">
														<!-- </a> -->
													<?php }else if($hasil_point5 > $hilang6){

														?>
														<a href="halaman_16_kurang.php">
															<input type="submit" value="Selanjutnya" name="submit2" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px">
															<!-- </a> -->
														<?php }else if($hasil_point5 == $hilang6){

															?>
															<a href="proses_halaman15.php">
																<input type="submit" value="Selanjutnya" name="submit3" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px">
																<!-- </a> -->
															<?php } ?>
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
					<!-- <script type="text/javascript" src="script.php"></script> -->


					<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
					<script src="assets/demo/chart-area-demo.js"></script>
					<br/>
					<br/>
					<br/>
					<br/>
					<?php include'../footer.html'; ?>
				</body>
				</html> 
