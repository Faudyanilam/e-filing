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


  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>  
 </head>
 <body class="bg-body">
 	<?php include'../header.html'; ?>
 	<br />

 	<div class="container container-fluid box"> 
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
 								<b>SPT 1770 S</b>
 							</div>
 							<!-- end card header -->

 							<!-- card body -->
 							<div class="card-body card-body_2">  
 								<p class="p_text_2 card_7"></p>

 								<!-- progress bar -->
 								<div class="progress">
 									<div class="progress-bar progress-bar-striped" style="width:16.67%; background-color: rgb(255, 157, 49);"><small>16.67%</small></div>
 								</div>
 								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 3 dari 18</small></p><br>
 								<p><b>Masukkan Penghasilan Neto Dalam Negeri Sehubungan dengan Pekerjaan</b></p>
 								<!-- end progress bar -->


 								<!-- input text -->
 								<form action="proses_halaman3.php" method="post">
 									<div class="form-group row" style="padding-bottom: 	15px">
 										<div class="col-sm-7">
 											<p style="color: rgb(4, 153, 195)"><small>Penghasilan Neto Dalam Negeri Sehubungan dengan Pekerjaan</small></p>
 										</div>
 										<div class="col-sm-5" style="padding-left: 113px; ">
 											<input type="text" style=" border: 1px solid rgb(4, 153, 195); text-align: right;" class="form-control" name="neto_dn" id="neto_dn" value="0">
 										</div>
 									</div>

 									<!-- end input text -->

 									<!-- button sebelum dan selanjutnya-->
 									<hr>
 									<div class="form-group row" style="padding-bottom: 	15px">
 										<div class="col-sm-6">
 											<a href="halaman2-xxx.php">
 												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
 											</div>
 											<div class="col-sm-6" style="padding-left: 253px;">
 												<a href="halaman4.php">
 													<input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 25px"></a>
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

			<!-- <script type="text/javascript" src="script.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
			<script type="text/javascript" >

			</script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
			<script src="assets/demo/chart-area-demo.js"></script> -->

			<script src="jquery-1.12.4.min.js"></script>
			<script type="text/javascript"> 

				//format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik)
				var neto_dn =document.getElementById('neto_dn');


				neto_dn.addEventListener('keyup', function(e){
					neto_dn.value = formatNeto_dn(this.value, 'Rp.');
				});

				function formatNeto_dn(angka, prefix){
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
