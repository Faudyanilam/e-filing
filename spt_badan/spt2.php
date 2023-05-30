
<!DOCTYPE html>

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>SPT 1771 | Politeknik Negeri Batam</title>

	<link href="../assets/img/logo.png" rel="icon">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->

	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>

	<link rel="stylesheet" type="text/css" href="../css/style.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">



	<link rel="stylesheet" href="jquery-ui.css">

	<link rel="stylesheet" href="bootstrap.min.css" />

	<script src="../1770S/bootstrap/js/jquery.js"></script>

	<script src="../1770S/bootstrap/js/bootstrap.min.js"></script>  

	<style type="text/css">

		.fileUpload{

			position: absolute;

			overflow: hidden;

			margin: 0;

		}

		.fileUpload input.upload{

			position: absolute;

			top: 0;

			right: 0

			margin:0;

			padding: 0;

			font-size: 20px;

			cursor: pointer;

			opacity: 0;

			filter: alpha(opacity=0);

		}

	</style>

</head>

<body class="bg-body">

	<?php include 'header.html' ?>
	<?php 
	include '../koneksi.php';
	
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

		
			$npwp = $_SESSION['npwp'];
			
			// CEK APAKAH NPWP ADA DI tb_spt_1771
			$data = mysqli_query($koneksi,"select * from tb_spt_1771 where npwp='$npwp'");
			$cek = mysqli_num_rows($data);
			// JIKA BELUM MASUKKAN
			if($cek == 0){
				mysqli_query($koneksi,"insert into tb_spt_1771(npwp) values('$npwp')");
				echo "<meta http-equiv='refresh' content='0;url=arsip_spt.php?hasil=gagal'>";
			}

			$direktori = "csv_pdf/";
			    $file_spt_1771 = $_SESSION['file_spt_1771'];
				$lampiran_1771 = $_SESSION['lampiran_1771'];
				move_uploaded_file($_FILES['lampiran_1771']['tmp_name'],$direktori.$lampiran_1771);
				move_uploaded_file($_FILES['file']['tmp_name'],$direktori.$file_spt_1771);

				mysqli_query($koneksi, "insert into tb_upload_file_1771 (id_spt_1771, file_spt_1771, lampiran_keuangan) VALUES ('$npwp'  ,'$file_spt_1771','$lampiran_1771')");
				mysqli_query($koneksi, "insert into tb_hasil_lapor_1771 (id_spt_1771, jns_formulir) VALUES ('$npwp'  ,'SPT 1771 Tahunan')");
				
				echo "<meta http-equiv='refresh' content='0;url=arsip_spt.php?hasil=berhasil'>";


		}
	}
}
	?>

	<br/>

	<div class="container box">

		<br>

		<form enctype="multipart/form-data" action="" method="post">

			<div class="tab-content">

				<div class="tab-pane active" id="lapor_detail" >

					<div class="panel panel-default">

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

													<a href="form_spt.php" class="font-dark-blue">Buat SPT</a>

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

							<div class="card bg-light mb-3" style="width:735px; background-color: white;">

								<div class="card-header card-header_1">

									<i class="fas fa-file mr-1"></i>

									<strong>Upload SPT Masa/Tahunan</strong>

								</div>

								<!-- Membuat Upload SPT -->

								<div class="card-body card-body_2">  

									<p class="p_text_2 card_7"><h4><b> Upload SPT </b></h4></p>



									<!-- progress bar -->

									<div class="progress">

										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%; background-color: rgb(255, 157, 49)"><small>100%</small></div>

									</div>



									<p style="padding-left: 0px; padding-top: 0px; padding-bottom: 10px; color: rgb(4, 153, 195)">Halaman ke 2 dari 2 </p>

									<h5><strong>Verifikasi email</strong></h5>

								</div>
								<div class='form-group row' style="padding-left: 20%; padding-right: 15%; padding-top: 5px">
									<label class='col-sm-4 col-form-label' style='padding-top: 6px'>Ambil kode verifikasi</label>
										<div class='col-sm-6' style=' color: rgb(4, 153, 195)'>
											<button type='button' data-toggle='modal' data-target='#exampleModal2' style='border: none; background-color: orange; color: black;'>[di sini]</button> 
											Perhatikan server code yang anda diterima sesuai
										</div>

								</div>

								<div class="form-group row" style="padding-left: 20%; padding-right: 15%; padding-top: 5px">

									<label class="col-sm-4 col-form-label" style="padding-top: 6px">Masukkan kode</label>

									<div class="col-sm-5">

										
										<input oninput="showname()" class='form-control' name='kode_verif_1771' id="kode_verif">
										<?php echo $pesan; ?>

									</div>

								</div>




									<div style="padding-left: 620px;padding-top: 40px;padding-bottom: 10px">

										<!-- <a href="spt_1.php"> -->

											<button disabled class="bg-primary" type="submit" id="ups" data-toggle="modal" data-target="#exampleModal3" name="ups" style="background-color: gray; border-radius: 25px; color: white; border:none; height: 30px; width: 100px;"><small>Kirim SPT</small> <i class="fas fa-paper-plane"></i></button>

											<!-- </a> -->

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</form>

		</div>

		<?php include'../footer.html'; ?>

		<script type="text/javascript">

		// var p_kontainer=document.getElementById("fileUpload");

		function csvupload() {

			if (document.getElementById('upload').id) {

				// p_kontainer.innerHTML="<strong style='color: red;'></strong>";

				document.getElementById('idupload').style.display = 'block';



			// $('#upload').hide(500);

		}

		else document.getElementById('idupload').style.display = 'none';

	}

	// if ($('#ya').onclick){

	// 	window.location.href="spt_1.php";

	// }





	// if (document.getElementById('idupload').style.display = 'block'){

		// 	window.location.href = "1770/spt_1.php";

		// }


		// START periksa nama file
		// PERUBAHAN HANYA MENAMBAHKAN multiple onchange="showname()" di input csv dan pdf dan body onload="showname()"
	function showname () {
		$kode_verif = document.getElementById('kode_verif').value;
		if($kode_verif == ""){
			document.getElementById('ups').style.backgroundColor = "gray";
			document.getElementById('ups').disabled = true;
		}else{
			
			document.getElementById('ups').style.backgroundColor = "rgb(4, 153, 195)";
			document.getElementById('ups').disabled = false;
		}
    }
