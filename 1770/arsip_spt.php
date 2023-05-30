<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dasboard | Politeknik Negeri Batam</title>
	<link href="assets/img/logo.png" rel="icon">
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
	<!-- container box -->
	<div class="container box"> 
		<br />
		<!-- form -->
		<form >
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
												<li class="nav-item grey-nav">
													<a href="arsip_spt.php" class="font-dark-blue">Arsip SPT</a>
												</li>
												<li class="nav-item">
													<a href="upload_spt.php">Buat SPT</a>
												</li>
												<li class="nav-item jarak-nav">
													<a href="draft_spt.php">Draft SPT</a>
												</li>
												<li class="nav-item">
													<a href="bantuan_spt.php">Bantuan</a>
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

							<!-- agar colom tidak ada batasn row -->
							<div class="row no-gutters">
								<!-- membuat kolom sebelah kiri -->
								<div class="col-6 col-md-4">
									<!-- card profil -->
									<div class="card bg-light mb-3 card_2">
										<div class="card-header card-header_2"><i class="fas fa-user"></i> <b>Petunjuk Pengisian</b></div>
										<div class="card-body">
											<ul>
												<li class="card-title card-title_1 font-13px" style="padding-top: 15px">Menu ini menyediakan informasi daftar SPT yang telah dibuat atau diupload namun belum mendapatkan tanda terima dari DJP</li>
												<li class="card-text card-title_1 font-13px">Melalui kolom Aksi di tabel Daftar Konsep SPT, arahkan kursor pada tombol berikut :</li>
												<ol>
													<li class="card-text card-text_2 font-12px">"Lihat SPT" <font color="red"><b>*)</b></font> untuk melihat draft SPT yang Anda buat</li>
													<li class="card-text card-text_2 font-12px">"Ubah SPT" <font color="red"><b>*)</b></font> untuk mengubah draft SPT</li>
													<li class="card-text card-text_2 font-12px">"Hapus SPT" untuk menghapus draft SPT</li>
													<li class="card-text card-text_2 font-12px">"Kirim SPT" untuk mengirimkan SPT guna mendapatkan Bukti Penerimaan Elektronik</li>
												</ol>
												<li class="card-text card-title_1 font-13px"><font color="red"><b>*)</b></font> hanya untuk SPT 1770 SS dan 1770 S yang bukan dari upload</li>
											</ul>
											<br/>
										</div>
									</div>
									<!-- end card petunjuk pengisian -->
								</div>
								<!-- end membuat kolom sebelah kiri -->

								<!-- membuat kolom sebelah kanan -->
								<div class="col-sm-6 col-md-8">
									<!-- card Riwayat Pelaporan -->
									<div class="card bg-light mb-3 card_5">
										<div class="card-header card-header_3"><i class="fas fa-file-alt"></i> <b>Riwayat Pelaporan</b></div>
										<div class="card-body card-body_2">  
											<br/>

											<!-- table responsive -->
											<div class="table-responsive" style="padding-top: 15px;">
												<table class="table table_2 box-shadow" style="border: 1px solid #ccc;">
													<thead class="thead-dark table_3">
														<tr>
															<th scope="col" class="font_table" ><small>NO</small></th>
															<th scope="col" class="font_table"><small>JENIS SPT</small></th>
															<th scope="col" class="font_table"><small>TAHUN/MASA PAJAK</small></th>
															<th scope="col" class="font_table"><small>PEMBETULAN KE</small></th>
															<th scope="col" class="font_table"><small>STATUS</small></th>
															<th scope="col" class="font_table"><small>JUMLAH</small></th>
															<th scope="col" class="font_table"><small>SUMBER</small></th>
															<th scope="col" class="font_table"><small>AKSI</small></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><small><b>1</b></small></td>
															<td><small><b>SPT Masa PPh Pasal 21/26</b></small></td>
															<td><small><b>2019/01-01</b></small></td>
															<td><small><b>0</b></small></td>
															<td><small><b>Nihil</b></small></td>
															<td><small><b>0</b></small></td>
															<td><small><b>CSV</b></small></td>
															<td>
																<button style="border-radius: 50px 50px 50px 50px; border:none; background-color: #191970; height: 36px; width: 38px;"><small><i class="fas fa-paper-plane fa-2x" style="color: white "></i></small></button>
																<br>
																<button style="border-radius: 50px 50px 50px 50px; border:none; background-color: #191970; height: 36px; width: 38px;"><small><i class="fas fa-trash fa-2x" style="color:white; "></i></small></button>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- end tabel responsive -->

											<!-- button -->

											<!-- <small style="color:rgb(4, 153, 195); padding-right:30px">Menampilkan 1 sampai 1 dari 1 entri</small> -->

												<!-- <small style="color:rgb(4, 153, 195);">Tampilkan
													<input type="number" style="width:40px"> entri

													<a type="button" class="btn btn-warning " href="lapor.php" name="back" style="background-color: lightgrey; border-radius: 8px; color:rgb(4, 153, 195); border: none; height: none; width: none;"><strong>Sebelumnya</strong></a>
													<a class="btn btn-warning " name="1" style="background-color: 191970; border-radius: 4px; color:rgb(4, 153, 195); border: none; height: none; width: none;" readonly><strong>1</strong></a>
													<a type="button" class="btn btn-warning" href="#" name="next" style="background-color: lightgrey; border-radius: 8px; color:rgb(4, 153, 195); border: none; height: none; width: none;"><strong>Selanjutnya</strong></a>
												</small> -->

												<!-- end button -->

											</div>
										</div>
										<!-- end card Riwayat Pelaporan -->
										<br/>

									</div>
									<!-- end kolom sebelah kanan -->
								</div>
								<!-- end row gutters -->
							</div>
							<!-- end panel body -->
						</div>
						<!-- end panel -->
					</div>
					<!-- end tab pane -->
				</div> 
				<!-- end tab content -->
			</form>
			<!-- end form -->
		</div>
		<!-- end container box -->
		<?php include'../footer.html'; ?>
	</body>
	<!-- Fontawesome JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

	</html>

