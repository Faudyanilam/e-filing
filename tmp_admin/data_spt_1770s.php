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
    <title>DATA SPT 1770 S | Politeknik Negeri Batam</title>

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
        'No Deleted!',
        'Data Gagal Dihapus!', 
        'warning'
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
                            <!-- Data Table -->
                            <div class="table-responsive m-b-40">                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <h3 class="title-5 m-b-35">data SPT 1770 S</h3>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="spt_1770s.php">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                <i class="zmdi zmdi-plus"></i>add item
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-striped table-bordered table-data2" id="dataTables">
                                        <thead>
                                            <tr bgcolor="black" >
                                                <th style="color: white;">NPWP</th>
                                                <th style="color: white;">tahun pajak</th>
                                                <th style="color: white;">status SPT</th>
                                                <th style="color: white;">pembetulan ke</th>
                                                <th style="color: white;">jenis pajak</th>
                                                <th style="color: white;">NPWP pemotong</th>
                                                <th style="color: white;">nama pemotong</th>
                                                <th style="color: white;">nomor bukti</th>
                                                <th style="color: white;">tanggal bukti</th>
                                                <th style="color: white;">jummlah PPH</th>
                                                <th style="color: white;">neto dalam negeri</th>
                                                <th style="color: white;">sumber penghasilan</th>
                                                <th style="color: white;">penghasilan bruto</th>
                                                <th style="color: white;">PPH terutang</th>
                                                <th style="color: white;">aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include '../koneksi.php';
                                            $data = mysqli_query($koneksi,"select * from tb_spt_1770s inner join tb_non_bukti_potong_s on tb_spt_1770s.npwp = tb_non_bukti_potong_s.id_spt_1770s inner join tb_bukti_potong_s on tb_spt_1770s.npwp = tb_bukti_potong_s.id_spt_1770s where tb_bukti_potong_s.id = tb_non_bukti_potong_s.id");

                                            // Jika Data masih kosong 
                                            if(mysqli_num_rows($data)== 0){
                                                echo "
                                                <td colspan=60 class='text-center' > Data Masih Kosong!!! </td>
                                                ";
                                            }
                                            while($row = mysqli_fetch_array($data)){
                                                ?>
                                                <tr class="tr-shadow">
                                                    <td class="desc" ><?php echo $row['npwp']; ?></td>
                                                    <td><?php echo $row['tahun_pajak']; ?></td>
                                                    <td class="desc"><?php echo $row['status_spt']; ?></td>
                                                    <td><?php echo $row['pembetulan_ke']; ?></td>
                                                    <td><?php echo $row['jenis_pajak']; ?></td>
                                                    <td><?php echo $row['npwp_pemotong']; ?></td>
                                                    <td><?php echo $row['nama_pemotong']; ?></td>
                                                    <td><?php echo $row['nomor_bukti']; ?></td>
                                                    <td><?php echo $row['tanggal_bukti']; ?></td>
                                                    <td><?php echo $row['jumlah_pph']; ?></td>
                                                    <td><?php echo $row['p_neto_dlm_negeri']; ?></td>
                                                    <td><?php echo $row['sumber_penghasilan']; ?></td>
                                                    <td><?php echo $row['p_bruto']; ?></td>
                                                    <td><?php echo $row['pph_terutang']; ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="edit_spt_1770s.php?id=<?php echo base64_encode($row['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a class="hapus" href="hapus_data_1770s.php?id=<?php echo $row['id']; ?>">
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
                    <div class="col-lg-12">
                        <h3 class="title-5 m-b-35 text-center"> Tambahan data SPT 1770 S</h3>
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning" id="dataTables">
                                <thead>
                                    <tr>
                                        <th style="color: white;">NPWP</th>
                                        <th style="color: white;">bunga</th>
                                        <th style="color: white;">royalti</th>
                                        <th style="color: white;">sewa</th>
                                        <th style="color: white;">hadiah</th>
                                        <th style="color: white;">keuntungan</th>
                                        <th style="color: white;">penghasilan lain</th>
                                        <th style="color: white;">neto luar negeri</th>
                                        <th style="color: white;">bantuan</th>
                                        <th style="color: white;">warisan</th>
                                        <th style="color: white;">laba perseroan</th>
                                        <th style="color: white;">asuransi</th>
                                        <th style="color: white;">beasiswa</th>
                                        <th style="color: white;">penghasilan objek pajak</th>
                                        <th style="color: white;">kode harta</th>
                                        <th style="color: white;">nama harta</th>
                                        <th style="color: white;">tahun perolehan</th>
                                        <th style="color: white;">harga perolehan</th>
                                        <th style="color: white;">keterangan</th>
                                        <th style="color: white;">kode utang</th>
                                        <th style="color: white;">nama peminjam</th>
                                        <th style="color: white;">alamat peminjam</th>
                                        <th style="color: white;">tahun peminjam</th>
                                        <th style="color: white;">jumlah pinjaman</th>
                                        <th style="color: white;">nama keluarga</th>
                                        <th style="color: white;">nik</th>
                                        <th style="color: white;">hubungan keluarga</th>
                                        <th style="color: white;">pekerjaan</th>
                                        <th style="color: white;">zakat keagamaan</th>
                                        <th style="color: white;">status perkawinan</th>
                                        <th style="color: white;">status pajak suami/istri</th>
                                        <th style="color: white;">npwp suami/istri</th>
                                        <th style="color: white;">golongan ptkp</th>
                                        <th style="color: white;">jml tanggungan</th>
                                        <th style="color: white;">lapor sebagai</th>
                                        <th style="color: white;">neto suami</th>
                                        <th style="color: white;">neto istri</th>
                                        <th style="color: white;">kembali PPH24</th>
                                        <th style="color: white;">bayar PPH25</th>
                                        <th style="color: white;">bayar STP PPH25</th>
                                        <th style="color: white;">neto kurang zakat</th>
                                        <th style="color: white;">PTKP tanggungan</th>
                                        <th style="color: white;">PKP</th>
                                        <th style="color: white;">PPH terutang tarif</th>
                                        <th style="color: white;">jumlah PPH terutang</th>
                                        <th style="color: white;">PPH dipotong</th>
                                        <th style="color: white;">PPH dibayar sendiri</th>
                                        <th style="color: white;">jumlah kredit</th>
                                        <th style="color: white;">status hasil</th>
                                        <th style="color: white;">jumlah hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    include '../koneksi.php';
                                    $data = mysqli_query($koneksi,"select * from tb_spt_1770s inner join tb_non_bukti_potong_s on tb_spt_1770s.npwp = tb_non_bukti_potong_s.id_spt_1770s inner join tb_bukti_potong_s on tb_spt_1770s.npwp = tb_bukti_potong_s.id_spt_1770s where tb_bukti_potong_s.id = tb_non_bukti_potong_s.id");

                                                            // Jika Data masih kosong 
                                    if(mysqli_num_rows($data)== 0){
                                        echo "
                                        <td colspan=60 class='text-center' > Data Masih Kosong!!! </td>
                                        ";
                                    }
                                    while($row = mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td class="desc"><?php echo $row['npwp']; ?></td>
                                            <td><?php echo $row['bunga']; ?></td>
                                            <td><?php echo $row['royalti']; ?></td>
                                            <td><?php echo $row['sewa']; ?></td>
                                            <td><?php echo $row['hadiah']; ?></td>
                                            <td><?php echo $row['keuntungan']; ?></td>
                                            <td><?php echo $row['penghasilan_lain']; ?></td>
                                            <td><?php echo $row['p_neto_luar_negeri']; ?></td>
                                            <td><?php echo $row['bantuan']; ?></td>
                                            <td><?php echo $row['warisan']; ?></td>
                                            <td><?php echo $row['laba_perseroan']; ?></td>
                                            <td><?php echo $row['asuransi']; ?></td>
                                            <td><?php echo $row['beasiswa']; ?></td>
                                            <td><?php echo $row['p_lain_obj_pajak']; ?></td>
                                            <td><?php echo $row['kode_harta']; ?></td>
                                            <td><?php echo $row['nama_harta']; ?></td>
                                            <td><?php echo $row['tahun_perolehan']; ?></td>
                                            <td><?php echo $row['harga_perolehan']; ?></td>
                                            <td><?php echo $row['keterangan']; ?></td>
                                            <td><?php echo $row['kode_utang']; ?></td>
                                            <td><?php echo $row['nama_peminjam']; ?></td>
                                            <td><?php echo $row['alamat_peminjam']; ?></td>
                                            <td><?php echo $row['tahun_peminjam']; ?></td>
                                            <td><?php echo $row['jumlah_pinjaman']; ?></td>
                                            <td><?php echo $row['nama_keluarga']; ?></td>
                                            <td><?php echo $row['nik']; ?></td>
                                            <td><?php echo $row['hubungan_keluarga']; ?></td>
                                            <td><?php echo $row['pekerjaan']; ?></td>
                                            <td><?php echo $row['zakat_keagamaan']; ?></td>
                                            <td><?php echo $row['status_perkawinan']; ?></td>
                                            <td><?php echo $row['status_pjk_si']; ?></td>
                                            <td><?php echo $row['npwp_si']; ?></td>
                                            <td><?php echo $row['gol_ptkp']; ?></td>
                                            <td><?php echo $row['jml_tanggungan']; ?></td>
                                            <td><?php echo $row['lapor_sebagai']; ?></td>
                                            <td><?php echo $row['neto_suami']; ?></td>
                                            <td><?php echo $row['neto_istri']; ?></td>
                                            <td><?php echo $row['kembali_pph_24']; ?></td>
                                            <td><?php echo $row['bayar_pph_25']; ?></td>
                                            <td><?php echo $row['bayar_stp_pph_25']; ?></td>
                                            <td><?php echo $row['neto_kurang_zakat']; ?></td>
                                            <td><?php echo $row['ptkp_tanggungan']; ?></td>
                                            <td><?php echo $row['pkp']; ?></td>
                                            <td><?php echo $row['pph_terutang_tarif']; ?></td>
                                            <td><?php echo $row['jml_pph_terutang']; ?></td>
                                            <td><?php echo $row['pph_dipotong']; ?></td>
                                            <td><?php echo $row['pph_dibayar_sendiri']; ?></td>
                                            <td><?php echo $row['jumlah_kredit']; ?></td>
                                            <td><?php echo $row['status_hasil']; ?></td>
                                            <td><?php echo $row['jumlah_hasil']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
