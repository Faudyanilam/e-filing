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
    <form action="proses_bagianB.php" method="post">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <div class="form-group">
                        <td >8. </td>
                        <td >Dasar Pengenaan Pajak/Penghasilan Bruto Pajak Penghasilan Final</td>
                        <td >
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Rp</span>
                                <input type="text" name="penghasilan_bruto" id="penghasilan_bruto" onkeyup="hidup_next()" class="form-control" value="0" style="text-align: right;"/>
                            </div>
                            <span id="" class=""></span>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>9. </td>
                        <td>Pajak Penghasilan Final Terutang</td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Rp</span>
                                <input type="text" name="penghasilan_final" id="penghasilan_final" onkeyup="" class="form-control" value="0" style="text-align: right;"/>
                            </div>
                            <span id="" class="text-danger"></span>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>10. </td>
                        <td>Penghasilan yang Dikecualikan dari Objek Pajak</td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Rp</span>
                                <input align="center" type="text" name="dikecualikan_obj_pajak" id="dikecualikan_obj_pajak" onchange="" class="form-control"  value="0" style="text-align: right;"/>
                            </div>
                            <span id="" class="text-danger"></span>
                        </td>
                    </div>
                </tr>
            </table>
        </div>

        <div align="right">
            <div class="col-sm-6" align="left">
                <a href="bagian_A.php">
                    <button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border:1px solid #ccc; height: 30px; width: 120px;" > <i class="fas fa-chevron-left"></i> Sebelumnya </button>
                </a>
            </div>
            <a href="bagian_C.php">
                <input type="submit" value="Selanjutnya" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px">
                <!-- <button type="button" class="" data-toggle="modal" data-target="#exampleModal3" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;" onclick="hidup_next(window.location.href = 'bagian_C.php');" > Selanjutnya <i class="fas fa-chevron-right"></i></button> -->
                </a>
            </div>
        </form>
        <br/>
        
        <script type="text/javascript">
            function hidup_next(){
            // var inp_8 = document.getElementById('penghasilan_bruto').value;
            // var inp_9 = document.getElementById('penghasilan_final');
            // var inp_10 = document.getElementById('dikecualikan_obj_pajak');
            // var btn_selanjutnya = document.getElementById('selanjutnya');

            // if (inp_8 != "" ){
            //     btn_selanjutnya.disabled = false;
            // }else{
            //     btn_selanjutnya.disabled = true;
            // }
        }
    </script>

    <!-- Modal -->
<!--     <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a href="bagian_C.php">
                <button type="button" class="btn btn-primary"><i class="far fa-thumbs-up"></i> Ya</button>
            </a>
        </div>
        <br/>
    </div>
</div>
</div> -->
<!-- end modal -->

<script src="jquery-1.12.4.min.js"></script>
<script type="text/javascript" >

    //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 2
    var penghasilan_bruto =document.getElementById('penghasilan_bruto');
    penghasilan_bruto.addEventListener('keyup', function(e){
        penghasilan_bruto.value = formatpenghasilan_bruto(this.value,);
    });

    function formatpenghasilan_bruto(angka, prefix){
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


    //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 1
    var penghasilan_final =document.getElementById('penghasilan_final');
    penghasilan_final.addEventListener('keyup', function(e){
        penghasilan_final.value = formatpenghasilan_final(this.value);
    });

    function formatpenghasilan_final(angka, prefix){
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

        //format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik) kolom 3
        var dikecualikan_obj_pajak =document.getElementById('dikecualikan_obj_pajak');
        dikecualikan_obj_pajak.addEventListener('keyup', function(e){
            dikecualikan_obj_pajak.value = formatdikecualikan_obj_pajak(this.value);
        });

        function formatdikecualikan_obj_pajak(angka, prefix){
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
</body>
</html>

