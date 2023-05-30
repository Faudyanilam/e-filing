
<?php require_once "controllerUserData.php"; ?>

<?php 
$NPWP = $_SESSION['NPWP'];
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];
// mengambil id spt dari url
$id = $_GET['idspt'];



if($NPWP != false  && $Email != false && $Password != false ){

  
    $sql = "SELECT * FROM akun_user WHERE NPWP = '$NPWP'";
    $run_Sql = mysqli_query($con, $sql);
    $data = "SELECT * FROM isi_profil WHERE NPWP = '$NPWP'";
    $hasil = mysqli_query($con, $data);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
       
        
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

  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="assets/js/jquery.mask.min.js">

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
                <a href="daftar_spt.php">Buka SPT</a>
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
                  <a href="SSP.php">Daftar SSP/Pbk (1721-IV)</a>
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
    

      <div class="card mx-auto " style="width:1000px;  ">
        <div class="row">
          <div class="col-md-12">
            <br>
            <h3 class="section-title">Daftar Pemotongan Pajak Bulanan</h3>
            <div class="section-title-divider"></div>
            <p class="section-description col-md-10 mx-auto">Daftar Pemotongan Pajak Penghasilan Pasal 21 Bagi Pegawai Tetap Dan Penerima Pensiun Atau Tunjangan Hari Tua/Jaminan
              Hari Tua Berkala Serta Bagi Pegawai Negeri Sipil, Anggota Tentara Nasional Indonesia, Anggota Polisi Republik
              Indonesia, Pejabat Negara dan Pensiunannya</p>

              <?php
  if(isset($_GET['idspt'])){
    // menampilkan masa pajak
    $idspt = $_GET['idspt'];

    if ($idspt != NULL){
    $query = mysqli_query($con, "SELECT MONTH(tanggal) as 'month' , YEAR (`tanggal` ) as 'year'  FROM masa_spt WHERE id_spt='$id'");
    $data = mysqli_fetch_array($query);
    
    $bulan = $data['month'];
    $tanggal = $data['year'];
    $masa_pajak = mysqli_query($con, "SELECT * FROM masa_pajak");
    $urutan = mysqli_num_rows($masa_pajak);
    $jumlah = $urutan+1;
                            
                            
    $nomor = $bulan.$tanggal.sprintf("%07s", $jumlah);
    }else{
      echo '<div align="center" class="alert alert-danger" role="alert">
      Anda belum membuka SPT!! <a href="daftar_spt.php" style="color: #0000FF">Silahkan KLIK DISINI!</a>
        </div>';
      
   }
  }
    ?>
              
              
            <p class="section-description">Masa Pajak :<?php if ($idspt != NULL){echo $bulan;?>-<?php echo $tanggal;}?></p>
            <p class="section-description ">NPWP Pemotong :<?php echo $NPWP;?></p>
          </div>
        </div>
        <!--a memiliki PTKP-->
        <div class="col-md-11 mx-auto">
          <p >
            <b>A.Pegawai Tetap dan Penerima Pensiunan atau THT/JHT serta PNS, Anggota TNI/Polri,Pejabat Negara dan Pensiunannya
              yang Penghasilannya melebihi PTKP</b>
          </p>
        </div>
        <div class="justify-content-center col-md-11 mx-auto">
        <form action="B_fungsi.php" method="post">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>NPWP</th>
                <th>Nama</th>
                <th>Kode Objek Pajak</th>
                <th>Jumlah Penghasilan Bruto(Rp.)</th>
                <th>PPh Dipotong(Rp.)</th>
                <th>Kode Negara Domisili</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php
    include 'connection.php';
    $no= 1;
    $query=mysqli_query($con, "SELECT * FROM user WHERE id_spt='$id' ");
    
    while ($r=mysqli_fetch_array($query)){
      
        ?>
        <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $r['npwp'];?></td>
        <td><?php echo $r['nama'];?></td>
        <td><?php echo $r['kode_object_pajak'];?></td>
        <td><?php echo $r['jumlah_penghasilan_bruto'];?></td>
        <td><?php echo $r['pph_dipotong'];?></td>
        <td><?php echo $r['kode_negara_domisili'];?></td>
        <td><input type="checkbox" name="npwp[]" value="<?php echo $r['npwp']; ?>">
        </td>
        </tr>
        <?php 
    }
    
		?>
          </table>
          <p>
            <br>
          <div class="text-right">
          <button class="btn btn-secondary " name="pilih" id= "pilih" type="submit">Hapus</button>
            <a href="" data-bs-toggle="modal" data-bs-target="#UbahSPT"><button type="button" class="btn btn-secondary">Ubah</button></a>
  </form>
            <button class="btn btn-secondary " type="Ubah"><a href="pemotongan_pajak.php?idspt=<?php echo $id;?>">Tambah </a></button>
          </div>

        </div>

        
          <?php
    include 'connection.php';
    $no= 1;
    $query=mysqli_query($con, "SELECT * FROM user WHERE id_spt='$id'");
    while ($r=mysqli_fetch_array($query)){
      $no++;
      $total_jmlh_bruto [$no] = $r['jumlah_penghasilan_bruto'];
      $total_pph_dipotong [$no] = $r['pph_dipotong'];

      $jmlh = array_sum($total_jmlh_bruto);
      $jmlh_pph = array_sum($total_pph_dipotong);
    }
      ?>


          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form">
              <form action="proses_masa_pajak.php " method="post" name="form1" id="form1">
              <input class="form-control" name="id" id="id" type="hidden" value="<?php echo $id; ?>" required readonly>
              <input type="hidden" name="nmr_bkt_ptg" id="nmr_bkt_ptg" value="<?php echo $nomor;?>" required readonly>
              <input type="hidden" name="pembetulan" id="pembetulan" value="<?php echo $_GET['pembetulan'];?>"  readonly>

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

                <div class="col-md-12 mt-4 ms-5" >
              
                <b>B.Pegawai Tetap dan Penerima Pensiunan atau THT/JHT serta PNS, Anggota TNI/Polri,Pejabat Negara dan Pensiunannya
              yang Penghasilannya tidak melebihi PTKP</b>
              </div>
                
                
                
                <div class="form-group row justify-content-center mt-2">
                <label for="inputnama" class="col-sm-4 col-form-label">Jumlah Pegawai(Rp.):</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="pegawai" id="pegawai" placeholder="Masukkan Jumlah Pegawai" required>

                  </div>
                  </div>

                  <div class="form-group row justify-content-center mt-2">
                  <label for="inputnama" class="col-sm-4 col-form-label">Jumlah Pensiunan(Rp.):</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="pensiun" id="pensiun" placeholder="Masukkan Jumlah Pensiunan" required>

                  </div>
                  </div>  

                  <div class="form-group row justify-content-center mt-2">
                  <label for="inputnama" class="col-sm-4 col-form-label">Jumlah Penghasilan Bruto Pegawai(Rp.):</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="penghasilan_bruto_pegawai" id="penghasilan_bruto_pegawai" placeholder="Masukkan Jumlah Penghasilan Bruto Pegawai" onkeyup="onChange(this.value)" onKeyPress="return isNumberKey(event)"
                      required>

                  </div>
                  </div>

                  <div class="form-group row justify-content-center mt-2  ">
                  <label for="inputnama" class="col-sm-4 col-form-label">Jumlah Penghasilan Bruto Pensiunan(Rp.):</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="penghasilan_bruto_pensiun" id="penghasilan_bruto_pensiun" placeholder="Masukkan Jumlah Penghasilan Bruto Pensiunan"  onkeyup="onChange(this.value)" onKeyPress="return isNumberKey(event)"
                      required>
                  </div>
                  </div>

                  <div class="col-md-12 mt-4 ms-5" >
              
              <b>C.Jumlah A+B</b>
            </div>
                 
                  <div class="form-group row justify-content-center mt-2">
                  <label for="inputnama" class="col-sm-4 col-form-label">Total Jumlah Penghasilan Bruto(Rp.):</label>
                  <div class="col-sm-6">
                      <input class="form-control" type="text" name="total_bruto" id="total_bruto"  readonly="readonly" required>
                    </div>
                  </div>

                    <div class="form-group row justify-content-center mt-2">
                    <label for="inputnama" class="col-sm-4 col-form-label">Total Jumlah PPh dipotong(Rp.):</label>
                    <div class="col-sm-6">
                      <input class="form-control" type="text" value="<?php if(!isset($jmlh_pph)){}else{echo "$jmlh_pph";} ?>" name="total_pph_dipotong" id="total_pph_dipotong" aria-label="Disabled input example" disabled>
                    </div>
                    </div>

                   

                    <br>
                  <div class="float-end me-5 mt-3 mb-4">
                <button class="btn btn-secondary " type="cetak">CETAK</button>
                <button class="btn btn-secondary" type="submit">SIMPAN</button>
              </div>
                  
              </form>
            </div>
          </div>

 

          
            
           


              

              

           

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
  <script src="assets/js/main1.js"></script>

  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--rumus -->
  <!--jquery uang rupiah-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
  

    <script type="text/javascript">
              $(document).ready(function(){

                  // Format mata uang.
                  $( '.form-control' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  

              })
      </script>
   
  <script type="text/javascript" language="Javascript">
  
  // pegawai = document.form1.pegawai.value;
  // document.form1.txtDisplay.value = pegawai;
  // pensiun = document.form1.pensiun.value;
  // document.form1.txtDisplay.value = pensiun;
  // bruto_pegawai = document.form1.penghasilan_bruto_pegawai.value;
  // document.form1.txtDisplay.value = bruto_pegawai;
  // bruto_pensiun = document.form1.penghasilan_bruto_pensiun.value;
  // document.form1.txtDisplay.value = bruto_pensiun;

  function onChange(value){
  
    // bruto_pegawai = document.form1.penghasilan_bruto_pegawai.value;
    // bruto_pensiun = document.form1.penghasilan_bruto_pensiun.value;
    
  bruto_pegawai = document.getElementById('penghasilan_bruto_pegawai').value;
  bruto1 = bruto_pegawai.replace(/\D/g, '');
  bruto_pensiun = document.getElementById('penghasilan_bruto_pensiun').value;
  bruto2 = bruto_pensiun.replace(/\D/g, '');


    jmlh_bruto = document.getElementById('jmlh_bruto').value;
    jumlahbruto = jmlh_bruto.replace(/\D/g, '');

    
   

    hasil = (bruto1*1) + (bruto2*1) + (jumlahbruto*1);
    
    reverse = hasil.toString().split('').reverse().join(''),
    ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');
       
    document.form1.total_bruto.value = ribuan;
    
    
  }

  
  </script>

</body>

</html>