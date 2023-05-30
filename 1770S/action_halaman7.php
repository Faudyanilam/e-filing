<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

//action.php

	include("../database_connection.php");

	if(isset($_POST["action"]))
	{
		if($_POST["action"] == "insert")
		{
			$query = "
			INSERT INTO kena_pph_final (sumber_penghasilan, DPP, PPh_terutang) VALUES ('".$_POST["sumber_penghasilan"]."', '".$_POST["DPP"]."', '".$_POST["PPh_terutang"]."')
			";
			$statement = $connect->prepare($query);
			$statement->execute();
			echo "<link rel='stylesheet'>
			<script src='../css/sweetalert.min.js'></script>
			<script type='text/javascript'>
			setTimeout(function () { 
				swal({
					title: 'Sukses',
					text:  'Data anda telah ditambah',
					icon: 'success',
					timer: 4000,
					showConfirmButton: true
					});  
					},10); 
					window.setTimeout(function(){ 
						window.location.replace('halaman7.php');
						load: false;
						} ,3000);  
						</script>";
					}
					if($_POST["action"] == "fetch_single")
					{
						$query = "
						SELECT * FROM kena_pph_final WHERE id = '".$_POST["id"]."'
						";
						$statement = $connect->prepare($query);
						$statement->execute();
						$result = $statement->fetchAll();
						foreach($result as $row)
						{
							$output['sumber_penghasilan'] = $row['sumber_penghasilan'];
							$output['DPP'] = $row['DPP'];
							$output['PPh_terutang'] = $row['PPh_terutang'];
						}
						echo json_encode($output);
					}
					if($_POST["action"] == "update")
					{
						$query = "
						UPDATE kena_pph_final 
						SET sumber_penghasilan = '".$_POST["sumber_penghasilan"]."', 
						DPP = '".$_POST["DPP"]."',
						PPh_terutang = '".$_POST["PPh_terutang"]."'
						WHERE id = '".$_POST["hidden_id"]."'
						";
						$statement = $connect->prepare($query);
						$statement->execute();
						echo 'berhasil';
					}
					if($_POST["action"] == "delete")
					{
						$query = "DELETE FROM kena_pph_final WHERE id = '".$_POST["id"]."'";
						$statement = $connect->prepare($query);
						$statement->execute();
						echo 'delete';
					}
				}

				?>
			</body>
			</html>
