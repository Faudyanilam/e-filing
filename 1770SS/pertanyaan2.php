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
                        <input type="text" name="bruto" id="angkaSatu" onkeyup="hitung_pajak();" class="form-control" />
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
                    <td><strong>Nihil</strong></td>
                    <td>
                        <input type="text" name="nihil" id="angkaTujuh" readonly class="form-control" />
                        <span id="error_last_name" class="text-danger"></span>
                    </td>
                </div>
            </tr>
        </table>
    </div>

    <div align="right">

            <button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none;">Berikutnya <i class="fas fa-chevron-right"></i></button>
        </div>
        <br />
    </body>

    <!-- Script rupiah php -->
    <script type="text/javascript">
        var rupiah1 = document.getElementById("angkaSatu");
        rupiah1.addEventListener("keyup", function(e) {
          rupiah1.value = convertRupiah(this.value);
      });
        rupiah1.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });

        function convertRupiah(angka, prefix) {
          var number_string = angka.replace(/[^,\d]/g, "").toString(),
          split  = number_string.split(","),
          sisa   = split[0].length % 3,
          rupiah = split[0].substr(0, sisa),
          ribuan = split[0].substr(sisa).match(/\d{3}/gi);

          if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
    }

    function isNumberKey(evt) {
        key = evt.which || evt.keyCode;
    if (    key != 188 // Comma
         && key != 8 // Backspace
         && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
         && (key < 48 || key > 57) // Non digit
         ) 
    {
        evt.preventDefault();
        return;
    }
}
</script>
</html>