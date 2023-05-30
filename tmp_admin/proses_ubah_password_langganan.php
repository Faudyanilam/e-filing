
<?php 
include '../koneksi.php';
$id = $_GET['id'];


$data = mysqli_query($koneksi, "update tb_daftarnpwp set password='taxcenter' where id_paket='$id'");


if ($data == 1){
    

    header("location:akun_langganan.php?hasil=berhasil_ubah_password");
}else{
    header("location:akun_langganan.php?hasil=gagal_ubah_password");
}


// if(isset($_POST['submit'])){
// 	$id_daftar_npwp = $_POST['id_daftar_npwp'];
// 	$efin = $_POST['efin'];
// 	$id_paket = $_POST['id_paket'];

// 	mysqli_query($koneksi, "INSERT INTO tb_daftarnpwp(id_daftar_npwp,efin, id_paket) VALUES('$id_daftar_npwp','$efin','$id_paket')");

// 	echo "<meta http-equiv='refresh' content='0;url=data_e-regis.php?hasil=data_ditambah'>";
// }
?>