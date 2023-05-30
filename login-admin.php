<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin | Politeknik Negeri Batam</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="tmp_admin1/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tmp_admin1/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tmp_admin1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tmp_admin1/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tmp_admin1/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="tmp_admin1/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tmp_admin1/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tmp_admin1/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="tmp_admin1/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tmp_admin1/css/util.css">
	<link rel="stylesheet" type="text/css" href="tmp_admin1/css/main.css">
	<link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
	<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
	<!--===============================================================================================-->
</head>
<body>
	<?php
	include "koneksi.php";

	if (isset($_GET['hasil'])) {
		if ($_GET['hasil'] == "logout"){
			echo "<script>
			Swal.fire(
			'Logout',
			'Anda Berhasil Logout',
			'success'
		) </script>";
	} else if($_GET['hasil'] == "gagal"){
		echo "<script>
		Swal.fire(
		' Login Gagal',
		'Username atau Password Salah',
		'error'
	) </script>";
} 
}
?>
<div class="limiter">
	<div class="container-login100" style="background-image: url('img/poltek4.jpeg');">
		<div class="col-lg-12" style="margin-bottom: 3%">
			<a href="index2.html">
			<button class="btn btn-danger btn-lg" active ><i class="fa fa-arrow-circle-left fa-lg"></i> Index</button>
			</a>
		</div>
		<div class="wrap-login100 p-t-30 p-b-50">
			
			<span class="login100-form-title p-b-41">
				Login Admin
			</span>
			<form class="login100-form validate-form p-b-33 p-t-5" action="proses-login-admin.php" method="post">

				<div class="wrap-input100 validate-input" data-validate = "Enter username">
					<input class="input100" type="text" name="username" placeholder="User name">
					<span class="focus-input100" data-placeholder="&#xe82a;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100" data-placeholder="&#xe80f;"></span>
				</div>

				<div class="container-login100-form-btn m-t-32">
					<button class="login100-form-btn" type="submit" name="submit">
						Login
					</button>
				</div>

			</form>
		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="tmp_admin1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="tmp_admin1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="tmp_admin1/vendor/bootstrap/js/popper.js"></script>
<script src="tmp_admin1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="tmp_admin1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="tmp_admin1/vendor/daterangepicker/moment.min.js"></script>
<script src="tmp_admin1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="tmp_admin1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="tmp_admin1/js/main.js"></script>

</body>
</html>