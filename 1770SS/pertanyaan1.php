
<div class="table-responsive" >

    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <div class="form-group">
                <td width="2%">1. </td>
                <td width="68%">Penghasilan Bruto Dalam Negeri Sehubungan Dengan Pekerjaan dan Penghasilan Neto Dalam Negeri</td>
                <td width="30%" >
                <!-- <div class="col-sm-1" >
                    <small>Rp.</small>
                </div> -->

                <script type="text/javascript">

                    function cek () {

                        var b = document.getElementById('contoh3').value ;

                        var a = b;


                        <?php $a[1] = '1234775';?>


                        <?php

                        $jlh =  number_format( $a[1] ,0,',','.') ;

                        $a[1] = "'" .$jlh. "'";


                        $a[1] = '1781818';


                        array_push($a, a);

                                    // $a = $jlh ;

                        ?>


                        if ( a != '' ) {


                            var b = <?php echo $a[2] ?> ;

                        }


                            // document.getElementById('angkaTiga').value = '9898989';



                        }

                    </script>
                    <div class="col-md-12" >
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Rp</span>
                            <input class="uang form-control" type="text" id="angkaSatu" name="angkaSatuu" oninput="hapus();muncul()" value="0" style="text-align: right;"  onkeyup="autofill()"/>

                            <!-- data-toggle="modal" data-target="#exampleModal1" -->

                            <input type="text" name="tes" id="tes" style="text-align: right" onkeyup="hitung_pjk()" hidden>

                            
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                            <script>

                                var angkaSatu = document.getElementById("angkaSatu");

                                var juta = document.getElementById("tes");

                            // var juta2 = document.getElementById("tes22");

                            angkaSatu.onkeyup =

                            function () {
                                if ( juta.value > 60000000 ) {
                                    document.getElementById("btn_nihil").disabled = true;
                                    document.getElementById('angkaSatu').value = "0";
                                    // juta2.value = "1000000000";

                                    Swal.fire({
                                      title: 'INFO',
                                      text: "Jumlah penghasilan Bruto Anda lebih dari Rp.60.000.000. Anda harus menggunakan formulir 1770 S",
                                      icon: 'info',
                                      // showCancelButton: true,
                                      confirmButtonColor: '#3085d6',
                                      cancelButtonColor: '#d33',
                                      confirmButtonText: 'Yes'
                                  }).then((result) => {
                                      if (result.isConfirmed) {
                                        // location.href = "../1770S/halaman1.php";
                                    }
                                })
                                  exit;

                              } 
                              

                              else { document.getElementById("btn_nihil").disabled = false;  };
                          };

                      </script>

                  </div>
              </div>
              <span id="error_first_name" class="text-danger"></span>
          </td>
      </div>
  </tr>
  <tr>
    <div class="form-group">
        <td>2. </td>
        <td>Pengurangan</td>
        <td>

            <div class="col-md-12" >
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>
                    <input type="text" name="angkaDua" id="angkaDua" onkeyup="cek();hitung_pjk()" oninput="hapus()" class="uang form-control" value="0" style="text-align: right;" maxlength="11"/>

                    <input type="text"  name="tes2" id="tes2" style="text-align: right" onkeyup="hitung_pjk()" readonly hidden>

                </div>
            </div>
            <span id="error_last_name" class="text-danger"></span>
        </td>
    </div>
</tr>
<tr>
    <div class="form-group">
        <td>3. </td>
        <td>Penghasilan Tidak Kena Pajak
            <select id="pilih" onchange="hitung_pjk(); hapus()" style="width: 50%">
                <option value="" selected>- Pilih... -</option>
                <option value="tk0">TK0 Tidak Kawin Tidak Ada Tanggungan</option>
                <option value="tk1">TK1 Tidak Kawin Tanggungan 1 Orang</option>
                <option value="tk2">TK2 Tidak Kawin Tanggungan 2 Orang</option>
                <option value="tk3">TK3 Tidak Kawin Tanggungan 3 Orang</option>
                <option value="k0">K0 Kawin Tidak Ada Tanggungan</option>
                <option value="k1">K1 Kawin Tanggungan 1 Orang</option>
                <option value="k2">K2 Kawin Tanggungan 2 Orang</option>
                <option value="k3">K3 Kawin Tanggungan 3 Orang</option>
                <option value="ki0">KI0 Kawin istri Digabung Tidak Ada Tanggungan</option>
                <option value="ki1">KI1 Kawin istri Digabung Tanggungan 1 Orang</option>
                <option value="ki2">KI2 Kawin istri Digabung Tanggungan 2 Orang</option>
                <option value="ki3">KI3 Kawin istri Digabung Tanggungan 3 Orang</option>
            </select>
        </td>
        <td>
            <div class="col-md-12" >
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>

                    <!-- <input type="hidden" id="contoh3"> -->

                    <input type="text" class="uang form-control" id="angkaTiga2" value="0" style="text-align: right;" readonly />

                    <input type="hidden" class="uang form-control" name="angkaTiga" value="0" id="angkaTiga" style="text-align: right;" readonly />


                    <input type="text"  name="tes3" id="tes3" value="0" style="text-align: right" readonly hidden>

                </div>
            </div>
            <span id="error_last_name" class="text-danger"></span>
        </td>
    </div>
