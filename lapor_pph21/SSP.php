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
        <h2>PPH21
          <span class="typed" data-typed-items="Perhitungan Pajak, Pelaporan Pajak, Versi Edukasi"></span>
        </h2>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="beranda.php" class="logo mr-auto">
        <img src="assets/img/logopoltek.png" alt="">
      </a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo mr-auto"><a href="beranda.php">Imperial</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown">
            <a href="#">
              <span>Database</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li>
                <a href="#">Buka Perusahaan</a>
              </li>
              <li>
                <a href="" data-bs-toggle="modal" data-bs-target="#npwpModal">Daftarkan Perusahaan</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#">
              <span>Pilih SPT</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li>
                <a href="" data-bs-toggle="modal" data-bs-target="#buatspt">Buat SPT Baru</a>
              </li>
              <li>
                <a href="#">Buka SPT</a>
              </li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#">
              <span>Isi SPT</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li class="dropdown">
                <a href="#">
                  <span>Daftar Bukti Potong</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <ul>
                  <li>
                    <a href="#">Tidak Final (1721-II)</a>
                  </li>
                  <li>
                    <a href="#">Tidak Final (1721-III)</a>
                  </li>
                  <li>
                    <a href="#">A1</a>
                  </li>
                  <li>
                    <a href="#">A2</a>
                  </li>
                </ul>
                <li class="dropdown">
                  <a href="#">
                    <span>Daftar Pemotongan Pajak (1721-I)</span>
                    <i class="bi bi-chevron-right"></i>
                  </a>
                  <ul>
                    <li>
                      <a href="#">Satu Masa Pajak</a>
                    </li>
                    <li>
                      <a href="#">Satu Tahun Pajak</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Daftar Biaya (1721-V)</a>
                </li>
                <li>
                  <a href="#">SPT Induk (1721)</a>
                </li>
                <li>
                  <a href="#">Daftar SSP/Pbk (1721-IV)</a>
                </li>
            </ul>
            </li>

            <li>
              <a class="nav-link scrollto" href="#">CSV</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="#">Cetak</a>
            </li>
            <li>
              <a class="nav-link scrollto " href="#portfolio">Referensi</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="#about">Profil</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="#services">Help</a>
            </li>
            <li><a class="las la-user" href="logout-user.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

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
          <a href="#">
            <button type="button" class="btn btn-primary">Buat SPT</button>
          </a>
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
            <h3 class="section-title">Impor SSP</h3>
            <div class="section-title-divider"></div>
          </div>
        </div>
        <div class="mb-3 col-md-11 mx-auto">
        <form method="post" enctype="multipart/form-data" action="proses.php">
        <label for="exampleInputFile">File Upload</label>     
        <input type="file" name="berkas_excel" class="form-control" id="exampleInputFile">
        </div>
        <?php
		if(isset($_GET['berhasil'])){
			//tampilkan jumlah data yang berhasil di import
			echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
		}

	?>
        <div class="col-md-11 mx-auto ">
          <table class="table table-bordered border-dark table-striped">
            <tr>
            <td>No</td>
            <td>Masa Pajak</td>
            <td>Tahun Pajak</td>
            <td>Pembetulan</td>
            <td>KAP</td>
            <td>KJS</td>
            <td>Tanggal</td>
            <td>Nomor SSP/Pbk</td>
            <td>Jumlah Setoran</td>
          </tr>
          <?php
			include "connection.php";
			$no = 1;
			$tampil = mysqli_query($con, "SELECT * from tpegawai ");
			while($data = mysqli_fetch_array($tampil)) :

    ?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $data['masa_pajak']?></td>
				<td><?php echo $data['tahun_pajak']?></td>
        <td><?php echo $data['pembetulan']?></td>
        <td><?php echo $data['kap']?></td>
        <td><?php echo $data['kjs']?></td>
        <td><?php echo $data['tanggal']?></td>
        <td><?php echo $data['nomor_spp']?></td>
        <td><?php echo $data['jumlah_setoran']?></td>
			</tr>
		<?php endwhile; ?>
          </table>
          <form class="form-horizontal" action="proses_ssp.php" method="post" name="upload_excel"  enctype="multipart/form-data">
          <div class=" mb-4" style="margin-left: 20px">
            <button class="btn-primary" type="error">Error Log</button>
            <button type="submit" class="btn-primary" style="margin-left: 35rem   ">Impor</button>
          </div>
          </form>
          </form>
            






      </div>
  </section>
  <!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright
            <strong>Website PPH21 Edukasi</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
            Designed by
            <a href="#">Tim PBL PPH21 Polibatam</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

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