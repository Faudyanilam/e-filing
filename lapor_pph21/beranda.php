<?php require_once "controllerUserData.php"; ?>
<?php 
$NPWP = $_SESSION['NPWP'];
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];
if($NPWP != false  && $Email != false && $Password != false ){
    $sql = "SELECT * FROM akun_user WHERE NPWP = '$NPWP'";
    $run_Sql = mysqli_query($con, $sql);
    $data1 = "SELECT a2 FROM isi_profil WHERE NPWP = '$NPWP'";
    $hasil1 = mysqli_query($con, $data1);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $Kode_Efin = $fetch_info['Kode_Efin'];
        if($status == "verified"){
            if($Kode_Efin != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
    if($hasil1){
      $fetch_info1 = mysqli_fetch_assoc($hasil1);
    }
}else{
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <title><?php echo $fetch_info['Username'] ?> | Website PPh21 </title>
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

  <style type="text/css">
    a[disabled="disabled"] {
        pointer-events: none;
    }
</style>
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="assets/img/logopoltek.png" alt="logopoltek">
        </div>

        <h1>Selamat Datang di PPH21 versi Edukasi <?php echo $fetch_info['Username'] ?></h1>
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
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="isi_profil.php" data-bs-toggle>Ubah Profil</a></li>
              <li><a href="Lihat_Profil.php" data-bs-toggle>Lihat Profil</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pilih SPT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#buatspt">Buat SPT Baru</a></li>
              <li><a href="daftar_spt.php">Buka SPT</a></li>
            </ul>
          </li>
          <?php
          if(isset($_GET['idspt'])){
          $id = $_GET['idspt'];
          $pembetulan = $_GET['pembetulan'];
           $fetch_info1['a2'];
          
          }
          ?>

          <li class="dropdown"><a href="#"><span>Isi SPT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Daftar Bukti Potong</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Tidak Final (1721-II)</a></li>
                  <li><a href="#">Tidak Final (1721-III)</a></li>
                  <li><a href="A1.php?idspt=<?php if(isset($_GET['idspt'])){ echo $id;}?>&pembetulan=<?php if(isset($_GET['idspt'])){echo $pembetulan;} ?> ">A1</a></li>
                  
              <li><a href="DaftarBuktiPotong_A2.php?idspt=<?php if(isset($_GET['idspt'])){echo $id;}?>"  >A2</a></li>
                </ul>
                
              <li class="dropdown"><a href="#"><span>Daftar Pemotongan Pajak (1721-I)</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="ptong_pjak_bulan.php?idspt=<?php if(isset($_GET['idspt'])){echo $id;}?>&pembetulan=<?php echo $pembetulan;?>">Satu Masa Pajak</a></li>
                  <li><a href="#">Satu Tahun Pajak</a></li>
                </ul>
              </li>
              <li><a href="#">Daftar Biaya (1721-V)</a></li>
              <li><a href="#">SPT Induk (1721)</a></li>
              <li><a href="#">Daftar SSP/Pbk (1721-IV)</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>CSV</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Ekspor</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="CSV_eks_Ref.php">Referensi</a></li>
                  <li><a href="CSV_eks_bukti.html">Bukti potong dan SSP</a></li>
                  
                </ul>
              <li class="dropdown"><a href="#"><span>Impor</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="dropdown"><a href="#"><span>Referensi</span><i class="bi bi-chevron-left"></i></a>
                    <ul>
                      <li><a href="#">Penerima Penghasilan</a></li>
                      <li><a href="#">Pegawai A1</a></li>
                      <li><a href="#">Pegawai A2</a></li>
                    </ul>
                  <li><a href="#">Bukti Potong</a></li>
                  <li><a href="SSP.php">SSP</a></li>
                </ul>
              </li>
              <li><a href="pel_spt.html">Pelaporan SPT</a></li>
              
            </ul>
          </li>

         
          
          </li>
          <li class="dropdown"><a href="#"><span>Cetak</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="cet_form.html" >Formulir SPT</a></li>
              <li><a href="cet_bp1.html">Bukti Potong</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="#portfolio">Referensi</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Help</a></li>
          <li><a class="las la-user" href="logout-user.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
        
<!-- Modal NPWP -->
<div class="modal fade" id="npwpModal" tabindex="-1" aria-labelledby="npwpModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title" id="npwpModalLabel">Pengisian NPWP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <input type="npwp" class="form-control" id="inputnpwp" name="npwp" value="<?php echo $fetch_info['NPWP'] ?>" aria-describedby="npwpHelp" disabled>
            <div id="npwpHelp" class="form-text">Silahkan masukkan 15 digit NPWP</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
       <a href="isi_profil.php"> <button type="button" class="btn btn-primary" name="submit">Simpan</button></a>
       
        
      </div>
      
    </div>
  </div>
</div>

<!-- Modal Buat SPT-->
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

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Tentang PPH21 Edukasi</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Latar belakang pembuatan aplikasi pelaporan dan perhitungan pph21 versi edukasi berbasis website</p>
          </div>
        </div>
      </div>
      <div class="container about-container wow fadeInUp">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="assets/img/poltek.jpg" alt="">
          </div>

          <div class="col-md-6 about-content">
            <h2 class="about-title">APA ITU PPH21 VERSI EDUKASI?</h2>
            <p class="about-text">
             Bagi setiap wajib pajak, SPT memiliki fungsi sebagai suatu sarana untuk melaporkan pertanggung jawaban atas perhitungan
             jumlah pajak. Seperti pembayaran atau pelunasan pajak yang telah dilaksanakan sendiri ataupun melalui pemotongan atau pemungutan
             pajak yang dilakukan oleh pihak lain.
            </p>
            <p class="about-text">
              Banyak masyarakat umum yang masih belum paham bagaimana pajak itu sendiri, seperti bagaimana cara melaporkannya, bagaimana cara
              menghitung pajak dari gaji yang dihasilkan dan lain lain. Oleh karena itu tim PBL Politeknik Negeri Batam ingin membantu
              siapa saja yang ingin belajar tentang perpajakan ini.
            </p>
            <p class="about-text">
              Website PPH 21/26 versi edukasi dibentuk untuk pembelajaran saja, tidak langsung terhubung ke Dirjen Pajak. Jadi pengguna
              akan bebas untuk mengeksplor dan mempelajari cara membuat SPT tanpa harus terhubung langsung ke Dirjen Pajak.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Manual Help</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Manual Help adalah panduan ringkas bagaimana user akan menggunakan website sebagai bahan belajar melaporkan pph21</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="service-title"><a href="">Login dengan NPWP</a></h4>
            <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="service-title"><a href="">Isi Profil WP</a></h4>
            <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="service-title"><a href="">Cara melihat SPT</a></h4>
            <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="service-title"><a href="">Cara Menghapus SPT</a></h4>
            <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="service-title"><a href="">Cara menghitung pph perorangan</a></h4>
            <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="service-title"><a href="">Kode aktivasi email</a></h4>
            <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Referensi</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Referensi Aplikasi PPH21 Edukasi adalah E-SPT milik Direktorat Jenderal Pajak</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-12 col-md-12 portfolio-item filter-web">
            <img src="assets/img/espt.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    
  </main><!-- End #main -->

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