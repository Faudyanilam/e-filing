
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Arsip | Politeknik Negeri Batam</title>
	<link href="../assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
  	<script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>

	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="1770S/bootstrap/js/jquery.js"></script>
	<script src="1770S/bootstrap/js/bootstrap.min.js"></script>  

	
	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="../1770S/bootstrap/js/jquery.js"></script>
	<script src="../1770S/bootstrap/js/bootstrap.min.js"></script>  

</head>
<body class="bg-body">  
<?php
  include "../koneksi.php";

  if (isset($_GET['hasil'])) {
    if ($_GET['hasil'] == "berhasil") {
      echo "<script>
      Swal.fire(
      'SPT berhasil di upload',
      '', 
      'success'
    ) </script>";
	
}
else if ($_GET['hasil'] == "gagal") {
	echo "<script>
	Swal.fire(
	'SPT gagal di upload',
	'', 
	'warning'
  ) </script>";
}
}
?>
	<?php include'header.html'; ?>
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
													<a href="form_spt.php">Buat SPT</a>
												</li>
												
												<li class="nav-item">
													<a href="bantuan_spt.php">Bantuan</a>
												</li>
											</ul>
										</div>
										<!-- end membuat tab -->

										<!-- menambahkan gambar e-filling -->
										<div align="right" class="col-sm-3" style="padding-right: 30px;">
											<img src="../img/eFilingSpt.png" width="85px" height="45px">
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
									<div class="card bg-light mb-3 card_2" >
										<div class="card-header card-header_2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-book-open"></i> <b>Petunjuk Pengisian</b>  <i class="fas fa-chevron-left"></i></div>
										<div class="collapse" id="collapseExample">
											<div class="card-body" >
												<div style="overflow:auto; width:100%px; height:200px; padding:10px; border:1px solid white">
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
												</div>
												<br/>
											</div>
										</div>
									</div>
									<!-- end card petunjuk pengisian -->
								</div>
								<!-- end membuat kolom sebelah kiri -->

								<!-- membuat kolom sebelah kanan -->
								<div class="col-sm-6 col-md-8">
									<!-- card Riwayat Pelaporan -->
									<div class="card bg-light mb-3 card_5" >
										<div class="card-header card-header_3"><i class="fas fa-file-alt"></i> <b>Daftar SPT</b></div>
										<div class="card-body card-body_2" style="padding-left: 2%">  
											<br/>

											<!-- table responsive -->
											<div class="table-responsive" style="padding-top: 1%;">
												<table class="table table_2 box-shadow" style="border: 1px solid #ccc;">
													<thead class="thead-dark table_3">
														<tr>
															<th scope="col" class="font_table" ><small>NO</small></th>
															<th scope="col" class="font_table"><small>FILE SPT</small></th>
															<th scope="col" class="font_table"><small>FILE LAMPIRAN</small></th>
															
														</tr>
													</thead>
													<tbody>
														<!-- PENGAMBILAN DATA -->
														<?php
														include '../koneksi.php';
															$npwp = $_SESSION['npwp'];
															$urut = 0;

															$result = mysqli_query($koneksi, "select * from tb_upload_file_1771 where id_spt_1771 = '$npwp'"); 
															$countdata = mysqli_num_rows($result);

															if ($countdata < 1){
														?>
														<tr>
															<td colspan="3" style="text-align: center; font-weight: bolder;"> DATA TIDAK TERSEDIA</td>
															
														</tr>
														<?php
															}else{
																while($row = mysqli_fetch_assoc($result)){
																	$urut = $urut + 1;
															
														?>
														<tr>
															<td><small><b><?= $urut ?></b></small></td>
															<td>
																<a style="color: black;" href="csv_pdf/<?php echo $row['file_spt_1771'] ?>"><small><b><?= $row['file_spt_1771']?></b></small></a>
															</td>
															<td>
																<a style="color: black;" href="csv_pdf/<?php echo $row['lampiran_keuangan'] ?>"><small><b><?= $row['lampiran_keuangan']?></b></small></a>
															</td>
														</tr>
														<?php }}?>
														
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

