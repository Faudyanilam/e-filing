<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>

<?php 
$NPWP = $_SESSION['NPWP'];
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];
$data1 = "SELECT a2 FROM isi_profil WHERE NPWP = '$NPWP'";
$hasil1 = mysqli_query($con, $data1);
if($hasil1){
  $fetch_info1 = mysqli_fetch_assoc($hasil1);
}

if(isset($_GET['idspt'])){
$id = $_GET['idspt'];

?>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="assets/img/icon.png" />
  <title>E-Spt PPH21 Edukasi</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph                integration: https://developers.facebook.com/docs/sharing/opengraph -->
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
          <li class="dropdown"><a href="#"><span>Database</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#npwpModal2">Buka Perusahaan</a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#npwpModal">Daftarkan Perusahaan</a></li>
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
                  <li><a href="A1.html">A1</a></li>
                  <li><a>A2</a></li>
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
                  <li><a href="CSV_eks_Ref.html">Referensi</a></li>
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
          <a href="#" type="button" class="btn btn-primary">Buat SPT</a>
        </div>
      </div>
    </div>
  </div>

<!--Ubah Spt Modal-->
<div class="modal fade" id="UbahSPT" tabindex="-1" aria-labelledby="UbahSPTModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UbahSPTModalLabel" align ="center" valign="center">Ubah Surat Setoran Pajak SSP/Pemindahbukuan (Pbk)<br>
        Untuk pemotongan pajak penghasilan Pasal 21 Dan/Atau Pasal 26</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-6 col-form-label"><b>NPWP</b></label>
            <div class="col">
              <label class="col-sm-6 col-form-label"><b>: </b></label>
            </div>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="npwp" name="npwp" value="">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-6 col-form-label"><b>NAMA</b></label>
            <div class="col">
              <label class="col-sm-6 col-form-label"><b>: </b></label>
            </div>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="nama" id="nama" value="">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-6 col-form-label"><b>KODE OBJEK PAJAK</b></label>
            <div class="col">
              <label class="col-sm-6 col-form-label"><b>:</b></label>
            </div>
            <div class="col-sm-5">
              <select name="kode_object_pajak" id="kode_object_pajak" value="" class="form-select">
                <option>21-1000-01</option>
                <option>21-1000-02</option>
              </select>
            </div>
          </div>
           
          <div class="row mb-3">
            <label class="col-sm-6 col-form-label"><b>JUMLAH PENGHASILAN BRUTO (Rp.)</b></label>
            <div class="col">
              <label class="col-sm-6 col-form-label"><b>: </b></label>
            </div>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="jumlah_penghasilan_bruto" id="jumlah_penghasilan_bruto" value="">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-6 col-form-label"><b>PPh DIPOTONG (Rp.)</b></label>
            <div class="col">
              <label class="col-sm-6 col-form-label"><b>: </b></label>
            </div>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="pph_dipotong" id="pph_dipotong">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-6 col-form-label"><b>KODE NEGARA DOMISILI</b></label>
            <div class="col">
              <label class="col-sm-6 col-form-label"><b>: </b></label>
            </div>
            <div class="col-sm-5">
            <select name="kode_negara_domisili" id="kode_negara_domisili" class="form-select">
                <option value="IDN">Indonesia</option>
                <option value="MYS">Malaysia</option>
                <option value="SGP">Singapura</option>
                <option value="BRN">Brunei Darussalam</option>
                <option value="PHL">Filipina</option>
                <option value="VNM">Vietnam</option>
                <option value="THA">Thailand</option>
                <option value="KHM">Kamboja</option>
                <option value="LAO">Laos</option>
                <option value="MMR">Myanmar</option>
                <option value="TLS">Timor Leste</option>
              </select>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href=""><button type="button" class="btn btn-primary">Simpan</button></a>
      </div>
    </div>
  </div>
</div>

  <!-- ======= Contact Section ======= -->
  <section id="contac">
    <div class="container wow fadeInUp">

      <div class="card mx-auto">
        <div class="row">
          <div class="col-md-12">
            <br>
            <h3 class="section-title">DAFTAR BUKTI POTONG A2</h3>
            <div class="section-title-divider"></div>
            <p class="section-description col-md-10 mx-auto">DAFTAR PEMOTONGAN PAJAK PENGHASILAN PASAL 21 BAGI PEGAWAI NEGERI SIPIL, ANGGOTA TENTARA NASIONAL INDONESIA, PEJABAT NEGARA DAN PENSIUNANNYA</p>
            <p class="section-description">Masa Pajak : 12-2020 (Normal)</p>
            <p class="section-description ">NPWP Pemotong : 00.000.000.0-000.000</p>
          </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <label class="col-form-label">Pencarian</label>
                  </div>
                  <div class="col-md-3" >
                    <select class="form-select" disabled>
                        <option> </option>
                      </select>
                  </div>
                  <div class="col-auto">
                    <label class="col-form-label">Nilai</label>
                  </div>
                  <div class="col-auto">
                    <input id="nilai" class="form-control" >
                  </div>
              <div class="col">
                <button class="btn btn-outline-secondary " type="clear">Clear</button>
                <button class="btn btn-outline-secondary" type="cari">Cari</button>
              </div>
            </div>
          </div>
        
        <br>
        <div class="justify-content-center col-md-11 mx-auto">
        <form action="hapus_a2.php " method="post" name="form1" id="form1">
          <table class="table table-bordered border-dark table-striped">
            <thead>
              <tr align="center" valign="middle">
                <th>No</th>
                <th>NPWP</th>
                <th>Nama</th>
                <th>Nomor Bukti Potong</th>
                <th>Tanggal Bukti Potong</th>
                <th>Kode Objek Pajak</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php
    include 'connection.php';
    $no= 1;
    $query=mysqli_query($con, "SELECT * FROM a2_laporan WHERE id_spt='$id'");
    while ($r=mysqli_fetch_array($query)){
        ?>
        <tr align="center">
        <td><?php echo $no++;?></td>
        <td><?php echo $r['npwp_a2'];?></td>
        <td><?php echo $r['nama'];?></td>
        <td><?php echo $r['nomor_bukti_potong_a2'];?></td>
        <td><?php echo $r['tanggal_a2'];?></td>
        <td><?php echo $r['kode_objek_pajak'];?></td>
        <td width="20px">
        <!-- membuat checkbox dengan name="hapus[]" tanda [] digunakan untuk menampung banyak data  -->
        <input type="checkbox" name="npwp_a2[]" value="<?php echo $r['npwp_a2']; ?>">
        </td>
        </tr>
        
        <?php 
		}
		?>
          </table>
          <div class="text-right float-end me-5 mb-5">
            <a href="" data-bs-toggle="modal" data-bs-target="#"><button type="button" class="btn btn-secondary">Ubah</button></a>
            <button class="btn btn-secondary " name="hapus" value="Hapus">Hapus</button>
  <button class="btn btn-secondary " type="Ubah" ><a href="InputBuktiPotong_A2.php?idspt=<?php echo $id;?>&a2=<?php echo $fetch_info1['a2'];?>" > Baru </a></button>
            </a>
          </div>
            </form>
          
        </div>
        <?php
    include 'connection.php';
    $no= 1;
    $query=mysqli_query($con, "SELECT * FROM a2_laporan WHERE id_spt='$id'");
    while ($r=mysqli_fetch_array($query)){
      $no++;
      $total_jmlh_bruto [$no] = $r['jumlah_bruto'];
      $total_pph_dipotong [$no] = $r['pkp'];

      $jmlh = array_sum($total_jmlh_bruto);
      $jmlh_pph = array_sum($total_pph_dipotong);
    }
      ?>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form">
              
                
                <div class="form-group row justify-content-center mt-2">
                <label for="inputnama" class="col-sm-4 col-form-label">Total Jumlah Penghasilan Bruto(Rp.):</label>
                <div class="col-sm-6">
                  <input class="form-control" name="jmlh_bruto" id="jmlh_bruto" type="text" value="<?php if(!isset($jmlh)){}else{echo $jmlh;} ?>" readonly>
                </div>
                </div>

                <div class="form-group row justify-content-center mt-2">
                <label for="inputnama" class="col-sm-4 col-form-label">Total Jumlah PPh dipotong(Rp.):</label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" name="jmlh_pph_potong" id="jmlh_pph_dipotong" value="<?php  if(!isset($jmlh_pph)){}else{echo $jmlh_pph;} ?>" readonly>
                </div>
                </div>
         
          <p>
            
            
          
        
            </div>
            <br>
          </div>
         
        </div>
       
      </div>
    <?php
    }
    ?>
      
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
  

    <script type="text/javascript">
              $(document).ready(function(){

                  // Format mata uang.
                  $( '#jmlh_bruto' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#jmlh_pph_dipotong' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  
                  
                  
                  

              })
             
      </script>

</body>

</html>