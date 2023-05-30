<?php 
include './PHPMailer/PHPMailerAutoload.php';
include 'credential.php';
session_start();

$nama = $_SESSION['nama_ktp'];
$npwp = $_SESSION['npwp'];

$email = $_POST['nama_email'];
if (isset($_SESSION['tmpemail'])) {
    $tmpemail = $_SESSION['tmpemail'];
    }

    echo end($tmpemail);
    $email= end($tmpemail);

if (isset($_SESSION['tmptahun_pajak_ss'])) {
    $tmptahun_pajak_ss = $_SESSION['tmptahun_pajak_ss'];
    }

    echo end($tmptahun_pajak_ss);
    $tahun_pajak_ss = end($tmptahun_pajak_ss);

if (isset($_SESSION['tmppembetulan_ke'])) {
    $tmppembetulan_ke = $_SESSION['tmppembetulan_ke'];
    }

    echo end($tmppembetulan_ke);
    $pembetulan_ke = end($tmppembetulan_ke);

$date =  date('d-m-Y');

// $token2 = mt_rand(100000,999999);


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

Berikut adalah Bukti Penerimaan Elektronik Anda <br/><br/>

Nama : '.$nama.'<br/>
NPWP : '.$npwp.'<br/>
Tahun Pajak : '.$tahun_pajak_ss.'<br/>
Jenis SPT : 1770SS<br/>
Pembetulan ke : '.$pembetulan_ke.'<br/>
Status SPT : Nihil<br/>
Tanggal Penyampaian : '.$date.'<br/>
<br/><br/>Terimakasih telah menyampaikan Laporan SPT Tahunan Anda.
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

if ( !$mail->send() ) {
    echo 'Gagal';
}else{
  echo 'Berhasil';
}
header('location:lapor_ss.php?hasil=berhasil');
?>