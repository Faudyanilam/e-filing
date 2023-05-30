<?php 
include './PHPMailer/PHPMailerAutoload.php';
include 'credential.php';

// Memulai session
session_start();

// $email = $_POST['nama_email']; //Menampung inputan email
if (isset($_SESSION['tmpemail'])) {
    $tmpemail = $_SESSION['tmpemail'];
    }

    echo end($tmpemail);
    $email= end($tmpemail);

// Membuat Token Acak
$token2 = mt_rand(100000,999999);

// Menampung token ke session
$_SESSION['kode_verif_71'] = $token2;

$body = '

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kode Verifikasi Pelaporan SPT</title>
<style type="text/css">
body {margin: 0; padding: 0; min-width: 100%!important;}
.content {width: 100%; max-width: 600px;} 
.header {padding: 20px 30px 10px 30px;} 
.col425 {width: 425px!important;}
.subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
.h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
.h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
.innerpadding {padding: 30px 30px 30px 30px;}
.borderbottom {border-bottom: 1px solid #f2eeed;}
.h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
.bodycopy {font-size: 16px; line-height: 22px;}
.justify {text-align: justify;}
</style>
</head>
<body yahoo bgcolor="#f6f8f1">
<table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0" style="padding-top: 20px; padding-left: 60px; padding-right: 60px;">
<tr> 
<td class="content" bgcolor="grey">

<table class="col425" width="70" align="left" border="0" cellpadding="0" cellspacing="0" >
<tr >
<td height="70" style="padding: 0 20px 20px 30px;">
</td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  style="padding-left: 30px; padding-bottom: 30px">
<tr>
<td class="subhead" style="padding: 0 0 0 3px;">
Politeknik Negeri Batam
</td>
</tr>
<tr>
<td class="h1" style="padding: 5px 0 0 0;">
Tax Center Polibatam
</td>
</tr>
</table> 
</td>
</tr>

<tr>
<td class="innerpadding borderbottom">
<table width="115" align="left" border="0" cellpadding="0" cellspacing="0">  
<tr>
<td height="115" style="padding: 30px 20px 20px 0;">
 <img width="120px" src="https://cdn.icon-icons.com/icons2/944/PNG/512/medical-25_icon-icons.com_73900.png" />
</td>
</tr>
</table>
<!--[if (gte mso 9)|(IE)]>
<table width="380" align="left" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<![endif]-->
<table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 950px; padding-top: 30px; padding-bottom: 30px;">  
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="bodycopy justify">
Kepada Yth,<br/>
Bapak/ Ibu Wajib Pajak <br/><br/>

Terimakasih telah melaporkan SPT 1771 Anda, untuk melanjutkan pelaporan SPT silahkan masukkan kode verifikasi anda berikut ini. <br/><br/>

Kode Verifikasi Anda adalah <b>' 

.$token2. 

'</b>
<br/><br/>Anda memperoleh pesan ini karena adanya permintaan kode verifikasi pengiriman SPT ke server kami. Silahkan menggunakan kode tersebut untuk kepentingan pengiriman SPT anda melalui website kami. Jika anda merasa tidak pernah melakukan permintaan kode ini, silahkan mengabaikan/menghapus pesan ini.
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
    </table>
    <![endif]-->
  </td>
</tr>
<tr>
    <td class="footer" bgcolor="#44525f" style="padding-top: 20px; padding-bottom: 20px;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" class="footercopy">
                    Copyright  &copy; 2021<br/>
                    <font color="#ffffff">Polibatam Software Team</font>
                </td>
            </tr>
        </table>
    </td>
</tr>
	</table>
	<div class="card" style="background-color: blue"></div>
</body>
</html>
';

$mail->addAddress($email);

$mail->isHTML(true);

$mail->Subject ="Kode Verifikasi Pelaporan SPT Tahunan";

$mail->Body=$body;

// Status Proses Kirim Ke Email
if ( !$mail->send() ) {
	echo 'Gagal';
}else{
  echo 'Berhasil';
}
header('location:spt_badan/spt2.php');
?>