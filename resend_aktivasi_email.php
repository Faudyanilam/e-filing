<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Kirim Ulang Email Aktivasi | Tax Center Politeknik Negeri Batam</title>
  <link href="assets/img/logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-body"> 
  <?php include'header2.html'; ?>
  <br />
  <div class="container box"> 
   <br />
   <!-- <h2 align="center"></h2><br /> -->
   
   <form >
    <div class="tab-content">
     <div class="tab-pane active" id="lapor_detail" >
      <div class="panel panel-default" style="border-radius: 7px 7px 7px 7px;">
       <div class="panel-body">

         <div class="row no-gutters">

          <div class="col-4 col-md-4">

            <div class="card bg-light mb-3 card_2" style="width: 220px">
              <div class="card-header card-header_2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-book-open"></i> <b>Petunjuk Pengisian</b> <i class="fas fa-chevron-left"></i> </div>
              <div class="collapse" id="collapseExample">
                <div class="card-body">
                  <h5 class="card-title card-title_1" style="color: rgb(4, 153, 195)">Menu Lapor dibedakan sub menu pelaporan dan pra pelaporan</h5>
                  <div style="overflow:auto; width:100%px; height:200px; padding:10px; border:1px solid white">
                    <p class="card-text card-text_1" style="color: rgb(4, 153, 195)">1. Pastikan Anda masih menyimpan Electronic Filing Identification Number (EFIN) yang diberikan oleh Kantor Pelayanan Pajak (KPP).</p>
                    <p class="card-text card-text_1" style="color: rgb(4, 153, 195)">2. Jika Anda lupa atau tidak menyimpan EFIN, silakan mencetak ulang EFIN di KPP terdekat (bagi Wajib Pajak Orang Pribadi) dan KPP terdaftar (bagi Wajib Pajak Badan).</p>
                    <p class="card-text card-text_1" style="color: rgb(4, 153, 195)">3. Informasi Nomor EFIN juga bisa diperoleh dengan melakukan live chatting dengan agen Chat Pajak pada laman www.pajak.go.id, bertanya lewat Twitter dengan me-mention akun twitter @kring_pajak, atau menelepon ke Kring Pajak di 1500200.</p>
                    <br/>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-8" style="padding-left: 0px;  ">
            <div class="card bg-light mb-3 card_5">
              <div class="card-header card-header_3"><i class="fa fa-envelope" aria-hidden="true"></i> <b>Kirim Ulang Email Aktivasi</b></div>
              <div class="card-body card-body_2" style="padding: 20px">  
                <div class="form-group row" style="padding-left: 60px; padding-right: 40px">
                  <label class="col-sm-4 col-form-label">NPWP*</label>
                  <div class="col-sm-4" >
                    <input class="form-control" name="npwp" id="npwp" placeholder="Masukkan Nomor Pokok Wajib Pajak" style="width: 270px; border-radius: 5px;">
                  </div>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-right: 40px">
                  <label class="col-sm-4 col-form-label">EFIN*</label>
                  <div class="col-sm-4">
                    <input class="form-control" name="npwp" id="npwp" placeholder="Masukkan Nomor EFIN Anda" style="width: 270px; border-radius: 5px;">
                  </div>
                </div>
                <!-- Membuat captcha -->
                <div class="form-group row" style="padding-left: 60px; padding-right: 60px">
                  <label class="col-sm-4 col-form-label">Kode Keamanan*</label>
                  <!-- Membuat Grid -->
                  <div class="col-sm-3" >
                    <img src="captcha.php" alt="Kode Captcha" style="height:37px; width:80px; display: inline-grid; grid-template-columns: 200px 1fr; grid-gap: 16px;">
                  </div>
                  <div class="col-sm-3" >

                    <input class="form-control py-3" name="captcha" type="text" maxlength="6" style="display: inline-grid; width: 185px; border-radius: 5px; grid-template-columns: 200px 1fr; grid-gap: 16px;" placeholder="Kode Keamanan" required />
                  </div>
                </div>
                <br>
                <hr>

                <div align="right">
                  <a href="login.php">
                    <button type="button" class="" style="background-color: white; border-radius: 25px; color: #191970; border:1px solid #ccc; height: 27px; width: 90px"><i class="fa fa-undo" aria-hidden="true"></i><small> Batal </small></button>
                  </a>
                  <a href="login.php">
                    <button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 27px; width: 90px"><i class="fas fa-file" style="padding-right: 5px;"></i><small> Submit </small> </button>
                  </a>

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
<script src="script.js"></script>
</div>
<br/>
<br/>
<br/>
<br/>
<?php include'footer 1.html'; ?>
</body>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</html>

