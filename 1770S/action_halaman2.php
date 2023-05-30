<?php

//action.php

include("../database_connection.php");

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO bukti_potong_baru_s (jenis_pajak, npwp_pemotong_pajak, nomor_bukti_pemotongan, tanggal_bukti_pemotongan, jumlah_pph_dipotong) VALUES ('".$_POST["jenis_pajak"]."', '".$_POST["npwp_pemotong_pajak"]."', '".$_POST["nomor_bukti_pemotongan"]."', '".$_POST["tanggal_bukti_pemotongan"]."', '".$_POST["jumlah_pph_dipotong"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM bukti_potong_baru_s WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['jenis_pajak'] = $row['jenis_pajak'];
			$output['npwp_pemotong_pajak'] = $row['npwp_pemotong_pajak'];
			$output['nomor_bukti_pemotongan'] = $row['nomor_bukti_pemotongan'];
			$output['tanggal_bukti_pemotongan'] = $row['tanggal_bukti_pemotongan'];
			$output['jumlah_pph_dipotong'] = $row['jumlah_pph_dipotong'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE bukti_potong_baru_s 
		SET jenis_pajak = '".$_POST["jenis_pajak"]."', 
		npwp_pemotong_pajak = '".$_POST["npwp_pemotong_pajak"]."',
		nomor_bukti_pemotongan = '".$_POST["nomor_bukti_pemotongan"]."',
		tanggal_bukti_pemotongan = '".$_POST["tanggal_bukti_pemotongan"]."',
		jumlah_pph_dipotong = '".$_POST["jumlah_pph_dipotong"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM bukti_potong_baru_s WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>