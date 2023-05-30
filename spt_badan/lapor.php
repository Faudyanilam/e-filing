<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Lapor Pajak</title>
  <link href="../assets/img/logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->

  <link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>

  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
  <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>

  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="../1770S/bootstrap/js/jquery.js"></script>
  <script src="../1770S/bootstrap/js/bootstrap.min.js"></script>  
 
</head>
<body class="bg-body">
  <?php
  include "../koneksi.php";

  if (isset($_GET['hasil1'])) {
    if ($_GET['hasil1'] == "berhasil") {
      echo "<script>
      Swal.fire(
      'Good job!',
      'Login berhasil', 
      'success'
    ) </script>";
  } 
}
if(isset($_GET['hasil'])){
   if ($_GET['hasil'] == "berhasil") {
    echo "<script>
    Swal.fire(
    'Good job!',
    'Tambah Data Berhasil', 
    'success'
  ) </script>";
  }
}

?>
<?php include'header.html'; ?>
<br />
<div class="container box">
  <br />
  <form >

    <!-- tab content -->
    <div class="tab-content">
      <!-- tab pane -->
      <div class="tab-pane active" id="lapor_detail" >
        <!-- panel -->
        <div class="panel panel-default">
          <!-- panel body -->
          <div class="panel-body">

            <!-- membuat card navbar -->
            <div class="card card_8 box-shadow">
              <div class="card-body">

                <!-- membuat row -->
                <div class="row">

                  <!-- membuat tab -->
                  <div class="col-sm-12">
                   <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a href="informasi.php">Informasi</a>
                    </li>
                    <li class="nav-item">
                      <a href="dasboard.php">Dasboard</a>
                    </li>
                    <li class="nav-item">
                      <a href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item">
                      <a href="../bayar.php">Bayar</a>
                    </li>
                    <li class="nav-item grey-nav">
                      <a href="lapor.php" class="font-dark-blue">Lapor</a>
                    </li>
                    <li class="nav-item jarak-nav">
                      <a href="layanan.php">Layanan</a>
                    </li>
                  </ul>
                </div>
                <!-- end membuat tab -->

              </div>
              <!-- end membuat row -->
            </div>
          </div>
          <!-- end membuat card navbar -->

          <br/>


          <!-- agar kolom tidak ada batas row -->
          <div class="row no-gutters">

            <!-- membuat kolom kiri-->
            <div class="col-6 col-md-4">

              <!-- card Menu lapor -->
              <div class="card card_1">
                <div class="card-header card-header_1">
                  <i class="fas fa-bars"></i> <b>Menu Lapor</b>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item font-14px"><i class="fas fa-clipboard-check p_text_2"></i> Pelaporan</li>
                  <li class="list-group-item font-14px"><i class="fas fa-clipboard p_text_2"></i> Pra Pelaporan</li>
                </ul>
              </div>
              <!-- end card Menu lapor -->

              <!-- card petunjuk -->
              <div class="card bg-light mb-3 card_2">
                <div class="card-header card-header_2"><i class="fas fa-book-open"></i> <b>Petunjuk</b></div>
                <div class="card-body">
                  <h5 class="card-title card-title_1 font-13px">Menu Lapor dibedakan sub menu pelaporan dan pra pelaporan</h5>
                  <p class="card-text card-text_1 font-12px">1. Sub menu pelaporan manampilkan aplikasi e-filling yang digunakan untuk menyampaikan SPT secara elektronik serta data riwayat pelaporan selama 3 tahun terakhir</p>
                  <p class="card-text card-text_1 font-12px">2. Sub menu pra pelaporan menampilkan aplikasi yang digunakan dalam pembuatan bukti pemotongan dan/atau pemungutan pajak sebelum melaporkan SPT</p>
                  <br/>
                </div>
              </div>
              <!-- end card petunjuk -->

            </div>
            <!-- end membuat kolom kiri-->

            <!-- membuat kolom kanan -->
            <div class="col-sm-6 col-md-8">

              <!-- membuat card highlight -->
              <div class="card card_3">
                <div class="card-body card-body_1"><small><b>
                "Apabila terdapat data yang tidak sesuai, silahkan menghubungi KPP Administrasi atau Kring Pajak 1500200"</b></small>
              </div>
            </div>
            <!-- end membuat card highlight -->
            <br/>

            <!-- membuat card e filling -->
            <a href="arsip_spt.php" style="color:#191970; border:0px solid #ccc;">
              <div class="card mb-3 card_4">
                <div class="row no-gutters">
                <div class="col-md-4 col_1">
                    <img src="../img/eFiling.png" class="card-img img_efilling" alt="e-filling"/>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title p_text_2"><b>e-Filling</b></h5>
                      <p class="card-text p_text_2"><small>Salah satu cara penyampaian SPT secara elektronik. Lebih mudah, lebih cepat, lebih aman!</small></p>
                      <p class="card-text p_text_3"><small>FAQ / Pertanyaan Umum</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <!-- end membuat card e filling -->
            <br/>
            <!-- membuat card e form -->
            <div class="card mb-3 card_4">
              <div class="row no-gutters">
                <div class="col-md-4 col_1">
                  <img src="../img/eForm.png" class="card-img img_eform" alt="e-form" >
                </div>
                <div class="col-md-8">
                  <div class="card-body" style="">
                    <h5 class="card-title p_text_2"><b>e-Form</b></h5>
                    <p class="card-text p_text_2"><small>Salah satu cara penyampaian SPT dengan menggunakan formulir elektronik.</small></p>
                    <p class="card-text p_text_3"><small>FAQ / Pertanyaan Umum</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end membuat card e form -->
            <br/>

            <!-- card riwayat pelaporan -->
            <div class="card bg-light mb-3 card_5">
              <div class="card-header card-header_3"><i class="fas fa-paste"></i> <b>Riwayat Pelaporan</b></div>
              <div class="card-body card-body_2">

                <div class="card mb-3 card_6">
                  <div class="row no-gutters">
                    <div class="col-md-5 card_7">
                      <p class="p_text_2"> Tampilkan
                        <input type="number" class="input_1">
                        entri     
                      </p>
                    </div>
                    <div class="col-md-7 col_2">
                      <p class="p_text_2" style="padding-left: 50px; padding-right: 0px">Cari:
                        <input type="text" style="width: 110px;">
                      </p>
                    </div>
                  </div>
                </div>

                <!-- menampilkan entri  -->
                <p class="p_text">Menampilkan 2 sampai 3 dari 1 entri</p>
                <!-- end menampilkan entri -->

                <br/>
                <!-- table responsive -->
                <div class="table-responsive table_1" style="border: 1px solid #ccc;">
                  <table class="table table_2" style="border: 1px solid #ccc;">
                    <thead class="thead-dark table_3">
                      <tr>
                        <th scope="col" class="font_table"><small>JENIS SPT</small></th>
                        <th scope="col" class="font_table"><small>TAHUN/MASA PAJAK</small></th>
                        <th scope="col" class="font_table"><small>PEMBETULAN KE</small></th>
                        <th scope="col" class="font_table"><small>STATUS</small></th>
                        <th scope="col" class="font_table"><small>SUMBER</small></th>
                        <th scope="col" class="font_table"><small>AKSI</small></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       <!-- <td style="border:  1px solid #ccc;"><small><b></b></small></td> -->
                       <!-- <td><small><b>2019/1</b></small></td> -->
                       <!-- <td><small><b>0</b></small></td> -->
                       <!-- <td><small><b>NIHIL</b></small></td> -->
                       <!-- <td><small><b>EFILLING-PAJAK.GO.ID</b></small></td> -->
                       <!-- <td><i class="fas fa-copy fa-2x" style="color:#191970; "></i></td> -->
                     </tr>
                   </tbody>
                 </table>
               </div>
               <!-- end tabel responsive -->
             </div>
           </div>
           <!-- end card riwayat pelaporan -->
         </div>
         <!-- end membuat kolom kanan-->
       </div>
       <!-- end agar kolom tidak ada batas row  -->
     </div>
     <!-- end panel body -->
   </div> 
   <!-- end panel panel -->
 </div>
 <!-- end tab pane -->