</tr>
<tr>
    <div class="form-group">
        <td>4. </td>
        <td>Penghasilan Kena Pajak</td>
        <td>
            <div class="col-md-12" >
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>
                    <input class="uang form-control" type="hidden" name="angkaEmpat" id="angkaEmpat" oninput="" value="0" style="text-align: right;" readonly  />

                    <input type="text" class="uang form-control" name="tes4" id="tes4" style="text-align: right" readonly >

                </div>
            </div>
            <span id="error_last_name" class="text-danger"></span>

        </td>
    </div>
</tr>
<tr>
    <div class="form-group">
        <td>5. </td>
        <td>Pajak Penghasilan Terhutang</td>
        <td>
            <div class="col-md-12" >
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>
                    <input type="hidden" class="uang form-control" name="angkaLima" id="angkaLima" value="0" style="text-align: right;" readonly  />

                    <input type="text" class="uang form-control" name="tes5" id="tes5" style="text-align: right" readonly >

                </div>
            </div>
            <span id="error_last_name" class="text-danger"></span>
        </td>
    </div>
</tr>
<tr>
    <div class="form-group">
        <td>6. </td>
        <td>Pajak Penghasilan yang dipotong</td>
        <td>
            <div class="col-md-12" >
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>
                    <input type="text" name="angkaEnam" id="angkaEnam" onkeyup="hitung_pjk();cek();" oninput="hapus()" min="0" class="uang form-control" value="0" style="text-align: right;" maxlength="11"/>

                    <input type="text" name="tes6" id="tes6" style="text-align: right" readonly hidden>

                </div>
            </div>
            <span id="error_last_name" class="text-danger"></span>
        </td>
    </div>
</tr>
<tr>
    <div class="form-group">
        <td>7. </td>
        <td id="penentuan"><strong>Nihil</strong></td>
        <td>
            <div class="col-md-12" >
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>
                    <input type="hidden" class="uang form-control" name="angkaTujuh" id="angkaTujuh" readonly style="text-align: right;" value="0" />

                    <input type="text" class="uang form-control" name="tes7" id="tes7" style="text-align: right" readonly >

                </div>
            </div>
            <span id="error_last_name" class="text-danger"></span>
        </td>
    </div>
</tr>
</table>
</div>
<!-- Modal jika penghasilan bruto lebih dari 60 jt-->
<!-- <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 330px">
    <div class="modal-content">
      <div class="modal-body">
        <div align="center">
            <i class="fas fa-info-circle fa-5x" style="color: rgb(161, 204, 247); padding-top: 40px;"></i>
        </div>
        <h4 align="center">INFO</h4>
        <p align="center" style="color: #191970">
            Jumlah penghasilan Bruto Anda (Penjumlahan angka 1, 8 dan 10) lebih dari Rp.60.000.000. Anda harus menggunakan formulir 1770 S
        </p>
    </div>
    <div align="center">
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="far fa-thumbs-up"></i> Ya</button>
        </div>
        <br/>
    </div>
</div>
</div> -->
<!-- end modal jika penghasilan bruto lebih dari 60 jt-->

<!-- Modal Lebih Bayar -->
<div class="modal fade" id="exampleModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 400px">
    <div class="modal-content">
      <div class="modal-body">
        <div align="center">
            <!-- <i class="fas fa-info-circle fa-5x" style="color: rgb(161, 204, 247); padding-top: 40px;"></i> -->
        </div>
        <h4 align="left" style="padding-left: 20px">SPT 1770 SS Lebih Bayar</h4>
        <hr/>
        <p align="left" style="color: #191970; padding-right: 20px; padding-left: 20px;">
            Apabila Status SPT Tahunan PPh OP 1770SS Lebih Bayar. Anda akan dialihkan ke formulir :
        </p>
        <div class="custom-control custom-radio" style="padding-right: 20px; padding-left: 20px">
          <input type="radio" id="1770_s" name="ContohRadio" class="custom-control-input" data-toggle="modal" data-target="#exampleModal3">
          <label class="custom-control-label" for="ContohRadio1" style="color: #191970;" data-toggle="modal" data-target="#exampleModal3">SPT Tahunan PPh Orang Pribadi 1770 S</label>
      </div>
      <div class="custom-control custom-radio" style="padding-right: 20px; padding-left: 20px">
          <input type="radio" id="1770" name="ContohRadio" class="custom-control-input" data-toggle="modal" data-target="#exampleModal4">
          <label class="custom-control-label" for="ContohRadio2" style="color: #191970;" data-toggle="modal" data-target="#exampleModal4">SPT Tahunan PPh Orang Pribadi 1770</label>
      </div>
      <hr/>
  </div>
  <div align="right" style="padding-right: 30px;">
    <!-- <a href="../form_spt.php"> -->
        <button type="button" class="btn" style="border-radius: 25px; color: #191970; border: grey; height: 30px; width: 100px;" data-dismiss="modal"> Batal</button>
        <!-- </a> -->
    </div>
    <br/>
