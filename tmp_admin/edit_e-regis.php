<?php session_start();  error_reporting(0);?>
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
    <title>E-Registration | Politeknik Negeri Batam</title>

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

<body class="animsition" onmouseover="hapus();">
    <?php
    include "../koneksi.php";

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

                                        <div class="col-lg-6" align="left">
                                            <strong>E-Registration</strong> | Edit
                                        </div>
                                        <div class="col-lg-6" align="right">
                                            <a href="data_e-regis.php">
                                                <i class="fa fa-arrow-circle-left fa-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body card-block">
                                    <?php 
                                    include '../koneksi.php';
                                    
                                    $id = base64_decode($_GET['id']);
                                    $data = mysqli_query($koneksi,"select * from tb_daftarnpwp where id_id='$id'");
                                    while($row = mysqli_fetch_array($data)){
                                        ?>
                                        <form action="proses_edit_eregis.php" method="post" class="form-horizontal">
                                            <input type="hidden" name="id" value="<?php echo $row['id_id']; ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">NPWP</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="npwp" onfocus="hapus()" placeholder="Nomor Pokok Wajib Pajak" class="npwp form-control" value="<?php echo $row['id_daftar_npwp']?>">
                                                    <input type="text" id="npwp2" name="npwp" placeholder="Nomor Pokok Wajib Pajak" class=" form-control" hidden>
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
                                                <!-- <small class="help-block form-text">Please enter your email</small> -->
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">EFIN</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="efin" name="efin" onfocus="hapus()" placeholder="Email Wajib Pajak" class="form-control" value="<?php echo $row['efin']?>">
                                                <!-- <small class="help-block form-text">Please enter your email</small> -->
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Email</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email" name="email" onfocus="hapus()" placeholder="Email Wajib Pajak" class="form-control" value="<?php echo $row['email']?>">
                                                <!-- <small class="help-block form-text">Please enter your email</small> -->
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="jenis_wp" class=" form-control-label">Jenis WP</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="jenis_wp" id="jenis_wp" onchange="hapus()" class="form-control-sm form-control">
                                                    <option value="0">Pilih Jenis Wajib Pajak</option>
                                                    <option value="Orang Pribadi" <?php if ($row['jenis_wp'] == "Orang Pribadi"){ echo "selected";} ?>>Orang Pribadi</option>
                                                    <option value="Badan" <?php if ($row['jenis_wp'] == "Badan"){ echo "selected";} ?>>Badan Usaha</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Nama</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="nama" name="nama" onfocus="hapus()" placeholder="Nama" class="form-control" value="<?php echo $row['nama_ktp']?>">
                                                <small class="help-block form-text">Nama KTP (Orang Pribadi), Nama (Badan Usaha)</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="password-input" class=" form-control-label">Password</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="password" id="password" name="password" onfocus="hapus()" placeholder="Password" class="form-control" value="<?php echo $row['password']?>">
                                                <small class="help-block form-text">Please enter a complex password</small>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">No. HP</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="no_hp" name="no_hp" onfocus="hapus()" min="0" maxlength="13" placeholder="Nomor Telepon/Nomor Handphone" class="form-control" value="<?php echo $row['no_hp']?>">
                                                <!-- <small class="help-block form-text">Please enter your email</small> -->
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="pertanyaan" class=" form-control-label">Pertanyaan</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="pertanyaan" id="SelectLm" onchange="hapus()" class="form-control-sm form-control">
                                                    <option value="" selected hidden>-- Pilih Pertanyaan --</option>
                                                    <option value="1" <?php if ($row['pertanyaan'] == "1"){ echo "selected";} ?>>Apa nama hewan peliharaan Anda?</option>
                                                    <option value="2" <?php if ($row['pertanyaan'] == "2"){ echo "selected";} ?>>Apa nama SD Anda?</option>
                                                    <option value="3" <?php if ($row['pertanyaan'] == "3"){ echo "selected";} ?>>Siapa pahlawan masa kecil Anda?</option>
                                                    <option value="4" <?php if ($row['pertanyaan'] == "4"){ echo "selected";} ?>>Apa kenangan Anda yang paling berkesan?</option>
                                                    <option value="5" <?php if ($row['pertanyaan'] == "5"){ echo "selected";} ?>>Apa nama tim olahraga favorit Anda?</option>
                                                    <option value="6" <?php if ($row['pertanyaan'] == "6"){ echo "selected";} ?>>Apa maskot SMA Anda</option>
                                                    <option value="7" <?php if ($row['pertanyaan'] == "7"){ echo "selected";} ?>>Apa merek mobil/mobil pertama Anda?</option>
                                                    <option value="8" <?php if ($row['pertanyaan'] == "8"){ echo "selected";} ?>>Dimana Anda pertama kali bertemu dengan pasangan Anda?</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="jawaban" class=" form-control-label">Jawaban</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="jawaban" name="jawaban" onfocus="hapus()" placeholder="Jawaban" class="form-control" value="<?php echo $row['jawaban']; ?>">
                                                <!-- <small class="help-block form-text">Please enter your email</small> -->
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="card-footer">
                                    <div class="row" style="padding-left: 10px; padding-right: 10px">
                                        <div class="col-lg-12">
                                            <div style="padding-left: 84%">
                                                <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit" active>
                                                    <i class="fa fa-check"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script  src="js/js/dist/jquery.maskMoney.js"></script>
<script txt="text/javascript">
    $(document).ready(function(){
        // format mata uang
        $( '.uang' ).maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0, allowZero:true, affixesStay:true});
        // ('000.000.000.000', {reverse: true});

    });
</script>
<!-- <script src="js/js/dist/jquery.mask.min.js"></script>
<script src="js/js/dist/jquery.mask.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        // format mata uang
        $( '.npwp' ).mask('00.000.000.0-000.000', {reverse: true});

    });
</script> -->
</body>

</html>
<!-- end document-->