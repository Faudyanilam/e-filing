<?php
if($_SESSION['status'] == "login_badan"){

}else{
	echo "<script>
	setTimeout(function () { 
		swal.fire({
			title: 'Belum Login',
			text:  'E-Mail atau No Telepon telah digunakan',
			icon: 'error',
			timer: 1000,
			showConfirmButton: true
			});  
			},200); 

			window.setTimeout(function(){ 
				window.location.replace('login.php');
				} ,1500); 
				</script>";
				exit;
			}
			?>