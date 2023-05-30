<?php session_start(); error_reporting(0); ?>
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
    <title>SPT 1770 SS | Politeknik Negeri Batam</title>

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
            padding-left: 20%;
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
    if (isset($_GET['hasil'])) {
        if ($_GET['hasil'] == "data_gagaldiubah") {
            echo "<script>
            Swal.fire(
            'Gagal!',
            'Data Gagal Diubah!!!', 
            'Danger'
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
                        <div class="col-lg-12" style="padding-left: 20%; padding-right: 20%">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-11" align="left">
                                            <strong>SPT 1770 SS </strong> <small id="bagian">| Isi Data Formulir</small>
                                        </div>
                                        <div class="col-lg-1" align="right">
                                            <a href="data_spt_1770ss.php">
                                                <i class="fa fa-arrow-circle-left fa-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body card-block">
                                    <?php 
                                    include '../koneksi.php';
                                    $id = base64_decode($_GET['id']);
                                    $data = mysqli_query($koneksi,"select * from tb_spt_1770ss where id='$id'");
                                    while($row = mysqli_fetch_array($data)){
                                        ?>
                                        <form action="proses_edit_1770ss.php" method="post" class="form-horizontal">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                            <div id="1770SSsatu" style="display: block">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li class="active">Step 1</li>
                                                        <li>Step 2</li>
                                                        <li>Step 3</li>
                                                        <li>Step 4</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="selectSm" class=" form-control-label">NPWP</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="npwp" name="npwp" class="form-control" value="<?php echo $row['id_spt_1770ss']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="selectSm" class=" form-control-label">Tahun Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="thn_pajak" name="thn_pajak" class="form-control" value="<?php echo $row['thn_pajak']; ?>">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="selectSm" class=" form-control-label">Status Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="normal" name="status_spt" class="custom-control-input" value="normal" <?php if ($row['status_spt'] == "normal"){ echo "checked";} ?>>
                                                            <label class="custom-control-label" for="normal">Normal</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="pembetulan" name="status_spt" class="custom-control-input" value="pembetulan" <?php if ($row['status_spt'] == "pembetulan"){ echo "checked";} ?>>
                                                            <label class="custom-control-label" for="pembetulan">Pembetulan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Pembetulan Ke</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="pembetulan_ke" name="pembetulan_ke" min="0" class="form-control" value="<?php echo $row['pembetulan_ke'] ?>">
                                                        <small class="form-text text-muted">Silahkan Isi Pembetulan Wajib Pajak</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- STEP 2 -->
                                            <div id="1770SSdua" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li>Step 1</li>
                                                        <li class="active">Step 2</li>
                                                        <li>Step 3</li>
                                                        <li>Step 4</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Penghasilan Bruto Dalam Negeri Sehubungan Dengan Pekerjaan dan Penghasilan Neto Dalam Negeri</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="penghasilan_bruto" name="penghasilan_bruto"  class="uang form-control" style="text-align: right;" value="<?php echo $row['penghasilan_bruto'] ?>">
                                                        <small class="form-text text-muted">Silahkan Penghasilan Bruto Wajib Pajak</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Pengurangan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="pengurangan" name="pengurangan"  class="uang form-control" style="text-align: right;" value="<?php echo $row['pengurangan'] ?>">
                                                        <small class="form-text text-muted">Silahkan Pengurangan</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Penghasilan Tidak Kena Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="ptkp" name="ptkp" value="<?php echo $row['ptkp'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi PTKP Wajib Pajak</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Penghasilan Kena Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="pkp" name="pkp" value="<?php echo $row['pkp'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi PKP Wajib Pajak</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Pajak Penghasilan Terhutang</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="pp_terutang" name="pp_terutang" value="<?php echo $row['pp_terutang'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi Pajak Penghasilan Terutang</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Pajak Penghasilan yang Dipotong</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="pp_dipotong" name="pp_dipotong" value="<?php echo $row['pp_dipotong'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi Pajak Penghasilan Dipotong</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Status SPT</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <select name="status" id="status" class="form-control-sm form-control">
                                                            <option selected="selected">Pilih Status SPT</option>
                                                            <option value="nihil" <?php if ($row['status'] == "nihil"){ echo "selected";} ?>>Nihil</option>
                                                            <option value="kurang bayar" <?php if ($row['status'] == "kurang bayar"){ echo "selected";} ?>>Kurang Bayar</option>
                                                            <option value="lebih bayar" <?php if ($row['status'] == "lebih bayar"){ echo "selected";} ?>>Lebih Bayar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Jumlah</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="total" name="total" value="<?php echo $row['total'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END STEP 2 -->

                                            <!-- STEP 3 -->
                                            <div id="1770SStiga" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li>Step 1</li>
                                                        <li>Step 2</li>
                                                        <li class="active">Step 3</li>
                                                        <li>Step 4</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Dasar Pengenaan Pajak/Penghasilan Bruto Pajak Penghasilan Final</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="pp_final" name="pp_final" value="<?php echo $row['pp_final'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi Penghasilan Bruto Final</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Pajak Penghasilan Final Terutang</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="pp_final_terutang" name="pp_final_terutang" value="<?php echo $row['pp_final_terutang'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi Pajak Penghasilan Final Terutang</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Penghasilan yang Dikecualikan dari Objek Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="p_objek_pajak" name="p_objek_pajak" value="<?php echo $row['p_objek_pajak'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi Penghasilan Dikecualikan Objek Pajak</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END STEP 3 -->

                                            <!-- STEP 4 -->
                                            <div id="1770SSempat" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li>Step 1</li>
                                                        <li>Step 2</li>
                                                        <li>Step 3</li>
                                                        <li class="active">Step 4</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Jumlah Keseluruhan Harta yang Dimiliki pada akhir Tahun Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="jml_harta" name="jml_harta" value="<?php echo $row['jml_harta'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Harta</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Jumlah Keseluruhan Kewajiban/Utang pada akhir Tahun Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="jml_kwj_utang" name="jml_kwj_utang" value="<?php echo $row['jml_kwj_utang'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row" style="padding-left: 10px; padding-right: 10px">
                                                <div class="col-lg-2">
                                                    <button class="btn btn-warning btn-sm" id="back3" style="display: none" type="button" active>
                                                        <i class="fa fa-arrow-circle-left"></i> Back
                                                    </button>
                                                </div>
                                                <div class="col-lg-10" align="right">
                                                    <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit" style="display: none; " active>
                                                        <i class="fa fa-check"></i> Submit
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- END STEP 4 -->
                                        </form>
                                    <?php } ?>

                                    <!-- card footer -->
                                    <!-- <div class="card-footer"> -->
                                        <div class="row" style="padding-left: 10px; padding-right: 10px">
                                            <div class="col-lg-2">
                                                <a href="data_spt_1770ss.php">
                                                    <button class="btn btn-info btn-sm" id="reset" >
                                                        <i class="fa fa-arrow-circle-left"></i> Back
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-lg-10" align="right">
                                                <button class="btn btn-primary btn-sm" id="next2" active>
                                                    <i class="fa fa-arrow-circle-right"></i> Next
                                                </button>
                                            </div>
                                            <div class="col-lg-2">
                                                <button class="btn btn-warning btn-sm" id="back" style="display: none" active>
                                                    <i class="fa fa-arrow-circle-left"></i> Back
                                                </button>
                                            </div>
                                            <div class="col-lg-10" align="right">
                                                <button class="btn btn-primary btn-sm" id="next3" style="display: none" active>
                                                    <i class="fa fa-arrow-circle-right"></i> Next
                                                </button>
                                            </div>
                                            <div class="col-lg-2">
                                                <button class="btn btn-warning btn-sm" id="back2" style="display: none" active>
                                                    <i class="fa fa-arrow-circle-left"></i> Back
                                                </button>
                                            </div>
                                            <div class="col-lg-10" align="right">
                                                <button class="btn btn-primary btn-sm" id="next4" style="display: none" active>
                                                    <i class="fa fa-arrow-circle-right"></i> Next
                                                </button>
                                            </div>
                                        </div>
                                        <!-- END FOOTER 1770 SS -->
                                    </div>
                                    <!-- END CARD 1770 SS -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2021 POLIBATAM SOFTWARE TEAM. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                <!-- <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
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

<!-- <script  src="js/js/dist/jquery.mask.min.js"></script>
<script  src="js/js/dist/jquery.mask.js"></script> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script  src="js/js/dist/jquery.maskMoney.js"></script>
<script txt="text/javascript">
    $(document).ready(function(){
        // format mata uang
        $( '.uang' ).maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0, allowZero:true, affixesStay:true});
        // ('000.000.000.000', {reverse: true});

    });
</script>
<script type="text/javascript">
    // Get the button, and when the user clicks on it, execute myFunction
    document.getElementById("next2").onclick = function() {myFunction()};
    var p_kontainer = document.getElementById('bagian');
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction() {
        document.getElementById("1770SSsatu").style.display = 'none';
        document.getElementById("1770SSdua").style.display = 'block';
        document.getElementById("1770SStiga").style.display = 'none';
        document.getElementById("1770SSempat").style.display = 'none';
        document.getElementById("reset").style.display = 'none';
        document.getElementById("back").style.display = 'block';
        document.getElementById("back2").style.display = 'none';
        document.getElementById("back3").style.display = 'none';
        document.getElementById("next2").style.display = 'none';
        document.getElementById("next3").style.display = 'block';
        document.getElementById("next4").style.display = 'none';
        document.getElementById("submit").style.display = 'none';
        p_kontainer.innerHTML = "| Pajak Penghasilan";
    }

    // Get the button, and when the user clicks on it, execute myFunction
    document.getElementById("next3").onclick = function() {myFunction2()};
    var p_kontainer = document.getElementById('bagian');
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction2() {
        document.getElementById("1770SSdua").style.display = 'none';
        document.getElementById("1770SSsatu").style.display = 'none';
        document.getElementById("1770SStiga").style.display = 'block';
        document.getElementById("1770SSempat").style.display = 'none';
        document.getElementById("reset").style.display = 'none';
        document.getElementById("back").style.display = 'none';
        document.getElementById("back2").style.display = 'block';
        document.getElementById("back3").style.display = 'none';
        document.getElementById("next2").style.display = 'none';
        document.getElementById("next3").style.display = 'none';
        document.getElementById("next4").style.display = 'block';
        document.getElementById("submit").style.display = 'none';
        p_kontainer.innerHTML = "| Penghasilan yang Dikenakan PPh Final dan yang Dikecualikan dari Objek Pajak";
    }

    // Get the button, and when the user clicks on it, execute myFunction
    document.getElementById("next4").onclick = function() {myFunction5()};
    var p_kontainer = document.getElementById('bagian');
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction5() {
        document.getElementById("1770SSdua").style.display = 'none';
        document.getElementById("1770SSsatu").style.display = 'none';
        document.getElementById("1770SStiga").style.display = 'none';
        document.getElementById("1770SSempat").style.display = 'block';
        document.getElementById("reset").style.display = 'none';
        document.getElementById("back").style.display = 'none';
        document.getElementById("back2").style.display = 'none';
        document.getElementById("back3").style.display = 'block';
        document.getElementById("next2").style.display = 'none';
        document.getElementById("next3").style.display = 'none';
        document.getElementById("next4").style.display = 'none';
        document.getElementById("submit").style.display = 'block';
        p_kontainer.innerHTML = "| Daftar Harta dan Kewajiban";
    }


    document.getElementById("back").onclick = function() {myFunction3()};

    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction3() {
        document.getElementById("1770SSsatu").style.display = 'block';
        document.getElementById("1770SSdua").style.display = 'none';
        document.getElementById("1770SStiga").style.display = 'none';
        document.getElementById("1770SSempat").style.display = 'none';
        document.getElementById("reset").style.display = 'block';
        document.getElementById("back").style.display = 'none';
        document.getElementById("back2").style.display = 'none';
        document.getElementById("back3").style.display = 'none';
        document.getElementById("next2").style.display = 'block';
        document.getElementById("next3").style.display = 'none';
        document.getElementById("next4").style.display = 'none';
        document.getElementById("submit").style.display = 'none';
        p_kontainer.innerHTML = "| Isi Data Formulir";
    }

    document.getElementById("back2").onclick = function() {myFunction4()};

    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction4() {
        document.getElementById("reset").style.display = 'none';
        document.getElementById("1770SSdua").style.display = 'block';
        document.getElementById("1770SSsatu").style.display = 'none';
        document.getElementById("1770SStiga").style.display = 'none';
        document.getElementById("1770SSempat").style.display = 'none';
        document.getElementById("reset").style.display = 'none';
        document.getElementById("back").style.display = 'block';
        document.getElementById("back2").style.display = 'none';
        document.getElementById("back3").style.display = 'none';
        document.getElementById("next2").style.display = 'none';
        document.getElementById("next3").style.display = 'block';
        document.getElementById("next4").style.display = 'none';
        document.getElementById("submit").style.display = 'none';
        p_kontainer.innerHTML = "| Pajak Penghasilan";
    }

    document.getElementById("back3").onclick = function() {myFunction6()};

    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction6() {
        document.getElementById("1770SSsatu").style.display = 'none';
        document.getElementById("1770SSdua").style.display = 'none';
        document.getElementById("1770SStiga").style.display = 'block';
        document.getElementById("1770SSempat").style.display = 'none';
        document.getElementById("reset").style.display = 'none';
        document.getElementById("back").style.display = 'none';
        document.getElementById("back2").style.display = 'block';
        document.getElementById("back3").style.display = 'none';
        document.getElementById("next2").style.display = 'none';
        document.getElementById("next3").style.display = 'none';
        document.getElementById("next4").style.display = 'block';
        document.getElementById("submit").style.display = 'none';
        p_kontainer.innerHTML = "| Penghasilan yang Dikenakan PPh Final dan yang Dikecualikan dari Objek Pajak";

    }
</script>
</body>

</html>
<!-- end document-->
