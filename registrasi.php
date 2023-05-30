<?php session_start(); ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Registrasi | Tax Center Politeknik Negeri Batam</title>
  <link href="assets/img/logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  
</head>
<body class="bg-body"> 
  <?php include'header2.html'; ?>

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
    'NPWP dan EFIN Tidak Sesuai',
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
      $npwp=$_POST['npwp'];
      $_SESSION['npwp'] = $npwp;
      $pesan="<div class='alert alert-success' style='width: auto;'><font size ='1'><strong>Sukses!</strong> Kode yang dimasukan benar. </font></div>";
      include 'proses_registrasi.php';
    }
  }
}
?>
<br />
<div class="container box"> 
 <br />
 <!-- <h2 align="center"></h2><br /> -->

 <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
  <div class="tab-content">

      <!-- <div class="col-4 col-md-auto">

        <div class="card bg-light mb-3 card_2"  style="width: 220px; transform:rotate(-90deg); background: transparent;" >
          <div class="card-header card-header_2" ><i class="fas fa-book-open"></i> <b >Petunjuk Pengisian</b> <i class="fas fa-chevron-left"></i></div>
        </div>
      </div> -->
      <div class="tab-pane active" id="lapor_detail" >
        <div class="panel panel-default" style="border-radius: 7px 7px 7px 7px;">
          <div class="panel-body">
            <div class="row no-gutters">

              <div class=" col-md-4" style="padding: 2%">
                <div class="card bg-light mb-3 card_2" style="width: 240px;  display: block;" >
                  <div class="card-header card-header_2" id="tampil_pengisian" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-book-open"></i> <b>Petunjuk Pengisian</b> <i class="fas fa-chevron-left"></i></div>
                  <div class="collapse" id="collapseExample">
                    <div class="card-body">
                      <h5 class="card-title card-title_1" style="color: rgb(4, 153, 195)">Menu Lapor dibedakan sub menu pelaporan dan pra pelaporan</h5>
                      <p class="card-text card-text_1" style="color: rgb(4, 153, 195)">1. Sub menu pelaporan manampilkan aplikasi e-filling yang digunakan untuk menyampaikan SPT secara elektronik serta data riwayat pelaporan selama 3 tahun terakhir</p>
                      <p class="card-text card-text_1" style="color: rgb(4, 153, 195)">2. Sub menu pra pelaporan menampilkan aplikasi yang digunakan dalam pembuatan bukti pemotongan dan/atau pemungutan pajak sebelum melaporkan SPT</p>
                      <br/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-auto col-md-8" style="padding: 2%" >
                <div class="card bg-light mb-3 card_5">
                  <div class="card-header card-header_3"><i class="fas fa-user-plus"></i> <b>Registrasi Akun 1/2</b></div>
                  <div class="card-body card-body_2" style="padding: 20px">  
                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">NPWP <font color="red">*</font></label>
                      <div class="col-sm-8" >
                        <input class="form-control" name="npwp" id="npwp" placeholder="Masukkan Nomor Pokok Wajib Pajak" style="width: 100%; border-radius: 5px;" onkeypress="return isNumeric(event)" 
                        type="text" maxlength = "15" min = "1" max = "999999999999999" required>
                      </div>
                    </div>
                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">EFIN <font color="red">*</font></label>
                      <div class="col-sm-8">
                        <input class="form-control" name="efin" id="efin" placeholder="Masukkan Nomor EFIN Anda" style="width: 100%; border-radius: 5px;" onkeypress="return isNumeric(event)" 
                        type="text" maxlength = "15" min = "1" max = "999999999999999" required>
                      </div>
                    </div>
                    <!-- Membuat captcha -->
                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">Kode Keamanan <font color="red">*</font></label>
                      <!-- Membuat Grid -->
                      <div class="col-sm-3" >
                        <img src="captcha.php" alt="Kode Captcha" style="height:35px; width:90px; display: inline-grid; grid-template-columns: 200px 1fr; grid-gap: 16px; border-radius: 7px 7px 7px 7px">
                      </div>
                      <div class="col-sm-5" >

                        <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="display: inline-grid; width: 100%; border-radius: 5px; grid-template-columns: 200px 1fr; grid-gap: 16px;" placeholder="Kode Keamanan" required />                    
                      </div>
                      <div class="col-sm-8" style="padding: 3%">
                        <?php echo $pesan; ?>
                      </div>
                    </div>
                    
                    <br>
                    <hr>

                    <div align="right">
                      <a href="login.php">
                        <button type="button" class="" style="background-color: white; border-radius: 25px; color: #191970; border:1px solid #ccc; height: 5%; width: 20%"><i class="fas fa-chevron-left"></i> Batal </button>
                      </a>
                      <!-- <a href="login.php"> -->
                        <button type="submit" name="submit" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 5%; width: 30%">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                        <!-- </a> -->

                      </div>
                    </div>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
</form>
<script src="jquery-1.12.4.min.js"></script>
<script src="datepicker/dist/js/bootstrap-datepicker.js"></script>
<script type="text/javascript"> 
  function isNumeric (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]/;
    if ( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script>
<br/>
<br/>
<br/>
<br/>
<?php include'footer 1.html'; ?>
</body>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</html>

