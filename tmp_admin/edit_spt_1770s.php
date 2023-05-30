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
    <title>SPT 1770 S | Politeknik Negeri Batam</title>

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
            padding-left: 5%;
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
                                            <strong>SPT 1770 S </strong> <small id="bagian">| Halaman 1</small>
                                        </div>
                                        <div class="col-lg-1" align="right">
                                            <a href="data_spt_1770s.php">
                                                <i class="fa fa-arrow-circle-left fa-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="card-body card-block">
                                    <form action="proses_edit_1770s.php" method="post" class="form-horizontal">
                                        <?php 
                                        include '../koneksi.php';
                                        $id = base64_decode($_GET['id']);
                                        $data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id='$id'");

                                        while($row = mysqli_fetch_array($data)){
                                            ?>
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                            <!-- mulai halaman 1 -->
                                            <div id="1770Ssatu" style="display: block">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li class="active">Step 1</li>
                                                        <li>Step 2</li>
                                                        <li>Step 3</li>
                                                        <li>Step 4</li>
                                                        <li>Step 5</li>    
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NPWP</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="npwp" name="npwp" value="<?php echo $row['id_spt_1770s'] ?>" class="form-control" readonly>
                                                        <!-- <small class="form-text text-muted">Silahkan Isi NPWP Wajib Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="selectSm" class=" form-control-label">Tahun Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="tahun_pajak" name="tahun_pajak" value="<?php echo $row['tahun_pajak']; ?>" class="form-control">
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
                                                            <input type="radio" id="pembetulan" name="status_spt" value="pembetulan" class="custom-control-input" <?php if ($row['status_spt'] == "pembetulan"){ echo "checked";} ?>>
                                                            <label class="custom-control-label" for="pembetulan">Pembetulan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Pembetulan Ke</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="pembetulan_ke" name="pembetulan_ke" value="<?php echo $row['pembetulan_ke']; ?>" min="0" class="form-control">
                                                        <small class="form-text text-muted">Silahkan Isi Pembetulan Wajib Pajak</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 1 -->

                                            <!-- Mulai Halaman 2 -->
                                            <div id="1770Sdua" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li >Step 1</li>
                                                        <li class="active">Step 2</li>
                                                        <li>Step 3</li>
                                                        <li>Step 4</li>
                                                        <li>Step 5</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Jenis Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="form-control-sm form-control" name="jenis_pajak" id="jenis_pajak">
                                                            <option selected="selected" value="0">Pilih Jenis Pajak...</option>
                                                            <option value="Pasal 21" <?php if ($row['jenis_pajak'] == "Pasal 21"){ echo "selected";} ?>>Pasal 21</option>
                                                            <option value="Pasal 22" <?php if ($row['jenis_pajak'] == "Pasal 22"){ echo "selected";} ?>>Pasal 22</option>
                                                            <option value="Pasal 23" <?php if ($row['jenis_pajak'] == "Pasal 23"){ echo "selected";} ?>>Pasal 23</option>
                                                            <option value="Pasal 24" <?php if ($row['jenis_pajak'] == "Pasal 24"){ echo "selected";} ?>>Pasal 24</option>
                                                            <option value="Pasal 26"  <?php if ($row['jenis_pajak'] == "Pasal 26"){ echo "selected";} ?>>Pasal 26</option>
                                                            <option value="DPT"  <?php if ($row['jenis_pajak'] == "DTP"){ echo "selected";} ?>>DTP</option>
                                                        </select>

                                                        <!-- <input type="text" id="jenis_pajak" name="jenis_pajak" value="0" class="uang form-control" style="text-align: right;"> -->
                                                        <!-- <small class="form-text text-muted">Silahkan Penghasilan Bruto Wajib Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">NPWP Pemotong/Pemungut Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="npwp_pemotong" name="npwp_pemotong" value="<?php echo $row['npwp_pemotong'] ?>" class="form-control">
                                                        <!-- <small class="form-text text-muted">Silahkan Pengurangan</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Nama Pemotong/Pemungut Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="nama_pemotong" name="nama_pemotong" value="<?php echo $row['nama_pemotong'] ?>" class="form-control" placeholder="Nama Pemotong/Pemungut Pajak">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Nomor Bukti Pemotong/Pemungutan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="nomor_bukti" name="nomor_bukti" value="<?php echo $row['nomor_bukti'] ?>" class="form-control">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi PKP Wajib Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Tanggal Bukti Pemotongan / Pemungutan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="date" id="tanggal_bukti" name="tanggal_bukti" value="<?php echo $row['tanggal_bukti'] ?>" class="form-control" style="text-align: right;">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Jumlah PPh yang harus Dipungut/Dipotong</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="jumlah_pph" name="jumlah_pph" value="<?php echo $row['jumlah_pph'] ?>" class="uang form-control" style="text-align: right;">
                                                        <small class="form-text text-muted">Silahkan Isi Pajak Penghasilan Dipotong</small>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 2 -->

                                            <!-- Mulai Halaman 3 -->
                                            <div id="1770Stiga" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li>Step 1</li>
                                                        <li>Step 2</li>
                                                        <li class="active">Step 3</li>
                                                        <li>Step 4</li>
                                                        <li>Step 5</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Penghasilan Neto Dalam Negeri Sehubungan dengan Pekerjaan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="p_neto_dlm_negeri" name="p_neto_dlm_negeri" value="<?php echo $row['p_neto_dlm_negeri'] ?>" class="uang form-control" style="text-align: right;">
                                                        
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- Selesai Halaman 3 -->

                                        <?php 
                                        include '../koneksi.php';
                                        $id = base64_decode($_GET['id']);
                                        $data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id='$id'");

                                        while($row = mysqli_fetch_array($data)){
                                            ?>
                                            <!-- Mulai Halaman 4 -->
                                            <div id="1770Sempat" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li>Step 1</li>
                                                        <li>Step 2</li>
                                                        <li>Step 3</li>
                                                        <li class="active">Step 4</li>
                                                        <li>Step 5</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Bunga</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="bunga" name="bunga" value="<?php echo $row['bunga'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Royalti</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="royalti" name="royalti" value="<?php echo $row['royalti'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Sewa</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="sewa" name="sewa" value="<?php echo $row['sewa'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Hadiah</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="hadiah" name="hadiah" value="<?php echo $row['hadiah'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Keuntungan dari Penjualan/Penghasilan Harta</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="keuntungan" name="keuntungan" value="<?php echo $row['keuntungan'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Penghasilan Lain</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="penghasilan_lain" name="penghasilan_lain" value="<?php echo $row['penghasilan_lain'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 4 -->

                                            <!-- Mulai Halaman 5 -->
                                            <div id="1770Slima" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li>Step 1</li>
                                                        <li>Step 2</li>
                                                        <li>Step 3</li>
                                                        <li>Step 4</li>
                                                        <li class="active">Step 5</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Penghasilan Neto Luar Negeri</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="p_neto_luar_negeri" name="p_neto_luar_negeri" value="<?php echo $row['p_neto_luar_negeri'] ?>" class="uang form-control" style="text-align: right;">
                                                        
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 5 -->

                                            <!-- Mulai Halaman 6 -->
                                            <div id="1770Senam" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar">
                                                        <li class="active">Step 6</li>
                                                        <li>Step 7</li>
                                                        <li>Step 8</li>
                                                        <li>Step 9</li>
                                                        <li>Step 10</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Bantuan/Sumbangan/Hibah</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="bantuan" name="bantuan" value="<?php echo $row['bantuan'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Warisan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="warisan" name="warisan" value="<?php echo $row['warisan'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Bagian Laba Anggota Perseroan Komanditer tidak atas saham, persekutuan, firma, kogsi</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="laba_perseroan" name="laba_perseroan" value="<?php echo $row['laba_perseroan'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Klaim Asuransi Kesehatan, Kecelakaan, Jiwa, Dwiguna</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="asuransi" name="asuransi" value="<?php echo $row['asuransi'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Penghasilan Bruto Final</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Beasiswa</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="beasiswa" name="beasiswa" value="<?php echo $row['beasiswa'] ?>" class="uang form-control" style="text-align: right;">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Pajak Penghasilan Final Terutang</small> -->

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Penghasilan Lainnya yang tidak termasuk Objek Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="p_lain_obj_pajak" name="p_lain_obj_pajak" value="<?php echo $row['p_lain_obj_pajak'] ?>" class="uang form-control" style="text-align: right;">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Penghasilan Dikecualikan Objek Pajak</small> -->

                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- Selesai Halaman 6 -->

                                        <?php 
                                        include '../koneksi.php';
                                        $id = base64_decode($_GET['id']);
                                        $data = mysqli_query($koneksi,"select * from tb_bukti_potong_s where id='$id'");

                                        while($row = mysqli_fetch_array($data)){
                                            ?>
                                            <!-- Mulai Halaman 7 -->
                                            <div id="1770Stujuh" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li >Step 6</li>
                                                        <li class="active">Step 7</li>
                                                        <li>Step 8</li>
                                                        <li>Step 9</li>
                                                        <li>Step 10</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Sumber/ Jenis Penghasilan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="form-control" name="sumber_penghasilan" id="sumber_penghasilan" oninput="validasi(this)" oninvalid="validasi(this)" onchange="phmt();">
                                                            <option selected="selected" value="0">Pilih...</option>
                                                            <option value="Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara" <?php if ($row['sumber_penghasilan'] == "Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara"){ echo "selected";} ?>>1. Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara</option>
                                                            <option value="Bunga/Diskonto Obligasi" <?php if ($row['sumber_penghasilan'] == "Bunga/Diskonto Obligasi"){ echo "selected";} ?>>2. Bunga/Diskonto Obligasi</option>
                                                            <option value="Penjualan Saham di Bursa Efek" <?php if ($row['sumber_penghasilan'] == "Penjualan Saham di Bursa Efek"){ echo "selected";} ?>>3. Penjualan Saham di Bursa Efek</option>
                                                            <option value="Hadiah Undian" <?php if ($row['sumber_penghasilan'] == "Hadiah Undian"){ echo "selected";} ?>>4. Hadiah Undian</option>
                                                            <option value="Pesangon, Tunjangan Hari Tua, dan tebusan Pensiun yang dibayarkan sekaligus" <?php if ($row['sumber_penghasilan'] == "Pesangon, Tunjangan Hari Tua, dan tebusan Pensiun yang dibayarkan sekaligus"){ echo "selected";} ?>>5. Pesangon, Tunjangan Hari Tua, dan tebusan Pensiun yang dibayarkan sekaligus</option>
                                                            <option value="Honoranium Atas Beban APBD/APBN" <?php if ($row['sumber_penghasilan'] == "Honoranium Atas Beban APBD/APBN"){ echo "selected";} ?>>6. Honoranium Atas Beban APBD/APBN</option>
                                                            <option value="Pengalihan Hak Atas Tanah dan Bangunan" <?php if ($row['sumber_penghasilan'] == "Bunga/Diskonto Obligasi"){ echo "selected";} ?>>7. Pengalihan Hak Atas Tanah dan Bangunan</option>
                                                            <option value="Sewa Atas Tanah dan Bangunan" <?php if ($row['sumber_penghasilan'] == "Sewa Atas Tanah dan Bangunan"){ echo "selected";} ?>>8. Sewa Atas Tanah dan Bangunan</option>
                                                            <option value="Bangunan yang diterima dalam rangka Bangun Guna Serah" <?php if ($row['sumber_penghasilan'] == "Bangunan yang diterima dalam rangka Bangun Guna Serah"){ echo "selected";} ?>>9. Bangunan yang diterima dalam rangka Bangun Guna Serah</option>
                                                            <option value="Bunga Simpanan yang diserahkan oleh Koperasi kepada Anggota Koperasi" <?php if ($row['sumber_penghasilan'] == "Bunga Simpanan yang diserahkan oleh Koperasi kepada Anggota Koperasi"){ echo "selected";} ?>>10. Bunga Simpanan yang diserahkan oleh Koperasi kepada Anggota Koperasi</option>
                                                            <option value="Transaksi Derivatif" <?php if ($row['sumber_penghasilan'] == "Transaksi Derivatif"){ echo "selected";} ?>>11. Transaksi Derivatif</option>
                                                            <option value="Dividen" <?php if ($row['sumber_penghasilan'] == "Dividen"){ echo "selected";} ?>>12. Dividen</option>
                                                            <option value="Penghasilan Istri Dari Satu Pemberi Kerja" <?php if ($row['sumber_penghasilan'] == "Penghasilan Istri Dari Satu Pemberi Kerja"){ echo "selected";} ?>>13. Penghasilan Istri Dari Satu Pemberi Kerja</option>
                                                            <option value="Penghasilan Lain Yang Dikenakan Pajak Final Dan/Atau bersifat Final" <?php if ($row['sumber_penghasilan'] == "Penghasilan Lain Yang Dikenakan Pajak Final Dan/Atau bersifat Final"){ echo "selected";} ?>>14. Penghasilan Lain Yang Dikenakan Pajak Final Dan/Atau bersifat Final</option>
                                                        </select>
                                                        <!-- <input type="text" id="sumber_penghasilan" name="sumber_penghasilan" value="0" class="uang form-control" style="text-align: right;"> -->
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Harta</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">DPP/Penghasilan Bruto</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="p_bruto" name="p_bruto" value="<?php echo $row['p_bruto'] ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">PPH Terutang</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="pph_terutang" name="pph_terutang" value="<?php echo $row['p_bruto'] ?>" class="uang form-control" style="text-align: right;">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->

                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- Selesai Halaman 7 -->

                                        <?php 
                                        include '../koneksi.php';
                                        $id = base64_decode($_GET['id']);
                                        $data = mysqli_query($koneksi,"select * from tb_non_bukti_potong_s where id='$id'");

                                        while($row = mysqli_fetch_array($data)){
                                            ?>
                                            <!-- Mulai Halaman 8 -->
                                            <div id="1770Sdelapan" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li >Step 6</li>
                                                        <li >Step 7</li>
                                                        <li class="active">Step 8</li>
                                                        <li>Step 9</li>
                                                        <li>Step 10</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Kode Harta</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="form-control-sm form-control" name="kode_harta" id="kode_harta">
                                                            <option selected="selected" value="0">Pilih Kode Harta...</option>
                                                            <option value="011" <?php if ($row['kode_harta'] == "011"){ echo "selected";} ?>>011-Uang Tunai</option>
                                                            <option value="012" <?php if ($row['kode_harta'] == "012"){ echo "selected";} ?>>012-Tabungan</option>
                                                            <option value="013" <?php if ($row['kode_harta'] == "013"){ echo "selected";} ?>>013-Giro</option>
                                                            <option value="014" <?php if ($row['kode_harta'] == "014"){ echo "selected";} ?>>014-Deposito</option>
                                                            <option value="019" <?php if ($row['kode_harta'] == "019"){ echo "selected";} ?>>019-Setara Kas Lainnya</option>
                                                            <option disabled style="background-color: #f5f5f5; font-weight: bold;">Piutang</option>
                                                            <option value="021" <?php if ($row['kode_harta'] == "021"){ echo "selected";} ?>>021-Piutang</option>
                                                            <option value="022" <?php if ($row['kode_harta'] == "022"){ echo "selected";} ?>>022-Piutang Afiliasi (Piutang kepada pihak yang mempunyai hubungan istimewa sebagaimana dimaksud dalam Pasal 18 ayat (4) UU PPh)</option>
                                                            <option value="023" <?php if ($row['kode_harta'] == "023"){ echo "selected";} ?>>023-Persediaan Usaha</option>
                                                            <option value="029" <?php if ($row['kode_harta'] == "029"){ echo "selected";} ?>>029-Piutang Lainnya</option>
                                                            <option disabled style="background-color: #f5f5f5; font-weight: bold;">Investasi</option>
                                                            <option value="031" <?php if ($row['kode_harta'] == "031"){ echo "selected";} ?>>031-Saham yang dibeli untuk dijual kembali</option>
                                                            <option value="032" <?php if ($row['kode_harta'] == "032"){ echo "selected";} ?>>032-Saham</option>
                                                            <option value="033" <?php if ($row['kode_harta'] == "033"){ echo "selected";} ?>>033-Obligasi Perusahaan</option>
                                                            <option value="034" <?php if ($row['kode_harta'] == "034"){ echo "selected";} ?>>034-Pemerintah Indonesia (ORI, Surat Berharga Syariah Negara, dll</option>
                                                            <option value="035" <?php if ($row['kode_harta'] == "035"){ echo "selected";} ?>>035-Surat Utang Lainnya</option>
                                                            <option value="036" <?php if ($row['kode_harta'] == "036"){ echo "selected";} ?>>036-Reksadana</option>
                                                            <option value="037" <?php if ($row['kode_harta'] == "037"){ echo "selected";} ?>>037-Instrument Derivatif</option>
                                                            <option value="038" <?php if ($row['kode_harta'] == "038"){ echo "selected";} ?>>038-Pernyertaan Modal dalam perusahaan lain yang tidak atas saham meliputi penyertaan modal pada CV, Firma dan sejenisnya</option>
                                                            <option value="039" <?php if ($row['kode_harta'] == "039"){ echo "selected";} ?>>039-Investasi Lainnya</option>
                                                            <option disabled style="background-color: #f5f5f5; font-weight: bold;">Alat Transportasi</option>
                                                            <option value="041" <?php if ($row['kode_harta'] == "041"){ echo "selected";} ?>>041-Sepeda</option>
                                                            <option value="042" <?php if ($row['kode_harta'] == "042"){ echo "selected";} ?>>042-Sepeda Motor</option>
                                                            <option value="043" <?php if ($row['kode_harta'] == "043"){ echo "selected";} ?>>043-Mobil</option>
                                                            <option value="049" <?php if ($row['kode_harta'] == "049"){ echo "selected";} ?>>049-Alat Transportasi Lainnya</option>
                                                            <option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Bergerak</option>
                                                            <option value="051" <?php if ($row['kode_harta'] == "051"){ echo "selected";} ?>>051-Logam Mulia (emas batangan, emas perhiasan, platina batangan, platina perhiasan, logam mulia lainnya)</option>
                                                            <option value="052" <?php if ($row['kode_harta'] == "052"){ echo "selected";} ?>>052-Batu Mulia (Intan, Berlian, Batu Mulia lainnya)</option>
                                                            <option value="053" <?php if ($row['kode_harta'] == "053"){ echo "selected";} ?>>053-Barang-Barang seni dan antik</option>
                                                            <option value="054" <?php if ($row['kode_harta'] == "054"){ echo "selected";} ?>>054-Kapal Pesiar, Pesawat Terbang, Helikopter, Jetski, Peralatan Olah Raga Khusus</option>
                                                            <option value="055" <?php if ($row['kode_harta'] == "055"){ echo "selected";} ?>>055-Peralatan Elektronik, Furnitur</option>
                                                            <option value="059" <?php if ($row['kode_harta'] == "059"){ echo "selected";} ?>>059-Harta Bergerak Lainnya</option>
                                                            <option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Tidak Bergerak</option>
                                                            <option value="061" <?php if ($row['kode_harta'] == "061"){ echo "selected";} ?>>061-Tanah dan/atau bangunan untuk tempat tinggal</option>
                                                            <option value="062" <?php if ($row['kode_harta'] == "062"){ echo "selected";} ?>>062-Tanah dan/atau bangunan untuk usaha (Toko, pabrik, gudang dan sejenisnya)</option>
                                                            <option value="063" <?php if ($row['kode_harta'] == "063"){ echo "selected";} ?>>063-Tanah atau lahan untuk usaha (lahan pertanian, perkebunan, perikanan darat dan sejenisnya)</option>
                                                            <option value="064" <?php if ($row['kode_harta'] == "064"){ echo "selected";} ?>>069-Harta tidak bergerak lainnya</option>
                                                            <option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Tidak Berwujud</option>
                                                            <option value="071" <?php if ($row['kode_harta'] == "071"){ echo "selected";} ?>>071-Paten</option>
                                                            <option value="072" <?php if ($row['kode_harta'] == "072"){ echo "selected";} ?>>072-Royalti</option>
                                                            <option value="073" <?php if ($row['kode_harta'] == "072"){ echo "selected";} ?>>073-Merek Dagang</option>
                                                            <option value="079" <?php if ($row['kode_harta'] == "079"){ echo "selected";} ?>>079-HArta tidak berwujud lainya</option>
                                                        </select>
                                                        <!-- <input type="text" id="kode_harta" name="kode_harta" value="0" class="uang form-control" style="text-align: right;"> -->
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Harta</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Nama Harta</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="nama_harta" name="nama_harta" placeholder="Nama Harta" value="<?php echo $row['nama_harta']; ?>" class="form-control">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Tahun Perolehan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="tahun_perolehan" name="tahun_perolehan" placeholder="Nama Harta" value="<?php echo $row['tahun_perolehan']; ?>" class="form-control">
                                                        <!-- <input type="text" id="tahun_perolehan" name="tahun_perolehan" value="0" class="form-control" style="text-align: right;"> -->
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Harga Perolehan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="harga_perolehan" name="harga_perolehan" value="<?php echo $row['harga_perolehan']; ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Keterangan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="keterangan" name="keterangan" value="<?php echo $row['keterangan']; ?>" placeholder="Keterangan" class="form-control" style="text-align: right;">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 8 -->

                                            <!-- Mulai Halaman 9 -->
                                            <div id="1770Ssembilan" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li >Step 6</li>
                                                        <li >Step 7</li>
                                                        <li >Step 8</li>
                                                        <li class="active">Step 9</li>
                                                        <li>Step 10</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Kode Utang</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="form-control-sm form-control" name="kode_utang" id="kode_utang">
                                                            <option selected="selected" value="0">Pilih...</option>
                                                            <option value="101" <?php if ($row['kode_utang'] == "101"){ echo "selected";} ?>>101-Utang Bank/Lembaga Keuangan bukan Bank(KPR, Leasing Kendaraan Bermotor dan sejenisnya)</option>
                                                            <option value="102" <?php if ($row['kode_utang'] == "102"){ echo "selected";} ?>>102-Kartu Kredit</option>
                                                            <option value="103" <?php if ($row['kode_utang'] == "103"){ echo "selected";} ?>>103-Utang Afiliasi(Pinjaman dari pihak yang memiliki hubungan istimewa sebagaimana dimaksud dalam pasal 18 ayat(4) UU PPh)</option>
                                                            <option value="109" <?php if ($row['kode_utang'] == "109"){ echo "selected";} ?>>109-Utang Lainnya</option>
                                                        </select>
                                                        <!-- <input type="text" id="kode_utang" name="kode_utang" value="0" class="uang form-control" style="text-align: right;"> -->
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Harta</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Nama Pemberi Pinjaman</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="nama_peminjam" name="nama_peminjam" placeholder="Nama Pemberi Peminjam" value="<?php echo $row['nama_peminjam']; ?>" class="form-control">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Alamat Pemberi Pinjaman</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="alamat_peminjam" name="alamat_peminjam" placeholder="Alamat Pemberi Pinjaman" value="<?php echo $row['alamat_peminjam']; ?>" class="form-control">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Tahun Peminjaman</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="tahun_peminjam" name="tahun_peminjam" placeholder="Alamat Pemberi Pinjaman" value="<?php echo $row['tahun_peminjam']; ?>" class="form-control">
                                                        <!-- <input type="text" id="tahun_peminjam" name="tahun_peminjam" value="0" class="uang form-control" style="text-align: right;"> -->
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Jumlah</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="jumlah_pinjaman" name="jumlah_pinjaman" value="<?php echo $row['jumlah_pinjaman'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 9 -->

                                            <!-- Mulai Halaman 10 -->
                                            <div id="1770Ssepuluh" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li >Step 6</li>
                                                        <li >Step 7</li>
                                                        <li >Step 8</li>
                                                        <li >Step 9</li>
                                                        <li class="active">Step 10</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Nama</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="nama_keluarga" name="nama_keluarga" placeholder="Nama Keluarga" value="<?php echo $row['nama_keluarga']; ?>" class="form-control">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Harta</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">NIK</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="nik" name="nik" value="<?php echo $row['nik']; ?>" placeholder="Nomor Induk Keluarga" class="form-control">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Hubungan Keluarga</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="hubungan_keluarga" name="hubungan_keluarga" value="<?php echo $row['hubungan_keluarga']; ?>" placeholder="Hubungan Keluarga" class="form-control">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label" align="justify">Pekerjaan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="pekerjaan" name="pekerjaan" value="<?php echo $row['pekerjaan']; ?>" placeholder="Pekerjaan" class="form-control">
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Seluruh Kewajiban/Utang</small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 10 -->

                                            <!-- Mulai Halaman 11 -->
                                            <div id="1770Ssebelas" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li class="active">Step 11</li>
                                                        <li>Step 12</li>
                                                        <li>Step 13</li>
                                                        <li>Step 14</li>
                                                        <li >Step 15</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Zakat Sumbangan Keagamaan yang Sifatnya Wajib</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="zakat_keagamaan" name="zakat_keagamaan" value="<?php echo $row['zakat_keagamaan']; ?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 11 -->

                                            <!-- Mulai Halaman 12 -->
                                            <div id="1770Sduabelas" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li >Step 11</li>
                                                        <li class="active">Step 12</li>
                                                        <li>Step 13</li>
                                                        <li>Step 14</li>
                                                        <li >Step 15</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col-sm-6" style="padding-left: 10%;padding-top: 4%; ">
                                                        <p><b>Status Perkawinan</b></p>
                                                    </div>
                                                    <!-- Pilihan Status Perkawinan -->
                                                    <div class="col-sm-6" style="padding-right: 10%">
                                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();disa();" name="status_perkawinan" id="no" value="Tidak Kawin" <?php if ($row['status_perkawinan'] == "Tidak Kawin"){ echo "checked";} ?>>
                                                                <label class="form-check-label" for="no">Tidak Kawin</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();disa();" name="status_perkawinan" id="yes" value="Kawin" <?php if ($row['status_perkawinan'] == "Kawin"){ echo "checked";} ?>>
                                                                <label class="form-check-label" for="yes">
                                                                    Kawin
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <!-- end Pilihan -->

                                                    <!-- Jika pilih jawaban kawin -->
                                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0" >
                                                        <div class="form-check">
                                                            <span id="ifYes" style="display:none" >
                                                                <div class="form-group row" style="padding-left: 30px; padding-right: 30px">
                                                                    <label for="stat" class="col-sm-6 col-form-label">Status Kewajiban Perpajakan Suami-Isteri</label>
                                                                    <div class="col-sm-4" id="testing">
                                                                        <select class="form-control" name="status_pjk_si" id="status_pjk_si" oninput="validasi(this)" oninvalid="validasi(this)" onchange="phmt();">
                                                                            <option value="0" readonly <?php if ($row['status_pjk_si'] == "0"){ echo "selected";} ?>>Pilih</option>
                                                                            <option value="tkw" disabled <?php if ($row['status_pjk_si'] == "tkw"){ echo "selected";} ?>>Tidak Kawin</option>
                                                                            <option value="kk" <?php if ($row['status_pjk_si'] == "kk"){ echo "selected";} ?>>KK / Kepala Keluarga</option>
                                                                            <option value="hb" <?php if ($row['status_pjk_si'] == "hb"){ echo "selected";} ?>>HB / Hidup Berpisah </option>
                                                                            <option value="ph" <?php if ($row['status_pjk_si'] == "ph"){ echo "selected";} ?>>PH / Pisah Harta </option>
                                                                            <option value="mt" <?php if ($row['status_pjk_si'] == "mt"){ echo "selected";} ?>>MT / Memilih Terpisah </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" style="padding-bottom:  15px; padding-left: 30px; padding-right: 30px">
                                                                    <div class="col-sm-6">
                                                                        <p style="font-weight: bold">NPWP Isteri/Suami</p>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <input class="form-control" type="text" style="width: 215px; background-color: #F0F8FF; width: 100%" placeholder="NPWP" name="npwp_si" id="npwp_si" value="<?php echo $row['npwp_si'];?>" disabled>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- end Jika pilih jawaban kawin -->
                                                    <p style="padding-left: 30px;"><b>Pilih Golongan PTKP Anda</b></p>
                                                    <div class="form-group row" style="padding-left: 30px;padding-right: 35px">
                                                        <label for="cacaca" class="col-sm-6 col-form-label">7. Penghasilan Tidak Kena Pajak/Jumlah Tanggungan</label>
                                                        <div class="col-sm-4">
                                                            <select class="form-control" name="gol_ptkp" id="gol_ptkp" oninput="validasi(this)" oninvalid="validasi(this)" onchange="phmt()" required>
                                                                <option value="tk" id="tk" <?php if ($row['gol_ptkp'] == "tk"){ echo "selected";} ?>>Tidak Kawin/TK</option>
                                                                <option value="kw" id="kw" <?php if ($row['gol_ptkp'] == "kw"){ echo "selected";} ?>>Kawin/K</option>
                                                                <option value="kw_gabung" id="kw_gabung" <?php if ($row['gol_ptkp'] == "kw_gabung"){ echo "selected";} ?>>Kawin Penghasilan istri Di gabung(K/I)</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <select class="form-control" name="jml_tanggungan" id="jml_tanggungan" oninput="validasi(this)" oninvalid="validasi(this)">
                                                                <option value="0" <?php if ($row['jml_tanggungan'] == "0"){ echo "selected";} ?>>0</option>
                                                                <option value="1" <?php if ($row['jml_tanggungan'] == "1"){ echo "selected";} ?>>1</option>
                                                                <option value="2" <?php if ($row['jml_tanggungan'] == "2"){ echo "selected";} ?>>2</option>
                                                                <option value="3" <?php if ($row['jml_tanggungan'] == "3"){ echo "selected";} ?>>3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end input text -->

                                                    <!-- Card jika MT/HB -->
                                                    <div class="card bg-light mb-3" id="card_kurang_bayar" style="width:708px; background-color: white; display: none;" >
                                                        <div class="card-header card-header_2" >
                                                            <i class="fas fa-file mr-1"></i>
                                                            <b>Panel Perhitungan PPh Untuk Status PH atau MT</b>
                                                        </div>
                                                        <div class="card-body card-body_4">
                                                            <br/>

                                                            <!-- pertanyaan  -->
                                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <p>Lapor Sebagai</p>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" onclick="javascript:lapor_s_i();" name="lapor_sebagai" id="suami" value="suami" <?php if ($row['lapor_sebagai'] == "suami"){ echo "checked";} ?>>
                                                                            <label class="form-check-label" for="exampleRadios">Suami</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" onclick="javascript:lapor_s_i();" name="lapor_sebagai" id="istri" value="istri" <?php if ($row['lapor_sebagai'] == "istri"){ echo "checked";} ?>>
                                                                            <label class="form-check-label" for="exampleRadios">
                                                                                Istri
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="padding-bottom:  15px">
                                                                <div class="col-sm-6">
                                                                    <p>Penghasilan Netto Suami</p>
                                                                </div>
                                                                <div class="col-sm-4">

                                                                    <input class="form-control" name="neto_suami" type="text" id="t_suami" value="<?php echo $row['neto_suami']; ?>" style="width: 250px; background-color: #F0F8FF; text-align=right"  disabled>

                                                                </div>
                                                            </div>

                                                            <div class="form-group row" style="padding-bottom: 15px">
                                                                <div class="col-sm-6">
                                                                    <p>Penghasilan Netto Istri</p>
                                                                </div>
                                                                <div class="col-sm-4">

                                                                    <input class="form-control" type="text" name="neto_istri" value="<?php echo $row['neto_istri']; ?>" style="width: 250px; background-color: #F0F8FF" id="t_istri" disabled>

                                                                </div>
                                                            </div>
                                                            <!-- akhir pertanyaan -->
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Selesai Halaman 12 -->

                                            <!-- Mulai Halaman 13 -->
                                            <div id="1770Stigabelas" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li >Step 11</li>
                                                        <li>Step 12</li>
                                                        <li class="active">Step 13</li>
                                                        <li>Step 14</li>
                                                        <li >Step 15</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Pengembalian/Pengurangan PPh Pasal 24 yang telah dikreditkan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="kembali_pph_24" name="kembali_pph_24" value="<?php echo $row['kembali_pph_24'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 13 -->

                                            <!-- Mulai Halaman 14 -->
                                            <div id="1770Sempatbelas" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li >Step 11</li>
                                                        <li >Step 12</li>
                                                        <li >Step 13</li>
                                                        <li class="active">Step 14</li>
                                                        <li >Step 15</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">PPh yang dibayar Sendiri --> PPh Pasal 25</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="bayar_pph_25" name="bayar_pph_25" value="<?php echo $row['bayar_pph_25'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Pph Yang dibayar Sendiri --> STP Pasal 25 (Hanya Pokok Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="bayar_stp_pph_25" name="bayar_stp_pph_25" value="<?php echo $row['bayar_stp_pph_25'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Selesai Halaman 14 -->

                                            <!-- Mulai Halaman 15 -->
                                            <div id="1770Slimabelas" style="display: none">
                                                <div class="progressbar-wrapper">
                                                    <ul class="progressbar" >
                                                        <li >Step 11</li>
                                                        <li >Step 12</li>
                                                        <li >Step 13</li>
                                                        <li >Step 14</li>
                                                        <li class="active">Step 15</li>
                                                    </ul>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Jumlah Penghasilan Neto setelah Pengurangan Zakat/Sumbangan Keagamaan yang sifatnya Wajib (4-5)</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="neto_kurang_zakat" name="neto_kurang_zakat" value="<?php echo $row['neto_kurang_zakat'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Penghasilan Tidak Kena Pajak/Jumlah Tanggungan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="ptkp_tanggungan" name="ptkp_tanggungan" value="<?php echo $row['ptkp_tanggungan'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Penghasilan Kena Pajak (6-7)</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="pkp" name="pkp" value="<?php echo $row['pkp'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">PPh Terutang (Tarif Pasal 17 UU PPh * 8)</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="pph_terutang_tarif" name="pph_terutang_tarif" value="<?php echo $row['pph_terutang_tarif'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Jumlah PPh Terutang (9+10)</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="jml_pph_terutang" name="jml_pph_terutang" value="<?php echo $row['jml_pph_terutang'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">PPh yang dipotong/dipungut pihak lain/ditanggung pemerintah dan/atau Kredit Pajak Luar Negeri dan/atau terutang di luar negeri</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="pph_dipotong" name="pph_dipotong" value="<?php echo $row['pph_dipotong'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">PPh yang Harus Dibayar Sendiri</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="pph_dibayar_sendiri" name="pph_dibayar_sendiri" value="<?php echo $row['pph_dibayar_sendiri'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Jumlah Kredit Pajak (14a+14b+14c)</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="jumlah_kredit" name="jumlah_kredit" value="<?php echo $row['jumlah_kredit'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="status_spt" class=" form-control-label">Status SPT</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <select name="status_hasil" id="status_hasil" class="form-control-sm form-control">
                                                            <option selected disabled>Pilih</option>
                                                            <option value="Nihil" <?php if ($row['status_hasil'] == "Nihil"){ echo "selected";} ?>>Nihil</option>
                                                            <option value="Lebih Bayar" <?php if ($row['status_hasil'] == "Lebih Bayar"){ echo "selected";} ?>>Lebih Bayar</option>
                                                            <option value="Kurang Bayar" <?php if ($row['status_hasil'] == "Kurang Bayar"){ echo "selected";} ?>>Kurang Bayar</option>
                                                        </select>
                                                        <!-- <input type="text" id="text-input" name="text-input" placeholder="Status SPT Wajib Pajak" class="form-control"> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Jumlah SPT</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <input type="text" id="jumlah_hasil" name="jumlah_hasil" value="<?php echo $row['jumlah_hasil'];?>" class="uang form-control" style="text-align: right;">

                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->

                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- Selesai Halaman 15 -->
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-2" align="left">
                                                <button class="btn btn-warning btn-sm" id="back14" style="display: none" type="button">
                                                    <i class="fa fa-arrow-circle-left"></i> Back
                                                </button>
                                            </div>
                                            <div class="col-lg-10" align="right">
                                                <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit" style="display: none; ">
                                                    <i class="fa fa-check"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Setting Button Untuk Setiap Halaman -->
                                    <div class="row" style="padding-left: 10px; padding-right: 10px">
                                        <!-- Halaman 1 -->
                                        <div class="col-lg-12" align="right">
                                            <button class="btn btn-primary btn-sm" id="next2" style="display: block">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- halaman 2 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next3" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- halaman 3 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back2" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next4" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 4 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back3" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next5" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 5 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back4" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next6" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 6 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back5" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next7" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 7 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back6" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next8" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 8 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back7" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next9" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 9 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back8" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next10" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 10 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back9" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next11" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 11 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back10" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next12" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 12 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back11" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next13" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 13 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back12" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next14" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                        <!-- Halaman 14 -->
                                        <div class="col-lg-2">
                                            <button class="btn btn-warning btn-sm" id="back13" style="display: none">
                                                <i class="fa fa-arrow-circle-left"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-10" align="right">
                                            <button class="btn btn-primary btn-sm" id="next15" style="display: none">
                                                <i class="fa fa-arrow-circle-right"></i> Next
                                            </button>
                                        </div>
                                    </div>
                                    <!-- END Setting Button Untuk Setiap Halaman -->
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
<!-- coding script halaman 12 -->
<script type="text/javascript"> 
    function yesnoCheck() {

        if(document.getElementById('yes').checked) {
            document.getElementById('ifYes').style.display = 'block';

        }
        else document.getElementById('ifYes').style.display = 'none';
        document.getElementById('card_kurang_bayar').style.display = 'none';

    }
    function phmt(){
        var tes = document.getElementById("status_pjk_si").value;
        var tes2 = document.getElementById("gol_ptkp").value;
        if (tes == 'tkw' ){
            document.getElementById('card_kurang_bayar').style.display = 'none';

        }else if (tes == 'kk'){
            document.getElementById('npwp_si').disabled = true;
            document.getElementById('tk').disabled = true;
            document.getElementById('kw').disabled = false;
            document.getElementById('kw_gabung').disabled = false;
            if (tes == 'kk' && tes2 == 'kw_gabung'){
                document.getElementById('card_kurang_bayar').style.display = 'block';

            }else if(tes == 'kk' && tes2 == 'kw'){
                document.getElementById('card_kurang_bayar').style.display = 'none';
            }else document.getElementById('card_kurang_bayar').style.display = 'none';

        }else if (tes == 'hb'){
            document.getElementById('card_kurang_bayar').style.display = 'none';
            document.getElementById('npwp_si').disabled = false;
            document.getElementById('tk').disabled = false;
            document.getElementById('kw').disabled = true;
            document.getElementById('kw_gabung').disabled = true;
        }
        else if (tes == 'ph'){
            document.getElementById('npwp_si').disabled = false;
            document.getElementById('tk').disabled = true;
            document.getElementById('kw').disabled = true;
            document.getElementById('kw_gabung').disabled = false;
            if (tes == 'ph' && tes2 == 'kw_gabung'){
                document.getElementById('card_kurang_bayar').style.display = 'block';

            }else document.getElementById('card_kurang_bayar').style.display = 'none';
        }
        else if (tes == 'mt'){
            document.getElementById('npwp_si').disabled = false;
            document.getElementById('tk').disabled = true;
            document.getElementById('kw').disabled = true;
            document.getElementById('kw_gabung').disabled = false;
            if (tes == 'mt' && tes2 == 'kw_gabung'){
                document.getElementById('card_kurang_bayar').style.display = 'block';
            }else document.getElementById('card_kurang_bayar').style.display = 'none';
        }
        else document.getElementById('card_kurang_bayar').style.display = 'none';

    }

    function disa(){
        if(document.getElementById('no').checked) {
            document.getElementById('kw').disabled = true;
            document.getElementById('kw_gabung').disabled = true;
        }else if (document.getElementById('no').checked){
            document.getElementById('kw').disabled = false;
            document.getElementById('kw_gabung').disabled = false;
        }
    }

    function lapor_s_i(){
        if(document.getElementById('suami').checked) {
            document.getElementById('t_suami').disabled = true;
            document.getElementById('t_istri').disabled = false;
        }
        else if(document.getElementById('istri').checked) {
            document.getElementById('t_suami').disabled = false;
            document.getElementById('t_istri').disabled = true;
        }

    }
    $('#ifYes').hide(500);
</script>
<script type="text/javascript">
    //Halaman 1 

    // Get the button, and when the user clicks on it, execute myFunction
    document.getElementById("next2").onclick = function() {myFunction()};
    var p_kontainer = document.getElementById('bagian');
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction() {

      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Sdua").style.display = 'block';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'block';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'block';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 2";
  }
  //Halaman 2

    // Get the button, and when the user clicks on it, execute myFunction
    document.getElementById("next3").onclick = function() {myFunction2()};
    var p_kontainer = document.getElementById('bagian');
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction2() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'block';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'block';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'block';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 3";
  }
  // Halaman 3

    // Get the button, and when the user clicks on it, execute myFunction
    document.getElementById("next4").onclick = function() {myFunction3()};
    var p_kontainer = document.getElementById('bagian');
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction3() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'block';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'block';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'block';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 4";
  }
  // Halaman 4

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next5").onclick = function() {myFunction4()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction4() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'block';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'block';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'block';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 5";
  }
  //Halaman 5

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next6").onclick = function() {myFunction5()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction5() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'block';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'block';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'block';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 6";
  }
  // Halaman 6

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next7").onclick = function() {myFunction6()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction6() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'block';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'block';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'block';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 7";
  }
  //Halaman 7

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next8").onclick = function() {myFunction7()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction7() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'block';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'block';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'block';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 8";
  }
  //Halaman 8

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next9").onclick = function() {myFunction8()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction8() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'block';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'block';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'block';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 9";
  }
  //Halaman 9

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next10").onclick = function() {myFunction9()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction9() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'block';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'block';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'block';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 10";
  }
  //Halaman 10

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next11").onclick = function() {myFunction10()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction10() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'block';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'block';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'block';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 11";
  }
  //Halaman 11

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next12").onclick = function() {myFunction11()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction11() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'block';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'block';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'block';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 12";
  }
  //Halaman 12

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next13").onclick = function() {myFunction12()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction12() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'block';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'block';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'block';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 13";
  }
  //Halaman 13

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next14").onclick = function() {myFunction13()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction13() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'block';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'block';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'block';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 14";
  }
  //Halaman 14

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("next15").onclick = function() {myFunction14()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction14() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'block';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'block';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'block';
      p_kontainer.innerHTML = "| Halaman 15";
  }
  //Selesai Next -------------------------------------------------------------------------------

      //Halaman 15

  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("back14").onclick = function() {myFunction15()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction15() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'block';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'block';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'block';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 14";
  }
  
  document.getElementById("back13").onclick = function() {myFunction16()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction16() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'block';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'block';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'block';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 13";
  }

  document.getElementById("back12").onclick = function() {myFunction17()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction17() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'block';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'block';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'block';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 12";
  }

  document.getElementById("back11").onclick = function() {myFunction18()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction18() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'block';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'block';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'block';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 11";
  }
  document.getElementById("back10").onclick = function() {myFunction19()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction19() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'block';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'block';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'block';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 10";
  }
  document.getElementById("back9").onclick = function() {myFunction20()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction20() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'block';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'block';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'block';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 9";
  }

  document.getElementById("back8").onclick = function() {myFunction21()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction21() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'block';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'block';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'block';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 8";
  }

  document.getElementById("back7").onclick = function() {myFunction22()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction22() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'block';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'block';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'block';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 7";
  }
  document.getElementById("back6").onclick = function() {myFunction23()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction23() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'block';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'block';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'block';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 6";
  }
  document.getElementById("back5").onclick = function() {myFunction24()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction24() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'block';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'block';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'block';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 5";
  }
  document.getElementById("back4").onclick = function() {myFunction25()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction25() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'block';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'block';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'block';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 4";
  }
  document.getElementById("back3").onclick = function() {myFunction26()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction26() {
      document.getElementById("1770Sdua").style.display = 'none';
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Stiga").style.display = 'block';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'none';
      document.getElementById("back2").style.display = 'block';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'none';
      document.getElementById("next4").style.display = 'block';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 3";
  }
  document.getElementById("back2").onclick = function() {myFunction27()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction27() {
      document.getElementById("1770Ssatu").style.display = 'none';
      document.getElementById("1770Sdua").style.display = 'block';
      document.getElementById("1770Stiga").style.display = 'none';
      document.getElementById("1770Sempat").style.display = 'none';
      document.getElementById("1770Slima").style.display = 'none';
      document.getElementById("1770Senam").style.display = 'none';
      document.getElementById("1770Stujuh").style.display = 'none';
      document.getElementById("1770Sdelapan").style.display = 'none';
      document.getElementById("1770Ssembilan").style.display = 'none';
      document.getElementById("1770Ssepuluh").style.display = 'none';
      document.getElementById("1770Ssebelas").style.display = 'none';
      document.getElementById("1770Sduabelas").style.display = 'none';
      document.getElementById("1770Stigabelas").style.display = 'none';
      document.getElementById("1770Sempatbelas").style.display = 'none';
      document.getElementById("1770Slimabelas").style.display = 'none';

      document.getElementById("back").style.display = 'block';
      document.getElementById("back2").style.display = 'none';
      document.getElementById("back3").style.display = 'none';
      document.getElementById("back4").style.display = 'none';
      document.getElementById("back5").style.display = 'none';
      document.getElementById("back6").style.display = 'none';
      document.getElementById("back7").style.display = 'none';
      document.getElementById("back8").style.display = 'none';
      document.getElementById("back9").style.display = 'none';
      document.getElementById("back10").style.display = 'none';
      document.getElementById("back11").style.display = 'none';
      document.getElementById("back12").style.display = 'none';
      document.getElementById("back13").style.display = 'none';
      document.getElementById("back14").style.display = 'none';

      document.getElementById("next2").style.display = 'none';
      document.getElementById("next3").style.display = 'block';
      document.getElementById("next4").style.display = 'none';
      document.getElementById("next5").style.display = 'none';
      document.getElementById("next6").style.display = 'none';
      document.getElementById("next7").style.display = 'none';
      document.getElementById("next8").style.display = 'none';
      document.getElementById("next9").style.display = 'none';
      document.getElementById("next10").style.display = 'none';
      document.getElementById("next11").style.display = 'none';
      document.getElementById("next12").style.display = 'none';
      document.getElementById("next13").style.display = 'none';
      document.getElementById("next14").style.display = 'none';
      document.getElementById("next15").style.display = 'none';

      document.getElementById("submit").style.display = 'none';
      p_kontainer.innerHTML = "| Halaman 2";
  }
  document.getElementById("back").onclick = function() {myFunction28()};
  var p_kontainer = document.getElementById('bagian');
  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction28() {
    document.getElementById("1770Ssatu").style.display = 'block';
    document.getElementById("1770Sdua").style.display = 'none';
    document.getElementById("1770Stiga").style.display = 'none';
    document.getElementById("1770Sempat").style.display = 'none';
    document.getElementById("1770Slima").style.display = 'none';
    document.getElementById("1770Senam").style.display = 'none';
    document.getElementById("1770Stujuh").style.display = 'none';
    document.getElementById("1770Sdelapan").style.display = 'none';
    document.getElementById("1770Ssembilan").style.display = 'none';
    document.getElementById("1770Ssepuluh").style.display = 'none';
    document.getElementById("1770Ssebelas").style.display = 'none';
    document.getElementById("1770Sduabelas").style.display = 'none';
    document.getElementById("1770Stigabelas").style.display = 'none';
    document.getElementById("1770Sempatbelas").style.display = 'none';
    document.getElementById("1770Slimabelas").style.display = 'none';

    document.getElementById("back").style.display = 'none';
    document.getElementById("back2").style.display = 'none';
    document.getElementById("back3").style.display = 'none';
    document.getElementById("back4").style.display = 'none';
    document.getElementById("back5").style.display = 'none';
    document.getElementById("back6").style.display = 'none';
    document.getElementById("back7").style.display = 'none';
    document.getElementById("back8").style.display = 'none';
    document.getElementById("back9").style.display = 'none';
    document.getElementById("back10").style.display = 'none';
    document.getElementById("back11").style.display = 'none';
    document.getElementById("back12").style.display = 'none';
    document.getElementById("back13").style.display = 'none';
    document.getElementById("back14").style.display = 'none';

    document.getElementById("next2").style.display = 'block';
    document.getElementById("next3").style.display = 'none';
    document.getElementById("next4").style.display = 'none';
    document.getElementById("next5").style.display = 'none';
    document.getElementById("next6").style.display = 'none';
    document.getElementById("next7").style.display = 'none';
    document.getElementById("next8").style.display = 'none';
    document.getElementById("next9").style.display = 'none';
    document.getElementById("next10").style.display = 'none';
    document.getElementById("next11").style.display = 'none';
    document.getElementById("next12").style.display = 'none';
    document.getElementById("next13").style.display = 'none';
    document.getElementById("next14").style.display = 'none';
    document.getElementById("next15").style.display = 'none';

    document.getElementById("submit").style.display = 'none';
    p_kontainer.innerHTML = "| Halaman 1";
}
</script>



</body>

</html>
<!-- end document-->