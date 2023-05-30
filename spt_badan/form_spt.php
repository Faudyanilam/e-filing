
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

	<br/>

	<div class="container box">

		<br>

		<form enctype="multipart/form-data" action="spt1.php" method="post">

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

										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%; background-color: rgb(255, 157, 49)"><small>50%</small></div>

									</div>



									<p style="padding-left: 0px; padding-top: 0px; padding-bottom: 10px; color: rgb(4, 153, 195)">Halaman ke 1 dari 2 </p>

									<h5><strong>Silahkan membaca bagian Petunjuk terlebih dahulu</strong></h5>

								</div>

								<div class="form-group row" style="padding-left: 20%; padding-right: 15%; padding-top: 5px">

									<label class="col-sm-3 col-form-label" style="padding-top: 6px">NPWP</label>

									<div class="col-sm-5">

										<input class="form-control" name="npwp" id="npwp" style="height:28px; width: 250px" value="<?php echo $_SESSION['npwp']; ?>" disabled>

									</div>

								</div>

								<div class="form-group row" style="padding-left: 20%; padding-right: 15%">

									<label class="col-sm-3 col-form-label">File SPT <font color="red">*</font></label>

									<div class="col-sm-9" >						

										<div class="fileUpload" id="upload" onclick="javascript:csvupload();">

											<input  multiple onchange="showname()" type="file" class="form-control-file" id="file" name="file" accept=".csv" style="width: 400px;font-size: 80%; color: grey; font-weight: bold; ">

										</div>

										<div style="padding-left: 65%">

											<font color="blue" size="1">Pastikan eksternal file .csv</font>

										</div>

									</div>

								</div>



								<!-- Membuat Lampiran -->

								<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

									<div class="form-check">

										<span id="idupload" style="display:none" >

											<!-- LAmpiran 1 Wajib-->

											<div class="form-group row" style="padding-left: 20%; padding-right: 15%;">

												<label class="col-sm-3 col-form-label" style="padding-top: 6px">Lampiran 1 <font color="red">*</font></label>

												<div class="col-sm-9">						

													<div class="fileUpload" id="upload" onclick="javascript:csvupload();">

														<input  multiple onchange="showname()" type="file" class="form-control-file" id="lampiran_1771" name="lampiran_1771" accept=".pdf" style="width: 400px;font-size: 80%; color: grey; font-weight: bold">

													</div>

													<div style="padding-left: 65%">

														<font color="blue" size="1"></font>

													</div>

												</div>

											</div>

										</span>

									</div>

									<!-- <button type="submit" name="preview" class="btn btn-success btn-sm">

										<span class="glyphicon glyphicon-eye-open"></span> Preview

									</button> -->









									<!-- End Lampiran -->



									<div style="padding-left: 620px;padding-top: 40px;padding-bottom: 10px">

										<!-- <a href="spt_1.php"> -->

											<button disabled type="submit" id="ups" data-toggle="modal" data-target="#exampleModal3" name="ups" style="background-color: gray; border-radius: 25px; color: white; border:none; height: 30px; width: 100px;"><small>Selanjutnya</small> <i class="fas fa-chevron-right"></i></button>

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
		document.getElementById('ups').disabled = true;
		document.getElementById('ups').style.backgroundColor = "gray";
		var csv = "1";
		var name1 = document.getElementById('file'); 
		csv = name1.files.item(0).name;
		csv = csv.substring(0, csv.length - 4);

		var pdf ="2";
		var name2 = document.getElementById('lampiran_1771'); 
		pdf = name2.files.item(0).name;
		pdf = pdf.substring(0, pdf.length - 4);
		

		if(csv != pdf){
			alert("Nama file csv dan pdf harus sama");
			document.getElementById('ups').style.backgroundColor = "gray";
		}else{
			document.getElementById('ups').style.backgroundColor = "rgb(4, 153, 195)";
			document.getElementById('ups').disabled = false;
		}
    }
// END periksa nama file


		
	</script>

</body>

</html>
<!-- PERUBAHAN SHD id dan name di button upload2 jadi ups -->

									<!-- UPLOAD FILE -->
									<?php
										
										// if(isset($_POST['ups'])){
										// 	include '../koneksi.php';
										// 	$npwp = $_SESSION['npwp'];
											

										// 	// CEK APAKAH NPWP ADA DI tb_spt_1771
										// 	$data = mysqli_query($koneksi,"select * from tb_spt_1771 where npwp='$npwp'");
										// 	$cek = mysqli_num_rows($data);
										// 	// JIKA BELUM MASUKKAN
										// 	if($cek == 0){
										// 		mysqli_query($koneksi,"insert into tb_spt_1771(npwp) values('$npwp')");
										// 		echo "<meta http-equiv='refresh' content='0;url=arsip_spt.php?hasil=gagal'>";
										// 	}

										// 	$direktori = "csv_pdf/";
										// 		$file_spt_1771 = $_FILES['file']['name'];
										// 		$lampiran_1771 = $_FILES['lampiran_1771']['name'];
										// 		move_uploaded_file($_FILES['lampiran_1771']['tmp_name'],$direktori.$lampiran_1771);
										// 		move_uploaded_file($_FILES['file']['tmp_name'],$direktori.$file_spt_1771);
	
												
												
	
	
										// 		mysqli_query($koneksi, "insert into tb_upload_file_1771 (id_spt_1771, file_spt_1771, lampiran_keuangan) VALUES ('$npwp'  ,'$file_spt_1771','$lampiran_1771')");
										// 		mysqli_query($koneksi, "insert into tb_hasil_lapor_1771 (id_spt_1771, jns_formulir) VALUES ('$npwp'  ,'SPT 1771 Tahunan')");
												
										// 		echo "<meta http-equiv='refresh' content='0;url=arsip_spt.php?hasil=berhasil'>";
											
											
										// }
										
									?>
