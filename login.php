<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login | Tax Center Politeknik Negeri Batam</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="css/boostrap3.3.6.min.css"/> -->
  <link rel="stylesheet" type="text/css" href="css/style_login.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  
</head>
<style>
/* START FITUR LIHAT SANDI */
.show-hide{
  position: absolute;
  right: 30px;
  margin-top: 5px;
}
.show-hide i:hover {
  cursor: pointer;
}
.fa{
  margin-right: 5px;
  margin-top: 7px;
}
.eye{
  position: absolute;
}

#matabuka{
  display: none;
}
/* END FITUR LIHAT SANDI */

</style>
<!-- Membuat body halaman -->
<body style="background-image:  url('img/poltek3.jpeg'); background-size:cover;">


    <?php
    include "koneksi.php";

    if (isset($_GET['hasil1'])) {
        if ($_GET['hasil1'] == "logout"){
            echo "<script>
            Swal.fire(
            'Logout',
            'Anda Berhasil Logout',
            'success'
        ) </script>";
    } else if($_GET['hasil1'] == "gagal"){
        echo "<script>
        Swal.fire(
        ' Login Gagal',
        'NPWP atau Passworrd Salah',
        'error'
    ) </script>";
} else if ($_GET['hasil1'] == "gagal2") {
    echo "<script>
    Swal.fire(
    'Login Gagal, Anda Bukan Badan',
    'Silahkan Login Dengan Akun Orang Pribadi!',
    'warning'
) </script>"; 
}
else if ($_GET['hasil1'] == "berhasil_registrasi") {
    echo "<script>
    Swal.fire(
    'Berhasil registrasi',
    '',
    'success'
) </script>"; 
}
else if ($_GET['hasil1'] == "gagal_registrasi") {
    echo "<script>
    Swal.fire(
    'Gagal registrasi',
    '',
    'warning'
) </script>"; 

}
else if ($_GET['hasil1'] == "suspended") {
        echo "<script>
        Swal.fire(
        'Akun Anda Di Suspended',
        '',
        'warning'
    ) </script>"; 
}
}
?>

<?php
$pesan='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['input_kode'])) {
        if ($_SESSION['kode_captcha']!=$_POST['input_kode']){
            $pesan="<div class='alert alert-danger' style='width: auto;'><font size ='2'><strong>Error!</strong> Kode yang dimasukan salah.</font></div>";
                // session_destroy();
        }else {
            $pesan="<div class='alert alert-success' style='width: auto;'><font size ='2'><strong>Sukses!</strong> Kode yang dimasukan benar. </font></div>";
            include 'cek_login.php';
        }
    }
}
?>

