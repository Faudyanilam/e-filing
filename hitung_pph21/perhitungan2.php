<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/img/icon.png" />
    <title>E-Spt PPh21 Edukasi</title>

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
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/icon.png" rel="icon">

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

  <!-- Template Modal -->

        <!-- ======= Header ======= -->
            <header id="header" class="d-flex align-items-center">
                <div class="container d-flex align-items-center justify-content-between">
                    <a href="index.php" class="logo mr-auto">
                        <img src="assets/img/logopoltek.png" alt="">
                    </a>
                    <!-- Uncomment below if you prefer to use a text logo -->
                    <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> --> 
                    <!-- .navbar -->
                </div>
            </header>
        <!-- End Header -->
  <!-- ======= A1 Section ======= -->
    <section id="contac">
        <form id="formD" name="formD" action="proses-perhitungan2.php" method="post">
        <div class="container wow fadeInUp">

            <div class="card mx-auto">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <br>
                        <h2 class="section-title col-md-10 mx-auto">BUKTI PEMOTONGAN PAJAK PENGHASILAN PASAL 21 BAGI PEGAWAI TETAP ATAU PENERIMA PENSIUN ATAU TUNJANGAN
                            HARI TUA/JAMINAN HARI TUA BERKALA</h6>
                            <div class="section-title-divider "></div>
                                <div class="mx-auto" align="center" >
                                
                                <!-- <form action="" id="form2" nama="form2" enctype="multipart/form-data"> -->
                                        
                                    
                                    <tr>
                                        <td>Nomor bukti potong:</td>
                                        <input type="text" name="nmr_bkt_ptg" id="tgl">

                                        <td>Tanggal:</td>
                                        <input type="date" name="tgl" id="tgl" value="<?php echo Date('Y-m-d'); ?>">

                                        <td>Masa</td>
                                        
                                        <select name="m1" id="m1"  onchange="startCalc(this.value); checkVal();">
                                            <option value="1">0</option>
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
                                        
                                        <select name="m2" id="m2" onchange="startCalc(this.value);"  >
                                            <option value="12">12</option>

                                        </select>
                                        <input class="w3-input w3-border" name="totm" id="totm" type="hidden">
                                        <input class="w3-input w3-border" name="totm1" id="totm1" type="hidden" readonly>
                                        
                                       
                                    </tr>
                                
                               <!--  </form> -->
                            </div>
                            </div>

                <!-- Modal -->
                
               <!-- akhir Modal -->
                </div>
                <!--link ke a b c d-->
                <div class="row  mx-auto">
                    <br>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link "  href="#a">A.Identitas Penerima Penghasilan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#b1">B.1.Rincian Penghasilan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#b2">B2.Perhitungan PPh</a>
                        </li>
                    </ul>
                </div>

                
                <!--a identits memiliki pwghasilan-->
                
                <div class="col-md-6" id="a">
                    <br>

                    <p class="section-description">
                        <b>A.identitas penerima penghasilan yang dipotong</b>
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-4">
                        <div class="info">
                            <div>
                                <p>NPWP:</p>
                            </div>
                           
                            <div>
                                <p>Nama:</p>
                            </div>

                            <div>
                                
                                <div>
                                    <p>Status:</p>
                                </div>
                                
                                <div>
                                    <p>Jumlah Tanggungan:</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-5 col-md-10">
                        <div class="form">
                            <!-- <form name="form3" id="form3" action="" method="post"> -->
                                <div class="form-group ">
                                    <table >
                                        <td>
                                            <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Masukkan NPWP"
                                                required onkeyup="isi_otomatis()">
                                        </td>
                                    </table>
                                </div>
                                
                                <div class="form-group mt-3">

                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
                                </div>

                                <div class="form-group mt-3 id_100">

                                    <select class="form-control status" id="status1" name="status1" onchange="getStatus(this.value);">
                                        <option value="0">pilih status</option>
                                        <option value="54000000" id="1">TK</option>
                                        <option value="58500000" id="2">KB</option>
                                        <option value="58500000" id="3">HB</option>

                                    </select>
                                    <input type="hidden" name="status" id="status" readonly>
                                </div>
                                
                                <div class="form-group mt-3 id_200">

                                    <select class="form-control" id="tanggungan1" name="tanggungan1" onchange="getTanggungan(this.value);">
                                        <option value="">pilih tanggungan</option>
                                        <option value="0">0</option>
                                        <option value="4500000" id="1">1</option>
                                        <option value="9000000" id="2">2</option>
                                        <option value="13500000" id="3">3</option>

                                    </select>
                                    <input type="hidden" name="tanggungan" id="tanggungan" readonly>
                                </div>          
                            </div>
                        <!-- </form>
 -->                    </div>
                </div>

                        <?php 
                            include 'koneksi.php';
                        ?>
            


                <!--b identits memiliki pwghasilan-->
                
                <div class="col-md-4" id="b1">
                    <br>

                    <p class="section-description">
                        <b>B.1.Rincian Penghasilan</b>
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-4">
                        <div class="info">
                            <div>

                                <p>Kode Objek Pajak:</p>
                            </div>
                            <div>

                                <b>
                                    <p>Penghasilan Bruto</p>
                                </b>
                            </div>

                            <div>
                                <p>1.Gaji/Pensiun atau THT/JHT:</p>
                            </div>
                            <div>
                                <p>2.Tunjangan PPh:</p>
                            </div>
                            <div>
                                <p>3.Tunjangan Lainnya, Uang lembur dan Sebagainya:</p>
                            </div>
                            <div>
                                <p>4.Honorarium dan Imbalan lain sejenisnya:</p>
                            </div>
                            <div>
                                <p>5.Premi Asuransi yang dibayar pemberi kerja:</p>
                            </div>
                            <div>
                                <p>6.Penerimaan Dalam bentuk Natura atau kenikmatan lainnya yang dikenakan pemotongan PPh pasal 21:</p>
                            </div>
                            <div>
                                <p>7.Tantiem, Bonus, Gratifikasi, Jasa produksi dan THR:</p>
                            </div>
                            <div>
                                <p>8.Jumlah Penghasilan Bruto(1+2+3+4+5+6+7):</p>
                            </div>
                            <div>
                                <p><b>Pengurangan:</b></p>
                            </div>
                            <div>
                                <p>9.Biaya jabatan/Biaya pensiun:</p>
                            </div>
                            <div>
                                <p>10.Iuran Pensiun atau Iuran THT/JHT:</p>
                            </div>
                            <div>
                                <p>11.Jumlah Pengurangan(9+10):</p>
                            </div>
                            <!--b2 perhitungan pasal 21-->
                            <div class="col-md-4" id="b2">
                                <br>
                                <p class="section-description">
                                    <b>B.2.Perhitungan PPh21</b>
                                </p>
                            </div>
                            <div>
                                <p>12.Jumlah penghasilan neto:</p>
                            </div>
                            <div>
                                <p>13.Penghasilan neto masa sebelumnya:</p>
                            </div>
                            <div>
                                <p>14.Jumlah penghasilan neto untuk PPh21(setahun/disetahunkan):</p>
                            </div>
                            <div>
                                <p>15.Penghasilan tidak kena pajak:</p>
                            </div>
                            <div>
                                <p>16.Penghasilan kena pajak setahun/disetahunkan:</p>
                            </div>
                            <div>
                                <p>17.PPh pasal 21 atas penghasilan kena pajak setahun/disetahunkan:</p>
                            </div>
                            <div>
                                <p>18.PPh pasal 21 yang telah dipotong masa sebelumnya:</p>
                            </div>
                            <div>
                                <p>19.PPh pasal 21 Terutang:</p>
                            </div>
                            <div>
                                <p>20.PPh pasal 21 dan PPh pasal 26 yang telah dilunasi:</p>
                            </div>




                        </div>
                    </div>


                    <div class="col-lg-4 col-md-8">
                        <div class="form">
                            
                                <div class="form-group ">
                                    <select class="form-control" id="" name="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>

                                    </select>
                                </div>
                                <div class="form-group mt-5">
                                    <br>
                                    <input type="text" class="form-control" name="gaji_pensi" id="gaji_pensi" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required>

                                </div>
                                <div class="form-group mt-3">

                                    <input type="text" class="form-control" name="tunjangan_pph" id="tunjangan_pph" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">

                                </div>
                                <div class="form-group mt-3">

                                        <input type="text" class="form-control" name="tunjangan_lain" id="tunjangan_lain" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"  >

                                </div>
                                <div class="form-group mt-3">

                                        <input type="text" class="form-control" name="honor" id="honor" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" >
                                </div>
                                <div class="form-group mt-3">

                                        <input type="text" class="form-control" name="premi_asuransi" id="premi_asuransi" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" >
                                </div>
                                <div class="form-group mt-4">

                                        <input type="text" class="form-control" name="penerima_bntuk_natura" id="penerima_bntuk_natura" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" >
                                </div>
                                <div class="form-group mt-4">

                                        <input type="text" class="form-control" name="bonus" id="bonus" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" >
                                </div>
                                <div class="form-group mt-4">

                                        <input type="text" class="form-control" name="hasil_1_8" id="hasil_1_8" readonly="readonly" >
                                </div>
                                <div class="form-group mt-3">
                                    <br>
                                    <br>
                                    
                                        <input type="text" class="form-control" name="biaya_jbtn" id="biaya_jbtn" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" readonly="readonly" >
                                </div>
                                <div class="form-group mt-3">

                                        <input type="text" class="form-control" name="iuran_pensi" id="iuran_pensi" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" >
                                </div>
                                <div class="form-group mt-3">

                                        <input type="text" class="form-control" name="hasil_9_10" id="hasil_9_10" readonly="readonly"  >
                                </div>
                                <br>
                                <br>
                                <div class="form-group mt-3">
                                    <br>
                                    <input type="text" class="form-control" name="neto" id="neto" readonly="readonly" >
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" style="background-color:#DC143C; "class="form-control" name="neto_masa_sebelum" id="neto_masa_sebelum" disabled>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="text" class="form-control" name="neto_setahun" id="neto_setahun" readonly="readonly" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control " name="penghasilan_tdk_pjk" id="penghasilan_tdk_pjk" readonly="readonly" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="penghasilan_kena_pjk" id="penghasilan_kena_pjk"  readonly="readonly" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="penghasilan_kena_pjk_setahun" readonly="readonly" id="penghasilan_kena_pjk_setahun" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" style="background-color: #DC143C;    " class="form-control" name="penghasilan_kena_pjk_setahun_21"  id="penghasilan_kena_pjk_setahun_21" disabled>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="pph21_dipotong_sebelum" id="pph21_dipotong_sebelum" readonly required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" style="background-color: #DC143C;    " class="form-control" name="pph21_26_lunas" id="pph21_26_lunas" disabled>
                                </div>
                                <br>
                                <br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">SIMPAN</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="batal" class="btn btn-danger"><a href="index.php">BATAL</a></button> 
                                </div>          
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
<br>
<br>
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
    <!-- titik Tanpa Rupiah -->
    <script>
        var tanpa_rupiah = document.getElementById('gaji_pensi');
            tanpa_rupiah.addEventListener('keyup', function(e)
        {
            tanpa_rupiah.value = formatRupiah(this.value);
        });

        var munyuk = document.getElementById('tunjangan_pph');
            munyuk.addEventListener('keyup', function(e)
        {
            munyuk.value = formatRupiah(this.value);
        });

        var dwi = document.getElementById('tunjangan_lain');
            dwi.addEventListener('keyup', function(e)
        {
            dwi.value = formatRupiah(this.value);
        });

        var asep = document.getElementById('honor');
            asep.addEventListener('keyup', function(e)
        {
            asep.value = formatRupiah(this.value);
        });

        var natal = document.getElementById('premi_asuransi');
            natal.addEventListener('keyup', function(e)
        {
            natal.value = formatRupiah(this.value);
        });

        var tomi = document.getElementById('penerima_bntuk_natura');
            tomi.addEventListener('keyup', function(e)
        {
            tomi.value = formatRupiah(this.value);
        });

        var bonus = document.getElementById('bonus');
            bonus.addEventListener('keyup', function(e)
        {
            bonus.value = formatRupiah(this.value);
        });

        var hasil18 = document.getElementById('hasil_1_8');
            hasil18.addEventListener('keyup', function(e)
        {
            hasil18.value = formatRupiah(this.value);
        });

         var biaya_jbtn = document.getElementById('biaya_jbtn');
            biaya_jbtn.addEventListener('keyup', function(e)
        {
            biaya_jbtn.value = formatRupiah(this.value);
        });

        var iuran_pensi = document.getElementById('iuran_pensi');
            iuran_pensi.addEventListener('keyup', function(e)
        {
            iuran_pensi.value = formatRupiah(this.value);
        });

        var hasil_9_10 = document.getElementById('hasil_9_10');
            hasil_9_10.addEventListener('keyup', function(e)
        {
            hasil_9_10.value = formatRupiah(this.value);
        });

        var neto = document.getElementById('neto');
            neto.addEventListener('keyup', function(e)
        {
            neto.value = formatRupiah(this.value);
        });


        var neto_setahun = document.getElementById('neto_setahun');
            neto_setahun.addEventListener('keyup', function(e)
        {
            neto_setahun.value = formatRupiah(this.value);
        });

        var penghasilan_tdk_pjk = document.getElementById('penghasilan_tdk_pjk');
            penghasilan_tdk_pjk.addEventListener('keyup', function(e)
        {
            penghasilan_tdk_pjk.value = formatRupiah(this.value);
        });

        var penghasilan_kena_pjk = document.getElementById('penghasilan_kena_pjk');
            penghasilan_kena_pjk.addEventListener('keyup', function(e)
        {
            penghasilan_kena_pjk.value = formatRupiah(this.value);
        });

        var penghasilan_kena_pjk_setahun = document.getElementById('penghasilan_kena_pjk_setahun');
            penghasilan_kena_pjk_setahun.addEventListener('keyup', function(e)
        {
            penghasilan_kena_pjk_setahun.value = formatRupiah(this.value);
        });

       

        var pph21_dipotong_sebelum = document.getElementById('pph21_dipotong_sebelum');
            pph21_dipotong_sebelum.addEventListener('keyup', function(e)
        {
            pph21_dipotong_sebelum.value = formatRupiah(this.value);
        });



     /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
    </script>
     <!-- alert -->
    <script>
        function checkVal() {
            var total = $("#totm").val();
            if(total < 12)
            {
                $('#B2').modal('show');
            }
            
        }
    </script>
    <!-- titikotomatis-->
    <script type="text/javascript">
        function rupiah($angka){
    
            $hasil_rupiah = "Rp " . document.formD.gaji_pensi($angka,2,',','.');
            return $hasil_rupiah;
                }
    </script>


    <!-- tanggalotomatis-->
    <script type="text/javascript">
    document.getElementById('date').value = Date();
    </script>

    <!-- dataotomatis-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var npwp = $("#npwp").val();
                $.ajax({
                    url: 'ajax.php',
                    data:"npwp="+npwp ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    // logic change select status
                    if(obj.status == "belumkawin"){
                        $('.id_100 option[id=1]').attr('selected','selected');
                    }
                    if(obj.status == "kawin"){
                        $('.id_100 option[id=2]').attr('selected','selected');
                    }
                    if(obj.status == "hidupberpisah"){
                        $('.id_100 option[id=3]').attr('selected','selected');
                    }
                    //end logic 1
                    if(obj.tanggungan == "1"){
                        $('.id_200 option[id=1]').attr('selected','selected');
                    }
                    if(obj.tanggungan == "2"){
                        $('.id_200 option[id=2]').attr('selected','selected');
                    }
                    if(obj.tanggungan == "3"){
                        $('.id_200 option[id=3]').attr('selected','selected');
                    }

                   
                });
            }
        </script>

    <!-- rumus-->

    <script type="text/javascript" language="Javascript">
        //var b1
        gajipensi = document.formD.gaji_pensi.value;
        document.formD.txtDisplay.value = gajipensi;

        tunjangan = document.formD.tunjangan_pph.value;
        document.formD.txtDisplay.value = tunjangan;

        tunjangan1 = document.formD.tunjangan_lain.value;
        document.formD.txtDisplay.value = tunjangan1;

        honor = document.formD.honor.value;
        document.formD.txtDisplay.value = honor;

        premi = document.formD.premi_asuransi.value;
        document.formD.txtDisplay.value = premi;

        natura = document.formD.penerima_bntuk_natura.value;
        document.formD.txtDisplay.value = natura; 

        bonus1 = document.formD.bonus.value;
        document.formD.txtDisplay.value = bonus1;

      //var b1 ke 2
        
        iuran = document.formD.iuran_pensi.value;
        document.formD.txtDisplay.value = iuran;
        
        //itung masa kerja
        function startCalc(val){
            totmasa = (12 - val + 1);
            totmasa1 = -(12 - val - 11);
            hasil = document.getElementById('totm');
            hasil.value = totmasa;
            hasil1 = document.getElementById('totm1');
            hasil1.value = totmasa1;
            }
        function getStatus(x){
            status = x ;
            hsl_stts = document.getElementById('status');
            hsl_stts.value = status;
        }
        function getTanggungan(y){
            tanggungan = y ;
            hsl_tanggungan = document.getElementById('tanggungan');
            hsl_tanggungan.value = tanggungan;
        }
        
        
       
        //rumus no 8,9,11,14
        function OnChange(value){
           
        

          
          
          gajipensi = document.formD.gaji_pensi.value;
          gajipensi = gajipensi.replace(/\D/g,'');

          tunjangan = document.formD.tunjangan_pph.value;
          tunjangan = tunjangan.replace(/\D/g,'');

          tunjangan1 = document.formD.tunjangan_lain.value;
          tunjangan1 = tunjangan1.replace(/\D/g,'');

          honor1 = document.formD.honor.value;
          honor1 = honor1.replace(/\D/g,'');

          premi = document.formD.premi_asuransi.value;
          premi = premi.replace(/\D/g,'');

          natura = document.formD.penerima_bntuk_natura.value;
          natura = natura.replace(/\D/g,'');

          bonus1 = document.formD.bonus.value;
          bonus1 = bonus1.replace(/\D/g,'');

          iuran = document.formD.iuran_pensi.value;
          iuran = iuran.replace(/\D/g,'');;
            
       
          
         
          hasil = document.getElementById('totm').value;
          
          hasil1 = document.getElementById('totm1').value;
          
          hsl_stts = document.getElementById('status').value;
          hsl_tanggungan = document.getElementById('tanggungan').value;
         
          hasil2 = document.getElementById('totm1').value;
          hasil3 = document.getElementById('totm').value;
          hasil4 = document.getElementById('totm').value;
          hasil5 = document.getElementById('totm').value;
        
          total1 = (gajipensi * 1) + (tunjangan * 1) + (tunjangan1 * 1) + (honor1 * 1)+ (premi * 1) + (natura * 1 )+(bonus1 * 1 );
          biayajabatan = total1/(hasil3)*0.05;
          if (biayajabatan > 500000){
            biayajabatan = 500000 * hasil4;
            document.formD.biaya_jbtn.value = biayajabatan.toFixed(0);
        }else{
            biayajabatan = total1/(hasil3)*0.05 * hasil5;
            document.formD.biaya_jbtn.value = biayajabatan.toFixed(0);
          }
          total2 = (biayajabatan * 1) + (iuran * 1);
          total3 = (total1 * 1) - (total2 * 1);
          total4 = (total3 * 1);
          total5 = (hsl_stts * 1) + (hsl_tanggungan * 1);
          total6 = Math.floor( ((total4 * 1) - (total5 * 1)) / 1000 ) * 1000 ;
          
          
        
         
          
          
        if (total6 > 500000000 ){
              total7 = ( ((total6 - 500000000) * (30/100)) +(95000000) );
              document.formD.penghasilan_kena_pjk_setahun.value = total7;  
          }
          else if(total6 > 250000000 && total6 < 500000000){
              total7 = ( ((total6 - 250000000) * (25/100)) +(32500000) );
              document.formD.penghasilan_kena_pjk_setahun.value = total7;  
          }
          else if(total6 > 50000000 && total6 < 250000000){
            total7 = ( ((total6 - 50000000) * (15/100)) +(2500000 ));
            document.formD.penghasilan_kena_pjk_setahun.value = total7;  
          }
          else{
           total7 = total6 * 0,05;
            document.formD.penghasilan_kena_pjk_setahun.value = total7;  
          }
          
         total8 = total7;
          
          reverse = total1.toString().split('').reverse().join(''),
          ribuan = reverse.match(/\d{1,3}/g);
          ribuan = ribuan.join('.').split('').reverse().join('');

          reverse = biayajabatan.toString().split('').reverse().join(''),
          biaya = reverse.match(/\d{1,3}/g);
          biaya = biaya.join('.').split('').reverse().join('');

          reverse = total2.toString().split('').reverse().join(''),
          hasil910 = reverse.match(/\d{1,3}/g);
          hasil910 = hasil910.join('.').split('').reverse().join('');

          reverse = total3.toString().split('').reverse().join(''),
          netto = reverse.match(/\d{1,3}/g);
          netto = netto.join('.').split('').reverse().join('');
          
          reverse = total4.toString().split('').reverse().join(''),
          netosetahun = reverse.match(/\d{1,3}/g);
          netosetahun = netosetahun.join('.').split('').reverse().join('');

          reverse = total5.toString().split('').reverse().join(''),
          penghasilan_tdk = reverse.match(/\d{1,3}/g);
          penghasilan_tdk = penghasilan_tdk.join('.').split('').reverse().join('');

          reverse = total6.toString().split('').reverse().join(''),
          penghasilan_kena = reverse.match(/\d{1,3}/g);
          penghasilan_kena = penghasilan_kena.join('.').split('').reverse().join('');

          reverse = total7.toString().split('').reverse().join(''),
          penghasilan_setahun = reverse.match(/\d{1,3}/g);
          penghasilan_setahun = penghasilan_setahun.join('.').split('').reverse().join('');

          reverse = total8.toString().split('').reverse().join(''),
          pph21dipotong = reverse.match(/\d{1,3}/g);
          pph21dipotong = pph21dipotong.join('.').split('').reverse().join('');
          

          document.formD.hasil_1_8.value = ribuan;
          document.formD.biaya_jbtn.value = biaya;
          document.formD.hasil_9_10.value = hasil910;
          document.formD.neto.value = netto;
          document.formD.neto_setahun.value = netosetahun;
          document.formD.penghasilan_tdk_pjk.value = penghasilan_tdk;
          document.formD.penghasilan_kena_pjk.value = penghasilan_kena;
          document.formD.penghasilan_kena_pjk_setahun.value = penghasilan_setahun;
          document.formD.pph21_dipotong_sebelum.value = total8;
          
          
         
          
  

        }

    
        
        
                                            
      </script>
       
     

</body>

</html>

                  

                                   

                                    

                                    

                                    
                
