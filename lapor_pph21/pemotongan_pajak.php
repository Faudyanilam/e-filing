<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="id">
<?php
$id = $_GET['idspt'];
?>
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
              <li><a href="" data-bs-toggle="modal" data-bs-target="#npwpModal">Daftarkan Perusahaan</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pilih SPT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="" data-bs-toggle="modal" data-bs-target="#buatspt">Buat SPT Baru</a></li>
                <li><a href="daftar_spt.php">Buka SPT</a></li>
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
                  <li><a href="ptong_pjak_bulan.php">Satu Masa Pajak</a></li>
                  <li><a href="#">Satu Tahun Pajak</a></li>
                </ul>
              </li>
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
          <a href="#" type="button" class="btn btn-primary">Buat SPT</a>
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
        <h3 class="section-title">Input Data Pemotongan Pajak</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">PEMOTONGAN PAJAK PENGHASILAN PASAL 21 BAGI PEGAWAI TETAP DAN PENERIMA PENSIUN ATAU TUNJANGAN HARI TUA BERKALA SERTA BAGI PEGAWAI NEGERI SIPIL, ANGGOTA TENTARA NASIONAL INDONESIA, ANGGOTA POLISI REPUBLIK INDONESIA, PEJABAT NEGARA DAN PENSIUNANNYA</p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-5">
        <div class="info">
          <div>
            <p><b>NPWP</b></p>
          </div>

          <div>
            <p><b>NAMA</b></p>
          </div>

          <div>
            <p><b>KODE OBJEK PAJAK</b></p>
          </div>

          <div>
            <p><b>JUMLAH PENGHASILAN BRUTO (Rp.)</b></p>
          </div>

          <div>
            <br>
            <br>
            <br>
            <p><b>PPh DIPOTONG (Rp.)</b></p>
          </div>

          <div>
            <p><b>KODE NEGARA DOMISILI</b></p>
          </div>


        </div>
      </div>

      <div class="col-lg-5 col-md-6">
        <div class="form">
          <form method="post" >
          <div role="form" class="php-email-form">
          <input type="hidden" name="id" class="form-control" id="id" required value="<?php echo $id;?>">
            <div class="form-group">
              <input type="text" name="npwp" class="form-control" id="npwp" placeholder="Masukkan NPWP" required value="">
            </div>
            <div class="form-group mt-4">
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required value="">
            </div>
            <div class="form-group mt-4">
                <select class="form-select" name="kode_object_pajak" id="kode_object_pajak"  required value="">
                  <option selected>Pilih Kode Objek Pajak</option>
                  <option>21-100-01</option>
                  <option>21-100-02</option>
                </select>
              </div>
              <div class="form-group mt-4">
                <input type="number" class="form-control" name="jumlah_penghasilan_bruto" id="jumlah_penghasilan_bruto" placeholder="Masukkan Jumlah Penghasilan Bruto" required value=""> 
              
                <button class="form-group-row mt-4 btn btn-warning">HITUNG</button>
            
              </div>
              <div class="form-group mt-4">
                <br>
                <input type="number" class="form-control" name="pph_dipotong" id="pph_dipotong" placeholder="Masukkkan PPh Dipotong" required value="">
              </div>
              <div class="form-group mt-4">
                <select class="form-select" name="kode_negara_domisili" id="kode_negara_domisili" placeholder="Masukkan NPWP Kuasa" required value="">
                  <option selected>Pilih Kode Negara</option>
                  <option>...</option>
                </select>
              </div>
            <br>
            <br>
            <div class="text-center">
              <a href="#" type="button" class="btn btn-secondary" >BATAL</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button class="btn btn-secondary" type="submit" name="satu_masa" id="satu_masa" >SIMPAN</button></div>
            <br>
            <br>
            <br>
          </form>
        </div>
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