<?php include 'header3.html' ?>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card shadow-lg border-5 rounded-lg mt-5">
                        <!-- Mebuat Card Header -->
                        <h4 class="text-center my-2" style="color: #191970; font-family: arial; padding-top: 15px; padding-bottom: 15px">
                            <strong>Login</strong>
                        </h4>
                        <!-- /Tutup Card Header -->
                        <!-- Membuat Card Body -->
                        <div class="card-body" style="padding-top: 5px">
                            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">


                                <!-- menambahkan oninput="perbaiki_npwp()" agar fungsi perbaiki_npwp() berjalan ketika ada input -->
                                <div class="form-group">
                                    <input class="form-control py-3 npwp" type="text" placeholder="Nomor Pokok Wajib Pajak (NPWP)" value="" id="npwp" style="width: 280px; border-radius: 5px;" oninput="perbaiki_npwp()" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "15" min = "1" max = "999999999999999" required />
                                    <input class="form-control py-3 npwp" name="npwp" type="text" placeholder="Nomor Pokok Wajib Pajak (NPWP)" value="" id="npwp2" style="width: 280px; border-radius: 5px;" oninput="perbaiki_npwp()" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "15" min = "1" max = "999999999999999" hidden />
                                    <script type="text/javascript">
                                                    function replaceAll(string,search,replace){
                                                        return string.split(search).join(replace);
                                                    }
                                                    function hapus(){
                                                        //cara menambahkan dan menghilangkan titik dari 2 text input
                                                        id1 = "npwp";

                                                        id1_val = document.getElementById(id1).value;
                                                        tes_val = replaceAll(id1_val,'.','');
                                                        tes_val2 = replaceAll(tes_val,'-','');
                                                        document.getElementById('npwp2').value = tes_val2;

                                                    }
                                                </script>
                                </div>
                                <div class="form-group">

                                    <!-- START buat lihat sandi HTML -->
                                    <span class="show-hide" onclick="lihatsandi()">
                                        <i id="matabuka" class="fa fa-eye"></i>
                                        <i id="matatutup" class="fa fa-eye-slash"></i>
                                    </span>
                                    <!-- END buat lihat sandi HTML -->

                                    <input class="form-control py-3" oninput="hapus()" id="password" name="password" type="password" placeholder="Kata Sandi" style="width: 280px; border-radius: 5px;" required />
                                </div>


                                <!-- Membuat captcha -->
                                <div class="form-group">
                                    <!-- Membuat Grid -->
                                    <img src="captcha.php" alt="Kode Captcha" style="height:37px; width:80px; display: inline-grid; grid-template-columns: 200px 1fr; grid-gap: 20px; font-family: sans-serif; border-radius: 7px 7px 7px 7px ">
                                    <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="display: inline-grid; width: 195px; border-radius: 7px; grid-template-columns: 200px 1fr; grid-gap: 16px;" placeholder="Kode Keamanan" required />
                                    <?php echo $pesan; ?>
                                </div>
                                <!-- <input type="submit" name="cek" value="CEK"> -->


                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <input onclick="hapus()" class="btn btn-warning btn-block" name="submit" style="background-color: #ffd700; border-radius: 17px; color: #191970; border: none; height: 40px; width: 280px;" type="submit" value="Login">
                                </div>

                                <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                    <a class="small" href="ubah_kata_sandi.php" style="color: #191970; padding-left: 90px"><strong>Lupa Kata Sandi ?</strong></a>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                    <a class="small" href="registrasi.php" style="color: #191970; padding-left: 88px"><strong>Belum Registrasi ?</strong></a>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                    <a class="small" href="resend_aktivasi_email.php" style="color: #191970; padding-left: 40px"><strong>Belum Menerima Email Aktivasi ?</strong></a>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                    <a class="small" href="daftar_npwp.php" style="color: #191970; padding-left: 65px"><strong>Atau Belum Punya NPWP ?</strong></a>
                                </div>

                            </form>
                        </div>
                        <!-- /Tutup Card Cody -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include'footer 1.html'; ?>
<!-- Script JS -->


<script>
//   START buat lihat sandi Javascript
    function lihatsandi(){
        var x = document.getElementById("password");
        var y = document.getElementById("matabuka");
        var z = document.getElementById("matatutup");

        if(x.type == "password"){
            x.type = 'text';
            y.style.display = "block";
            z.style.display = "none";
        }else{
            x.type = 'password';
            y.style.display = "none";
            z.style.display = "block";
        }
    }
//   END buat lihat sandi Javascript


</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<!-- Code injected by live-server -->
<script>
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
        (function () {
            function refreshCSS() {
                var sheets = [].slice.call(document.getElementsByTagName("link"));
                var head = document.getElementsByTagName("head")[0];
                for (var i = 0; i < sheets.length; ++i) {
                    var elem = sheets[i];
                    var parent = elem.parentElement || head;
                    parent.removeChild(elem);
                    var rel = elem.rel;
                    if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                        var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                        elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                    }
                    parent.appendChild(elem);
                }
            }
            var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
            var address = protocol + window.location.host + window.location.pathname + '/ws';
            var socket = new WebSocket(address);
            socket.onmessage = function (msg) {
                if (msg.data == 'reload') window.location.reload();
                else if (msg.data == 'refreshcss') refreshCSS();
            };
            if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                console.log('Live reload enabled.');
                sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
            }
        })();
    }
    else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
    // ]]>
</script>
<script src="tmp_admin/js/main.js"></script>
<script src="tmp_admin/js/js/dist/jquery.mask.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        // format mata uang
        $( '.npwp' ).mask('00.000.000.0-000.000', {reverse: true});

    });
</script>
</body>
</html>
