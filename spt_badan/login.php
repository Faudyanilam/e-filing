<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login | Tax Center Politeknik Negeri Batam</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
<!--   <link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/> -->
  <link rel="stylesheet" type="text/css" href="../css/style_login.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<!-- Membuat body halaman -->
<body style="background-image:  url('img/poltek3.jpeg'); background-size:cover;">
    <div class="header">
  <div class="row">
    <div class="col-lg-4">
      <img class="img" src="img/logo.png">
    </div>
  </div>
</div>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card shadow-lg border-5 rounded-lg mt-5">
                            <!-- Mebuat Card Header -->
                            <h4 class="text-center my-2" style="color: #191970; font-family: arial; padding-top: 15px; padding-bottom: 15px">
                                <strong>Login</strong>
                            </h4>
                            <!-- /Tutup Card Header -->
                            <!-- Membuat Card Body -->
                            <div class="card-body" style="padding-top: 5px">
                                <form >
                                    <div class="form-group">
                                        <input class="form-control py-3" id="npwp" type="text" placeholder="Nomor Pokok Wajib Pajak(NPWP)" style="width: 280px; border-radius: 5px;" required />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control py-3" id="pass" name="password" type="password" placeholder="Kata Sandi" style="width: 280px; border-radius: 5px;" required />
                                        <span id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open"></i></span>
                                    </div>
                                    <!-- Membuat captcha -->
                                    <div class="form-group">
                                        <!-- Membuat Grid -->
                                        <img src="captcha.php" alt="Kode Captcha" style="height:37px; width:80px; display: inline-grid; grid-template-columns: 200px 1fr; grid-gap: 16px;">
                                        <input class="form-control py-3" name="captcha" type="text" maxlength="6" style="display: inline-grid; width: 195px; border-radius: 5px; grid-template-columns: 200px 1fr; grid-gap: 16px;" placeholder="Kode Keamanan" required />
                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="btn btn-warning btn-block" href="lapor.php" name="submit" style="background-color: #ffd700; border-radius: 17px; color: #191970; border: none; height: 40px; width: 280px;"><strong>Login</strong></a>
                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                        <a class="small" href="ubah_kata_sandi.php" style="color: #191970; padding-left: 90px"><strong>Lupa Kata Sandi ?</strong></a>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                        <a class="small" href="registrasi.php" style="color: #191970; padding-left: 88px"><strong>Belum Registrasi ?</strong></a>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                        <a class="small" href="resend_aktivasi_email.php" style="color: #191970; padding-left: 40px"><strong>Belum Menerima Email Aktivasi ?</strong></a>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                        <a class="small" href="daftar_npwp.php" style="color: #191970; padding-left: 65px"><strong>Atau Belum Punya NPWP ?</strong></a>
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
