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



<br />
<div class="container box"> 
 <br />
 <!-- <h2 align="center"></h2><br /> -->
 
 <form action="tmp_admin/proses_data_diri.php" method="post">
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
                  <div class="card-header card-header_3"><i class="fas fa-user-plus"></i> <b>Registrasi Akun 2/2</b></div>
                  <div class="card-body card-body_2" style="padding: 20px">  
                    
                  
                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">NPWP</label>
                      <div class="col-sm-8" >
                        <input class="form-control" name="npwp" id="npwp" value="<?php echo $_SESSION['npwp']; ?>"style="width: 100%; border-radius: 5px;" 
                        type="text" disabled>
                        <input class="form-control" name="npwp" id="npwp" value="<?php echo $_SESSION['npwp']; ?>"style="width: 100%; border-radius: 5px;" 
                        type="hidden" >
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">Email</label>
                      <div class="col-sm-8" >
                        <input class="form-control" name="email" id="email" style="width: 100%; border-radius: 5px;" 
                        type="text" required>
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">Jenis WP</label>
                      <div class="col-sm-8" >
                        <select name="jenis_wp" id="jenis_wp" onchange="hapus();" class="form-control-sm form-control" required>
                            <option value="" hidden>Pilih Jenis Wajib Pajak</option>
                            <option value="Orang Pribadi">Orang Pribadi</option>
                            <option value="Badan">Badan Usaha</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">Nama KTP</label>
                      <div class="col-sm-8" >
                        <input class="form-control" name="nama" id="nama" style="width: 100%; border-radius: 5px;" 
                        type="text" required>
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">Password</label>
                      <div class="col-sm-8" >
                        <input class="form-control" name="password" id="password" style="width: 100%; border-radius: 5px;" 
                        type="password"required >
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">No. HP</label>
                      <div class="col-sm-8" >
                        <input class="form-control" name="no_hp" id="no_hp" style="width: 100%; border-radius: 5px;" 
                        type="text" required>
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">Alamat</label>
                      <div class="col-sm-8" >
                        <input class="form-control" name="alamat" id="alamat" style="width: 100%; border-radius: 5px;" 
                        type="text" required>
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">Pertanyaan</label>
                      <div class="col-sm-8" >
                        <select name="pertanyaan" id="pertanyaan" onchange="hapus();" class="form-control-sm form-control"required>
                          <option value="" hidden>-- Pilih Pertanyaan --</option>
                          <option value="1">Apa nama hewan peliharaan Anda?</option>
                          <option value="2">Apa nama SD Anda?</option>
                          <option value="3">Siapa pahlawan masa kecil Anda?</option>
                          <option value="4">Apa kenangan Anda yang paling berkesan?</option>
                          <option value="5">Apa nama tim olahraga favorit Anda?</option>
                          <option value="6">Apa maskot SMA Anda</option>
                          <option value="7">Apa merek mobil/mobil pertama Anda?</option>
                          <option value="8">Dimana Anda pertama kali bertemu dengan pasangan Anda?</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 10%; padding-right: 5%">
                      <label class="col-sm-4 col-form-label">Jawaban</label>
                      <div class="col-sm-8" >
                        <input class="form-control" name="jawaban" id="jawaban" style="width: 100%; border-radius: 5px;" 
                        type="text"required >
                      </div>
                    </div>
                    <br>
                    <hr>
                  
                    <div align="right">
                      
                      <!-- <a href="login.php"> -->
                        <button type="submit" id="submit" name="submit" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 5%; width: 20%">
                        <i class="fas fa-check" style="padding-right: 1%;"></i> Submit </button>
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

<br/>
<br/>
<br/>
<br/>
<?php include'footer 1.html'; ?>
</body>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</html>

