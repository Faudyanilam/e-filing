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

//fetch_halaman8.php

	include("../database_connection.php");

	$query = "SELECT * FROM harta_baru_s";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '
	<div class="table-responsive table_1">
	<table class="table table-striped">
	<thead class="thead-dark table_3" style="color: white;">
	<tr style="border-radius: 25px;">
	<th height="60px" style="padding-bottom: 18px;">KODE HARTA</th>
	<th style="padding-bottom: 18px;">NAMA HARTA</th>
	<th style="padding-bottom: 18px;">TAHUN PEROLEHAN</th>
	<th style="padding-bottom: 18px;">HARGA PEROLEHAN</th>
	<th style="padding-bottom: 18px;">KETERANGAN</th>
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
			<td width="20%">'.$row["kode_harta"].'</td>
			<td width="20%">'.$row["nama_harta"].'</td>
			<td width="10%">'.$row["tahun_perolehan"].'</td>
			<td width="16%">'.$row["harga_perolehan"].'</td>
			<td width="20%">'.$row["keterangan"].'</td>
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
	<div class="form-group row">
		<label class="col-sm-8 col-form-label" style="padding-left: 300px; padding-top: 5px">Sub Total</label>
		<div class="col-sm-4">
			<input class="form-control" value="<?php echo $row["harga_perolehan"] ?>" >
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-8 col-form-label" style="padding-left: 300px; padding-top: 5px">Jumlah Bagian B (JBB)</label>
		<div class="col-sm-4">
			<input class="form-control" value="<?php echo $row["harga_perolehan"] ?>">
		</div>
	</div>
</div>
</body>
</html>