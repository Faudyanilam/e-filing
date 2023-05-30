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

//fetch_halaman9.php

	include("../database_connection.php");

	$query = "SELECT * FROM bukti_potong_baru_s";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '
	<div class="table-responsive table_1">
	<table class="table table-striped">
	<thead class="thead-dark table_3" style="color: white;">
	<tr style="border-radius: 25px;">
	<th height="60px" style="padding-bottom: 18px;">NAMA PEMOTONG/PEMUNGUT PAJAK</th>
	<th style="padding-bottom: 18px;">NPWP PEMOTONG/PEMUNGUT PAJAK</th>
	<th style="padding-bottom: 18px;">NOMOR BUKTI PEMOTONGAN/PEMUNGUTAN</th>
	<th style="padding-bottom: 18px;">TANGGAL BUKTI PEMOTONGAN/PEMUNGUTAN</th>
	<th style="padding-bottom: 18px;">JENIS PAJAK</th>
	<th style="padding-bottom: 18px;">JUMLAH PPH DIPOTONG</th>
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
			<td width="15%">'.$row["nama_pemotong_pajak"].'</td>
			<td width="16%">'.$row["npwp_pemotong_pajak"].'</td>
			<td width="10%">'.$row["nomor_bukti_pemotongan"].'</td>
			<td width="10%">'.$row["tanggal_bukti_pemotongan"].'</td>
			<td width="15%">'.$row["jenis_pajak"].'</td>
			<td width="20%">'.$row["jumlah_pph_dipotong"].'</td>
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
		<td colspan="7" align="center">Data not found</td>
		</tr>
		';
	}
	$output .= '</table>';
	echo $output;
	?>
	<div class="form-group row">
		<label class="col-sm-8 col-form-label" style="padding-left: 300px; padding-top: 5px">JAC</label>
		<div class="col-sm-4">
			<input class="form-control" value="<?php echo $row["jumlah_pph_dipotong"] ?>" >
		</div>
	</div>
</div>
</body>
</html>