</div>
<!-- end tab content -->
</form>
<!-- end form -->
</div>
<!-- end container box -->
<script src="script.js"></script>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<br/>
<br/>
<br/>

<div class="invisible">
<button type="button" id="tombol_berlangganan" data-toggle="modal" data-target="#modal_berlangganan" class="btn btn-success">Tekan disini</button>
</div>
<div class="invisible">
<button type="button" id="tombol_telah_berlangganan" data-toggle="modal" data-target="#modal_telah_berlangganan" class="btn btn-success">Tekan disini</button>
</div>
<?php include'../footer.html'; ?>

<script>
<?php
$akun2 = $_SESSION['akun'];
$invis = $_SESSION['invis'];
echo "var akun2 = '$akun2';";
echo "var invis_js = '$invis';";
?>
if (akun2 == "basic") {
  if(invis_js == "show"){
    $("#tombol_telah_berlangganan").trigger('click');
  }
}else if (akun2 == "pro"){
  if(invis_js == "show"){
    $("#tombol_telah_berlangganan").trigger('click');
  }
}else if(akun2 == "trial"){
  if(invis_js == "show"){
    $("#tombol_berlangganan").trigger('click');
  }
  
}
</script>
</body>
</html>


<!-- Mengirim variabel php ke js -->
<!-- <?php $var = "ggss"; ?>
<script>
      <?php
        echo "var varjs = '$var';";
      ?>
      alert(varjs);
</script> -->