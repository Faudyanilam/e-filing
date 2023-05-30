<?php 
session_start();


echo "<script>
var yakin = confirm('Anda yakin Ingin keluar?'); 
if(yakin){
window.location='../login_badan.php';
}else{
	history.go(-1); session_destroy();
}
</script>
";


?>