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



      <section id="contact">
  <div class="container justify-content-center" style="margin-bottom: 130px">
    
    <div class="card mx-auto justify-content-center">
    <div class="row">
      <div class="col">
          <br>
        <h3 class="section-title">Daftar Karyawan</h3>
        <div class="section-title-divider"></div>
        
        </div>
      </div>
    
            <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi,"SELECT * FROM karyawan1 ");
	   
            ?>
        <form align="center" valign="middle" action="" method="post">
        <table class="table-md mx-auto table-responsive table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Id Karyawan</th>
              <th scope="col">NPWP</th>
              <th scope="col">NAMA</th>
              <th scope="col">TANGGUNGAN</th>
              <th scope="col">JENIS KELAMIN</th>
              <th scope="col">STATUS KEPEGAWAIAN</th>
              <th scope="col">STATUS MASUK</th>
              <th scope="col">STATUS NIKAH</th>
              <th scope="col">KODE NEGARA</th>
              <th scope="col">AKSI</th>
              
            </tr>
          </thead>

          <?php  ?>
            <?php
            $id_karyawan = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $id_karyawan ?></td>
            <td><?php echo $data["npwp"];?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["tanggungan"];?></td>
            <td><?php echo $data["jenis_kelamin"];?></td>
            <td><?php echo $data["status_kepegawaian"];?></td>
            <td><?php echo $data["status_masuk"];?></td>
            <td><?php echo $data["status_nikah"];?></td>
            <td><?php echo $data["kode_negara"];?></td>
            
            <td>
                <button class="btn btn-success"><a href="update.php?id_karyawan=<?php echo $data['id_karyawan']; ?>">UPDATE</font></a></button>
                <button class="btn btn-danger"><a href="delete.php?id_karyawan=<?php echo $data['id_karyawan']; ?>">DELETE</a></button>
            </td>
        </tr>
        <?php $id_karyawan++; } ?>
        <?php //} ?>
          
          
          </table>
        </form>
        </div>
</div>
</section>


        <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container" style="margin-bottom: 10px ">
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
  
