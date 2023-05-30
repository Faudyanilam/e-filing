<?php require_once "controllerUserData.php";
?>
<?php
$NPWP = $_SESSION['NPWP'];
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];

$data = "SELECT * FROM isi_profil WHERE NPWP = '$NPWP'";
$hasil = mysqli_query($con, $data);
$data1 = "SELECT a2 FROM isi_profil WHERE NPWP = '$NPWP'";
$hasil1 = mysqli_query($con, $data1);
if($hasil){
  $fetch_info = mysqli_fetch_assoc($hasil);
}
if($hasil1){
  $fetch_info1 = mysqli_fetch_assoc($hasil1);
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
        <a href="beranda.php" class="logo mr-auto">
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
          <form action="" method="post">
            <form method='post' >
            <div class="modal-footer">
                <input type="text" name="npwp" id="npwp" value="<?php echo $NPWP;?>">
                <input type="date" class="form-control" name="tanggal","year" id="tanggal","year"  aria-describedby="tanggal","year" required value="">
                 <button type="submit" name="spt" id="spt" class="btn btn-primary">Buat SPT</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
            </form>
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
        <h3 class="section-title">Daftar SPT Yang Telah Dibuat</h3>
        <div class="section-title-divider"></div>
      </div>
    </div>
    <?php 
		    $s_month="";
        $s_year="";
        if (isset($_GET['search'])) {
            $s_month = $_GET['s_month'];
            $s_year = $_GET['s_year'];
        }
	?>
   <form  method="get" >
            <div class="text-center">
            <p>Bulan
                <select name="s_month" id="s_month">
                  <option value="1" <?php if ($s_month=="1"){ echo "selected"; } ?>>Januari</option>
                  <option value="2" <?php if ($s_month=="2"){ echo "selected"; } ?>>Februari</option>
                  <option value="3" <?php if ($s_month=="3"){ echo "selected"; } ?>>Maret</option>
                  <option value="4" <?php if ($s_month=="4"){ echo "selected"; } ?>>April</option>
                  <option value="5" <?php if ($s_month=="5"){ echo "selected"; } ?>>Mei</option>
                  <option value="6" <?php if ($s_month=="6"){ echo "selected"; } ?>>Juni</option>
                  <option value="7" <?php if ($s_month=="7"){ echo "selected"; } ?>>Juli</option>
                  <option value="8" <?php if ($s_month=="8"){ echo "selected"; } ?>>Agustus</option>
                  <option value="9" <?php if ($s_month=="9"){ echo "selected"; } ?>>September</option>
                  <option value="10" <?php if ($s_month=="10"){ echo "selected"; } ?>>Oktober</option>
                  <option value="11" <?php if ($s_month=="11"){ echo "selected"; } ?>>November</option>
                  <option value="12" <?php if ($s_month=="11"){ echo "selected"; } ?>>Desember</option>
                </select>
                </p>
        
                
                <p>Tahun
                    <select name="s_year" id="s_year">
                      <option value="2021" <?php if ($s_month=="2021"){ echo "selected"; } ?>>2021</option>
                      <option value="2022" <?php if ($s_month=="2022"){ echo "selected"; } ?>>2022</option>
                      <option value="2023" <?php if ($s_month=="2023"){ echo "selected"; } ?>>2023</option>
                      <option value="2024" <?php if ($s_month=="2024"){ echo "selected"; } ?>>2024</option>
                      <option value="2025" <?php if ($s_month=="2025"){ echo "selected"; } ?>>2025</option>
                      <option value="2026" <?php if ($s_month=="2026"){ echo "selected"; } ?>>2026</option>
                      <option value="2027" <?php if ($s_month=="2027"){ echo "selected"; } ?>>2027</option>
                      <option value="2028" <?php if ($s_month=="2028"){ echo "selected"; } ?>>2028</option>
                    </select>
                    </p>

                <div class="modal-footer-center">
                <button  id="search" name="search" class="btn btn-primary">Cari</button>

                </div>
                </div>
                </form >
         <p>
    <form action="multibetul.php" method="POST" >
        <table class="table table-bordered border-dark table-striped">
        <thead>
			<tr align="center">
				<td>No</td>
        <td>Masa</td>
				<td>Tahun</td>
        <td>Pembetulan</td>		
        <td>Aksi</td>	
			</tr>
		</thead>
		<tbody>
    <?php
    include 'connection.php';
    $s_month = '%'. $s_month .'%';
    $s_year = '%'. $s_year .'%';
    $no = 1;
    $query=mysqli_query($con, "SELECT DATE_FORMAT(tanggal,'%b') as 'month' , YEAR (`tanggal` ) as 'year' ,pembetulan, tanggal FROM masa_spt WHERE MONTH(`tanggal` ) LIKE '$s_month' AND YEAR (`tanggal` ) LIKE '$s_year' AND NPWP='$NPWP' ORDER BY id_spt ASC  " );
    $query1=mysqli_query($con,"SELECT `id_spt` FROM `masa_spt` WHERE NPWP='$NPWP' ORDER BY id_spt ASC ");
    
        
    
    while ($r=mysqli_fetch_array($query) AND $i=mysqli_fetch_array($query1) ){
      ?>
      <tr align="center">
      <td ><?php echo $no++; ?></td>
      <td><?php echo $r['month'];?></td>
      <td><?php echo $r['year'];?></td>
      <td><?php echo $r['pembetulan'] ?></td>
      <td>
      
      <input type="hidden" name="idspt" id="idspt" value="<?php echo $i['id_spt'];;?>" required readonly>
                                    
      <a><input type="button" class="btn btn-dark"  value="Pembetulan" data-toggle="modal" data-target="#modalPembetulan<?php echo $i['id_spt'];?>" ></a>
      
      <a> <button type="submit" name="delete" id="delete" value="<?php echo $i['id_spt']; ?>" class="btn btn-dark" >Hapus</button> </a>
      
      
      
      
      <button class="btn btn-dark float-left" ><a href="beranda.php?idspt=<?php echo $i['id_spt'];?>&pembetulan=<?php echo $r['pembetulan'];?>">Buka </a></button>
     
      
     
  </tr>
  



 <!-- Update Modal      -->
 <div class="example-modal">
 <div class="modal fade" id="modalPembetulan<?php echo $i['id_spt'];?>" >
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h3 class="modal-title">Pembetulan</h3>
 </div>
 <div class="modal-body">
 <?php
 $id_spt = $i['id_spt'];


 $sql_alat = mysqli_query($con,"SELECT * FROM masa_spt WHERE id_spt ='$id_spt' ORDER BY id_spt ASC ");
 while ($datasptp = mysqli_fetch_assoc($sql_alat)) {
 
 ?>
       <i class="fas fa-check"></i> SPT Pembetulan Berhasilan Dibuat
      <br>
 <div class="form-group">
 <div class="row">
 
 <label class="col-sm-3 control-label text-right"> <!-- ID--> </label>
 
 <div class="col-sm-8"> <input name="spt" type="text" id="spt" value="<?php echo $datasptp['id_spt'];?>" ></div>
 </div>
 </div>
 <div class="form-group">
 <div class="row">
 <label class="col-sm-3 control-label text-right"><!-- Pembetulan--></label>
 <div class="col-sm-8">  <input name="pembetulan" type="text" id="pembetulan" value="<?php echo $datasptp['pembetulan']+1;?>" ></div>
 </div>
 </div>

 <div class="modal-footer">
 <button id="noedit" type="button" class="btn btn-danger pull-left" data-dismiss="modal">TIDAK</button>
 
 <a> <button type="submit" name="yaa" id="yaa" value="<?php echo $datasptp['id_spt']; ?>" class="btn btn-dark" >Ya</button> </a>
 </div>
 
 <?php
 }
 ?>

 </div> </div> </div> </div></div>
        
 

  <?php 
		}
		?>

</form>
      
      </div>
    </div>
  </div>
</div>
		</tbody>
  </table>
 
 
  <div class="form">
         
        </div>
      </div>

    </div>
</div>
  </div>
  </p>
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


  <!-- javascript buat filter-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
//   document.getElementById("myAnchor").addEventListener("click", function(event){
//   event.preventDefault()
// });
// 		$("#modal").click(function () {
// 			var id = $("#id_spt[]").val();
// 			// var marks = $("#marks").val();
// 			var str = "You Have Entered "+ "Name: " + id;
// 			$("#modal_body").html(str);
// 		});
function myFunction() {
  alert("The form was submitted");
}

function FrmModal(frm)
{
   frm.preventDefault();
   $('#modalPembetulans').modal('show');
   $("#id_spt").html($("#id_spt").val());
  //  show: 'true'
}

$('#modalPembetulans').on('submit', function(ev) {
    $('#my-modal').modal({
        show: 'false'
    }); 
	</script>
</body>

</html>