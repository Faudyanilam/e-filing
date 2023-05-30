<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Pendaftaran Akun (Langkah 1 dari 2) | Tax Center Politeknik Negeri Batam</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
  <!--   <link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/> -->
  <link rel="stylesheet" type="text/css" href="css/style_login.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  
</head>
<!-- Membuat body halaman -->
<body style="background-image:  url('img/poltek3.jpeg'); background-size:cover;">
    <div class="header">
      <div class="row">
        <div class="col-sm-4">
          <img class="img" src="img/logo.png">
      </div>
  </div>
</div>

<?php
include "koneksi.php";

if (isset($_GET['hasil'])) {
    if ($_GET['hasil'] == "logout"){
        echo "<script>
        Swal.fire(
        'Logout',
        'Anda Berhasil Logout',
        'success'
    ) </script>";
} else if($_GET['hasil'] == "gagal"){
    echo "<script>
    Swal.fire(
    ' Daftar Tidak Berhasil',
    'Email Tidak Sesuai',
    'error'
) </script>";
} 
}
?>

<?php
$pesan='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['input_kode'])) {
      if ($_SESSION['kode_captcha']!=$_POST['input_kode']){
        $pesan="<div class='alert alert-danger' style='width: auto;'><font size ='2'><strong>Error!</strong> Kode yang dimasukan salah.</font></div>";
                // session_destroy();
    }else {
        $pesan="<div class='alert alert-success' style='width: auto;'><font size ='2'><strong>Sukses!</strong> Kode yang dimasukan benar. </font></div>";
                include 'proses_daftar_npwp.php';

        // header("location:daftar_npwp2.php");
    }
}
}
?>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card shadow-lg border-5 rounded-lg mt-5">
                        <!-- Mebuat Card Header -->
                        <h4 class="text-left my-2" style="color: #191970; font-family: arial; padding-top: 25px; padding-left: 20px">
                            <strong>Pendaftaran Akun (Langkah <font color="red">1</font> dari <font color="red">2</font>)</strong>
                        </h4>
                        <!-- /Tutup Card Header -->
                        <!-- Membuat Card Body -->
                        <div class="card-body" style="padding-top: 5px">
                            <hr>
                            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
                                <div class="form-group row" align="right" style=" padding-top: 3%;">
                                    <label class="col-sm-2 col-form-label">Alamat Email <font color="red">*</font></label>
                                    <div class="col-sm-5">
                                        <input class="form-control py-3" id="email" name="email" type="text" placeholder="Alamat Email" style="width: 90%; border-radius: 5px;" required />
                                    </div>
                                    <div class="col-sm-5" align="justify" style="padding-right: 3%">
                                        <font color="red" style="font-size: 75%;">*</font>
                                        <font color="grey" style="font-size: 75%;"> Pastikan email yang Anda masukkan adalah email yang masih aktif dan sering Anda gunakan. Email ini sekaligus akan menjadi email yang akan digunakan di formulir pada proses pendaftaran NPWP.
                                        </font>
                                    </div>
                                </div>

                                <!-- Membuat captcha -->
                                <div class="form-group row" align="right">
                                    <!-- Membuat Grid -->
                                    <div class="col-sm-2" >
                                        <img src="captcha.php" alt="Kode Captcha" style="height:35px; width: 65%; display: inline-grid; grid-template-columns: 200px 1fr; grid-gap: 16px; border-radius: 7px 7px 7px 7px; ">
                                    </div>
                                    <div class="col-sm-5">
                                       <input class="form-control py-3" name="input_kode" id="kodeval" maxlength="5" type="text" maxlength="6" style="display: inline-grid; width: 90%; border-radius: 5px; grid-template-columns: 200px 1fr; grid-gap: 16px;" placeholder="Kode Keamanan" required />
                                   </div>
                                   <div class="col-sm-5" style="text-align: left; padding-right: 3%; font-size: 60% ">
                                    <?php echo $pesan; ?>
                                </div>
                            </div>

                            <div class="form-group d-flex align-items-center " style="padding-top: 3%;padding-bottom: 20px; padding-left: 20px">
                                <div class="col-sm-2">
                                    <a class="btn btn-block" href="login.php" name="submit" style="background-color: lightgrey; border-radius: 3px; color: #191970; border: none; height: 40px; width: 110px"><strong><i class="far fa-arrow-alt-circle-left"></i> Kembali</strong></a>
                                </div>
                                <div class="col-sm-5" align="right" style="padding-right: 30px">
                                    <button class="btn btn-warning btn-block" type="submit" name="submit" style="background-color: #ffd700; border-radius: 3px; color: #191970; border: none; height: 40px; width: 100px"><strong>Daftar <i class="far fa-arrow-alt-circle-right"></i></strong></button>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                <small>Kami akan melakukan verifikasi terhadap status keaktifan email anda melalui pengiriman intruksi langkah berikutnya dari proses pendaftaran akun ini ke email anda.</small>
                            </div>

                        </form>
                    </div>
                    <!-- /Tutup Card Cody -->
                </div>
            </div>
        </div>
    </main>
</div>
</div>
<!-- Script JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<?php include'footer 1.html'; ?>
</body>
</html>
