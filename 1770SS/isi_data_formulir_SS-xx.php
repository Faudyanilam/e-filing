<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SPT 1770SS | Politeknik Negeri Batam</title>
  <link href="../assets/img/logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-body">  
  <?php include'../header.html'; ?>
  <br />
  <!-- container box -->
  <div class="container box"> 
   <br />

   <!-- tab content -->
   <div class="tab-content">
    <!-- tab pane -->
    <div class="tab-pane active" id="lapor_detail" >
      <!-- panel -->
      <div class="panel panel-default">
        <!-- panel body -->
        <div class="panel-body">

          <!-- membuat card navbar -->
          <div class="card card_8 box-shadow">
            <div class="card-body">

              <!-- membuat row -->
              <div class="row">

                <!-- membuat tab -->
                <div class="col-sm-9">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a href="../arsip_spt.php">Arsip SPT</a>
                    </li>
                    <li class="nav-item grey-nav">
                      <a href="../form_spt.php" class="font-dark-blue">Buat SPT</a>
                    </li>
                    <li class="nav-item jarak-nav">
                      <a href="../draft_spt.php">Draft SPT</a>
                    </li>
                    <li class="nav-item">
                      <a href="../bantuan_spt.php">Bantuan</a>
                    </li>
                  </ul>
                </div>
                <!-- end membuat tab -->

                <!-- menambahkan gambar e-filling -->
                <div align="right" class="col-sm-3" style="padding-right: 30px;">
                  <img src="../img/e-filling.png" width="100px" >
                </div>
                <!-- end menambahkan gambar e-filling -->

              </div>
              <!-- end membuat row -->
            </div>
          </div>
          <!-- end membuat card navbar -->

          <br/>

          <!-- agar colom tidak ada batasn row -->
          <div class="row no-gutters">
            <!-- membuat kolom sebelah kiri -->
            <div class="col-6 col-md-4">
              <!-- card petunjuk pengisian -->
              <div class="card bg-light mb-3 card_2">
                <div class="card-header card-header_2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-book-open"></i> <b>Petunjuk Pengisian</b> <i class="fas fa-chevron-left"></i></div>
                <div class="collapse" id="collapseExample">
                  <div class="card-body">
                    <h5 class="card-title card-title_1" style="color: rgb(4, 153, 195)">Menu Lapor dibedakan sub menu pelaporan dan pra pelaporan</h5>
                    <p class="card-text card-text_1" style="color: rgb(4, 153, 195)">1. Sub menu pelaporan manampilkan aplikasi e-filling yang digunakan untuk menyampaikan SPT secara elektronik serta data riwayat pelaporan selama 3 tahun terakhir</p>
                    <p class="card-text card-text_1" style="color: rgb(4, 153, 195)">2. Sub menu pra pelaporan menampilkan aplikasi yang digunakan dalam pembuatan bukti pemotongan dan/atau pemungutan pajak sebelum melaporkan SPT</p>
                    <br/>
                  </div>
                </div>
              </div>
              <!-- end card petunjuk pengisian -->
            </div>
            <!-- end membuat kolom sebelah kiri -->

            <!-- membuat kolom sebelah kanan -->
            <div class="col-sm-6 col-md-8">
              <!-- card SPT 1770 SS -->
              <div class="card bg-light mb-3 card_5">
                <div class="card-header card-header_3"><i class="fas fa-file-alt"></i> <b>SPT 1770 SS</b></div>
                <div class="card-body card-body_2">  
                  <p class="p_text_2 card_7" style="color: rgb(4, 153, 195)"><b> Isi Data Formulir </b></p>

                  <!-- progress bar -->
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" style="width:16.6%; background-color: rgb(255, 157, 49);"><small>16.6%</small></div>
                  </div>
                  <!-- end progress bar -->
                  <p style="padding-left: 0px; padding-top: 0px; color: rgb(4, 153, 195)"><small>Halaman dari ke 1 dari 6</small></p>
                  <br/>

                  <p class="card_7" style="padding-top: 0px;"><b>Data Formulir </b></p>

                  <form action="proses_data_formulir.php" method="post">
                    <div class="form-group row" style="padding-left: 40px; padding-right: 40px;">
                      <label class="col-sm-7">Tahun Pajak</label>
                      <div class="col-sm-5">
                        <select name="tahun_pajak_ss" id="" class="form-control mb-3" style="max-width: 180px;">
                          <option selected="selected">Tahun</option>
                          <?php
                          for($i=date('Y'); $i>=date('Y')-32; $i-=1){
                            echo"<option value='$i'> $i </option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 40px; padding-right: 40px;">
                      <label class="col-sm-7">Status SPT</label>
                      <div class="col-sm-5" id="test">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="normal" name="status_spt_ss" value="Normal" class="custom-control-input" onclick="status();">
                          <label class="custom-control-label" for="ContohRadio1">Normal</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="pembetulan" name="status_spt_ss" value="Pembetulan" class="custom-control-input" onclick="status();">
                          <label class="custom-control-label" for="ContohRadio2">Pembetulan</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row" style="padding-left: 40px; padding-right: 40px">
                      <label class="col-sm-7 col-form-label">Pembetulan Ke</label>
                      <div class="col-sm-5">
                        <input class="form-control" type="number" name="pembetulan_ke_ss" id="pembetulan_ke_ss" value="0" style="text-align: right;" readonly>
                        <script type="text/javascript">
                          function status(){
                           var btn_normal = document.getElementById('normal');
                           var btn_pembetulan = document.getElementById('pembetulan');
                           var inp_pembetulan = document.getElementById('pembetulan_ke');


                           if (btn_normal.checked) {
                            inp_pembetulan.disabled = true;

                          }else if(btn_pembetulan.checked){
                            inp_pembetulan.disabled = false;
                          }
                        }

                      </script>
                    </div>
                  </div>
                  <br/>
                  <hr>

                  <!-- button selanjutnya -->
                  <div style="padding-left: 350px">
                    <a href="bagian_A.php">
                      <input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px">
                    </a>
                    </div>
                  </form>
                  <!-- end button selanjutnya -->
                  <br/>
                </div>
              </div>
              <!-- end card SPT 1770 SS -->
              <br/>

            </div>
            <!-- end kolom sebelah kanan -->
          </div>
          <!-- end row gutters -->
        </div>
        <!-- end panel body -->
      </div>
      <!-- end panel -->
    </div>
    <!-- end tab pane -->
  </div> 
  <!-- end tab content -->
</div>
<!-- end container box -->
<?php include'../footer.html'; ?>
</body>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</html>

