<?php session_start(); error_reporting(0)?>
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
    <title>Pendaftaran Akun | Politeknik Negeri Batam</title>

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
                                        <div class="col-lg-6" align="left">
                                            Pendaftaran Akun
                                        </div>
                                        <div class="col-lg-6" align="right">
                                            <a href="data_akun_wp.php">
                                                <i class="fa fa-arrow-circle-left fa-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Tambah Registrasi Akun</h3>
                                    </div>
                                    <hr>
                                    <form action="proses_tambah_akun.php" method="post" >
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="npwp" class="control-label mb-1">NPWP</label>
                                                    <select class="form-control-sm form-control" name="npwp" id="npwp" onchange='changeValue(this.value)'>
                                                        <option selected disabled>Pilih</option>
                                                        <?php 
                                                        include '../koneksi.php';

                                                        $query=mysqli_query($koneksi, "select * from tb_registrasi_akun order by id_id asc"); 
                                                        $sql=mysqli_query($koneksi, "SELECT * FROM tb_registrasi_akun RIGHT JOIN tb_daftarnpwp ON tb_registrasi_akun.npwp = tb_daftarnpwp.id_daftar_npwp where tb_daftarnpwp.id_daftar_npwp NOT IN (select tb_registrasi_akun.npwp from tb_registrasi_akun , tb_daftarnpwp where tb_registrasi_akun.npwp = tb_daftarnpwp.id_daftar_npwp)");
                                                        $jsArray = "var prdName = new Array();\n";
                                                        while ($data=mysqli_fetch_array($sql)) {
                                                         ?>
                                                         <option value="<?=$data['id_daftar_npwp']?>"><?=$data['id_daftar_npwp']?></option> 
                                                         <?php 
                                                         $jsArray .= "prdName['" . $data['id_daftar_npwp'] . "'] = {efin:'" . addslashes($data['efin']) . "'};\n";
                                                     }
                                                     ?>
                                                 </select>
                                                 <script type="text/javascript"> 
                                                    <?php echo $jsArray; ?>
                                                    function changeValue(id){
                                                        document.getElementById('efin').value = prdName[id].efin;

                                                    };
                                                </script>
                                                <!-- <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="Nomor Pokok Wajib Pajak" /autocomplete="cc-exp"> -->
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="efin" class="control-label mb-1">EFIN</label>
                                            <div class="input-group">
                                                <input id="efin" name="efin" type="tel" class="form-control cc-cvc" data-val="true" data-val-required="Please enter the security code" placeholder="E-Filing Identification Number" 
                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off" value="<?php echo $data['efin']; ?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-file fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">SUBMIT</span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                        </button>
                                    </div>
                                </form>
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

</body>

</html>
<!-- end document-->
