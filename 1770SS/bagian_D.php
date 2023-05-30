<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SPT 1770SS | Politeknik Negeri Batam</title>
  <link href="../assets/img/logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-body">  
  <?php include'../header.html'; ?>
  <br/>

  <div class="container box"> 
   <br/>
   
   <form action="spt_anda.php">
    <!-- <ul class="nav nav-tabs">
     <li class="nav-item">
      <a href="arsip_spt.php">Arsip SPT</a>
    </li>
    <li class="nav-item" style="background-color: #f5f5f5;">
      <a href="buat_spt.php" style="color: #191970;">Buat SPT</a>
    </li>
    <li class="nav-item">
      <a href="draft_spt.php">Draft SPT</a>
    </li>
    <li class="nav-item">
      <a href="bantuan_spt.php">Bantuan</a>
    </li>
  </ul> -->

  <!-- Container -->
  <div class="tab-content">
    <div class="tab-pane active" id="lapor_detail" >

      <!-- Content -->
      <div class="panel panel-default">
        <div class="panel-body">

          <!-- membuat card navbar -->
          <div class="card card_8 box-shadow">
            <div class="card-body">

              <!-- membuat row -->
              <div class="row">

                <!-- membuat tab -->
                <div class="col-sm-9">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a href="../arsip_spt.php">Arsip SPT</a>
                    </li>
                    <li class="nav-item grey-nav">
                      <a href="../form_spt.php" class="font-dark-blue">Buat SPT</a>
                    </li>
                    <li class="nav-item jarak-nav">
                      <a href="../draft_spt.php">Draft SPT</a>
                    </li>
                    <li class="nav-item">
                      <a href="../bantuan_spt.php">Bantuan</a>
                    </li>
                  </ul>
                </div>
                <!-- end membuat tab -->

                <!-- menambahkan gambar e-filling -->
                <div align="right" class="col-sm-3" style="padding-right: 30px;">
                  <img src="../img/e-filling.png" width="100px" >
                </div>
                <!-- end menambahkan gambar e-filling -->

              </div>
              <!-- end membuat row -->
            </div>
          </div>
          <!-- end membuat card navbar -->

          <br/>

          <!-- Card -->
          <div class="card bg-light mb-3" style="width:735px; background-color: white;">
            <div class="card-header card-header_1">
              <i class="fas fa-file mr-1"></i>
              <b>SPT 1770 SS</b>
            </div>

            <div class="card-body card-body_2">  
              <p class="p_text_2 card_7"><b> Isi SPT </b></p>

              <!-- progress bar -->
              <div class="progress">
                <div class="progress-bar progress-bar-striped" style="width:83%; background-color: rgb(255, 157, 49);"><small>83%</small></div>
              </div>
              <p class="p_text" style="padding-left: 0px; padding-top: 0px;"><small>Halaman dari ke 5 dari 6</small></p>
              <br/>

              <!-- card self assesment -->
              <div class="card" style="border:1px solid #ffd700; height: 45px; background-color: white; border-radius: 7px;">
                <div class="card-body card-body_1"><b>
                  Sesuai dengan Prinsip <i>Self Assessment, Isi SPT Tahunan Merupakan Tanggung Jawab Wajib Pajak</i></b>
                </div>
              </div>
              <!-- end card assesment -->               

              <!-- bagian D -->
              <div class="card" >
                <div class="card-header_c2" id="headingFour" style="border-radius: 7px">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed button_1" type="button">
                      <b>D. Pernyataan</b>
                    </button>
                  </h2>
                </div>
                <div>
                  <div class="card-body">
                    <p style="color: #191970">
                     Dengan menyadari sepenuhnya akan segala akibatnya termasuk sanksi-sanksi sesuai dengan ketentuan perundang-undangan yang berlaku saya menyatakan bahwa apa yang telah saya beritahukan di atas adalah benar, lengkap dan jelas.
                     <div align="center">
                       <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required/>
                        <label class="form-check-label" for="defaultCheck1" style= "color:#191970">
                          Setuju
                        </label>
                      </div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
            <br/>
            <hr>
            <!-- end bagian D -->

            <!-- Button Collapse-->
            <div class="card bg-light mb-3" style="width:700px; background-color: white;">
              <div class="col-sm-6">
                <a href="bagian_C.php">
                  <button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
                </div>
                <div class="col-sm-6" style="padding-left: 240px;">
                  <!-- <a href="spt_anda.php"> -->
                  <button type="submit" class="" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button>
                <!-- </a> -->
                </div>
              </div>
              <br/>
              <br/>
              </form>
              <!-- end button collapse -->

              <!-- Modal Selanjutnya -->
             <!--  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><b>SPT Anda</b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label" style="padding-left: 80px">Jenis Formulir</label>
                        <div class="col-sm-6" style="padding-right: 50px">
                          <input class="form-control" name="perusahaan" id="perusahaan" value="1770SS" disabled>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label" style="padding-left: 80px">Tahun Pajak</label>
                        <div class="col-sm-6" style="padding-right: 50px">
                          <input class="form-control" name="perusahaan" id="perusahaan" value="2018" disabled>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label" style="padding-left: 80px">Pembetulan Ke</label>
                        <div class="col-sm-6" style="padding-right: 50px">
                          <input class="form-control" name="perusahaan" id="perusahaan" value="0" disabled>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label" style="padding-left: 80px">Status SPT</label>
                        <div class="col-sm-6" style="padding-right: 50px">
                          <input class="form-control" name="perusahaan" id="perusahaan" value="Nihil" disabled>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label" style="padding-left: 80px">Jumlah</label>
                        <div class="col-sm-6" style="padding-right: 50px">
                          <input style="text-align: right;" class="form-control" name="perusahaan" id="perusahaan" value="0" disabled>
                        </div>    
                      </div>

                    </div>

                    <p style="padding-left: 20px;"><b>Kirim</b></p>

                    <hr>
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label" style="padding-left: 96px;">Kode Verifikasi</label>
                      <div class="col-sm-6" style="padding-right: 45px"><small>Ambil kode verifikasi.
                       <button type="button" data-toggle="modal" data-target="#exampleModal2" style="border: none; background-color: orange;">[di sini]</button> Perhatikan server code yang anda diterima sesuai</small>
                     </div>
                   </div>

                   <div class="form-group row">
                    <label class="col-sm-6 col-form-label" style="padding-left: 80px"></label>
                    <div class="col-sm-6" style="padding-right: 50px">
                      <input class="form-control" name="" id="" value="">
                    </div>    
                  </div>
                  <br/>


                  <div align="center">
                   <a href="../lapor_ss.php">
                    <button type="button" class="btn btn-secondary" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white;"><i class="fas fa-paper-plane"></i> Kirim SPT</button>
                  </a>
                </div>
                <br/>
              </div>
            </div>
          </div>
 -->
          <!-- Modal Verifikasi -->
          <form action="../kode_verif_ss.php" method="post">
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 200px;">
              <div class="modal-dialog">
                <div class="modal-content">

                  <button type="button" class="close" data-dismiss="modal" style="padding-right: 10px; padding-top: 5px;" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h5 class="modal-title" id="exampleModalLabel" style="padding-left: 10px; padding-top: 15px;"><b>Kode Verifikasi Dikirim Ke?</b></h5>

                  <div class="modal-body">

                   <div class="row" style="padding-left: 20px">
                    <div class="col-sm-3">
                      <label class="custom-control-label" for="ContohRadio1">email/label</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" name="nama_email" placeholder="Masukkan Email Anda">
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" style="border-radius: 25px;" data-dismiss="modal"> Batal </button>
                  <button type="submit" class="btn btn-primary" style="border-radius: 25px;"> Ok </button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- end modal verifikasi-->

        <!-- modal buat kode billing -->
        <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>INFO</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p style="padding-left: 20px; color:#191970">Status SPT Anda adalah <b>Kurang Bayar</b></p>

                <p style="padding-left: 20px; color: #191970">Untuk dapat melakukan pembayaran pajak Anda pastikan <b>Kode Billing</b> yang Anda buat menggunakan</p>

                <ul>
                  <li>Kode Map:411125 PPh Pasal 25/29 OP</li>
                  <li>Kode jenis Setoran : 200-Tahunan</li>
                  <li>Tahun Pajak : 2018</li>
                </ul>

              </div>
              <div class="modal-footer">
                <div align="right">
                  <button type="button" class="btn btn-secondary" style="background-color: white; border-radius: 25px; color: #191970; border: 1px solid #ccc" data-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- end modal buat kode billing -->

        <!-- modal tambah -->
        <div class="modal fade" id="exampleModaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Bukti Pembayaran Baru</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <div class="form-group row" style="padding-left: 40px; padding-right: 40px; color: #191970">
                  <label class="col-sm-7">Jenis Pembayaran *</label>
                  <div class="col-sm-5">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="ContohRadio1" name="ContohRadio" class="custom-control-input">
                      <label class="custom-control-label" for="ContohRadio1">NTPN</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="ContohRadio2" name="ContohRadio" class="custom-control-input">
                      <label class="custom-control-label" for="ContohRadio2">Pemindahbukuan</label>
                    </div>
                  </div>
                </div>

                <div class="form-group row" style="padding-left: 40px; padding-right: 40px; color: #191970">
                  <label class="col-sm-7 col-form-label">NTPN/Nomor Pbk *</label>
                  <div class="col-sm-5">
                    <input class="form-control" name="" id="">
                  </div>
                </div>

                <div class="form-group row" style="padding-left: 40px; padding-right: 40px; color: #191970">
                  <label class="col-sm-7 col-form-label">Tanggal Pembayaran</label>
                  <div class="col-sm-5">
                    <input class="form-control" name="" id="" disabled>
                  </div>
                </div>

                <div class="form-group row" style="padding-left: 40px; padding-right: 40px; color: #191970">
                  <label class="col-sm-7 col-form-label">Jumlah</label>
                  <div class="col-sm-5">
                    <input class="form-control" name="" id="" disabled>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <div align="right">
                  <button type="button" class="btn btn-secondary" style="background-color: #191970; border-radius: 25px; color: white; border: 1px solid #ccc" data-dismiss="modal">Simpan</button>
                  <button type="button" class="btn btn-secondary" style="background-color: white; border-radius: 25px; color: #191970; border: 1px solid #ccc" data-dismiss="modal">Batal</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal tambah -->

        <!-- Modal Lebih Bayar -->
        <div class="modal fade" id="exampleModallebih" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <button type="button" class="close" data-dismiss="modal" style="padding-right: 10px; padding-top: 5px;" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title" id="exampleModalLabel" style="padding-left: 10px; padding-top: 15px;"><b>SPT 1770 SS Lebih Bayar</b></h5>
              <hr>
              <div class="modal-body">
                <p style="color:#191970">Apabila Status Tahunan PPh OP 1770SS Lebih Bayar Anda akan dialihkan ke 
                formulir:</p>
                <div class="custom-control custom-radio">
                  <input type="radio" id="ContohRadio1" name="ContohRadio" class="custom-control-input">
                  <label class="custom-control-label" for="ContohRadio1" style="color:#191970">SPT Tahunan PPh Orang Pribadi 1770S
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="ContohRadio2" name="ContohRadio" class="custom-control-input">
                    <label class="custom-control-label" for="ContohRadio2" style="color:191970">SPT Tahunan PPh Orang Pribadi 1770</label>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" style="border-radius: 25px;" data-dismiss="modal"> Batal </button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal Lebih Bayar -->

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript" src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" >

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<br/>
<br/>
<br/>
<br/>
<?php include'../footer.html'; ?>
</body>
</html> 
