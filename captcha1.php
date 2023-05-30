<?php 
	session_start();
	$captcha=substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0,6); //string yang akan diacak
	$_SESSION['captcha']=$captcha;

	$gambar=imagecreate(100, 30);
	$wk=imagecolorallocate($gambar, 216, 189, 189);
	$wt=imagecolorallocate($gambar, 20, 20, 20);

	imagefilledrectangle($gambar, 0, 0, 50, 20, $wk);
	imagestring($gambar, 10, 3, 3, $captcha, $wt);
	imagejpeg($gambar);
?>