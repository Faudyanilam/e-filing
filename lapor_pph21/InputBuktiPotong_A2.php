
<?php require_once "controllerUserData.php"; ?>
<?php 
$NPWP = $_SESSION['NPWP'];
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];
if($NPWP != false  && $Email != false && $Password != false ){
    $sql = "SELECT * FROM akun_user WHERE NPWP = '$NPWP'";
    $run_Sql = mysqli_query($con, $sql);
    $a = "SELECT a2 FROM isi_profil WHERE NPWP = '$NPWP'";
    $a2 = mysqli_query($con, $a);

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
    if($a2){
      $fetch_info1 = mysqli_fetch_assoc($a2);
    }
}else{
    header('Location: index.php');
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

      <div class="card mx-auto "style="width:1000px;  ">
        <div class="row">
          <div class="col-md-12">
            <br>
            <h3 class="section-title">INPUT BUKTI POTONG A2</h3>
            <div class="section-title-divider"></div>
            <p class="section-description col-md-10 mx-auto">DAFTAR PEMOTONGAN PAJAK PENGHASILAN PASAL 21 BAGI PEGAWAI NEGERI SIPIL, ANGGOTA TENTARA NASIONAL INDONESIA, PEJABAT NEGARA DAN PENSIUNANNYA</p>
          </div>
        </div>
<?php
                        if(isset($_GET['idspt']) ){
                            $idspt = $_GET['idspt'];
                            $a2 = $_GET['a2'];
                            
                            if ($idspt != NULL AND $a2 != NULL ){
                            $query = mysqli_query($con, "SELECT MONTH(tanggal) as 'month' , YEAR (`tanggal` ) as 'year'  FROM masa_spt WHERE id_spt='$idspt'");
                            $data = mysqli_fetch_array($query);
                            $query1 = mysqli_query($con, "SELECT * FROM masa_spt WHERE id_spt='$idspt'");
                            $data1 = mysqli_fetch_array($query1);
                            $bulan = $data['month'];
                            $tanggal = $data['year'];
                            $a2 = mysqli_query($con, "SELECT * FROM a2_laporan");
                            $urutan = mysqli_num_rows($a2);
                            $jumlah = $urutan+1;
                            echo $fetch_info1['a2'];
                            
                            $nomor = $bulan.$tanggal.sprintf("%07s", $jumlah);
                            }
                            else{
                              echo '<div align="center" class="alert alert-danger" role="alert">
                            Anda belum membuka SPT!! <a href="daftar_spt.php" style="color: #0000FF">Silahkan KLIK DISINI!</a>
                               </div>';
                               
                              
                           }
                          }             
?>
        <div class="mx-auto">
            <form action="proses_a2.php" method="POST" name="formD" id="formD">
                <tr>
                    <td>Nomor Bukti Potong : </td>
                    <input type="hidden" name="idspt" id="idspt" value="<?php echo $idspt;?>" required readonly>
                    <input type="text" name="nbp" id="nbp" value="<?php if ($idspt != NULL){ echo $nomor;}?>">
                    <td>Tanggal : </td>
                    <input type="date" name="tanggal" id="tanggal" value="<?php echo $data1['tanggal'];?>">
                    <td>Masa</td>
                    <select name="m1" id="m1" onchange="startCalc(this.value);">
                    <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                    </select>
                    - &nbsp;
                    <select  name="m2" id="m2" onkeyup="startCalc(this.value);">
                        
                        <option value="12">12</option>
                    </select>
                </tr>
                <input class="w3-input w3-border" name="totm" id="totm" type="hidden" readonly>
                <input class="w3-input w3-border" name="totm1" id="totm1" type="hidden" readonly>
            
        </div>

        <!--link ke a b c d-->
        <div class="mx-auto ">
            <br>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link "  href="#a">A.Identitas Penerima Penghasilan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#b1">B.1.Rincian Penghasilan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#b2">B.2.Perhitungan PPh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#c">C.Identitas Pemotong</a>
                </li>
            </ul>
        </div>

        <div class="col-md-6 mt-4 ms-5" id="a">
            

            
                <b>A. IDENTITAS PENERIMA PENGHASILAN YANG DIPOTONG</b>
            
        </div>

        <div class="container">
            <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="NPWP" class="col-form-label">NPWP</label>
                </div>
                <div class="col-md-6">
                <table>
                <td>
                  <input type="number" id="npwp" name="npwp" class="form-control col-md-4" placeholder="Masukkan NPWP" required>
                  </td>
                  <td>
                  <button class="btn btn-secondary"> Referensi </button>
                  </td>
                  </table>
                </div>
                
                    
                
              </div>
              
              
              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                 <label for="nip" class="col-form-label">NIP/NRP</label>
                </div>
                <div class="col-md-6">
                  <input type="number" id="nip" name="nip" class="form-control" placeholder="Masukkan NIP/NRP" >
                </div>
              </div>
              

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="nama" class="col-form-label">NAMA</label>
                </div>
                <div class="col-md-6">
                  <input type="text" id="nama" name="nama"class="form-control" placeholder="Masukkan Nama" >
                </div>
              </div>
              

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="alamat" class="col-form-label">ALAMAT</label>
                </div>
                <div class="col-md-6">
                  <textarea type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat" ></textarea>
                </div>
              </div>
              

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="jeniskelamin" class="col-form-label">JENIS KELAMIN</label>
                </div>
                <div class="col-md-6">
                  <select class="form-select" name="jeniskelamin" id="jeniskelamin">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
             

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="nik" class="col-form-label">NIK</label>
                </div>
                <div class="col-md-6">
                    <input type="number" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" >
                </div>
              </div>
           

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="status" class="col-form-label">STATUS</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="status" id="status">
                        <option value="54000000">TK</option>
                        <option value="58500000">K</option>
                        <option value="58500000">HB</option>
                    </select>
                </div>
              </div>
             

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="jumlahtanggungan" class="col-form-label">JUMLAH TANGGUNGAN</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="jumlahtanggungan" id="jumlahtanggungan">
                        <option value="0">0</option>
                        <option value="4500000">1</option>
                        <option value="9000000">2</option>
                        <option value="13500000">3</option>
                        
                    </select>
                </div>
              </div>
             

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="gol" class="col-form-label">GOL./PANGKAT</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="gol" id="gol">
                        <option value="Ia">Ia</option>
                        <option value="Ib">Ib</option>
                        <option value="Ic">Ic</option>
                        <option value="Id">Id</option>
                        <option value="IIa">IIa</option>
                        <option value="IIb">IIb</option>
                        <option value="IIc">IIc</option>
                        <option value="IId">IId</option>
                        <option value="IIIa">IIIa</option>
                        <option value="IIIb">IIIb</option>
                        <option value="IIIc">IIIc</option>
                        <option value="IIId">IIId</option>
                        <option value="IVa">IVa</option>
                        <option value="IVb">IVb</option>
                        <option value="IVc">IVc</option>
                        <option value="IVd">IVd</option>
                        <option value="IVe">IVe</option>
                    </select>
                </div>
              </div>
             

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="namajabatan" class="col-form-label">NAMA JABATAN</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="namajabatan" id="namajabatan">
                        <option value="guru">guru</option>
                        <option value="accounting">accounting</option>
                    </select>
                </div>
              </div>


              <div class="col-md-6 mt-4 ms-4" id="b1">
                
    
                
                    <b>B1. RINCIAN PENGHASILAN</b>
                
            </div>

            <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="kodeobjekpajak" class="col-form-label">KODE OBJEK PAJAK</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="kodeobjekpajak" id="kodeobjekpajak">
                        <option value="21-100-01">21-100-01</option>
                        <option value="21-100-02">21-100-02</option>
                    </select>
                </div>
              </div>
                

              <div class="col-md-6 mt-4 ms-4  ">
                <label class="col-form-label fw-bold">Penghasilan Bruto</label>
              </div>
              

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="gajipokok" class="col-form-label">1. GAJI POKOK/PENSIUN</label>
                </div>
                <div class="col-md-6">
                  <input style="text-align:right;" type="text" id="gajipokok" name="gajipokok" class="form-control" placeholder="Masukkan Gaji Pokok/Pensiun" onkeyup="rumusA2(this.value)" >
                </div>
              </div>
             

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="tunjanganistri" class="col-form-label">2. TUNJANGAN ISTRI</label>
                </div>
                <div class="col-md-6">
                  <input style="text-align:right;" type="text" id="tunjanganistri" name="tunjanganistri" class="form-control" placeholder="Masukkan Tunjangan Istri" onkeyup="rumusA2(this.value)" >
                </div>
              </div>
             

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="tunjangananak" class="col-form-label">3. TUNJANGAN ANAK</label>
                </div>
                <div class="col-md-6">
                  <input style="text-align:right;" type="text" id="tunjangananak" name="tunjangananak" class="form-control" placeholder="Masukkan Tunjangan Anak" onkeyup="rumusA2(this.value)"  >
                </div>
              </div>
              

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="jumlahgaji" class="col-form-label">4. JUMLAH GAJI DAN TUNJANGAN KELUARGA (1+2+3)</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="jumlahgaji" name="jumlahgaji" class="form-control" required readonly="readonly">
                </div>
              </div>
            

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="tunjanganperbaikan" class="col-form-label">5. TUNJANGAN PERBAIKAN PENGHASILAN</label>
                </div>
                <div class="col-md-6">
                  <input style="text-align:right;" type="text" id="tunjanganperbaikan" name="tunjanganperbaikan" class="form-control" placeholder="Masukkan Tunjangan Perbaikan Penghasilan" onkeyup="rumusA2(this.value)" >
                </div>
              </div>
             

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="tunjanganstruktural" class="col-form-label">6. TUNJANGAN STRUKTURAL/FUNGSIONAL</label>
                </div>
                <div class="col-md-6">
                  <input style="text-align:right;" type="text" id="tunjanganstruktural" name="tunjanganstruktural" class="form-control" placeholder="Masukkan Tunjangan Struktural" onkeyup="rumusA2(this.value)" >
                </div>
              </div>
            

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="tunjanganberas" class="col-form-label">7. TUNJANGAN BERAS</label>
                </div>
                <div class="col-md-6">
                  <input style="text-align:right;" type="text" id="tunjanganberas" name="tunjanganberas" class="form-control" placeholder="Masukkan Tunjangan Beras" onkeyup="rumusA2(this.value)" >
                </div>
              </div>
          

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="tunjangankhusus" class="col-form-label">8. TUNJANGAN KHUSUS</label>
                </div>
                <div class="col-md-6">
                  <input style="text-align:right;" type="text" id="tunjangankhusus" name="tunjangankhusus" class="form-control" placeholder="Masukkan Tunjangan Khusus" onkeyup="rumusA2(this.value)"  >
                </div>
              </div>
              

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="tunjanganlainlain" class="col-form-label">9. TUNJANGAN LAIN-LAIN</label>
                </div>
                <div class="col-md-6">
                  <input style="text-align:right;" type="text" id="tunjanganlainlain" name="tunjanganlainlain" class="form-control" placeholder="Masukkan Tunjangan Lain-lain" onkeyup="rumusA2(this.value)"  >
                </div>
              </div>


              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="penghasilantetap" class="col-form-label">10. PENGHASILAN TETAP DAN TERATUR LAINNYA YANG PEMBAYARANNYA TERPISAH DARI PEMBAYARAN GAJI</label>
                </div>
                
                <div class="col-md-6">
                  <input style="text-align:right;" type="text" id="penghasilantetap" name="penghasilantetap" class="form-control" placeholder="Masukkan Penghasilan Tetap" onkeyup="rumusA2(this.value)"  >
                </div>
              </div>


              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="jumlahbruto" class="col-form-label">11. JUMLAH PENGHASILAN BRUTO (4+5+6+7+8+9+10)</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="jumlahbruto" name="jumlahbruto" class="form-control" required readonly="readonly" >
                </div>
              </div>

              <div class="ccol-md-6 mt-4 ms-4">
                <label class="col-form-label fw-bold">Pengurangan </label>
              </div>

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="biayajabatan" class="col-form-label">12. BIAYA JABATAN/BIAYA PENSIUN</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="biayajabatan" name="biayajabatan" readonly="readonly"class="form-control" >
                </div>
              </div>
         

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="iuranpensiun" class="col-form-label">13. IURAN PENSIUN ATAU IURAN THT</label>
                </div>
                <div class="col-sm-6">
                  <input  style="text-align:right;" type="text" id="iuranpensiun" name="iuranpensiun" class="form-control"  >
                </div>
              </div>
        

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="jumlahpengurangan" class="col-form-label">14. JUMLAH PENGURANGAN (12+13+14)</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="jumlahpengurangan" name="jumlahpengurangan" class="form-control" required readonly="readonly" >
                </div>
              </div>


              <div class="col-md-6 mt-4 ms-4" id="b2">
              
    
                
                    <b>B2. PENGHITUNGAN PPh</b>
                
            </div>
            <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="jumlahpenghasilanneto" class="col-form-label">15. JUMLAH PENGHASILAN NETO (11-14)</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="jumlahpenghasilanneto" name="jumlahpenghasilanneto" class="form-control" required readonly="readonly" >
                </div>
              </div>
           

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="penghasilanneto" class="col-form-label">16. PENGHASILAN NETO MASA SEBELUMNYA</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;background-color: #DC143C;" type="text" id="penghasilanneto" name="penghasilanneto" class="form-control" >
                </div>
              </div>
            

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="17" class="col-form-label">17. JUMLAH PENGHASILAN NETO UNTUK PPh PASAL 21 (SETAHUN/DISETAHUNKAN)</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="neto_setahun" name="neto_setahun" class="form-control" required readonly="readonly" >
                </div>
              </div>
              

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="18" class="col-form-label">18. PENGHASILAN TIDAK KENA PAJAK (PTKP)</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="ptkp" name="ptkp" class="form-control" required readonly="readonly"  >
                </div>
              </div>
          

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="19" class="col-form-label">19. PENGHASILAN KENA PAJAK SETAHUN/DISETAHUNKAN</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="pkpsetahun" name="pkpsetahun" class="form-control" required readonly="readonly" >
                </div>
              </div>
            

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="20" class="col-form-label">20. PPh PASAL 21 ATAS PENGHASILAN KENA PAJAK SETAHUN/DISETAHUNKAN</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="pkppph21" name="pkppph21" class="form-control"  readonly="readonly">
                </div>
              </div>
           

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="21" class="col-form-label">21. PPh PASAL 21 YANG TELAH DIPOTONG MASA SEBELUMNYA</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;background-color: #DC143C;" type="text" id="21" name="" class="form-control"  >
                </div>
              </div>
            

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="22" class="col-form-label">22. PPh PASAL 21 TERUTANG</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="pph21terutang" name="pph21terutang" class="form-control" readonly="readonly" >
                </div>
              </div>
           

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                  <label for="23" class="col-form-label">23. PPh PASAL 21 DAN PPh PASAL 26 YANG TELAH DIPOTONG/DILUNASI</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;background-color: #DC143C;"  type="text" id="23" name="pph21_lunas" class="form-control" readonly="readonly" >
                </div>
              </div>
          

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                    <label for="23A" class="col-form-label">23A. ATAS GAJI DAN TUNJANGAN</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="23a" name="23a" class="form-control" >
                </div>
              </div>
           

              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                    <label for="23B" class="col-form-label">23B. ATAS PENGHASILAN TETAP DAN TERATUR LAINNYA YANG PEMBAYARANNYA TERPISAH DARI PEMBAYARAN GAJI</label>
                </div>
                <div class="col-sm-6">
                  <input style="text-align:right;" type="text" id="23b" name="23b" class="form-control" >
                </div>
              </div>
             
              <div class="form-group row mt-3 justify-content-center mt-2">
                <div class="col-md-5">
                    <label for="X" class="col-form-label">HANYA PERLU DIISI BILA MASA PEROLEHAN TIDAK GENAP SATU TAUN KALENDER</label>
                </div>
                <div class="col-sm-6">
                  <select id="X" name="" class="form-select" disabled></select>
                </div>
              </div>

<div class="col-md-6 mt-4 ms-4" id="c">
 

    
        <b>C. IDENTITAS PEMOTONG</b>
   
</div>
                
                  <div class="form-group row mt-3 justify-content-center mt-2">
                    <label for="namainstansi" class="col-sm-5 col-form-label">1. NAMA INSTANSI/BADAN LAIN</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="namainstansi" name="namainstansi" >
                    </div>
                  </div>

                  <div class="form-group row mt-3 justify-content-center mt-2">
                    <label for="npwp" class="col-sm-5 col-form-label">2. NPWP</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="npwppemotong" name="npwppemotong">
                    </div>
                  </div>

                  <div class="form-group row mt-3 justify-content-center mt-2">
                    <label for="nama" class="col-sm-5 col-form-label">3. NAMA</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="namapemotong" name="namapemotong">
                    </div>
                  </div>

                  <div class="form-group row mt-3 justify-content-center mt-2">
                    <label for="nip" class="col-sm-5 col-form-label">4. NIP/NRP</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="nippemotong" name="nippemotong" >
                    </div>
                  </div>

        
       
            <div class="form-group mt-4 float-end mb-4 me-5">
            <div class="text-center">
              <a href="#" type="button" class="btn btn-secondary" >CETAK</a> 
              <a href="#a" type="button" class="btn btn-secondary" >BATAL</a> 
              <button class="btn btn-secondary" type="simpan_a2" name="simpan_a2" <?php $a2 = $_GET['a2']; if( $a2 != 'a2'){?> disabled <?php }?> >SIMPAN</button></div>
              </div>
           
            </div>

</form>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
  

   <script type="text/javascript">
              $(document).ready(function(){

                  // Format mata uang.
                  $( '#gajipokok' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#tunjanganistri	' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#tunjangananak' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#tunjanganperbaikan' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#tunjanganstruktural' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#tunjanganberas' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#tunjangankhusus' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#tunjanganlainlain' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#penghasilantetap' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#iuranpensiun' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#23a' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#23b' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});

                  

              })
      </script>



  <!-- rumus a2 -->
  <script type="text/javascript" language="Javascript">
   function startCalc(val) {
            totmasa = (12 - val + 1);
            totmasa1 = -(12 - val - 11);
            hasil = document.getElementById('totm');
            hasil.value = totmasa;
            hasil1 = document.getElementById('totm1');
            hasil1.value = totmasa1;
        }
    function rumusA2(value){
      gaji_pokok = document.formD.gajipokok.value;
      gaji_pokok = gaji_pokok.replace(/\D/g, '');
      tunjangan_istri = document.formD.tunjanganistri.value;
      tunjangan_istri = tunjangan_istri.replace(/\D/g, '');
      tunjangan_anak = document.formD.tunjangananak.value;
      tunjangan_anak = tunjangan_anak.replace(/\D/g, '');
      tunjangan_perbaikan = document.formD.tunjanganperbaikan.value;
      tunjangan_perbaikan = tunjangan_perbaikan.replace(/\D/g, '');
      tunjangan_struktural = document.formD.tunjanganstruktural.value;
      tunjangan_struktural = tunjangan_struktural.replace(/\D/g, '');
      tunjangan_beras = document.formD.tunjanganberas.value;
      tunjangan_beras = tunjangan_beras.replace(/\D/g, '');
      tunjangan_khusus = document.formD.tunjangankhusus.value;
      tunjangan_khusus = tunjangan_khusus.replace(/\D/g, '');
      tunjangan_lain = document.formD.tunjanganlainlain.value;
      tunjangan_lain = tunjangan_lain.replace(/\D/g, '');
      penghasilan_tetap = document.formD.penghasilantetap.value;
      penghasilan_tetap = penghasilan_tetap.replace(/\D/g, '');
      iuran_pensiun = document.formD.iuranpensiun.value;
      iuran_pensiun = iuran_pensiun.replace(/\D/g, '');

      hasil = document.getElementById('totm').value;

      hasil1 = document.getElementById('totm1').value;
      hasil2 = document.getElementById('totm1').value;

      
      hasil3 = document.getElementById('totm').value;
      hasil4 = document.getElementById('totm').value;
      hasil5 = document.getElementById('totm').value;
      
      status1 = document.getElementById('status').value;
      jumlahtanggungan1 = document.getElementById('jumlahtanggungan').value;

      total123 = (gaji_pokok * 1) +(tunjangan_istri * 1)+(tunjangan_anak * 1);
      totalbruto = (total123 * 1)+(tunjangan_perbaikan * 1) +(tunjangan_struktural * 1)+(tunjangan_beras * 1)+(tunjangan_khusus * 1) +(tunjangan_lain * 1)+(penghasilan_tetap * 1);
      biaya_jabatan = totalbruto/(hasil3)*0.05;
            
            if (biaya_jabatan > 500000){
                biaya_jabatan = 500000 * hasil4;
                
            }else{
                biaya_jabatan = totalbruto/(hasil3) * 0.05  * hasil5;
                
            }
      jumlah_pengurangan = (biaya_jabatan * 1) + (iuran_pensiun *1);
      hasil_neto = (totalbruto * 1) - (jumlah_pengurangan * 1);
      netosetahun = (hasil_neto * 1) + (hasil_neto / hasil) * (hasil1);
      hasilptkp = (status1 * 1) + (jumlahtanggungan1*1);
      hasilpkp = Math.floor(((netosetahun * 1) - (hasilptkp * 1)) / 1000) * 1000;

            if (hasilpkp > 500000000) {
                pkp_pph21 = (((hasilpkp - 500000000) * (30 / 100)) + (95000000));
                
            }
            else if (hasilpkp > 250000000 && hasilpkp < 500000000) {
              pkp_pph21 = (((hasilpkp - 250000000) * (25 / 100)) + (32500000));
                
            }
            else if (hasilpkp > 50000000 && hasilpkp < 250000000) {
              pkp_pph21 = (((hasilpkp - 50000000) * (15 / 100)) + (2500000));
                
            }
            else {
              pkp_pph21 = hasilpkp * 0, 05;
                
            }

            pph21_terutang = pkp_pph21 - ((pkp_pph21 / 12) * hasil2);

            //hasil_1_8
            reverse = total123.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            total123 = ribuan.join('.').split('').reverse().join('');

            //hasil_1_8
            reverse = totalbruto.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            totalbruto = ribuan.join('.').split('').reverse().join('');

            //hasil_1_8
            reverse = biaya_jabatan.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            biaya_jabatan = ribuan.join('.').split('').reverse().join('');

            //hasil_1_8
            reverse = jumlah_pengurangan.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            jumlah_pengurangan = ribuan.join('.').split('').reverse().join('');

            //hasil_1_8
            reverse = hasil_neto.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            hasil_neto = ribuan.join('.').split('').reverse().join('');

            //hasil_1_8
            reverse = netosetahun.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            netosetahun = ribuan.join('.').split('').reverse().join('');

            //hasil_1_8
            reverse = hasilptkp.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            hasilptkp = ribuan.join('.').split('').reverse().join('');

            //hasil_1_8
            reverse = hasilpkp.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            hasilpkp = ribuan.join('.').split('').reverse().join('');

            //hasil_1_8
            reverse = pph21_terutang.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            pph21_terutang = ribuan.join('.').split('').reverse().join('');

            //hasil_1_8
            reverse = pkp_pph21.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            pkp_pph21 = ribuan.join('.').split('').reverse().join('');


            
      
      document.formD.jumlahgaji.value = total123;
      document.formD.biayajabatan.value = biaya_jabatan;
      document.formD.jumlahbruto.value = totalbruto;
      document.formD.jumlahpengurangan.value = jumlah_pengurangan;
      document.formD.jumlahpenghasilanneto.value = hasil_neto;
      document.formD.neto_setahun.value = netosetahun;
      document.formD.ptkp.value = hasilptkp;
      document.formD.pkpsetahun.value = hasilpkp;
      document.formD.pkppph21.value = pkp_pph21;
      document.formD.pph21terutang.value = pph21_terutang;
    }
  </script>

</body>

</html>