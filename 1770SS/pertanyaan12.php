<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SPT 1770S | Politeknik Negeri Batam</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <div class="form-group">
                    <td >1. </td>
                    <td >Penghasilan Bruto Dalam Negeri Sehubungan Dengan Pekerjaan dan Penghasilan Neto Dalam Negeri</td>
                    <td >
                        <input type="text" name="bruto" id="angkaSatu" onkeyup="sweat();" class="form-control" />
                        <span id="error_first_name" class="text-danger"></span>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>2. </td>
                    <td>Pengurangan</td>
                    <td>
                        <input type="text" name="pengurangan" id="angkaDua" onkeyup="hitung_pajak()" class="form-control" />
                        <span id="error_last_name" class="text-danger"></span>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>3. </td>
                    <td>Penghasilan Tidak Kena Pajak
                        <select id="tkk" onchange="hitung_pajak()" width="10px">
                            <option value="" selected>- Pilih... -</option>
                            <option value="tk0">T/K/0 Tidak Kawin Tidak Ada Tanggungan</option>
                            <option value="tk1">T/K/1 Tidak Kawin Tanggungan 1 Orang</option>
                            <option value="tk2">T/K/2 Tidak Kawin Tanggungan 2 Orang</option>
                            <option value="tk3">T/K/3 Tidak Kawin Tanggungan 3 Orang</option>
                            <option value="k0">K/0 Kawin Tidak Ada Tanggungan</option>
                            <option value="k1">K/1 Kawin Tanggungan 1 Orang</option>
                            <option value="k2">K/2 Kawin Tanggungan 2 Orang</option>
                            <option value="k3">K/3 Kawin Tanggungan 3 Orang</option>
                            <option value="ki0">K/I/0 Kawin istri Digabung Tidak Ada Tanggungan</option>
                            <option value="ki1">K/I/1 Kawin istri Digabung Tanggungan 1 Orang</option>
                            <option value="ki2">K/I/2 Kawin istri Digabung Tanggungan 2 Orang</option>
                            <option value="ki3">K/I/3 Kawin istri Digabung Tanggungan 3 Orang</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="tdk_kena_pjk" id="angkaTiga" onfocus="hitung_pajak()" readonly class="form-control" />
                        <span id="error_last_name" class="text-danger"></span>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>4. </td>
                    <td>Penghasilan Kena Pajak</td>
                    <td>
                        <input type="text" name="kena_pjk" id="angkaEmpat" onfocus="hitung_pajak()" readonly class="form-control" />
                        <span id="error_last_name" class="text-danger"></span>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>5. </td>
                    <td>Pajak Penghasilan Terhutang</td>
                    <td>
                        <input type="text" name="terhutang" id="angkaLima" onchange="hitung_pajak()" readonly class="form-control" />
                        <span id="error_last_name" class="text-danger"></span>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>6. </td>
                    <td>Pajak Penghasilan yang dipotong</td>
                    <td>
                        <input type="text" name="dipotong" id="angkaEnam" onchange="hitung_pajak()" class="form-control" />
                        <span id="error_last_name" class="text-danger"></span>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>7. </td>
                    
                    <td id="penentuan" onclick="tampilkan()"><strong>Nihil</strong></td>
                    
                    <td>
                        <input type="text" name="nihil" id="angkaTujuh" readonly class="form-control" />
                        <span id="error_last_name" class="text-danger"></span>
                    </td>
                </div>
            </tr>
        </table>
    </div>
    <!-- </div> -->

</div>
</body>

<!-- Script nihil -->
<script type="text/javascript">
    function tampilkan(){
        var angkalima=document.getElementById("angkaLima").value;
        var angkaenam=document.getElementById("angkaEnam").value;
        var angkatuju=document.getElementById("angkaTujuh").value;
        var p_kontainer=document.getElementById("penentuan");
        if (angkalima>angkaenam)
        {
            p_kontainer.innerHTML="<strong style='color: red;'>Kurang Bayar</strong> ";
            $('#card_kurang_bayar').show(200);
            $('#btn_lebih').hide(200);
            $('#btn_nihil').hide(200);
            $('#btn_kurang').show(200);

        }
        else if (angkalima<angkaenam)
        {
            p_kontainer.innerHTML="<strong style='color: blue;'>Lebih Bayar</strong>";
            $('#card_kurang_bayar').hide(200);
            $('#btn_lebih').show(200);
            $('#btn_nihil').hide(200);
            $('#btn_kurang').hide(200);

        }
        else if (angkalima==angkaenam)
        {
            p_kontainer.innerHTML="<strong>Nihil</strong>";
            $('#card_kurang_bayar').hide(200);
            $('#btn_lebih').hide(200);
            $('#btn_nihil').show(200);
            $('#btn_kurang').hide(200);
        }
    }

</script>

<!-- <script type="text/javascript">

    function sweat(){
        var vangkasatu = document.getElementById('angkaSatu').value;
        if(vangkasatu >60000000){
            Swal.fire({
              title: 'INFO',
              type: 'info',
              html:
              'Jumlah Penghasilan Bruto Anda ' +
              '(Penjumlahan angka 1, 8 dan 10) ' +
              'lebih dari Rp 60.000.000, ' +
              'Anda harus menggunakan formuir 1770 S',
              showCloseButton: true,
      // showCancelButton: true,
      focusConfirm: false,
      confirmButtonText:
      '<i class="fa fa-thumbs-up"></i> Ya',
      confirmButtonAriaLabel: 'Thumbs up, great!',
  });
        }
    }
</script> -->
</html>
