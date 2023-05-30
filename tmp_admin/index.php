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
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
        if ($_GET['hasil'] == "berhasil") {
            echo "<script>
            Swal.fire(
            'Good job!',
            'Login berhasil', 
            'success'
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
                    <?php 
                    include '../koneksi.php';

                    $data = mysqli_query($koneksi,"SELECT * FROM tb_daftarnpwp");

                    $jumlah_data_eregis = mysqli_num_rows($data);   

                    $data2 = mysqli_query($koneksi,"SELECT * FROM tb_registrasi_akun");

                    $jumlah_data_akun = mysqli_num_rows($data2);    

                    $data3 = mysqli_query($koneksi,"SELECT * FROM tb_upload_file_1771, tb_hasil_lapor_1771 where tb_upload_file_1771.id = tb_hasil_lapor_1771.id");

                    $jumlah_data_spt1771 = mysqli_num_rows($data3); 

                    $data4 = mysqli_query($koneksi,"SELECT * FROM tb_upload_file_1770, tb_hasil_lapor_1770 where tb_upload_file_1770.id = tb_hasil_lapor_1770.id");

                    $jumlah_data_spt1770 = mysqli_num_rows($data4); 

                    $data5 = mysqli_query($koneksi,"SELECT * FROM tb_spt_1770ss");

                    $jumlah_data_spt1770ss = mysqli_num_rows($data5);   

                    $data6 = mysqli_query($koneksi,"SELECT * FROM tb_bukti_potong_s, tb_non_bukti_potong_s where tb_bukti_potong_s.id = tb_non_bukti_potong_s.id");

                    $jumlah_data_spt1770s = mysqli_num_rows($data6);
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h1 style="margin-left: 13%; margin-right: 13%; font-family: Brush Script MT; ">...Selamat Datang di Dashboard Administrator Bantu Pajak...</h1>

                            </div>
                        </div>
                    </div>
                    <div class="row m-t-25">  
                        <div class="col-sm-6 col-lg-6">
                            <div class="overview-item overview-item--c3">
                                <div class="overview__inner">
                                    <a href="data_e-regis.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-accounts-list-alt"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $jumlah_data_eregis; ?></h2>
                                                <span>E_REGISTRATION</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">

                            <div class="overview-item overview-item--c2">
                                <div class="overview__inner">
                                    <a href="data_akun_wp.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-accounts"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $jumlah_data_akun ?></h2>
                                                <span>Pendaftaran Akun</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 style="font-family: Candara; background-color:lightgrey; border-radius: 7px; padding-left: 36.5%; padding-right: 36.5%; text-shadow: 2px"><u>Data Pelaporan SPT</u></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row m-t-25">
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c1">
                                <div class="overview__inner">
                                    <a href="data_spt_1770.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $jumlah_data_spt1770 ?></h2>
                                                <span>SPT 1770</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">

                            <div class="overview-item overview-item--c2">
                                <div class="overview__inner">
                                    <a href="data_spt_1770s.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $jumlah_data_spt1770s ?></h2>
                                                <span>SPT 1770 S</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-3">

                            <div class="overview-item overview-item--c4">
                                <div class="overview__inner">
                                    <a href="data_spt_1770ss.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $jumlah_data_spt1770ss ?></h2>
                                                <span>SPT 1770 SS</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-3">

                            <div class="overview-item overview-item--c3">
                                <div class="overview__inner">
                                    <a href="data_spt_1771.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $jumlah_data_spt1771 ?></h2>
                                                <span>SPT 1771</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </a>
                                </div>
                            </div>     
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2021 Polibatam Software Team. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
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
