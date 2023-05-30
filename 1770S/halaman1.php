  <html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SPT 1770S | Politeknik Negeri Batam</title>
  <link href="../assets/img/logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>  
</head>
<body class="bg-body"> 
  <!-- ======= Header ======= -->
  <?php include'../header1.html'; ?>
  <br />

  <div class="container container-fluid box"> 
   <br />
   <div class="tab-content">
     <div class="tab-pane active" id="lapor_detail" >
      <div class="panel panel-default">
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
                <img src="../img/eFilingSpt.png" width="85px" height="45px" >
              </div>
              <!-- end menambahkan gambar e-filling -->

            </div>
            <!-- end membuat row -->
          </div>
        </div>
        <!-- end membuat card navbar -->

        <br/>


        <div class="card bg-light mb-3 card_5">
          <div class="card-header card-header_3"><i class="fas fa-file-alt"></i> <b>SPT 1770 S</b></div>
          <div class="card-body card-body_2">  
            <p class="p_text_2 card_7"><b></b></p>

            <!-- progress bar -->
            <div class="progress">
              <div class="progress-bar progress-bar-striped" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:5.56%; background-color: rgb(255, 157, 49)"><small>5.56%</small></div>
            </div>

            <p style="padding-left: 0px; padding-top: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 1 dari 18</small></p>
            <br/>

            <p class="p_text_2 card_7" style="padding-top: 0px; color: rgb(4, 153, 195);"><b>Data Formulir </b></p>


            <form action="proses_halaman1.php" method="post">
              <div class="form-group row" style="padding-left: 40px; padding-right: 40px;">
                <label class="col-sm-7">Tahun Pajak</label>
                <div class="col-sm-5">
                  <select class="form-control mb-3" name="tahun_pajak" value="" style="max-width: 180px;">
                    <placeholder>Tahun
                    <option selected="selected" value="" disabled>Tahun</option>
                    <?php
                    for($i=date('Y'); $i>=date('Y')-32; $i-=1){
                      echo"<option value='$i'> $i </option>";
                    }
                    ?>
                  </placeholder>
                  </select>


                </div>
              </div>

              <div class="form-group row" style="padding-left: 40px; padding-right: 40px;">
                <label class="col-sm-7">Status SPT</label>

                <div class="col-sm-5">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="normal" name="status_spt" class="custom-control-input" onclick="status()" value="Normal">
                    <label class="custom-control-label" for="normal">Normal</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="pembetulan" name="status_spt" class="custom-control-input" onclick="status();" value="Pembetulan">
                    <label class="custom-control-label" for="pembetulan">Pembetulan</label>
                  </div>
                </div>

              </div>

              <div class="form-group row" style="padding-left: 40px; padding-right: 40px">
                <label class="col-sm-7 col-form-label">Pembetulan Ke</label>
                <div class="col-sm-5">


                  <input class="form-control" type="hidden" name="pembetulan_ke" value="0">

                  <input class="form-control" type="number" name="pembetulan_ke" id="pembetulan_ke" value="0" 
                  style="text-align: right; width: 73%" min="0"  disabled>



                  <script type="text/javascript">

                    function status(){
                     var btn_normal = document.getElementById('normal');
                     var btn_pembetulan = document.getElementById('pembetulan');
                     var inp_pembetulan = document.getElementById('pembetulan_ke');

                      if (btn_normal.checked) {

                      inp_pembetulan.disabled = true;
                      inp_pembetulan.value = 0;

                      }
                      
                       if (btn_pembetulan.checked) { 
                          inp_pembetulan.disabled = false;

                        };


                  }

                </script>


              </div>
            </div>
            <br/>
            <hr>

            <div align="right">
              <a href="halaman2-xxx.php">
                <input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 25px"><!-- <small>Selanjutnya</small> <i class="fas fa-chevron-right"></i>/></a> -->
              </div>
              <br/>
            </form>

          </div>
        </div>
        <br/>

      </div>
    </div>
  </div>
</div> 
</div>

<script src="script.js"></script>
<!-- </div> -->
<br/>
<br/>
<br/>
<br/>
<?php include'../footer.html'; ?>
</body>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</html>