// END periksa nama file


		
	</script>
<form action="proses_kode_verif_71.php" method="post">
										<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 200px;">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header" style="padding: 20px">
														<button type="button" class="close" data-dismiss="modal" style="padding-right: 10px; padding-top: 5px; text-align: right" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>

													<h5 class="modal-title" id="exampleModalLabel" style="padding-left: 10px; padding-top: 10px;"><b>Kode Verifikasi Dikirim Ke?</b></h5>
													<div class="modal-body">

														<div class="custom-control custom-radio">
															<div class="col-sm-6">
																<label class="custom-control-label" for="ContohRadio1">email</label >
															</div>
															<input class="form-control" type="text" name="nama_email" placeholder="Masukkan Email Anda" value="<?php echo $_SESSION['email']; ?>" style="width: auto;" required>

														</div>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" style="border-radius: 25px;" data-dismiss="modal"> Batal </button>
														<button type="submit" class="btn btn-primary" style="border-radius: 25px;" id="ok"> Ok </button>
													<!-- 	<script type="text/javascript">
															// var ok = document.getElementById('ok').id;
															var kode_verif = document.getElementById('kode_verif');
															var kode_verif2 = document.getElementById('kode_verif2');

															document.getElementById("ok").onclick = function() {myFunction()};

															function myFunction(){
																kode_verif.disabled = false;
																kode_verif2.display = "block";
															}
														</script> -->
													</div>
												</div>
											</div>
										</div>
									</form>
</body>

</html>
<!-- PERUBAHAN SHD id dan name di button upload2 jadi ups -->

									<!-- UPLOAD FILE -->
									<?php
										
										// if(isset($_POST['ups'])){
											
											
											
										// }
										
									?>
