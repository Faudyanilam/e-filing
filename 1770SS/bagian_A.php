<?php
error_reporting(false);
session_start();
?>
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
<?php include '../header.html' ?>
<body class="bg-body" onmouseout="hapus();"> 
  <br/>
  <div class="container box">
    <br/>
    <form name="form" action="proses_bagianA.php" method="post" >
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
                    <div class="progress-bar progress-bar-striped" style="width:33.20%; background-color: rgb(255, 157, 49);"><small>33.20%</small></div>
                  </div>
                  <p class="p_text" style="padding-left: 0px; padding-top: 0px;"><small>Halaman dari ke 2 dari 6</small></p>
                  <br/>

                  <!-- card self assesment -->
                  <div class="card" style="border:1px solid #ffd700; height: 45px; background-color: white; border-radius: 7px;">
                    <div class="card-body card-body_1"><b>
                      Sesuai dengan Prinsip <i>Self Assessment, Isi SPT Tahunan Merupakan Tanggung Jawab Wajib Pajak</i></b>
                    </div>
                  </div>
                  <!-- end card assesment -->

                  <!-- Collapse -->
                  <div class="accordion" id="accordionExample">
                    <!-- bagian A -->
                    <div class="card">
                      <div class="card-header_c1" id="headingOne" style="border-radius: 7px;">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left button_1">
                            <b>A. Pajak Penghasilan</b>
                          </button>
                        </h2>
                      </div>
                      <!-- div biasa -->
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <!-- card body -->
                        <div class="card-body">

                          <div class="tab-content" style="margin-top:16px;">

                            <?php include'pertanyaan1.php'; ?>

                            <br/>
                          </div>
                          <div class="col-sm-6">
                            <div align="left">
                              <a href="isi_data_formulir_SS.php">
                                <button type="button" id="btn_back" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px; width: 105px;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne"><i class="fas fa-chevron-left"></i> Sebelumnya
                                </button>
                              </a>
                            </div>
                          </div>
                          <!-- button Selanjutnya nihil -->
                          <div align="right">
                            <a href="bagian_B.php">
                              <button type="submit" id="btn_nihil" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">Selanjutnya <i class="fas fa-chevron-right"></i>
                              </button>
                            </a>
                          </div>
                          <!-- end button Selanjutnya nihil -->

                          <!-- button Selanjutnya lebih bayar -->
                          <div align="right">
                            <!-- <a href="bagian_B.php"> -->
                              <button type="button" id="btn_lebih" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;" data-toggle="modal" data-target="#exampleModal">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                            <!-- </a> -->
                          </div>
                          <!-- end button Selanjutnya lebih bayar -->

                          <!-- card kurang bayar -->
                          <div class="card bg-light mb-3" id="card_kurang_bayar" style="width:708px; background-color: white;">
                            <div class="card-header card-header_2">
                              <i class="fas fa-file mr-1"></i>
                              <b>SS</b>
                            </div>
                            <div class="card-body card-body_4">
                              <br/>

                              <!-- pertanyaan  -->
                              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="no" value="option1">
                                  <label class="form-check-label" for="exampleRadios">Belum, Saya akan membuat kode billing untuk melakukan pembayaran</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="yes" value="option2">
                                  <label class="form-check-label" for="exampleRadios">
                                   Sudah saya sudah melakukan pembayaran
                                 </label>
                               </div>
                             </div>
                             <!-- akhir pertanyaan -->
                             <!-- Output pertanyaan jika belum-->
                             <div class="form-check">
                              <span id="ifNo" style="display:none" >
                                <div class="card" style="height: 45px; background-color: #f5f5f5; border-radius: 7px;">
                                  <div align="center" class="card-body" style="padding-top: 10px">
                                    <div class="col-sm-8">
                                      <label for="exampleFormControlInput1">Anda dapat menggunakan fasilitas upload CSV dari e-SPT</label><br/>
                                    </div>
                                    <div class="col-sm-4" style="padding-right: 20px;">
                                      <button type="button" class="" data-toggle="modal" data-target="#exampleModall" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; height: 30px; width: 150px; border: none;"><small>Buat Kode Billing</small></button>
                                    </div>
                                  </div>
                                </div>
                              </span>
                            </div>
                            <!-- Output pertanyaan jika sudah -->
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                              <div class="form-check">
                                <span id="ifYes" style="display:none" >
                                  <!-- button simpan -->
                                  <div align="right">
                                    <button type="button" class="" data-toggle="modal" data-target="#exampleModaltambah" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; height: 25px; width: 75px; border: none;"><small>Tambah +</small></button>
                                  </div>
                                  <br/>
                                  <!-- table responsive -->
                                  <div align="center">
                                    <div class="table-responsive table_1" style="border: 1px solid #ccc">
                                      <table class="table">
                                        <thead class="thead-dark table_3">
                                          <tr>
                                            <th scope="col" class="font_table"><small>JENIS PEMBAYARAN</small></th>
                                            <th scope="col" class="font_table"><small>NPWP/NOMOR PEMINDAHBUKUAN</small></th>
                                            <th scope="col" class="font_table"><small>TANGGAL PEMBAYARAN</small></th>
                                            <th scope="col" class="font_table"><small>JUMLAH</small></th>
                                            <th scope="col" class="font_table"><small>AKSI</small></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>

                                           <td><small><b> </b></small></td>
                                           <td><small><b> </b></small></td>
                                           <td><small><b> </b></small></td>
                                           <td><small><b> </b></small></td>
                                           <td> </i></td>
                                         </tr>
                                       </tbody>
                                     </table>
                                   </div>
                                 </div>
                                 <br/>
                                 <!-- end table responsive-->
                               </span>
                             </div>
                           </div>
                           <!-- akhir output pertanyaan -->
                         </div>
                       </div>
                       <!-- end card kurang bayar-->

                       <!-- button Selanjutnya kurang bayar -->
                       <br/>
                       <div class="col-sm-6">
                        <div align="left">
                          <a href="isi_data_formulir_SS.php">
                            <button type="button" id="btn_back2" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px; width: 105px;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne"><i class="fas fa-chevron-left"></i> Sebelumnya
                            </button>
                          </a>
                        </div>
                      </div>
                      <div align="right">
                        <a href="bagian_B.php">
                          <button type="submit" name="submit" id="btn_kurang" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                        </a>
                      </div>

                      <br>
                      <!-- end button Selanjutnya kurang bayar -->
                    </div>
                    <!-- end div row -->
                  </div>
                  <!-- end card body -->
                </div>
              </div>
              <!-- end card body -->
            </div>
            <!-- end div biasa -->
          </div>
          <!-- akhir bagian A -->
        </div>
        <!-- end button collapse -->

        <!-- modal buat kode billing -->
        <div class="modal animated fadeIn" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <button type="button" class="btn btn-secondary" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: 1px solid #ccc" data-dismiss="modal">Simpan</button>
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
                  <label class="custom-control-label" for="ContohRadio1" style="color:#191970">SPT Tahunan PPh Orang Pribadi 1770S</label>
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
    </form>

  </div>
</div>

<?php
include ( 'script.php' ); 
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script  src="js/dist/jquery.mask.min.js"></script>
<script  src="js/dist/jquery.mask.js"></script>
<script txt="text/javascript">
    
    $(document).ready(function(){
        // format mata uang
        $( '.uang' ).mask('000.000.000.000', {reverse: true});

    });

    //membuat auto fokus
    document.form.angkaSatu.focus();
    
    //pertanyaan

    function yesnoCheck() {
      if (document.getElementById('no').checked) {
        document.getElementById('ifNo').style.display = 'block';
      }
      else document.getElementById('ifNo').style.display = 'none';

      if(document.getElementById('yes').checked) {
        document.getElementById('ifYes').style.display = 'block';
      }
      else document.getElementById('ifYes').style.display = 'none';
    }
    $('#card_kurang_bayar').hide(500);
    $('#btn_lebih').hide(500); 
    $('#btn_kurang').hide(500);
    $('#btn_back2').hide(500);

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
</body>
</html> 
