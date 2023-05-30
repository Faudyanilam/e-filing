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
    <script>
        function startCalc(){
        interval = setInterval("Calc()",1);}
        function Calc(){
        one = document.autoSumForm.gaji.value;
        two = document.autoSumForm.tunjangan_pph.value; 
        three = document.autoSumForm.tunjangan_lainnya.value;
        four = document.autoSumForm.honorarium.value;
        five = document.autoSumForm.asuransi.value;
        six = document.autoSumForm.natura.value;
        seven = document.autoSumForm.bonus.value;
        document.autoSumForm.jumlah.value = (one * 1) + (two * 1) + (three * 1) + (four * 1) + (five * 1) + (six * 1) + (seven * 1);}
        function stopCalc(){
        clearInterval(interval);}
    </script>

    <script>
        function startpengurang(){
        interval = setInterval("pengurang()",1);}
        function pengurang(){
        nine = document.autoMinForm.biaya_jabatan.value;
        ten = document.autoMinForm.iuran_pensiun.value; 
        document.autoMinForm.jumlah.value = (nine * 1) + (ten * 1);}
        function stoppengurang(){
        clearInterval(interval);}
    </script>

    <script>
        function startpenambah(){
        interval = setInterval("penambah()",1);}
        function penambah(){
        nine = document.autoMinForm.biaya_jabatan.value;
        ten = document.autoMinForm.iuran_pensiun.value; 
        document.autoMinForm.jumlah.value = (nine * 1) + (ten * 1);}
        function stoppenambah(){
        clearInterval(interval);}
    </script>

     

    </head>

    <body>

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
    <section id="contac" >
        <div class="container wow fadeInUp">
            <!-- identits card-->
            <div class="card mx-auto" style="margin-top: 100px">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <br>
                        <h2 class="section-title">BUKTI PEMOTONGAN PAJAK PENGHASILAN PASAL 21 BAGI PEGAWAI TETAP ATAU PENERIMA PENSIUN ATAU TUNJANGAN
                            HARI TUA/JAMINAN HARI TUA BERKALA</h2>
                            <div class="section-title-divider"></div>
                            <div class="mx-auto">
                                <form action="">
                                    <tr>
                                        <td>Nomor bukti potong:</td>
                                        <input class="col-lg-2" type="text" name=i d="">
                                        <td>Tanggal:</td>
                                        <input type="date" name="" id="">
                                        <td>Masa</td>
                                        <select name="" id="">
                                            <option type="date" value="">1</option>
                                        </select>
                                        &nbsp;
                                        <select name="" id="">
                                            <option type="date" value="">1</option>
                                        </select>
                                    </tr>
                                  

                                    <!--b identits memiliki pwghasilan-->
                                    <div class="" id="b1" align="center">
                                            <br>
                                            <b>B.1.Rincian Penghasilan</b>
                                             &nbsp; &nbsp; &nbsp; &nbsp;
                                            <b>B.2.Perhitungan PPh21</b>
                                     </div>
                                     <br>

                                     <!--penjumlahan pertama-->
                                    <div class="col-lg-5 col-md-4">
                                        <form name="autoSumForm">
                                            <table border="0" width="1000" align="cente">
                                                <b>B.1.Rincian Penghasilan</b>
                                                <tr>
                                                    <td>Kode Objek Pajak</td>
                                                    <td> 
                                                        <select class="form-control" id="" name="">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>Penghasilan Bruto</b></td>
                                                </tr>

                                                <tr>
                                                    <td>1.Gaji/Pensiun atau THT/JHT: </td>
                                                    <td><input type="text" class="form-control" name="gaji" style="text-align:right;" size="23" onfocus="startCalc();" onblur="stopCalc();"></td>
                                                </tr>

                                                <tr>
                                                    <td>2.Tunjangan PPh: </td>
                                                    <td><input type="text" class="form-control" name="tunjangan_pph" style="text-align:right;" size="23" onfocus="startCalc();" onblur="stopCalc();"></td>
                                                </tr>

                                                <tr>
                                                    <td>3.Tunjangan Lainnya, Uang lembur dan Sebagainya: </td>
                                                    <td><input type="text" class="form-control" name="tunjangan_lainnya" style="text-align:right;" size="23" onfocus="startCalc();" onblur="stopCalc();"></td>
                                                </tr>

                                                <tr>
                                                    <td>4.Honorarium dan Imbalan lain sejenisnya: </td>
                                                    <td><input type="text" class="form-control" name="honorarium" style="text-align:right;" size="23" onfocus="startCalc();" onblur="stopCalc();"></td>
                                                </tr>

                                                <tr>
                                                    <td>5.Premi Asuransi yang dibayar pemberi kerja: </td>
                                                    <td><input type="text" class="form-control" name="asuransi" style="text-align:right;" size="23" onfocus="startCalc();" onblur="stopCalc();"></td>
                                                </tr>

                                                <tr>
                                                    <td>6.Penerimaan Dalam bentuk Natura/kenikmatan lainnya yang dikenakan pemotongan PPh pasal 21:</td>
                                                    <td><input type="text" class="form-control" name="natura" style="text-align:right;" size="23" onfocus="startCalc();" onblur="stopCalc();"></td>
                                                </tr>

                                                <tr>
                                                    <td>7.Tantiem, Bonus, Gratifikasi, Jasa produksi dan THR: </td>
                                                    <td><input type="text" class="form-control" name="bonus" style="text-align:right;" size="23" onfocus="startCalc();" onblur="stopCalc();"></td>
                                                </tr>

                                                <tr>
                                                    <td>8.Jumlah Penghasilan Bruto(1+2+3+4+5+6+7):</td>
                                                    <td><input readonly="" type="text" class="form-control" value="0" name="jumlah" size="23" onchange="tryNumberFormat(this.form.thirdBox);"> </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                    <!-- end penjumlahan pertama-->

                                    <!--penjumlahan Kedua-->
                                    <div class="col-lg-8 col-md-4">
                                        <form name="autoMinForm">
                                            <table border="0" width="1000" align="center" class="col">
                                                <br>
                                                <b>Pengurang</b>
                                                <br>
                                                <tr>
                                                    <td>9. Biaya jabatan atau Biaya pensiun: </td>
                                                    <td><input type="text" class="form-control" name="biaya_jabatan" style="text-align:right;" size="4" onfocus="startpengurang();" onblur="stoppengurang();"></td>
                                                </tr>

                                                 <tr>
                                                    <td>10. Iuran Pensiun atau Iuran THT/JHT: </td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="4" onfocus="startpengurang();" onblur="stoppengurang();"></td>
                                                </tr>

                                                <tr>
                                                    <td>11. Jumlah Pengurangan(9+10):</td>
                                                    <td><input readonly="" type="text" class="form-control" value="0" name="jumlah" size="4" onchange="tryNumberFormat(this.form.thirdBox);"> </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                    <!-- end penjumlahan Kedua-->

                                    <!--penjumlahan Ketiga-->
                                    <div class="col-lg-8 col-md-4">
                                        <form name="autoMunForm">
                                            <table border="0" width="1000" align="center" class="col">
                                                <br>
                                                <b>B.2.Perhitungan PPh21</b>
                                                <br>
                                                <tr>
                                                    <td>12.Jumlah penghasilan neto (8-11):</td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="13" onfocus="startpe();" onblur="stoppengurang();"></td>      
                                                </tr>

                                                <tr>
                                                    <td>13.Penghasilan neto masa sebelumnya: </td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="10" onfocus="startpe();" onblur="stoppengurang();" aria-label="disabled input example" disabled></td>
                                                </tr>

                                                <tr>
                                                    <td>14.Jumlah penghasilan neto untuk PPh21(setahun/disetahunkan):</td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="13" onfocus="startpengurang();" onblur="stoppengurang();"></td>
                                                </tr>

                                                <tr>
                                                    <td>15.Penghasilan tidak kena pajak:</td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="13" onfocus="startpengurang();" onblur="stoppengurang();"></td>
                                                </tr>

                                                <tr>
                                                    <td>16.Penghasilan kena pajak setahun/disetahunkan:</td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="13" onfocus="startpengurang();" onblur="stoppengurang();"></td>
                                                </tr>

                                                <tr>
                                                    <td>17.PPh pasal 21 atas penghasilan kena pajak setahun/disetahunkan:</td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="13" onfocus="startpengurang();" onblur="stoppengurang();"></td>
                                                </tr>

                                                 <tr>
                                                    <td>18.PPh pasal 21 yang telah dipotong masa sebelumnya:</td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="13" onfocus="startpengurang();" onblur="stoppengurang();" aria-label="disabled input example" disabled></td>
                                                </tr>

                                                <tr>
                                                    <td>19.PPh pasal 21 Terutang:</td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="13" onfocus="startpengurang();" onblur="stoppengurang();"></td>
                                                </tr>

                                                <tr>
                                                    <td>20.PPh pasal 21 dan PPh pasal 26 yang telah dipotong dilunasi :</td>
                                                    <td><input type="text" class="form-control" name="iuran_pensiun" style="text-align:right;" size="13" onfocus="startpengurang();" onblur="stoppengurang();" aria-label="disabled input example" disabled></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                    <!-- end penjumlahan Ketiga-->
                                    </br>
                                    </br>
                              
                    </div>
                </div>
            </div>
        </br>
        </br>
            <!-- end identits card-->
        </div>
    </section>

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
                        Designed by
                        <a href="#">Tim PBL PPH21 Polibatam</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

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
               
                