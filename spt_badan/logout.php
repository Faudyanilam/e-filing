<?php 
// session_start();


// echo "<script>
// var yakin = confirm('Anda yakin Ingin keluar?'); 
// if(yakin){
// window.location='../login_badan.php';
// }else{
// 	history.go(-1); session_destroy();
// }
// </script>
// ";


// mengaktifkan session
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location:../login_badan.php?hasil1=logout");


?>