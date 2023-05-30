<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan PPh 21</title>
</head>
<body>
		<?php
		$gaji=$_GET['gaji_pensiun_atau_tht/jht'];
		$tunjangan_pph=$_GET['tunjangan_pph'];
		$tunjangan_lainnya=$_GET['tunjangan_lainnya'];
		$honorarium=$_GET['honorarium'];
		$premi_asuransi=$_GET['premi_asuransi'];
		$natura=$_GET['natura'];
		$bonus$_GET['bonus'];


		function penambahan($gaji, $tunjangan_pph, $tunjangan_lainnya, $honorarium, $premi_asuransi, $natura, $bonus){
			global $gaji;
			global $tunjangan_pph;
			global $tunjangan_lainnya;
			global $honorarium;
			global $premi_asurans;
			global $natura;
			global $bonus;
			$penghasilan_bruto = $gaji + $tunjangan_pph + $tunjangan_lainnya + $honorarium + $premi_asuransi +  $natura + $bonus;
			return $penghasilan_bruto;
		}
		?>

</body>
</html>