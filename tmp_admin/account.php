<?php session_start(); ?>
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
    <title>Card</title>

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
    }else if ($_GET['hasil'] == "data_ditambah") {
            echo "<script>
            Swal.fire(
            'Sukses!',
            'Data Berhasil Ditambahkan', 
            'sucess'
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

                        <div class="card-body">
                            <div class="col-md-4" style="margin-left: 35%; margin-right: 20%">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt bg-dark">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/icon/avatar-01.jpg">
                                                </a>
                                                <div class="media-body">
                                                    <h2 class="text-light display-6"><?php echo $_SESSION['nama_ktp']; ?></h2>
                                                    <p>Administrator</p>
                                                </div>
                                            </div>
                                        </div>

                                        <?php 
                                        include '../koneksi.php';
                                        $tampung = $_SESSION['nama_ktp'];
                                        $data = mysqli_query($koneksi, "SELECT * FROM tb_admin where nama = '$tampung'");

                                        $cek = mysqli_fetch_array($data);
                                        ?>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <i class="fa fa-user-o"></i> <?php echo $cek['username']; ?>
                                                    <!-- <span class="badge badge-primary pull-right">10</span> -->
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <i class="fa fa-warning"></i> <?php echo base64_encode($cek['password']); ?>
                                                    <!-- <a > <i class="zmdi zmdi-eye"></i></a> -->
                                                    <!-- <span class="badge badge-danger pull-right">15</span> -->
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="col-md-12">
                                                    <a href="#">
                                                        <button  class="btn btn-info btn-lg btn-block" id="tambahadmin" style="width:101%">
                                                            <i class="fa fa-user-plus"></i> Tambah Admin Lain
                                                        </button>
                                                        <button  class="btn btn-info btn-lg btn-block" id="tambahadmin2" style="width:101%; display: none;">
                                                            <i class="fa fa-user-plus"></i> Tambah Admin Lain
                                                        </button>
                                                    </a>
                                                </div> 
                                            </li>
                                            <li class="list-group-item" id="tambahakun" style="display: none">
                                                <form action="" method="post">
                                                    <div class="form-group row">
                                                        <i class="fa fa-info fa-lg" style="padding-left: 10px; padding-right: 15px;padding-top: 12px; background-color: black; color: white;"></i><input type="text" name="nama" placeholder="Input Nama Admin" class="form-control" style="width:85%" required>
                                                    </div>
                                                    <div class="form-group row">
                                                        <i class="fa fa-user fa-lg" style="padding-left: 10px; padding-right: 15px;padding-top: 12px; background-color: black; color: white;"></i><input type="text" name="username" placeholder="Input Username" class="form-control" style="width:85%" required>
                                                    </div>
                                                    <div class="form-group row">
                                                        <i class="fa fa-warning fa-lg" style="padding-left: 10px; padding-right: 10px;padding-top: 12px; background-color: black; color: white;"></i><input type="password" name="password" placeholder="Input password" class="form-control" style="width:85%" required>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <div class="col-md-12" align="right">
                                                            <button class="btn btn-secondary btn-sm" name="submit" type="submit">
                                                                <i class="fa fa-check"></i> Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                                                    <?php 
                                                    include '../koneksi.php';
                                                    if(isset($_POST['submit'])){

                                                        $nama = $_POST['nama'];
                                                        $username = $_POST['username'];
                                                        $password = $_POST['password'];


                                                        $data = mysqli_query($koneksi, "INSERT INTO tb_admin VALUES('','$nama', '$username', '$password')");

                                                        if ($data == 1){
                                                            header("location:account.php?hasil=data_ditambah");
                                                        }else{
                                                            header("location:account.php?hasil=data_gagalditambah");
                                                        }
                                                    }
                                                    ?>
                                                </form>
                                                <script type="text/javascript">
                                                    document.getElementById("tambahadmin").onclick = function() {myFunction()};
                                                    var tambahadmin = document.getElementById('tambahadmin');
                                                    var tambahadmin2 = document.getElementById('tambahadmin2');
                                                    var tambahakun = document.getElementById('tambahakun');

                                                    function myFunction() {
                                                        tambahakun.style.display = 'block';
                                                        tambahadmin.style.display = 'none';
                                                        tambahadmin2.style.display = 'block';
                                                    }
                                                    document.getElementById("tambahadmin2").onclick = function() {myFunction2()};
                                                    function myFunction2() {
                                                        tambahakun.style.display = 'none';
                                                        tambahadmin.style.display = 'block';
                                                        tambahadmin2.style.display = 'none';
                                                    }
                                                </script>
                                            </ul>
                                        </section>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTAINER-->
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
