<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" href="../fontawesome.min.css"> -->
	<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>



	<?php

//fetch_halaman10.php

	include("../database_connection.php");

	$query = "SELECT * FROM data_keluarga_s";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '
	<div class="table-responsive table_1">
	<table class="table table-striped">
	<thead class="thead-dark table_3" style="color: white;">
	<tr style="border-radius: 25px;">
	<th height="60px" style="padding-bottom: 18px;">NAMA</th>
	<th style="padding-bottom: 18px;">NIK</th>
	<th style="padding-bottom: 18px;">HUBUNGAN KELUARGA</th>
	<th style="padding-bottom: 18px;">PEKERJAAN</th>
	<th style="padding-bottom: 18px;">AKSI</th>
	</tr>
	</thead>
	';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<tr>
			<td width="25%">'.$row["nama"].'</td>
			<td width="20%">'.$row["NIK"].'</td>
			<td width="20%">'.$row["hubungan_keluarga"].'</td>
			<td width="21%">'.$row["pekerjaan"].'</td>
			<td width="14%">
			<div align="center">
			<button type="button" name="edit" style="width:24px; height:27px;" class="btn btn-primary btn-xs edit" id="'.$row["id"].'"><i class="fas fa-edit" style="color: white"></i></button>
			<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Del</button>
			</div>
			</td>
			</tr>
			';
		}
	}
	else
	{
		$output .= '
		<tr>
		<td colspan="6" align="center">Data not found</td>
		</tr>
		';
	}
	$output .= '</table>';
	echo $output;
	?>
</div>
</body>
</html>