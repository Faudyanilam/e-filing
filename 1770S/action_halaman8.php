<?php

//action.php

include("../database_connection.php");

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO harta_baru_s (kode_harta, nama_harta, tahun_perolehan, harga_perolehan, keterangan) VALUES ('".$_POST["kode_harta"]."', '".$_POST["nama_harta"]."', '".$_POST["tahun_perolehan"]."', '".$_POST["harga_perolehan"]."', '".$_POST["keterangan"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM harta_baru_s WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['kode_harta'] = $row['kode_harta'];
			$output['nama_harta'] = $row['nama_harta'];
			$output['tahun_perolehan'] = $row['tahun_perolehan'];
			$output['harga_perolehan'] = $row['harga_perolehan'];
			$output['keterangan'] = $row['keterangan'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE harta_baru_s 
		SET kode_harta = '".$_POST["kode_harta"]."', 
		nama_harta = '".$_POST["nama_harta"]."',
		tahun_perolehan = '".$_POST["tahun_perolehan"]."',
		harga_perolehan = '".$_POST["harga_perolehan"]."',
		keterangan = '".$_POST["keterangan"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM harta_baru_s WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}


if(isset($_POST['simpan_verif'])){
	$kode_harta = $_POST['kode_harta'];
	$nama_harta = $_POST['nama_harta'];
	$tahun = $_POST['tahun_perolehan'];
	$harga = $_POST['harga_perolehan'];
	$keterangan = $_POST['keterangan'];	

	echo "$kode_harta	$nama_harta	$tahun	 $harga	 $keterangan	";
}
?>