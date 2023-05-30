<?php require_once "controllerUserData.php"; ?>
<?php 
$NPWP = $_SESSION['NPWP'];
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];
if($NPWP != false  && $Email != false && $Password != false ){
    $sql = "SELECT * FROM akun_user WHERE NPWP = '$NPWP'";
    $run_Sql = mysqli_query($con, $sql);
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
                        <li>
                            <a class="las la-user" href="logout-user.php">Logout</a>
                        </li>
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
    <!-- ======= A1 Section ======= -->
    <section id="contac">
        <div class="container wow fadeInUp">

            <div class="card mx-auto" style="width:1000px;  ">
                <div class="row">
                    <div class="col-md-12 ">
                        <br>
                        <h2 class="section-title col-md-10 mx-auto">BUKTI PEMOTONGAN PAJAK PENGHASILAN PASAL 21 BAGI PEGAWAI TETAP ATAU PENERIMA PENSIUN ATAU TUNJANGAN
                            HARI TUA/JAMINAN HARI TUA BERKALA</h2>
                            <div class="section-title-divider "></div>

<?php 
                            include 'connection.php';
                            if(isset($_GET['idspt'])){
                            
                            $idspt = $_GET['idspt'];
                            
                            
                            
                            if ($idspt != NULL){
                            $query = mysqli_query($con, "SELECT MONTH(tanggal) as 'month' , YEAR (`tanggal` ) as 'year'  FROM masa_spt WHERE id_spt='$idspt'");
                            $data = mysqli_fetch_array($query);
                            $query1 = mysqli_query($con, "SELECT * FROM masa_spt WHERE id_spt='$idspt'");
                            $data1 = mysqli_fetch_array($query1);
                            $bulan = $data['month'];
                            $tanggal = $data['year'];
                            $a1 = mysqli_query($con, "SELECT * FROM a1_laporan");
                            $urutan = mysqli_num_rows($a1);
                            $jumlah = $urutan+1;
                            
                            
                            $nomor = $bulan.$tanggal.sprintf("%07s", $jumlah);
                            
                            
                            // echo $tanggal;
                            // echo $nomor;
                                }
                                else{
                                    echo '<div align="center" class="alert alert-danger" role="alert">
                                    Anda belum membuka SPT!! <a href="daftar_spt.php" style="color: #0000FF">Silahkan KLIK DISINI!</a>
                                      </div>';
                                    
                                 }
                            }
                            ?>
                            <div class="col-md-10 col-sm-10 mx-auto" >
                            <form action="proses.php " method="post" name="formD" id="formD">

                                
                            
                                <input type="text" name="idspt" id="idspt" value="<?php echo $idspt;?>" required readonly>
                                   
                                <input type="text" name="pembetulan" id="pembetulan" value="<?php echo $_GET['pembetulan'];?>"  readonly>
                                     
                                        <label>Nomor bukti potong:</label>
                                        <input type="text" name="nmr_bkt_ptg" id="nmr_bkt_ptg" value="<?php if ($idspt != NULL){echo $nomor;}?>" required >

                                        <label>Tanggal:</label>
                                        <input type="date" name="tgl" id="tgl" value="<?php echo $data1['tanggal'];?>">

                                        <label>Masa</label>
                                        
                                        
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

                                        <select name="m2" id="m2" onkeyup="startCalc(this.value);">
                                            <option value="12">12</option>

                                        </select>
                                        <input class="w3-input w3-border" name="totm" id="totm" type="hidden" readonly>
                                        <input class="w3-input w3-border" name="totm1" id="totm1" type="hidden" readonly>



                                    

                                
                            </div>
                    </div>

                </div>
                <!--link ke a b c d-->
                <div class="row col-md-11 mx-auto " >
                    <br>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="#a">A.Identitas Penerima Penghasilan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#b1">B.1.Rincian Penghasilan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#b2">B.2.Perhitungan PPh</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">C.Identitas Pemotong</a>
                        </li>
                    </ul>
                </div>
                <!--a identits memiliki pwghasilan-->

                


                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="form ">

                        <div class="col-md-6 mt-4 ms-5" id="a">
                            

                            
                                <b>A.identitas penerima penghasilan yang dipotong</b>
                            
                        </div>
                                    
                                <div class="form-group row mt-3 justify-content-center mt-2">
                                <label for="inputnpwp" class="col-sm-4 col-form-label">NPWP :</label>
                                    <div class="col-sm-6">
                                    <table>
                                    

                                        <td>
                                        
                                            <input type="number" class="form-control col-sm-6" name="npwp_a1" id="npwp_a1" placeholder="Masukkan NPWP" required>
                                            <td></td>
                                            <td>
                                                <button class="btn btn-primary ">Referensi</button>
                                            </td>

                                    </table>
                                    </div>   
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnik" class="col-sm-4 col-form-label">NIK :</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK" required>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center mt-2">

                                <label for="inputnama" class="col-sm-4 col-form-label">Nama :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nama_a1" id="nama_a1" placeholder="Masukkan Nama" required>
                                </div>

                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">Alamat :</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="4" name="alamat" id="alamat" placeholder="Masukkan Alamat Perusahaan" required></textarea>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">Alamat :</label>
                                <div class="col-sm-6">
                                    <select class="form-select" id="jns_kelamin" name="jns_kelamin">
                                        <option value="0">Pilih Jenis Kelamin</option>   
                                        <option value="Laki- laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>

                                    </select>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">Status :</label>
                                <div class="col-sm-6">
                                    <select class="form-select" id="status" name="status" onchange="getStatus(this.value);">
                                        <option value="0">Pilih Status</option>
                                        <option value="54000000">TK</option>
                                        <option value="58500000">KB</option>
                                        <option value="58500000">HB</option>
                                
                                    </select>
                                    </div>
                                    <!-- <input type="hidden" name="status" id="status" readonly> -->
                                </div>
 
                                <div class="form-group row justify-content-center mt-2">
                                    <label for="inputnama" class="col-sm-4 col-form-label">Jabatan :</label>

                                <div class="col-sm-6">
                                    <select class="form-select" id="jabatan" name="jabatan">
                                        <option value="0">Pilih Jabatan</option>
                                        <option value="accounting">accounting</option>
                                        <option value="wiraswasta">wiraswasta</option>
                                        <option value="jalan">Jalan</option>
              
                                    </select>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">Tanggungan :</label>
                                    <div class="col-sm-6">
                                    <select class="form-select" id="tanggungan" name="tanggungan" onchange="getTanggungan(this.value);">
                                        <option value="0">Pilih Jumlah Tanggungan</option>
                                        <option value="0">0</option>
                                        <option value="4500000">1</option>
                                        <option value="9000000">2</option>
                                        <option value="13500000">3</option>
                            
                                    </select>
                                    </div>
                                    <!-- <input type="hidden" name="tanggungan" id="tanggungan" readonly> -->
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">Kode Negara :</label>
                                    <div class="col-sm-6">

                                    <select class="form-control" id="kode_negara" name="kode_negara">
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="2">2</option>

                                    </select>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <div class="col-sm-2">
                                    
                                    <input class="form-check-input col-sm-2" type="checkbox" value="" id="defaultCheck1">
                                    
                                    <label class="form-check-label " for="defaultCheck1">
                                        WP Asing
                                    </label>
                                    
                                </div>
                                    
                                </div>

                                <div class="col-md-6 mt-4 ms-5" id="a">
                            


                                        <b>B1.Rincian Penghasilan</b>
                                    
                                </div>


                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">Kode Objek Pajak :</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="kode_objk_pjk" name="kode_objk_pjk">
                                        <option value="21-1000-01">21-1000-01</option>
                                        <option value="21-1000-02">21-1000-02</option>

                                    </select>
                                </div>
                                </div>
                                <div class="col-md-6 mt-4 ms-5 " id="a">
                            


                                    <b>Penghasilan Bruto</b>
                                
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">1.Gaji/Pensiun atau THT/JHT: </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="gaji_pensi" id="gaji_pensi" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"
                                        required>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">2.Tunjangan PPh: </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tunjangan_pph" id="tunjangan_pph" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"
                                    >
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">3.Tunjangan Lainnya, Uang lembur dan Sebagainya:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tunjangan_lain" id="tunjangan_lain" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"
                                    >
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">5.Premi Asuransi yang dibayar pemberi kerja:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="honor" id="honor" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"
                                    >
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">4.Honorarium dan Imbalan lain sejenisnya:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="premi_asuransi" id="premi_asuransi" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"
                                    >
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">5.Penerimaan Dalam bentuk Natura atau kenikmatan lainnya yang dikenakan pemotongan PPh
                                        pasal 21:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="penerima_bntuk_natura" id="penerima_bntuk_natura" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"
                                    >
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">7.Tantiem, Bonus, Gratifikasi, Jasa produksi dan THR:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bonus" id="bonus" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"
                                    >
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">8.Jumlah Penghasilan Bruto(1+2+3+4+5+6+7):</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="hasil_1_8" id="hasil_1_8" readonly="readonly" required>
                                </div>
                                </div>
                                <div class="col-md-6 mt-4 ms-5" >
                                    <p>
                                        <b>Pengurangan:</b>
                                    </p>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">9.Biaya jabatan/Biaya pensiun:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="biaya_jbtn" id="biaya_jbtn"  readonly="readonly" required>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">10.Iuran Pensiun atau Iuran THT/JHT:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="iuran_pensi" id="iuran_pensi" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">11.Jumlah Pengurangan(9+10):</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="hasil_9_10" id="hasil_9_10" readonly="readonly" required>
                                </div>
                                </div>

                                <div class="col-md-6 mt-4 ms-5">

                                <b>
                                    <p >B2. Perhitungan PPh21</p>
                                </b>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">12.Jumlah penghasilan neto:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="neto" id="neto" readonly="readonly" required>

                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">13.Penghasilan neto masa sebelumnya:</label>
                                <div class="col-sm-6">
                                    <input type="text" style="background-color: 	#DC143C;    " class="form-control" name="neto_masa_sebelum" id="subject" disabled>

                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">14.Jumlah penghasilan neto untuk PPh21(setahun/disetahunkan):</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="neto_setahun" id="neto_setahun" readonly="readonly" required>

                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">15.Penghasilan tidak kena pajak:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control " name="penghasilan_tdk_pjk" id="penghasilan_tdk_pjk" readonly="readonly" required>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">16.Penghasilan kena pajak setahun/disetahunkan:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="penghasilan_kena_pjk" id="penghasilan_kena_pjk" readonly="readonly" required>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">17.PPh pasal 21 atas penghasilan kena pajak setahun/disetahunkan:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="penghasilan_kena_pjk_setahun" readonly="readonly" id="penghasilan_kena_pjk_setahun" required>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">18.PPh pasal 21 yang telah dipotong masa sebelumnya:</label>
                                <div class="col-sm-6">
                                    <input type="text" style="background-color: #DC143C;    " class="form-control" name="penghasilan_kena_pjk_setahun_21" id="penghasilan_kena_pjk_setahun_21"
                                        disabled>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">19.PPh pasal 21 Terutang:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="pph21_dipotong_sebelum" id="pph21_dipotong_sebelum" readonly required>
                                </div>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                <label for="inputnama" class="col-sm-4 col-form-label">20.PPh pasal 21 dan PPh pasal 26 yang telah dilunasi:</label>

                                <div class="col-sm-6">
                                    <input type="text" style="background-color: #DC143C;  " class="form-control" name="pph21_26_lunas" id="pph21_26_lunas" disabled>
                                </div>
                                </div>
                                
                                <div class="col-md-6 mt-4 ms-5" id="b1">


                                    <p>
                                        <b>C.Identitas Pemotong</b>
                                    </p>
                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                
                                <label for="inputnama" class="col-sm-4 col-form-label">1.NPWP :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="npwp_pemotong" id="subject" >
                                    </div>

                                </div>

                                <div class="form-group row justify-content-center mt-2">
                                
                                <label for="inputnama" class="col-sm-4 col-form-label">2.Nama :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nama_pemotong" id="subject">
                                </div>
                                </div>
                                
                                
                                <button class ="btn btn-secondary mt-4 float-end me-5 mb-4" type="submit" >Simpan</button>
                                

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
                  $( '#gaji_pensi' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#tunjangan_pph' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#tunjangan_lain' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#honor' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#premi_asuransi' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#penerima_bntuk_natura' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#bonus' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  $( '#iuran_pensi' ).mask('000.000.000.000.000.000.000.000.000.000', {reverse: true});
                  
                  

              })
             
      </script>

    <!-- rumus-->
    
    
    <script type="text/javascript" language="Javascript">
        //var b1
        // gajipensi = document.formD.gaji_pensi.value;
        // document.formD.txtDisplay.value = gajipensi;

        // tunjangan = document.formD.tunjangan_pph.value;
        // document.formD.txtDisplay.value = tunjangan;

        // tunjangan1 = document.formD.tunjangan_lain.value;
        // document.formD.txtDisplay.value = tunjangan1;

        // honor = document.formD.honor.value;
        // document.formD.txtDisplay.value = honor;

        // premi = document.formD.premi_asuransi.value;
        // document.formD.txtDisplay.value = premi;

        // natura = document.formD.penerima_bntuk_natura.value;
        // document.formD.txtDisplay.value = natura;

        // bonus1 = document.formD.bonus.value;
        // document.formD.txtDisplay.value = bonus1;

        //var b1 ke 2
        

        // iuran = document.formD.iuran_pensi.value;
        // document.formD.txtDisplay.value = iuran;
        

        //itung masa kerja
        function startCalc(val) {
            totmasa = (12 - val + 1);
            totmasa1 = -(12 - val - 11);
            hasil = document.getElementById('totm');
            hasil.value = totmasa;
            hasil1 = document.getElementById('totm1');
            hasil1.value = totmasa1;
        }
        // function getStatus(x) {
        //     status = x;
        //     hsl_stts = document.getElementById('status');
        //     hsl_stts.value = status;
        // }
        // function getTanggungan(y) {
        //     tanggungan = y;
        //     hsl_tanggungan = document.getElementById('tanggungan');
        //     hsl_tanggungan.value = tanggungan;
        // }



        //rumus no 8,9,11,14
        function OnChange(value) {





            gajipensi = document.formD.gaji_pensi.value;
            gajipensi = gajipensi.replace(/\D/g, '');
            tunjangan = document.formD.tunjangan_pph.value;
            tunjangan = tunjangan.replace(/\D/g, '');
            tunjangan1 = document.formD.tunjangan_lain.value;
            tunjangan1 = tunjangan1.replace(/\D/g, '');
            honor1 = document.formD.honor.value;
            honor1 = honor1.replace(/\D/g, '');
            premi = document.formD.premi_asuransi.value;
            premi = premi.replace(/\D/g, '');
            natura = document.formD.penerima_bntuk_natura.value;
            natura = natura.replace(/\D/g, '');
            bonus1 = document.formD.bonus.value;
            bonus1 = bonus1.replace(/\D/g, '');
            
            iuran = document.formD.iuran_pensi.value;
            iuran = iuran.replace(/\D/g, '');




            hasil = document.getElementById('totm').value;

            hasil1 = document.getElementById('totm1').value;

            hsl_stts = document.getElementById('status').value;
            hsl_tanggungan = document.getElementById('tanggungan').value;

            hasil2 = document.getElementById('totm1').value;

           
            hasil3 = document.getElementById('totm').value;
            hasil4 = document.getElementById('totm').value;
            hasil5 = document.getElementById('totm').value;
            

            total1 = (gajipensi * 1) + (tunjangan * 1) + (tunjangan1 * 1) + (honor1 * 1) + (premi * 1) + (natura * 1) + (bonus1 * 1);
            
       
            biayajabatan = total1/(hasil3)*0.05;
            
            if (biayajabatan > 500000){
                biayajabatan = 500000 * hasil4;
                
            }else{
                biayajabatan = total1/(hasil3) * 0.05  * hasil5;
                
            }
            total2 = (biayajabatan * 1) + (iuran * 1);
            total3 = (total1 * 1) - (total2 * 1);
            total4 = (total3 * 1) + (total3 / hasil) * (hasil1);
            total5 = (hsl_stts * 1) + (hsl_tanggungan * 1);
            total6 = Math.floor(((total4 * 1) - (total5 * 1)) / 1000) * 1000;






            if (total6 > 500000000) {
                total7 = (((total6 - 500000000) * (30 / 100)) + (95000000));
                    //hasil pkp setahun
                reverse = total7.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
                pkp_tahun = ribuan.join('.').split('').reverse().join('');
                document.formD.penghasilan_kena_pjk_setahun.value = pkp_tahun;
            }
            else if (total6 > 250000000 && total6 < 500000000) {
                total7 = (((total6 - 250000000) * (25 / 100)) + (32500000));
                   //hasil pkp setahun
                reverse = total7.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
                pkp_tahun = ribuan.join('.').split('').reverse().join('');
                document.formD.penghasilan_kena_pjk_setahun.value = pkp_tahun;
            }
            else if (total6 > 50000000 && total6 < 250000000) {
                total7 = (((total6 - 50000000) * (15 / 100)) + (2500000));
                   //hasil pkp setahun
                   reverse = total7.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
                pkp_tahun = ribuan.join('.').split('').reverse().join('');
                document.formD.penghasilan_kena_pjk_setahun.value = pkp_tahun;
            }
            else {
                total7 = total6 * 0, 05;
                   //hasil pkp setahun
                reverse = total7.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
                pkp_tahun = ribuan.join('.').split('').reverse().join('');
                document.formD.penghasilan_kena_pjk_setahun.value = pkp_tahun;
            }

            total8 = total7 - ((total7 / 12) * hasil2);

            //hasil_1_8
            reverse = total1.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            hasil_1_8 = ribuan.join('.').split('').reverse().join('');

            //hasil_biaya_jabatan
            reverse = biayajabatan.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            biaya_jabatan = ribuan.join('.').split('').reverse().join('');

            //hasil_9_10
            reverse = total2.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            hasil_9_10 = ribuan.join('.').split('').reverse().join('');

            //hasil neto
            reverse = total3.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            neto = ribuan.join('.').split('').reverse().join('');

             //hasil neto tahun
            reverse = total4.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            neto_tahun = ribuan.join('.').split('').reverse().join('');

             //hasil ptkp
             reverse = total5.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            ptkp = ribuan.join('.').split('').reverse().join('');

             //hasil pkp
            reverse = total6.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            pkp = ribuan.join('.').split('').reverse().join('');

             //hasil pkp setahun
            reverse = total8.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            pph21_ptg = ribuan.join('.').split('').reverse().join('');

            

            document.formD.hasil_1_8.value = hasil_1_8;
            document.formD.biaya_jbtn.value = biaya_jabatan;
            document.formD.hasil_9_10.value = hasil_9_10;
            document.formD.neto.value = neto;
            document.formD.neto_setahun.value = neto_tahun;
            document.formD.penghasilan_tdk_pjk.value = ptkp;
            document.formD.penghasilan_kena_pjk.value = pkp;

            document.formD.pph21_dipotong_sebelum.value = pph21_ptg;






        }
        




    </script>



</body>

</html>