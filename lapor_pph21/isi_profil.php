<?php require_once "controllerUserData.php"; ?>
<?php 
$NPWP = $_SESSION['NPWP'];
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];


if($NPWP != false  && $Email != false && $Password != false ){

  
    $sql = "SELECT * FROM akun_user WHERE NPWP = '$NPWP'";
    $run_Sql = mysqli_query($con, $sql);
    $data = "SELECT * FROM isi_profil WHERE NPWP = '$NPWP'";
    $hasil = mysqli_query($con, $data);
    if($run_Sql){
        $fetch_info_sql = mysqli_fetch_assoc($run_Sql);
       
        
    }
    if($hasil ){
      $fetch_info = mysqli_fetch_assoc($hasil);
    }
    
   
    
    
    
        
}



?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="assets/img/icon.png" /> 
    <title>E-Spt PPH21 Edukasi</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Imperial - v5.5.0
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="assets/img/logopoltek.png" alt="logopoltek">
        </div>

        <h1>Selamat Datang di PPH21 versi Edukasi</h1>
        <h2>PPH21 <span class="typed" data-typed-items="Perhitungan Pajak, Pelaporan Pajak, Versi Edukasi"></span></h2>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="beranda.php" class="logo mr-auto"><img src="assets/img/logopoltek.png" alt=""></a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo mr-auto"><a href="beranda.php">Imperial</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#"><span>Database</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" >Buka Perusahaan</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pilih SPT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="" data-bs-toggle="modal" data-bs-target="#buatspt">Buat SPT Baru</a></li>
                <li><a href="daftar_spt.php" <?php if ($fetch_info != NULL){ ?> style=" pointer-events: none;" <?php   } ?>>Buka SPT</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Isi SPT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Daftar Bukti Potong</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Tidak Final (1721-II)</a></li>
                  <li><a href="#">Tidak Final (1721-III)</a></li>
                  <li><a href="#">A1</a></li>
                  <li><a href="#">A2</a></li>
                </ul>
              <li class="dropdown"><a href="#"><span>Daftar Pemotongan Pajak (1721-I)</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="#">Satu Masa Pajak</a></li>
                  <li><a href="#">Satu Tahun Pajak</a></li>
                </ul>
              </li>
              <li><a href="#">Daftar Biaya (1721-V)</a></li>
              <li><a href="#">SPT Induk (1721)</a></li>
              <li><a href="#">Daftar SSP/Pbk (1721-IV)</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#">CSV</a></li>
          <li><a class="nav-link scrollto" href="#">Cetak</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Referensi</a></li>
          <li><a class="nav-link scrollto" href="#about">Profil</a></li>
          <li><a class="nav-link scrollto" href="#services">Help</a></li>
          <li><a class="las la-user" href="logout-user.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- Modal -->
<div class="modal fade" id="buatspt" tabindex="-1" aria-labelledby="buatsptLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="buatsptLabel">Masukkan Masa SPT</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <input type="date" class="form-control" id="inputnpwp" aria-describedby="npwpHelp"> 
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <a href="#"><button type="button" class="btn btn-primary">Buat SPT</button></a>
        </div>
      </div>
    </div>
  </div>
<!-- ======= Contact Section ======= -->
<section id="contact">
  <div class="container wow fadeInUp">
    
    <div class="card mx-auto">
    <div class="row">
      <div class="col-md-12">
          <br>
        <h3 class="section-title">Profil Wajib Pajak</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">Silahkan Mengisi Profil Dengan Benar</p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-4">
        <div class="info">
        <div>
            <p><b>NPWP</b></p>
          </div>
          <div>
            <p><b>NAMA</b></p>
          </div>

          <div>
            <p><b>ALAMAT</b></p>
          </div>

          <div>
            <br>
            <br>
            <br>
            <p><b>NO TELEPON</b></p>
          </div>

          <div>
            <p><b>EMAIL</b></p>
          </div>

          <div>
            <p><b>NPWP PENANDATANGAN</b></p>
          </div>

          <div>
            <p><b>NAMA PENANDATANGAN</b></p>
          </div>

          <div>
            <p><b>NPWP KUASA</b></p>
          </div>

          <div>
            <p><b>NAMA KUASA</b></p>
          </div>

        </div>
      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <form action="controllerUserData.php" method="POST">
          <div class="form-group">
              <input type="text" name="npwp_user" class="form-control" id="npwp_user"   value=" <?php  echo $fetch_info_sql['NPWP']?>"required readonly>
            </div>
            <div class="form-group mt-4">
              <input type="text" name="nama" class="form-control" id="nama" value=" <?php  if($fetch_info == NULL){}else{echo $fetch_info['nama'];} ?>" required>
            </div>
            <div class="form-group mt-4">
              <textarea class="form-control" rows="4" name="alamat" id="alamat"  required><?php if($fetch_info == NULL){}else{  echo $fetch_info['alamat'];} ?></textarea>
            </div>
            <div class="form-group mt-4">
              <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan No Telepon" value=" <?php  if($fetch_info == NULL){}else{echo $fetch_info['telp'];} ?>" required>
            </div>
            <div class="form-group mt-4">
                <input type="text" class="form-control" name="email_company" id="email_company" placeholder="Masukkan Email Perusahaan" value=" <?php if($fetch_info == NULL){}else{echo $fetch_info['email_company'];} ?>" required>
              </div>
              <div class="form-group mt-4">
                <input type="text" class="form-control" name="npwp_ttd" id="npwp_ttd" placeholder="Masukkan NPWP Penandatangan" value=" <?php if($fetch_info == NULL){}else{echo $fetch_info['npwp_ttd'];} ?>" required>
              </div>
              <div class="form-group mt-4">
                <input type="text" class="form-control" name="nama_ttd" id="nama_ttd" placeholder="Masukkkan Nama Penandatangan" value=" <?php if($fetch_info == NULL){}else{echo $fetch_info['nama_ttd'];}?>" required>
              </div>
              <div class="form-group mt-4">
                <input type="text" class="form-control" name="npwp_kuasa" id="npwp_kuasa" placeholder="Masukkan NPWP Kuasa" value=" <?php if($fetch_info == NULL){}else{ echo $fetch_info['npwp_kuasa'];}?>" required>
              </div>
              <div class="form-group mt-4">
                <input type="text" class="form-control" name="nama_kuasa" id="nama_kuasa" placeholder="Masukkan Nama Kuasa" value=" <?php if($fetch_info == NULL){}else{ echo $fetch_info['nama_kuasa'];}?>" required>
              </div>
              <div>
                <p><br><input type="checkbox" name="a2" value="a2">  Bendahara Pemerintah/Pembuat Bukti Potong A2</p>
              </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your profile has been sent. Thank you!</div>
            </div>
            
            <button class ="btn btn-secondary float-end"<?php if ($fetch_info != NULL){ ?> disabled <?php   } ?> type="simpan" name="simpan">SIMPAN</button>

            <button class ="btn btn-secondary float-end me-3" type="edit_profil" name="edit_profil">EDIT</button>
            


         
          
            <br>
            <br>
            <br>
          </form>
        </div>
      </div>

    </div>
</div>
  </div>
</section><!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Website PPH21 Edukasi</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
            Designed by <a href="#">Tim PBL PPH21 Polibatam</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>