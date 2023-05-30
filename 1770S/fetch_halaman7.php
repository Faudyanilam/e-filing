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

//fetch_halaman7.php

	include("../database_connection.php");

	$query = "SELECT * FROM kena_pph_final";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '
	<div class="table-responsive table_1">
	<table class="table table-striped">
	<thead class="thead-dark table_3" style="color: white;">
	<tr style="border-radius: 25px;">
	<th height="60px" style="padding-bottom: 18px;">Sumber Penghasilan</th>
	<th style="padding-bottom: 18px;">DPP</th>
	<th style="padding-bottom: 18px;">PPH final</th>
	<th style="padding-bottom: 18px;">Aksi</th>
	</tr>
	</thead>
	';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<tr>
			<td width="36%">'.$row["sumber_penghasilan"].'</td>
			<td width="25%">'.$row["DPP"].'</td>
			<td width="25%">'.$row["PPh_terutang"].'</td>
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
		<td colspan="4" align="center">Data not found</td>
		</tr>
		';
	}
	$output .= '</table>';
	echo $output;
	?>
	<div class="form-group row">
		<label class="col-sm-7 col-form-label" style="padding-left: 380px; padding-top: 5px">Jumlah</label>
		<div class="col-sm-5">
			<input class="form-control" value="<?php echo $row["PPh_terutang"] ?>">
		</div>
	</div>
</div>
</body>
</html>