</div>
</div>
</div>
<!-- end modal Lebih Bayar-->

<!-- Modal Lebih Bayar jika memilih 1770 S-->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 450px">
    <div class="modal-content">
      <div class="modal-body">
        <div align="center">
            <!-- <i class="fas fa-info-circle fa-5x" style="color: rgb(161, 204, 247); padding-top: 40px;"></i> -->
        </div>
        <h4 align="left" style="padding-left: 20px">SPT 1770 SS Lebih Bayar</h4>
        <hr/>
        <p align="left" style="color: #191970; padding-right: 20px; padding-left: 20px;">
            Apabila Status SPT Tahunan PPh OP 1770SS Lebih Bayar. Anda akan dialihkan ke formulir SPT Tahunan PPh Orang Pribadi 1770S:
        </p>
        <div class="custom-control custom-radio" style="padding-right: 20px; padding-left: 20px">
          <input type="radio" id="1770_s" name="ContohRadio" class="custom-control-input" onclick="status();">
          <label class="custom-control-label" for="ContohRadio1" style="color: #191970;">Dengan bentuk formulir</label>
      </div>
      <div class="custom-control custom-radio" style="padding-right: 20px; padding-left: 20px">
          <input type="radio" id="1770" name="ContohRadio" class="custom-control-input" onclick="status();">
          <label class="custom-control-label" for="ContohRadio2" style="color: #191970;">Dengan panduan</label>
      </div>
      <div class="custom-control custom-radio" style="padding-right: 20px; padding-left: 20px">
          <input type="radio" id="1770" name="ContohRadio" class="custom-control-input" onclick="status();">
          <label class="custom-control-label" for="ContohRadio2" style="color: #191970;">Dengan upload SPT</label>
      </div>
      <div class="custom-control custom-radio" style="padding-right: 20px; padding-left: 20px">
          <input type="radio" id="1770" name="ContohRadio" class="custom-control-input" onclick="status();">
          <label class="custom-control-label" for="ContohRadio2" style="color: #191970;">Dengan pengisian offline</label>
      </div>
      <hr/>
  </div>
  <div align="right" style="padding-right: 30px;">
    <a href="../1770S/halaman1.php">
        <button type="button" class="btn" style="background-color: #191970; border-radius: 25px; color: white; border: grey; height: 30px; width: 100px;"> Lanjut</button>
    </a>
    <!-- <a href="../form_spt.php"> -->
        <button type="button" class="btn" style="border-radius: 25px; color: #191970; border: grey; height: 30px; width: 100px;" data-dismiss="modal"> Batal</button>
        <!-- </a> -->
    </div>
    <br/>
</div>
</div>
</div>
<!-- end modal Lebih Bayar-jika memilih 1770 S->



    <!- Modal Lebih Bayar jika memilih 1770 -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="max-width: 450px">
            <div class="modal-content">
              <div class="modal-body">
                <div align="center">
                    <!-- <i class="fas fa-info-circle fa-5x" style="color: rgb(161, 204, 247); padding-top: 40px;"></i> -->
                </div>
                <h4 align="left" style="padding-left: 20px">SPT 1770 SS Lebih Bayar</h4>
                <hr/>
                <p align="left" style="color: #191970; padding-right: 20px; padding-left: 20px;">
                    Apabila Status SPT Tahunan PPh OP 1770SS Lebih Bayar. Anda akan dialihkan ke formulir SPT Tahunan PPh Orang Pribadi 1770:
                </p>
                <div class="custom-control custom-radio" style="padding-right: 20px; padding-left: 20px">
                  <input type="radio" id="1770" name="ContohRadio" class="custom-control-input" onclick="status();">
                  <label class="custom-control-label" for="ContohRadio2" style="color: #191970;">Dengan pengisian offline</label>
              </div>
              <div class="custom-control custom-radio" style="padding-right: 20px; padding-left: 20px">
                  <input type="radio" id="1770" name="ContohRadio" class="custom-control-input" onclick="status();">
                  <label class="custom-control-label" for="ContohRadio2" style="color: #191970;">Dengan upload SPT</label>
              </div>

              <hr/>
          </div>
          <div align="right" style="padding-right: 30px;">
            <a href="../1770/upload_spt.php">
                <button type="button" class="btn" style="background-color: #191970; border-radius: 25px; color: white; border: grey; height: 30px; width: 100px;"> Lanjut</button>
            </a>
            <!-- <a href="../form_spt.php"> -->
                <button type="button" class="btn" style="border-radius: 25px; color: #191970; border: grey; height: 30px; width: 100px;" data-dismiss="modal"> Batal</button>
                <!-- </a> -->
            </div>
            <br/>
        </div>
    </div>
</div>
<!-- end modal Lebih Bayar-jika memilih 1770 S->