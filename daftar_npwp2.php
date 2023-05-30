<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Pendaftaran Akun (Langkah 2 dari 2) | Tax Center Politeknik Negeri Batam</title>
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
    if ($_GET['hasil'] == "email_terdaftar") {
      echo "<script>
      Swal.fire(
      'Good job!',
      'Email Telah Terdaftar', 
      'success'
    ) </script>";
  } else if($_GET['hasil'] == "gagal"){
    echo "<script>
    Swal.fire(
    ' Daftar Tidak Berhasil',
    'Silahkan Cek Kembali',
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
      include 'proses_daftar_npwp2.php';
      include 'kode_verif_eregis.php';

    }
  }

}
?>
<div id="layoutAuthentication">
  <div id="layoutAuthentication_content">
    <main>
      <div class="container" style="padding-bottom: 5%">
        <div class="row justify-content-center">
          <div class="card shadow-lg border-5 rounded-lg mt-5">
            <!-- Mebuat Card Header -->
            <h4 class="text-left my-2" style="color: #191970; font-family: arial; padding-top: 25px; padding-left: 20px">
              <strong>Pendaftaran Akun (Langkah <font color="red">2</font> dari <font color="red">2</font>)</strong>
            </h4>
            <!-- /Tutup Card Header -->

            <!-- Membuat Card Body -->
            <div class="card-body" style="padding-top: 5px;">
              <hr>
              <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
                <font size="2"><strong>Selamat, email anda telah terverifikasi untuk Anda gunakan untuk mendaftar akun pada sistem kami, selanjutnya silahkan isikan identitas anda di bawah ini.</strong></font>
                <div class="form-group row" align="right" style="padding-left: 5%; padding-right: 3%;padding-top: 20px">
                  <label class="col-sm-2 col-form-label">Jenis WP<font color="red">*</font></label>
                  <div class="col-sm-5" style="padding-top: 1%">
                   <select style="width: 95%; height: 30px" id="jenis_wp" name="jenis_wp" onchange="bdn();">
                     <option value="" selected hidden>Pilih Badan</option>
                     <option value="Orang Pribadi" >Orang Pribadi</option>
                     <option value="Badan" >Badan</option>
                   </select>

                 </div>
                 <div class="col-sm-5" align="justify">
                  <font color="red">*</font>
                  <font color="grey" style="font-size: 75%"> Jenis WP yang anda pilih disini menentukan jenis WP yang dapat anda daftarkan melalui akun anda nantinya. Misalnya Anda memilih WP Badan, maka Anda hanya akan dapat menyertakan NPWP Badan.</font>
                </div>
              </div>
              <div class="form-group row" align="right" style="padding-left: 5%; padding-right: 3%;">
                <label class="col-sm-2 col-form-label" id="nama" >Nama<font color="red">*</font></label>
                <script type="text/javascript">
                  function bdn(){
                    var p_kontainer=document.getElementById("nama");
                    var ket=document.getElementById("ket1");

                    var badan = document.getElementById("jenis_wp").value;

                    if (badan=="Orang Pribadi"){

                      p_kontainer.innerHTML='Nama Sesuai KTP<font color="red">*</font>';
                      ket.innerHTML='<font color="grey" style="font-size: 75%"><font color="red">*</font> Tuliskan nama anda dengan lengkap dan benar <font color="red"><b>TANPA</b></font> gelar, Nama ini akan digunakan pada formulir Pendaftaran NPWP </font>';


                    }else if(badan=="Badan2"){
                      p_kontainer.innerHTML='Nama<font color="red">*</font>';
                      ket.innerHTML='<font color="grey" style="font-size: 75%"><font color="red">*</font> Tuliskan nama Badan dengan lengkap dan benar <font color="red"><b>TANPA</b></font> awalan jenis badan untuk PT, CV, Koperasi dan Yayasan, Nama ini akan digunakan pada Surat.</font>';

                    }
                  }
                </script>
                <div class="col-sm-5">
                  <input class="form-control py-3" id="nama_ktp" name="nama_ktp" type="text" placeholder="Nama" style="width: 95%; border-radius: 5px;" required />
                </div>
                <div class="col-sm-5" align="justify" id="ket1">
                  <font color="red">*</font>
                  <font color="grey" style="font-size: 75%"> Tuliskan nama Badan dengan lengkap dan benar <font color="red"><b>TANPA</b></font> awalan jenis badan untuk PT, CV, Koperasi dan Yayasan, Nama ini akan digunakan pada Surat.</font>
                </div>
              </div>
              <div class="form-group row" align="right" style="padding-left: 5%; padding-right: 3%;">
                <label class="col-sm-2 col-form-label">Email<font color="red">*</font></label>
                <div class="col-sm-5">
                  <input class="form-control py-3" id="email" name="email" type="text" placeholder="Alamat Email" style="width: 95%; border-radius: 5px;" value="<?php  echo $_SESSION['email'];?>" required readonly/>
                </div>
                <div class="col-sm-5" align="justify">
                  <font color="red">*</font>
                  <font color="grey" style="font-size: 75%"> Email ini diambil dari email yang anda daftarkan pada langkah 1. Email ini akan digunakan pada formulir Pendaftaran. Pastikan alamat email yang anda gunakan adalah email yang anda masukkan.</font>
                </div>
              </div>
              <div class="form-group row" align="right" style="padding-left: 5%; padding-right: 3%;">
                <label class="col-sm-2 col-form-label">Password<font color="red">*</font></label>
                <div class="col-sm-5">
                  <input class="form-control py-3" id="password" name="password" type="password" placeholder="Password" style="width: 95%; border-radius: 5px;" required />
                </div>
              </div>
              <div class="form-group row" align="right" style="padding-left: 5%; padding-right: 3%;">
                <label class="col-sm-2 col-form-label">Ulangi Password<font color="red">*</font></label>
                <div class="col-sm-5">
                  <input class="form-control py-3" id="re_password" name="re_password" type="password" placeholder="Re-Password" oninput="cek()" style="width: 95%; border-radius: 5px;" required />
                </div>
                <script type="text/javascript">
                  function cek(){
                    var password = document.getElementById('password').value;
                    var re_password = document.getElementById('re_password').value;
                    var p_kontainer2 = document.getElementById('cek_password');

                    if (password == re_password) {
                      p_kontainer2.innerHTML = "<div class='alert alert-success' style='width: auto;'><font size ='2'><strong>Sukses!</strong> Password Cocok. </font></div>";
                    }else if(re_password == ""){
                      p_kontainer2.innerHTML = "<div class='alert alert-warning' style='width: auto;'><font size ='2'><strong>Silahkan Isi Dengan Angka!</strong></font></div>";
                    }else{
                      p_kontainer2.innerHTML = "<div class='alert alert-danger' style='width: auto;'><font size ='2'><strong>Error!</strong> Password Tidak Cocok</font></div>";
                    }
                  }
                </script>
                <div class="col-sm-5" style="text-align: left; padding-right: 2%; font-size: 50% ">
                  <p id="cek_password"></p>
                </div>
              </div>
              <div class="form-group row" align="right" style="padding-left: 5%; padding-right: 3%;">
                <label class="col-sm-2 col-form-label">Nomor HP<font color="red">*</font></label>
                <div class="col-sm-5">
                  <input class="form-control py-3" type="text" id="no_hp" name="no_hp" type="text" maxlength="13" placeholder="Nomor Telepon / HP" style="width: 95%; border-radius: 5px;"  required />
                </div>
                <div class="col-sm-5" align="justify">
                  <font color="red">*</font>
                  <font color="grey" style="font-size: 75%"> Nomor HP ini akan digunakan pada formulir Pendaftaran NPWP. Pastikan nomor Telepon/HP yang anda masukkan adalah nomor yang masih aktif dan sering anda gunakan.</font>
                </div>
              </div>
              <div class="form-group row" align="right" style="padding-left: 5%; padding-right: 3%;">
                <label class="col-sm-2 col-form-label">Pertanyaan<font color="red">*</font></label>
                <div class="col-sm-5">
                 <select style="width: 95%; height: 30px" id="pertanyaan" name="pertanyaan" onchange="bdn();">
                  <option value="" selected hidden>-- Pilih Pertanyaan --</option>
                  <option value="1">Apa nama hewan peliharaan Anda?</option>
                  <option value="2">Apa nama SD Anda?</option>
                  <option value="3">Siapa pahlawan masa kecil Anda?</option>
                  <option value="4">Apa kenangan Anda yang paling berkesan?</option>
                  <option value="5">Apa nama tim olahraga favorit Anda?</option>
                  <option value="6">Apa maskot SMA Anda?</option>
                  <option value="7">Apa merek mobil/mobil pertama Anda?</option>
                  <option value="8">Dimana Anda pertama kali bertemu dengan pasangan Anda?</option>
                </select>
              </div>
            </div>
            <div class="form-group row" align="right" style="padding-left: 5%; padding-right: 3%;">
              <label class="col-sm-2 col-form-label">Jawaban<font color="red">*</font></label>
              <div class="col-sm-5">
                <input class="form-control py-3" id="jawaban" name="jawaban" type="text" placeholder="Jawaban" style="width: 95%; border-radius: 5px;" required />
              </div>
            </div>

            <!-- Membuat captcha -->
            <div class="form-group row" align="right" style="padding-left: 5%; padding-right: 3%; padding-bottom: 20px">
              <!-- Membuat Grid -->
              <div class="col-sm-2" >
                <img src="captcha.php" alt="Kode Captcha" style="height:45px; width: 75%; display: inline-grid; grid-template-columns: 200px 1fr; grid-gap: 16px; border-radius: 7px 7px 7px 7px; ">
              </div>
              <div class="col-sm-5">
                <input class="form-control py-3" name="input_kode" id="kodeval" maxlength="5" type="text" maxlength="6" style="display: inline-grid; width: 95%; border-radius: 5px; grid-template-columns: 200px 1fr; grid-gap: 16px;" placeholder="Kode Keamanan" required />
              </div>
              <div class="col-sm-5" style="text-align: left; padding-right: 2%; font-size: 50% ">
                <?php echo $pesan; ?>
              </div>
            </div>
            <!-- END CAPTCHA -->

            <div class="form-group d-flex align-items-center " style="padding-bottom: 20px; padding-left: 20px">
              <div class="col-sm-2">
                <a class="btn btn-block" href="daftar_npwp.php" name="submit" style="background-color: lightgrey; border-radius: 3px; color: #191970; border: none; height: 40px; width: 110px"><strong><i class="far fa-arrow-alt-circle-left"></i> Kembali</strong></a>
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
