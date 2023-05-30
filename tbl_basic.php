<?php  
  include "koneksi.php";
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Dasboard | Politeknik Negeri Batam</title>
  <link href="assets/img/logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-body">  
  <?php include'header.html'; ?>
  <br />

  <div class="container box"> 
    <br />
    <!-- <h2 align="center"></h2><br /> -->

      <!-- <ul class="nav nav-tabs">
        <li class="nav-item">
          <a href="informasi.php">Informasi</a>
        </li>
        <li class="nav-item">
          <a href="dasboard.php">Dasboard</a>
        </li>
        <li class="nav-item" style="background-color: #f5f5f5;">
          <a href="profil.php" style="color: #191970;">Profil</a>
        </li>
        <li class="nav-item">
          <a href="bayar.php">Bayar</a>
        </li>
        <li class="nav-item">
          <a href="lapor.php">Lapor</a>
        </li>
        <li class="nav-item">
          <a href="layanan.php">Layanan</a>
        </li>
      </ul> -->

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
                          <a href="informasi.php">Informasi</a>
                        </li>
                        <li class="nav-item jarak-nav">
                          <a href="layanan.php">Layanan</a>
                        </li>
                      </ul>
                    </div>
                    <!-- end membuat tab -->

                    <!-- menambahkan gambar e-filling -->
                    <!-- <div align="right" class="col-sm-3" style="padding-right: 30px;">
                      <img src="img/e-filling.png" width="100px" >
                    </div> -->
                    <!-- end menambahkan gambar e-filling -->

                  </div>
                  <!-- end membuat row -->
                </div>
              </div>
              <!-- end membuat card navbar -->

              <br/>

              <!-- membuat card highlight -->
              <div class="card card_3">
                <div class="card-body card-body_1"><small><b>
                "Registrasi Akun Basic"</b></small>
              </div>
            </div>
            <!-- end membuat card highlight -->
            <br/>

            <div class="card bg-light mb-3" style="width:735px; background-color: white;">
              <!-- card header -->
              <div class="card-header card-header_1">
                <i class="fas fa-user"></i>
                <b>Data Profil</b>
              </div>

            <div class="card-body card-body_2">  
                <p class="p_text_2 card_7"><b></p>

    <form method="POST" enctype="multipart/form-data" action="tbl_basic.php">


      <label>NPWP</label>
      <input type="text" name="id_daftar_npwp" class="form-control" value="<?php echo $_SESSION['npwp']; ?> " readonly>
      
      <label>EMAIL</label>
      <input type="text" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?> " readonly>
      

      <label>NAMA</label>
      <input type="text" name="nama_ktp" class="form-control" value="<?php echo $_SESSION['nama_ktp']; ?> " readonly>

      <label>HARGA</label>
      <input type="text" name="harga" class="form-control" value="300.000" readonly>
 
      <label></label>
      <input type="hidden" name="akun" class="form-control" value="basic" readonly>

      <label></label>
      <input type="hidden" name="user" class="form-control" value="32 user" readonly>
      <hr>

      <label>UPLOD BUKTI PEMBAYARAN</label>
      <input type="file" name="bukti" id="bukti" accept=".png" class="form-control" required="">
      <br>
      <hr>
      <label>UPLOD DATA NPWP&EFFIN</label>
      <input type="hidden" name="file_data" id="file_data" accept=".xlsx" class="form-control" required="">
      <br>

      <br>
      <input type="submit" class="btn btn-primary" value="Submit" name="submit">&nbsp;&nbsp;

    <a class="btn btn-success" href="langganan.php">Kembali</a>

    </form>

<?php
  
  if(isset($_POST['submit'])) {
    $id_daftar_npwp = $_POST['id_daftar_npwp'];
    $email = $_POST['email'];
    $nama_ktp = $_POST['nama_ktp'];
    $harga = $_POST['harga'];
    $akun = $_POST['akun'];
    $user = $_POST['user'];
  $id_paket = $_SESSION['id_paket'];
    $directory = 'tmp_admin/pembayaran/';
    $bukti = $_FILES['bukti']['name'];
    move_uploaded_file($_FILES['bukti']['tmp_name'],$directory.$bukti);
    $directory2 = 'tmp_admin/data/';
    $file_data = $_FILES['file_data']['name'];
    move_uploaded_file($_FILES['file_data']['tmp_name'],$directory2.$file_data);


    mysqli_query($koneksi, "update tb_pelanggan set email='$email', nama_ktp='$nama_ktp', id_daftar_npwp='$id_daftar_npwp', harga='$harga', akun='$akun', user='$user', bukti='$bukti', file_data='$file_data' where id='$id_paket'");
    
    if($_SESSION['jenis_wp'] == 'Badan'){
      echo "<script>window.close();</script>";
    }else{
      echo "<meta http-equiv='refresh' content='0;url=lapor.php?hasil=langganan'>";
    }
      
    

  }
  ?>


                  </div>
                  <!-- end card body -->
                </div>
                <!-- end card bg -->
              </div>
              <!-- end panel body -->
            </div>
            <!-- end panel -->
          </div>
          <!-- end tab pane -->
        </div>
        <!-- end tab content -->
      </form>
    </div>
    <!-- end container box -->
    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" >

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <?php include'footer 1.html'; ?>
  </body>
  </html> 


