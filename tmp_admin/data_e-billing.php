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
    <title>DATA E-Billing | POLITEKNIK NEGERI BATAM</title>

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

    <link rel="stylesheet" type="text/css" href="assets/DataTables/DataTables-1.10.24/css/jquery.dataTables.min.css">
    

</head>

<body class="animsition">
    <?php
    include "../koneksi.php";

    if (isset($_GET['hasil'])) {
        if ($_GET['hasil'] == "data_terhapus") {
            echo "<script>
            Swal.fire(
            'Deleted!',
            'Data Berhasil Dihapus!', 
            'info'
        ) </script>";
    } else if ($_GET['hasil'] == "data_gagalterhapus") {
        echo "<script>
        Swal.fire(
        'Deleted!',
        'Data Berhasil Dihapus!', 
        'info'
    ) </script>";
}else if ($_GET['hasil'] == "data_ditambah") {
    echo "<script>
    Swal.fire(
    'Ditambahkan!',
    'Data Berhasil Ditambahkan!', 
    'success'
) </script>";
}else if ($_GET['hasil'] == "data_diubah") {
    echo "<script>
    Swal.fire(
    'Diubahkan!',
    'Data Berhasil Diubahkan!', 
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
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <div class="table-responsive m-b-40">
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <h3 class="title-5 m-b-35">Data E-Billing</h3>
                                    </div>
                                    <!-- <div class="table-data__tool-right">
                                        <a href="spt_1770.php">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                <i class="zmdi zmdi-plus"></i>add item
                                            </button>
                                        </a>
                                    </div> -->
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-striped table-bordered table-data2" id="dataTables">
                                        <thead>
                                            <tr bgcolor="black" >
                                                <th style="color: white;">NPWP</th>
                                                <th style="color: white;">Jenis Pajak</th>
                                                <th style="color: white;">Jenis Setoran</th>
                                                <th style="color: white;">Masa Pajak</th>
                                                <th style="color: white;">Tahun Pajak</th>
                                                <th style="color: white;">NOP</th>
                                                <th style="color: white;">Jumlah Setor</th>
                                                <th style="color: white;">Terbilang</th>
                                                <th style="color: white;">Uraian</th>
                                                <th style="color: white;">Nomor SK</th>
                                                <th style="color: white;">Kode Billing</th>
                                                <th style="color: white;">Masa Aktif</th>
                                                <th style="color: white;" class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include '../koneksi.php';
                                                        // $no = 1;
                                            $data = mysqli_query($koneksi,"select * from tb_riwayat_surat");

                                            if(mysqli_num_rows($data)== 0){
                                                echo "
                                                <td colspan=13 class='text-center'> Data Masih Kosong!!! </td>
                                                ";
                                            }
                                            while($row = mysqli_fetch_array($data)){
                                                ?>
                                                <tr class="tr-shadow">
                                                    <td><span class="block-email"><?php echo $row['npwp']; ?></span></td>
                                                    <td class="desc"><?php echo $row['jenis_pajak']; ?></td>
                                                    <td class="desc"><?php echo $row['jenis_setoran']; ?></td>
                                                    <td><?php echo $row['masa_pajak']; ?></td>
                                                    <td><?php echo $row['tahun_pajak']; ?></td>
                                                    <td><?php echo $row['nop']; ?></td>
                                                    <td><?php echo $row['jumlah_setor']; ?></td>
                                                    <td><?php echo $row['terbilang']; ?></td>
                                                    <td><?php echo $row['uraian']; ?></td>
                                                    <td><?php echo $row['no_sk']; ?></td>
                                                    <td><?php echo $row['kode_billing']; ?></td>
                                                    <td><?php echo $row['masa_aktif']; ?></td>
                                                    <td class="text-center">
                                                        <div class="table-data-feature">
                                                            <a class="hapus" href="hapus_data_e-billing.php?id=<?php echo $row['id']; ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Data Table -->
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

<!-- Data Tables -->
<script src="../plugins/jquery/jquery-1.12.0.min.js"></script>
<script src="assets/DataTables/DataTables-1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]],
        });
    } );
</script>

</body>

</html>
        <!-- end document-->