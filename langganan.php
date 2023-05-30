<?php session_start(); ?>
<?php error_reporting(false); ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Lapor Pajak</title>
  <link href="assets/img/logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->

  <link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/>

  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  

  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="1770S/bootstrap/js/jquery.js"></script>
  <script src="1770S/bootstrap/js/bootstrap.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
</head>
<body class="bg-body">

  <?php
  include "koneksi.php";


?>
<?php include 'Cie_Gak_Login.php' ?>

      <?php include'header2.html'; ?>
      <br />
      <div class="container box" style="padding-right:0px;">
        <br />
        <form >

          <!-- tab content -->
          <div class="tab-content" >
            <!-- tab pane -->
            <div class="tab-pane active" id="lapor_detail" >
              <!-- panel -->
              <div class="panel panel-default">
                <!-- panel body -->
                <div class="panel-body">

                  <!-- membuat card navbar -->
                  <div class="card card_8 box-shadow">
                    <div class="card-body" >

                      <!-- membuat row -->
                      <div class="row">

                        <!-- membuat tab -->
                        <div class="col-sm-9" >
                         <ul class="nav nav-tabs" >
                          <li class="nav-item">
                            <a href="informasii.php" >Informasi</a>
                          </li>
                    
                          <li class="nav-item jarak-nav">
                            <a href="layanann.php">Layanan</a>
                          </li>
                        </ul>
                      </div>
                      
                </div>
                <!-- end membuat row -->
              </div>
            </div>
            <!-- end membuat card navbar -->

            <br/>


            <!-- agar kolom tidak ada batas row -->
            <div class="row no-gutters">

              <!-- membuat kolom kiri-->
              <div class="wall col-md-100">

                <!-- card Menu lapor -->

                <!-- end membuat kolom kiri-->

                <!-- membuat kolom kanan -->
               <div class="wall col-md-7">
                  <div class="card card_1">
                  <div class="card-header card-header_1">
                   <b>Paket Basic</b>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item font-14px"></i> Multi user 32 account</li>
                    <li class="list-group-item font-14px"></i> Full control </li>
                    <li class="list-group-item font-14px"></i> Masa aktif 6 bulan</li>
                    <li class="list-group-item font-14px"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harga Rp 100.000</li>
                  </ul>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tbl_basic.php" class="btn btn-primary right">Klick Disni</a>
                </div>
              </div>

              <div class="wall col-md-5" style="">
                <div class="card card_1">
                  <div class="card-header card-header_1">
                   <b>Paket Pro</b>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item font-14px"></i> Multi user 60 account</li>
                    <li class="list-group-item font-14px"></i> Full control </li>
                    <li class="list-group-item font-14px"></i> Masa Aktif 6 bulan</li>
                    <li class="list-group-item font-14px"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harga Rp 300.000</li>
                  </ul>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tbl_pro.php" class="btn btn-primary right">Klick Disni</a>
                </div>
              </div>
            </div>

                  <!-- membuat card highlight -->
                  
       
             <!-- end card riwayat pelaporan -->
           </div>
           <!-- end membuat kolom kanan-->
         </div>
         <!-- end agar kolom tidak ada batas row  -->
       </div>
       <!-- end panel body -->
     </div> 
     <!-- end panel panel -->
   </div>
   <!-- end tab pane -->
 </div>
 <!-- end tab content -->
</form>
<!-- end form -->
</div>
<!-- end container box -->
<script src="script.js"></script>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<br/>
<br/>
<br/>
<br/>
<?php include'footer 1.html'; ?>
</body>
</html>

