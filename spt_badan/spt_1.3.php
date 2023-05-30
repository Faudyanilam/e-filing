<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>SPT 1770 | Politeknik Negeri Batam</title>

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

  <script src="../1770S/bootstrap/js/jquery.js"></script>

  <script src="../1770S/bootstrap/js/bootstrap.min.js"></script>  

</head>

<body class="bg-body">

	<?php include'../header.html'; ?>



	<?php 

	include '../koneksi.php';

// 	if (isset($_GET['hasil'])) {

// 		if($_GET['hasil'] == "gagal"){

// 			echo "<script>

// 			Swal.fire(

// 			' Kirim SPT Gagal',

// 			'Data Tidak Sesuai!',

// 			'error'

// 		) </script>";

// 	} 

// }

?>



<?php

// session_start();

// $_SESSION['kode_verif'] = $token2;

// echo $_SESSION['kode_verif'];



$pesan='';

if ($_SERVER["REQUEST_METHOD"] == "POST") {



	if (isset($_POST['kode_verif_1771'])) {

		if ($_SESSION['kode_verif_71']!=$_POST['kode_verif_1771']){

			$pesan="<div class='alert alert-danger' style='width: auto;'><font size ='2'><strong>Error!</strong> Kode yang dimasukan salah.</font></div>";

                // session_destroy();

		}else {

			$pesan="<div class='alert alert-success' style='width: auto;'><font size ='2'><strong>Sukses!</strong> Kode yang dimasukan benar. </font></div>";

			header('location:../berhasil_lapor_71.php?hasil=berhasil');

			// include 'cek_kode_1770.php';

		}

	}

}



// echo $_SESSION['kode_verif'];

?>

<br />



