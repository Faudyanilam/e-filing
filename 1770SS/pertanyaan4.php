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
<form action="proses_bagianC.php" method="post">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <tr>
        <div class="form-group">
          <td >11. </td>
          <td >Jumlah Keseluruhan Harta yang Dimiliki pada akhir Tahun Pajak</td>
          <td >
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Rp</span>
              <input type="text" name="seluruh_harta" id="seluruh_harta" onkeyup="" class="form-control" value="0" style="text-align: right;"/>
            </div>
            <span id="" class=""></span>
          </td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td>12. </td>
          <td>Jumlah Keseluruhan Kewajiban/Utang pada akhir Tahun Pajak</td>
          <td>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Rp</span>
              <input type="text" name="kewajiban_utang" id="kewajiban_utang" onkeyup="" class="form-control" value="0" style="text-align: right;"/>
            </div>
            <span id="" class="text-danger"></span>
          </td>
        </div>
      </tr>
    </table>
  </div>
  <div align="right">
    <div class="col-sm-6" align="left">
      <a href="bagian_B.php">
        <button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border:1px solid #ccc; height: 30px; width: 120px;"> <i class="fas fa-chevron-left"></i> Sebelumnya </button>
      </a>
    </div>
    <a href="bagian_D.php">
     <input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px">
    </a>
  </div>
</form>
<br />
</body>
<script src="jquery-1.12.4.min.js"></script>
<script type="text/javascript" >

    //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 2
    var seluruh_harta =document.getElementById('seluruh_harta');
    seluruh_harta.addEventListener('keyup', function(e){
      seluruh_harta.value = formatseluruh_harta(this.value);
    });

    function formatseluruh_harta(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split             = number_string.split(','),
      sisa              = split[0].length % 3,
      rupiah            = split[0].substr(0, sisa),
      ribuan            = split[0].substr(sisa).match(/\d{3}/gi);

      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah    += separator + ribuan.join('.');
      }
      rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? + rupiah : '');
    }


    //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 1
    var kewajiban_utang =document.getElementById('kewajiban_utang');
    kewajiban_utang.addEventListener('keyup', function(e){
      kewajiban_utang.value = formatkewajiban_utang(this.value);
    });

    function formatkewajiban_utang(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split             = number_string.split(','),
      sisa              = split[0].length % 3,
      rupiah            = split[0].substr(0, sisa),
      ribuan            = split[0].substr(sisa).match(/\d{3}/gi);

      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah    += separator + ribuan.join('.');
      }
      rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ?  + rupiah : '');
    }
  </script>
  </html>
