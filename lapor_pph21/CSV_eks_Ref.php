<?php
require "connection.php";
$get1  =mysqli_query($con,"SELECT COUNT(*) FROM masa_pajak ");
$count1= mysqli_num_rows($get1);

$get2  =mysqli_query($con,"SELECT COUNT(*) FROM masa_pajak ");
$count2= mysqli_num_rows($get1);
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

      <a href="beranda.php" class="logo mr-auto"><img src="assets/img/logopoltek.png" alt=""></a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo mr-auto"><a href="beranda.php">Imperial</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="isi_profil.php" data-bs-toggle="modal" data-bs-target="#npwpModal2">Ubah Profil</a></li>
              <li><a href="isi_profil.php" data-bs-toggle="modal" data-bs-target="#npwpModal2">Edit Profil</a></li>
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
                  <li><a>Tidak Final (1721-II)</a></li>
                  <li><a>Tidak Final (1721-III)</a></li>
                  <li><a href="A1.php">A1</a></li>
                  <li><a href="InputBuktiPotong_A2.html"> A2</a></li>
                </ul>
              <li class="dropdown"><a href="#"><span>Daftar Pemotongan Pajak (1721-I)</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="ptong_pjak_bulan.php">Satu Masa Pajak</a></li>
                  <li><a href="#">Satu Tahun Pajak</a></li>
                </ul>
              </li>
              <li><a >Daftar Biaya (1721-V)</a></li>
              <li><a href="tbl_daftar_pemotongan.html">SPT Induk (1721)</a></li>
              <li><a href="daftar_ssp.html">Daftar SSP/Pbk (1721-IV)</a></li>
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
                      <li><a href="CSV_imp_ref_penerima.html">Penerima Penghasilan</a></li>
                      <li><a href="CSV_imp_ref_a1.html">Pegawai A1</a></li>
                      <li><a href="CSV_imp_ref_a2.html">Pegawai A2</a></li>
                    </ul>
                  <li class="dropdown"><a href="#"><span>Bukti Potong</span><i class="bi bi-chevron-left"></i></a>
                  <ul>
                      <li><a href="CSV_imp_bukti_xfinal.html">Tidak Final</a></li>
                      <li><a href="CSV_imp_bukti_final.html">Final</a></li>
                      <li><a href="CSV_imp_bukti_A1.html">A1</a></li>
                      <li><a href="CSV_imp_bukti_A2.html">A2</a></li>
                      <li><a href="CSV_imp_bukti_ptg_pjk_bln.html">Pemotongan Pajak Bulanan</a></li>
                    </ul>
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

          <li class="dropdown"><a href="#"><span>Referensi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Bukti Potong</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="ref_bp_pen_penghsiln.html">Penerima Penghasilan</a></li>
                  <li><a href="ref_bp_pen_a1.html">Pegawai A1</a></li>
                  <li><a href="ref_bp_pen_a2.html">Pegawai A2</a></li>
                  <li><a href="#">Penomoran Bp</a></li>
                  
                </ul>
              <li class="dropdown"><a href="#"><span>Kode</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Tarif</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                </ul>
              </li>
              <li><a href="#">Ubah Username</a></li>
              <li><a href="#">Ubah Password</a></li>
            </ul>
          </li>
          </li>
          
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
                    <a href="#">
                        <button type="button" class="btn btn-primary">Buat SPT</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Refersni ekspor ======= -->
    <section id="contact">
        <div class="container wow fadeInUp">

            <div class="card mx-auto">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <h3 class="section-title">Ekspor Referensi Bukti Potong</h3>
                        <div class="section-title-divider"></div>
                    </div>
                </div>

                <div class="mx-auto" style="margin-bottom: 20px">
                    <table>
                        <tr>
                            <td>Referensi Penerima Penghasilan </td>
                            <td>: <?=$count1;?></td>
                            <td>Unit</td>
                            <td>
                            <a href="Data_Ekspor.php" class="btn btn-success btn-xm" title="export to excel">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-spreadsheet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5 10H3V9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2zm1 0v2h3v-2H6z" />
                                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        </svg>Export
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Referensi Pegawai A1 </td>
                            <td>: <?=$count2;?></td>
                            <td>Unit</td>
                            <td>
                            <a href="Data_Ekspor2.php" class="btn btn-success btn-xm" title="export to excel">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-spreadsheet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5 10H3V9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2zm1 0v2h3v-2H6z" />
                                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        </svg>Export
                            </td>
                        </tr>
                        <tr>
                            <td>Referensi Pegawai A2</td>
                            <td>:</td>
                            <td>Unit</td>
                            <td>
                            <a href="Data_Ekspor3.php" class="btn btn-success btn-xm" title="export to excel">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-spreadsheet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5 10H3V9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2zm1 0v2h3v-2H6z" />
                                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        </svg>Export
                            </td>
                        </tr>
                    </table>

                </div>




            </div>
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