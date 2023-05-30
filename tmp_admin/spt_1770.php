<?php session_start(); error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>SPT 1770 | Politeknik Negeri Batam</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
    <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>

    <style type="text/css">
        .progressbar-wrapper{
            background: #fff;
            width: 100%;
            padding-left: 40%;
            padding-top: 10px;
            padding-bottom: 5px;
        }
        .progressbar li {
            list-style-type: none;
            width: 20%;
            float: left;
            font-size: 12px;
            position: relative;
            text-align: center;
            text-transform: uppercase;
            color: #7d7d7d;
        }
        .progressbar li:before {
            width: 40px;
            height: 40px;
            content: "";
            line-height: 40px;
            border: 2px solid #7d7d7d;
            display: block;
            text-align: center;
            margin: 0 auto 3px auto;
            border-radius: 50%;
            position: relative;
            z-index: 2;
            background-color: #fff;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        }
        .progressbar li:after {
            width: 100%;
            height: 4px;
            content: '';
            position: absolute;
            background-color: #1E90FF;
            top: 20px;
            left: -50%;
            z-index: 0;
        }
        .progressbar li:first-child:after {
            content: none;
        }
        .progressbar li.active {
            color: black;
            font-weight: bold;  
        }
        .progressbar li.active:before {
            border-color: black;
            background: green;
            border-width: 3px;
        }

        /* garis */
        .progressbar li.active + li:after {
            background-color: #1E90FF;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        }

        .progressbar li.active:before {
            background: #1E90FF  url(user.svg) no-repeat center center;
            background-size: 60%;
        }
        .progressbar li::before {
            background: #fff url(user.svg) no-repeat center center;
            background-size: 60%;
        }
        .progressbar {
            counter-reset: step;
        }
        .progressbar li:before {
            content: counter(step);
            counter-increment: step; 
        }
    </style>
</head>

<body class="animsition">
    <?php
    include "../koneksi.php";

    if (isset($_GET['hasil'])) {
        if ($_GET['hasil'] == "data_gagalditambah") {
            echo "<script>
            Swal.fire(
            'Gagal!',
            'Data Gagal Ditambahkan', 
            'error'
        ) </script>";
    }else if ($_GET['hasil'] == "data_gagalditambah2") {
        echo "<script>
        Swal.fire(
        'Gagal!',
        'Data Sudah Ada', 
        'error'
    ) </script>";
}
}
?>
<div class="page-wrapper">

    <!-- HEADER MOBILE-->
    <?php include 'header_mobile.php' ?>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <?php include 'nav_sidebar.php' ?>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <?php include 'header_sec.php' ?>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <!-- FORM SPT 1770 -->
                        <div class="col-lg-12" style="padding-left: 20%; padding-right: 20%">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-6" align="left">
                                            <strong>SPT 1770</strong> | Add
                                        </div>
                                        <div class="col-lg-6" align="right">
                                            <a href="data_spt_1770.php">
                                                <i class="fa fa-arrow-circle-left fa-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body card-block">
                                    <form action="proses_tambah_1770.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <!-- start 1770satu -->
                                        <div id="1770satu" style="display: block">
                                            <div class="progressbar-wrapper">
                                                <ul class="progressbar" >
                                                    <li class="active">Step 1</li>
                                                    <li>Step 2</li>
                                                </ul>
                                            </div>
                                            <br><br><br><br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">NPWP</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control-sm form-control" name="npwp" id="npwp" >
                                                        <option selected disabled>Pilih</option>
                                                        <?php 
                                                        include '../koneksi.php';

                                                        $query=mysqli_query($koneksi, "select * from tb_registrasi_akun order by id_regis asc"); 
                                                        $sql=mysqli_query($koneksi, "SELECT * FROM tb_registrasi_akun INNER JOIN tb_daftarnpwp ON tb_registrasi_akun.npwp = tb_daftarnpwp.id_daftar_npwp where tb_daftarnpwp.jenis_wp = 'Orang Pribadi'");
                                                        // $jsArray = "var prdName = new Array();\n";
                                                        while ($data=mysqli_fetch_array($sql)) { 
                                                            ?>
                                                            <option value="<?=$data['npwp']?>"><?=$data['npwp']?></option> 
                                                            <?php 
                                                        }
                                                        ?>
                                                    </select>
                                                    <small class="form-text text-muted">Silahkan Isi NPWP Wajib Pajak</small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">File SPT <font color="red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file_spt_1770" name="file_spt_1770" accept=".csv, .xlsx" class="form-control-file" >
                                                    <small class="form-text text-muted">Pastikan File Anda .csv</small>

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Lampiran 1 <font color="red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="lampiran_1" name="lampiran_1" accept=".pdf" class="form-control-file" >
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Lampiran 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="lampiran_2" name="lampiran_2" accept=".pdf" class="form-control-file" value="0">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Lampiran 3</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="lampiran_3" name="lampiran_3" accept=".pdf" class="form-control-file" value="0">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Lampiran 4</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="lampiran_4" name="lampiran_4" accept=".pdf" class="form-control-file" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 1770satu -->

                                        <!-- start 1770dua -->
                                        <div id="1770dua" style="display: none">
                                            <div class="progressbar-wrapper">
                                                <ul class="progressbar" >
                                                    <li>Step 1</li>
                                                    <li class="active">Step 2</li>
                                                </ul>
                                            </div>
                                            <br><br><br><br>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="text-input" class=" form-control-label">Jenis Formulir</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="jns_formulir" name="jns_formulir" placeholder="Jenis SPT Wajib Pajak" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="file-input" class=" form-control-label">Tahun Pajak</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <select name="tahun_pajak" id="tahun_pajak" class="form-control-sm form-control">
                                                        <option selected="selected">Tahun</option>
                                                        <?php
                                                        for($i=date('Y'); $i>=date('Y')-3; $i-=1){
                                                            echo"<option value='$i'> $i </option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <!-- <input type="text" id="text-input" name="text-input" placeholder="yyyy" class="form-control"> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="file-input" class=" form-control-label">Pembetulan Ke</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="number" id="pembetulan_ke" name="pembetulan_ke" placeholder="Silahkan Isi Dengan Angka" value="0" min="0" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="status_spt" class=" form-control-label">Status SPT</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <select name="status_spt" id="status_spt" class="form-control-sm form-control">
                                                        <option selected disabled>Pilih</option>
                                                        <option value="Nihil">Nihil</option>
                                                        <option value="Lebih Bayar">Lebih Bayar</option>
                                                        <option value="Kurang Bayar">Kurang Bayar</option>
                                                    </select>
                                                    <!-- <input type="text" id="text-input" name="text-input" placeholder="Status SPT Wajib Pajak" class="form-control"> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="file-input" class=" form-control-label">Jumlah</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="jumlah" name="jumlah" value="Rp. 0" placeholder="Jumlah SPT Wajib Pajak" class="uang form-control" style="text-align: right">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="file-input" class=" form-control-label">Catatan</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="catatan" name="catatan" placeholder="Catatan Untuk Wajib Pajak" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row" style="padding-left: 10px; padding-right: 10px">
                                            <div class="col-lg-6">
                                                <button class="btn btn-warning btn-sm" id="back" style="display: none" type="reset">
                                                    <i class="fa fa-arrow-circle-left" ></i> Back
                                                </button>
                                            </div>
                                            <div class="col-lg-6" align="right">
                                                <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit" style="display: none;" active>
                                                    <i class="fa fa-check"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form> 
                                    <div class="row" style="padding-left: 10px; padding-right: 10px">
                                        <div class="col-lg-12" align="right" style="display: block;">
                                            <button class="btn btn-primary btn-sm" id="next2" >
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                    </div>
                                    <!-- END FORM SPT 1770 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2021 POLIBATAM SOFTWARE TEAM. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>
<script type="text/javascript">
        // Get the button, and when the user clicks on it, execute myFunction
        document.getElementById("next2").onclick = function() {myFunction()};

        /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
        function myFunction() {
            document.getElementById("1770dua").style.display = 'block';
            document.getElementById("1770satu").style.display = 'none';
            document.getElementById("back").style.display = 'block';
            document.getElementById("next2").style.display = 'none';
            document.getElementById("submit").style.display = 'block';
        }
        document.getElementById("back").onclick = function() {myFunction2()};

        /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
        function myFunction2() {
            document.getElementById("1770dua").style.display = 'none';
            document.getElementById("1770satu").style.display = 'block';
            document.getElementById("back").style.display = 'none';
            document.getElementById("next2").style.display = 'block';
            document.getElementById("submit").style.display = 'none';
        }
    </script>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script  src="js/js/dist/jquery.maskMoney.js"></script>
<script txt="text/javascript">
    $(document).ready(function(){
        // format mata uang
        $( '.uang' ).maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0, allowZero:true, affixesStay:true});
        // ('000.000.000.000', {reverse: true});

    });
</script>
</html>
<!-- end document-->
