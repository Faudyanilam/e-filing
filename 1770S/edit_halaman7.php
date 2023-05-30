<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php

include 'config.php'; 
$id_siswa = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM tb_data_siswa WHERE id_siswa = '$id_siswa' ");
$data = mysqli_fetch_assoc($sql);

$nama_siswa = $data['nama_siswa'];
$alamat_siswa = $data['alamat_siswa'];
$no_telp = $data['no_telp'];

?>

  <div class="container">
  	<h1>Update Data Siswa</h1>
    <p>Lakukan perubahan data</p>
    <hr>
	<form action="proses_update.php" method="POST">
    <input type="hidden" id="id_siswa" name="id_siswa" value="<?php echo $id_siswa; ?>">
	<div class="form-group">
	<label for="email">Nama :</label>
	<input type="text" class="form-control" name="nama" value="<?php echo $nama_siswa; ?>">
	<label for="alamat">Alamat :</label>
	<input type="text" class="form-control" name="alamat" value="<?php echo $alamat_siswa;?>">
	<label for="no_hp">No Handphone:</label>
	<input type="text" class="form-control" name="no_hp" value="<?php echo $no_telp; ?>">
    </div>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>  

</body>
</html>
