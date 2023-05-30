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
<?php include '../header.html' ?>
<body class="bg-body"> 
 <br/>

 <div class="container box"> 
   <br/>
   
   <!-- <form> -->
    <!-- <ul class="nav nav-tabs">
     <li class="nav-item">
      <a>Arsip SPT</a>
    </li>
    <li class="nav-item" style="background-color: #f5f5f5;">
      <a style="color: #191970;">Buat SPT</a>
    </li>
    <li class="nav-item">
      <a>Draft SPT</a>
    </li>
    <li class="nav-item">
      <a>Bantuan</a>
    </li>
  </ul> -->

  <!-- Container -->
  <div class="tab-content">
    <div class="tab-pane active" id="lapor_detail" >

      <!-- Content -->
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
                  <img src="../img/e-filling.png" width="100px" >
                </div>
                <!-- end menambahkan gambar e-filling -->

              </div>
              <!-- end membuat row -->
            </div>
          </div>
          <!-- end membuat card navbar -->

          <br/>

          <!-- Card -->
          <div class="card bg-light mb-3" style="width:735px; background-color: white;">
            <div class="card-header card-header_1">
              <i class="fas fa-file mr-1"></i>
              <b>SPT 1770 SS</b>
            </div>

            <div class="card-body card-body_2">  
              <p class="p_text_2 card_7"><b> Isi SPT </b></p>

              <!-- progress bar -->
              <div class="progress">
                <div class="progress-bar progress-bar-striped" style="width:49.80%; background-color: rgb(255, 157, 49);"><small>49.80%</small></div>
              </div>
              <p class="p_text" style="padding-left: 0px; padding-top: 0px;"><small>Halaman dari ke 3 dari 6</small></p>
              <br/>

              <!-- card self assesment -->
              <div class="card" style="border:1px solid #ffd700; height: 45px; background-color: white; border-radius: 7px;">
                <div class="card-body card-body_1"><b>
                  Sesuai dengan Prinsip <i>Self Assessment, Isi SPT Tahunan Merupakan Tanggung Jawab Wajib Pajak</i></b>
                </div>
              </div>
              <!-- end card assesment -->

              <!-- bagian B -->
              <div class="card">
                <div class="card-header_c2" id="headingTwo" style="border-radius: 7px">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block collapsed button_1" type="button">
                      <b>B. Penghasilan yang dikenakan PPh Final  dan yang dikecualikan dari objek pajak</b>
                    </button>
                  </h2>
                </div>
                <div >
                  <div class="card-body">
                   <div class="tab-content" style="margin-top:16px;">

                    <?php include'pertanyaan3.php'; ?>

                  </div>
                </div>
              </div>
            </div>  
            <!-- end bagian B -->

            <!-- Button Collapse-->
            <!-- <div class="card bg-light mb-3" style="width:700px; background-color: white;">
              <div class="col-sm-6">
                <a href="isi_data_formulir_SS.php">
                  <button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
                </div>
                <div class="col-sm-6" style="padding-left: 240px;">
                  <button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;" disabled><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button>
                </div>
              </div>
              <br/>
              <br/> -->
              <!-- end button collapse -->


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </form> -->
</div>
<script type="text/javascript" src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" >

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
  <?php include'../footer.html'; ?>
</body>
</html> 
