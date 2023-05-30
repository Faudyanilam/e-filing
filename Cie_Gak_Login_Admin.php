<?php
if($_SESSION['status'] == "login_admin"){

}else{
	echo "<script>
	setTimeout(function () { 
		swal.fire({
			title: 'Belum Login',
			text:  'Silahkan Login Terlebih Dahulu',
			icon: 'error',
			timer: 1000,
			showConfirmButton: true
			});  
			},200); 

			window.setTimeout(function(){ 
				window.location.replace('../login-admin.php');
				} ,1500); 
				</script>";
				exit;
			}
			?>