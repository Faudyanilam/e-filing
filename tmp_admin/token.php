 <?php 
include '../koneksi.php';
if (isset($_POST['submit'])) {
	# code...
	$npwp = $_POST['token'];
	$efin = $_POST['token2'];

	$data = mysqli_query($koneksi, "INSERT INTO testing VALUES ('$npwp','$efin')");

	if($data == 1){
		echo "<script>alert('Data Berhasil Ditambahkan!');window.location='testing.php'</script>";
	}else{
		echo "<script>alert('Data Gagal Ditambahkan!');window.location='testing.php'</script>";

	}
}
 ?>

