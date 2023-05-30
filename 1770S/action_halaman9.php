<?php

//action.php

include("../database_connection.php");

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO utang_baru_s (kode_utang, nama_pemberi_pinjaman, alamat_pemberi_pinjaman, tahun_peminjaman, jumlah) VALUES ('".$_POST["kode_utang"]."', '".$_POST["nama_pemberi_pinjaman"]."', '".$_POST["alamat_pemberi_pinjaman"]."', '".$_POST["tahun_peminjaman"]."', '".$_POST["jumlah"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM utang_baru_s WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['kode_utang'] = $row['kode_utang'];
			$output['nama_pemberi_pinjaman'] = $row['nama_pemberi_pinjaman'];
			$output['alamat_pemberi_pinjaman'] = $row['alamat_pemberi_pinjaman'];
			$output['tahun_peminjaman'] = $row['tahun_peminjaman'];
			$output['jumlah'] = $row['jumlah'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE utang_baru_s 
		SET kode_utang = '".$_POST["kode_utang"]."', 
		nama_pemberi_pinjaman = '".$_POST["nama_pemberi_pinjaman"]."',
		alamat_pemberi_pinjaman = '".$_POST["alamat_pemberi_pinjaman"]."',
		tahun_peminjaman = '".$_POST["tahun_peminjaman"]."',
		jumlah = '".$_POST["jumlah"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM utang_baru_s WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>