<div class="container box"> 

	<br />

	<!-- <form method="post" action="../lapor_1770.php" enctype="multipart/form-data">  -->

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

												<a href="arsip_spt.php">Arsip SPT</a>

											</li>

											<li class="nav-item grey-nav">

												<a href="" class="font-dark-blue">Buat SPT</a>

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
											<img src="../img/eFilingSpt.png" width="85px" height="45px">
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

								<b>Upload SPT Masa/Tahunan</b>

							</div>

							<!-- end card header -->



							<!-- card body -->

							<div class="card-body card-body_2">  

								<p class="p_text_2 card_7" style="font-weight: bold;padding-top: 3%; font-size: 20px"> Kirim </p>



								<!-- progress bar -->

								<div class="progress">

									<div class="progress-bar progress-bar-striped" style="width:100%; background-color: rgb(255, 157, 49);"><small>100.00%</small></div>

								</div>

								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 2 dari 2</small></p><br>

								<!-- end progress bar -->



								<!-- Judul -->

								<p><b>SPT Anda</b></p>

								<br>

								<!-- end judul -->



								<!-- Form-->

								<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">



									<!-- Buat Preview Data -->

									<?php

									// session_start();

									// Jika user telah mengklik tombol Preview

									if(isset($_POST['upload2'])){

										//$ip = ; // Ambil IP Address dari User

										$nama_file_baru = 'data2.xlsx';



										// Cek apakah terdapat file data.xlsx pada folder tmp

										if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada

											unlink('tmp/'.$nama_file_baru); // Hapus file tersebut



										$tipe_file = $_FILES['file']['type']; // Ambil tipe file yang akan diupload

										$tmp_file = $_FILES['file']['tmp_name'];



										

										// Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)

										if($tipe_file == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){

											// Upload file yang dipilih ke folder tmp

											// dan rename file tersebut menjadi data{ip_address}.xlsx

											// {ip_address} diganti jadi ip address user yang ada di variabel $ip

											// Contoh nama file setelah di rename : data127.0.0.1.xlsx

											move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);

											

											// Load librari PHPExcel nya

											require_once 'PHPExcel/PHPExcel.php';

											

											$excelreader = new PHPExcel_Reader_Excel2007();

											$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp

											$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true, true, true);

											

											// Buat sebuah tag form untuk proses import data ke database

											echo "<form method='post' action='import.php'>";

											

											// Buat sebuah div untuk alert validasi kosong

											// echo "<div class='alert alert-danger' id='kosong'>

											// Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.

											// </div>";

											

											echo "<table class='table table-bordered'>

											<tr>

											

											</tr>";

											

											$numrow = 1;

											$kosong = 0;

											foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel

												// Ambil data pada excel sesuai Kolom

												$jns_spt = $row['A']; // Ambil data NIS

												$thn_pjk = $row['B']; // Ambil data nama

												$pembetulan_ke = $row['C']; // Ambil data jenis kelamin

												$status_spt = $row['D']; // Ambil data jenis kelamin

												$jml = $row['E']; // Ambil data telepon

												$catatan = $row['F']; // Ambil data telepon



												

												// Cek jika semua data tidak diisi

												if(empty($jns_spt) && empty($thn_pjk) && empty($pembetulan_ke) && empty($status_spt) && empty($jml) && empty($catatan))

													continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

												

												// Cek $numrow apakah lebih dari 1

												// Artinya karena baris pertama adalah nama-nama kolom

												// Jadi dilewat saja, tidak usah diimport

												if($numrow > 2){

													// Validasi apakah semua data telah diisi

													$jns_spt_td = ( ! empty($jns_spt))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah

													$thn_pjk_td = ( ! empty($thn_pjk))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah

													$pembetulan_ke_td = ( ! empty($pembetulan_ke))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah

													$status_spt_td = ( ! empty($status_spt))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah							

													$jml_td = ( ! empty($jml))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah							

													$catatan_td = ( ! empty($catatan))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah							

													

													// Jika salah satu data ada yang kosong

													if(empty($jns_spt) && empty($thn_pjk) && empty($pembetulan_ke) && empty($status_spt) && empty($jml) && empty($catatan)){

														$kosong++; // Tambah 1 variabel $kosong

													}

													

													$_SESSION['jns_spt'] = $jns_spt;

													$_SESSION['thn_pjk'] = $thn_pjk;

													$_SESSION['pembetulan_ke'] = $pembetulan_ke;

													$_SESSION['status_spt'] = $status_spt;

													$_SESSION['jml'] = $jml;

													$_SESSION['catatan'] = $catatan;

												}

												

												$numrow++; // Tambah 1 setiap kali looping

											}



											

											echo "</table>";

											

											// Cek apakah variabel kosong lebih dari 1

											// Jika lebih dari 1, berarti ada data yang masih kosong

											if($kosong > 1){

												?>	

												<script>

													$(document).ready(function(){

													// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong

													$("#jumlah_kosong").html('<?php echo $kosong; ?>');

													

													$("#kosong").show(); // Munculkan alert validasi kosong

												});

											</script>

											<?php

											}else{ // Jika semua data sudah diisi



												echo "";

												// Buat sebuah tombol untuk mengimport data ke database

												// echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";

											}

											

											echo "</form>";

										}else{ // Jika file yang diupload bukan File Excel 2007 (.xlsx)

											// Munculkan pesan validasi

											echo "<div class='alert alert-danger'>

											Hanya File Excel Format (.xlsx) yang diperbolehkan

											</div>";

										}

									}

									?>





									<div class="form-group row">

										<label class="col-sm-6 col-form-label font-13px" style="padding-left: 80px; color: rgb(4, 153, 195)">Jenis Formulir</label>

										<div class='col-sm-6' style='padding-right: 50px'>

											<input class='form-control' name='jenis_formulir' id='jenis_formulir' value='<?php echo $_SESSION['jns_spt']; ?>' readonly>

										</div>

									</div>









									<div class='form-group row'>

										<label class='col-sm-6 col-form-label font-13px' style='padding-left: 80px; color: rgb(4, 153, 195)'>Tahun Pajak</label>

										<div class='col-sm-6' style='padding-right: 50px'>

											<input class='form-control' name='thn_pajak' id='thn_pajak' value='<?php echo $_SESSION['thn_pjk']; ?>' readonly>

										</div>

									</div>







									<div class='form-group row'>

										<label class='col-sm-6 col-form-label font-13px' style='padding-left: 80px; color: rgb(4, 153, 195)'>Pembetulan Ke</label>

										<div class='col-sm-6' style='padding-right: 50px'>

											<input class='form-control' name='pembetulan_ke' id='pembetulan_ke' value='<?php echo $_SESSION['pembetulan_ke']; ?>' readonly>

										</div>

									</div>



									<div class='form-group row'>

										<label class='col-sm-6 col-form-label font-13px' style='padding-left: 80px; color: rgb(4, 153, 195)'>Status SPT</label>

										<div class='col-sm-6' style='padding-right: 50px'>

											<input class='form-control' name='status_spt' id='status_spt' value='<?php echo $_SESSION['status_spt']; ?>' readonly>

										</div>

									</div>





									<div class='form-group row'>

										<label class='col-sm-6 col-form-label font-13px' style='padding-left: 80px; color: rgb(4, 153, 195)'>Jumlah</label>

										<div class='col-sm-6' style='padding-right: 50px'>

											<input class='form-control' name='jml' id='jml' value='<?php echo $_SESSION['jml']; ?>' readonly>

										</div>

									</div>





									<div class='form-group row'>

										<label class='col-sm-6 col-form-label font-13px' style='padding-left: 80px; color: rgb(4, 153, 195)'>Catatan</label>

										<div class='col-sm-6' style='padding-right: 50px'>

											<input class='form-control' name='catatan' id='catatan' value='<?php echo $_SESSION['catatan'] ?>' readonly>

										</div>

									</div>

									<br>



									<div class='form-group row'>

										<label class='col-sm-6 col-form-label font-13px' style='padding-left: 80px; color: rgb(4, 153, 195)'>Ambil kode verifikasi</label>

										<div class='col-sm-6' style='padding-right: 45px; color: rgb(4, 153, 195)'>

											<button type='button' data-toggle='modal' data-target='#exampleModal2' style='border: none; background-color: orange; color: black;'>[di sini]</button> 

											Perhatikan server code yang anda diterima sesuai

										</div>

									</div>



									<div class='form-group row'>

										<label class='col-sm-6 col-form-label font-13px' style='padding-left: 80px; color: rgb(4, 153, 195)'>Masukkan kode verifikasi</label>

										<div class='col-sm-6' style='padding-right: 50px'>

											<input class='form-control' name='kode_verif_1771' id='' value="" required>

											<?php echo $pesan; ?>

										</div>



									</div>



									<br><br>



									<div align='center'>

										<a href="../berhasil_lapor_71.php?hasil=berhasil">

											<button type='submit' class='btn btn-secondary' name='import' style='background-color: rgb(4, 153, 195); border-radius: 25px; color: white;' data-dismiss='modal'><i class='fas fa-paper-plane'></i> Kirim SPT</button>

										</a>



									</div>

									<!-- end form -->



									<!-- button sebelum dan selanjutnya-->

									<hr>

									<div class="form-group row" style="padding-bottom: 	15px">

										<div class="col-sm-6">

											<!-- <a href="form_spt.php"> -->

												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;" onclick="javascript:window.history.back();"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button>

												<!-- </a> -->

											</div>

										</div>

										<!-- end button sebelum dan selanjutnya-->

									</form>





									<!-- Modal Verifikasi -->

									<form action="proses_kode_verif_71.php" method="post">

										<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 200px;">

											<div class="modal-dialog">

												<div class="modal-content">

													<div class="modal-header" style="padding: 20px">

														<button type="button" class="close" data-dismiss="modal" style="padding-right: 10px; padding-top: 5px; text-align: right" aria-label="Close">

															<span aria-hidden="true">&times;</span>

														</button>

													</div>



													<h5 class="modal-title" id="exampleModalLabel" style="padding-left: 10px; padding-top: 10px;"><b>Kirim Kode Verifikasi?</b></h5>

													<div class="modal-body">



														<div class="custom-control custom-radio">

															<div class="col-sm-6">

																<label class="custom-control-label" for="	ContohRadio1">email</label >

															</div>

															<input class="form-control" type="text" name="nama_email" placeholder="Masukkan Email Anda" style="width: auto;" >



														</div>



													</div>

													<div class="modal-footer">

														<button type="button" class="btn btn-secondary" style="border-radius: 25px;" data-dismiss="modal"> Batal </button>

														<button type="submit" class="btn btn-primary" style="border-radius: 25px;"> Ok </button>

													</div>

												</div>

											</div>

										</div>

									</form>

									<!-- end modal verifikasi-->



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

		<script type="text/javascript" src="script.js"></script>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

		<script type="text/javascript" >



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

