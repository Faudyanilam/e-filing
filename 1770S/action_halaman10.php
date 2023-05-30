   <?php

//action.php

include("../database_connection.php");

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO data_keluarga_s (nama, NIK, hubungan_keluarga, pekerjaan) VALUES ('".$_POST["nama"]."', '".$_POST["NIK"]."', '".$_POST["hubungan_keluarga"]."', '".$_POST["pekerjaan"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM data_keluarga_s WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['nama'] = $row['nama'];
			$output['NIK'] = $row['NIK'];
			$output['hubungan_keluarga'] = $row['hubungan_keluarga'];
			$output['pekerjaan'] = $row['pekerjaan'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE data_keluarga_s 
		SET nama = '".$_POST["nama"]."', 
		NIK = '".$_POST["NIK"]."',
		hubungan_keluarga = '".$_POST["hubungan_keluarga"]."',
		pekerjaan = '".$_POST["pekerjaan"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM data_keluarga_s WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>