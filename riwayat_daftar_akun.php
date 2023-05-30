<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Riwayat Pendaftaran Akun</title>
	<link href="assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->

	<link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/>

	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
	<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  

	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="1770S/bootstrap/js/jquery.js"></script>
	<script src="1770S/bootstrap/js/bootstrap.min.js"></script> 
</head>
</head>
<body class="bg-body">

	<?php include'header2.html'; ?>
	<?php 
	include'koneksi.php'; 
	if (isset($_GET['hasil'])) {
		if($_GET['hasil'] == "berhasil"){
			echo "<script>
			Swal.fire(
			' Silahkan Lihat Hasil Daftar Akun ',
			'Data Telah Diisi',
			'error'
		) </script>";
	} 
}
?>

<br />
<div class="container box">
	<br />
	<form >

		<!-- tab content -->
		<div class="tab-content">
			<!-- tab pane -->
			<div class="tab-pane active" id="lapor_detail" >
				<!-- panel -->
				<div class="panel panel-default">
					<!-- panel body -->
					<div class="panel-body">

						<br/>

						<!-- Card bg-->
						<div class="card bg-light mb-3" style="width:735px; background-color: white;">
							<!-- card header -->
							<div class="card-header card-header_1">
								<i class="fas fa-file mr-1"></i>
								<b>Hasil Jawaban Pendaftaran Akun</b>
								
							</div>
							<!-- end card header -->


							<!-- card body -->
							<div class="card-body card-body_2">  
								<br/>

								<!-- Halaman 1 -->
								<!-- <p style="font-size: 16px"><mark class="mark1"><strong>Halaman 1</strong></mark></p> -->

								<div class="row">

									<div class="col-sm-6">
										<p><strong>NPWP</strong></p>
									</div>

									<div class="col-sm-3">
										<?php if (isset($_SESSION['npwp'])) {
											$tmptahun_pajak = $_SESSION['tmptahun_pajak'];
										}

										echo "<tr>";
										echo "<td>".end($tmptahun_pajak)."</td></tr>";
										$tahun_pajak = end($tmptahun_pajak);
										?>
									</div>

									<div class="col-sm-3">
										<?php
										if (isset($_SESSION['npwp'])) {
											$npwp = $_SESSION['npwp'];
										}
											// mengambil data dari database
										$data = mysqli_query($koneksi,"select id_regis from tb_registrasi_akun where npwp = '$npwp'");

										$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


										// $data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
										// $cek = mysqli_fetch_assoc($data);



											// mengubah nama harta didatabase
										$npwp = $cek['npwp'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database
										if($npwp == $npwp){

											echo "<strong><p style='color:blue'>".$npwp."</p></strong>";

										}else{

											echo "<strong><p style='color:red'>".$npwp."</p></strong>";

										}
										?>
									</div>
								</div>

								<div class="row">

									<div class="col-sm-6">
										<p><strong>EFIN</strong></p>
									</div>

									<div class="col-sm-3">
										<?php if (isset($_SESSION['tmpstatus_spt'])) {
											$tmpstatus_spt = $_SESSION['tmpstatus_spt'];
										}

										echo "<tr>";
										echo "<td>".end($tmpstatus_spt)."</td></tr>";
										$status_spt = end($tmpstatus_spt);
											// mengubah huruf uppercase menjadi lowercase, hal ini agar tetap benar karena hanya beda kapital tetapi jawaban sebenarnya sama
											// $kecil_status_spt = strtolower($status_spt);
											// echo $kecil_keterangan;
										?>
									</div>

									<div class="col-sm-3">
										<?php
										if (isset($_SESSION['npwp'])) {
											$npwp = $_SESSION['npwp'];
										}
											// mengambil data dari database
										$data = mysqli_query($koneksi,"select id_spt_1770s from tb_spt_1770s where npwp = '$npwp'");

										$cek = mysqli_fetch_assoc($data) ['id_spt_1770s'];


										$data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id_spt_1770s = '$cek'");
										$cek = mysqli_fetch_assoc($data);



											// mengubah nama harta didatabase
										$tahunpajak = $cek['tahun_pajak'];
											// mengubah nama harta didatabase
										$statusspt = $cek['status_spt'];
											// var_dump($nama_harta);
											// $nama_harta = $data['nama_harta'];

												// session nama harta = harta di database, strcasecmp agar tidak casesensitif huruf besar dan kecil
										if(strcasecmp($statusspt, $status_spt) == 0){

											echo "<strong><p style='color:blue'>".$statusspt."</p></strong>";

										}else{

											echo "<strong><p style='color:red'>".$statusspt."</p></strong>";

										}
										?>
									</div>
								</div>
								
							</div>
							<!-- end card body -->
						</div>
						<!-- end card bg -->


					</div>
					<!-- end panel body -->
				</div> 
				<!-- end panel panel -->
			</div>
			<!-- end tab pane -->
		</div>
		<!-- end tab content -->
	</form>
	<!-- end form -->
</div>
<!-- end container box -->
<script src="script.js"></script>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<br/>
<br/>
<br/>
<br/>
<?php include'footer 1.html'; ?>
</body>
</html>

