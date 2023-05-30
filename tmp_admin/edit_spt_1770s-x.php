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

    <?php include 'nav_sidebar_mobile.php';?>

    <?php include 'nav_sidebar.php';?>

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <?php include 'header_sec.php';?>

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12" style="padding-left: 20%; padding-right: 20%">
                            <!-- FORM SPT 1771 -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>SPT 1770 S</strong> | Edit
                                </div>
                                <div class="card-body card-block">
                                    <form action="proses_edit_1770s.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <?php 
                                        include '../koneksi.php';
                                        $id = $_GET['id'];
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
                                                        <input type="text" id="npwp" name="npwp" value="<?php echo $row['id_spt_1770s'] ?>" class="form-control">
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
                                                            <option value="Pasal 26">Pasal 26</option>
                                                            <option value="DTP" <?php if ($row['jenis_pajak'] == "DTP"){ echo "selected";} ?>>DTP</option>
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
                                                        <input type="text" id="npwp_pemotong" name="npwp_pemotong" value="<?php echo $row['npwp_pemotong'] ?>" class="form-control" style="text-align: right;">
                                                        <!-- <small class="form-text text-muted">Silahkan Pengurangan</small> -->
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Nama Pemotong/Pemungut Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="nama_pemotong" name="nama_pemotong" value="<?php echo $row['nama_pemotong'] ?>" class="form-control" placeholder="Nama Pemotong/Pemungut Pajak" style="text-align: right;">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Nomor Bukti Pemotong/Pemungutan</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="nomor_bukti" name="nomor_bukti" value="<?php echo $row['nomor_bukti'] ?>" class="form-control" style="text-align: right;">
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
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="basic-addon1">Rp</span>
                                                            <input type="text" id="jumlah_pph" name="jumlah_pph" value="<?php echo $row['jumlah_pph'] ?>" class="uang form-control" style="text-align: right;">
                                                            <!-- <small class="form-text text-muted">Silahkan Isi Pajak Penghasilan Dipotong</small> -->
                                                        </div>
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
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="basic-addon1">Rp</span>
                                                            <input type="text" id="p_neto_dlm_negeri" name="p_neto_dlm_negeri" value="<?php echo $row['p_neto_dlm_negeri'] ?>" class="uang form-control" style="text-align: right;">
                                                        </div>
                                                        <!-- <small class="form-text text-muted">Silahkan Isi Jumlah Pajak</small> -->
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- Selesai Halaman 3 -->
                                        <?php } ?>
                                        

                                        <!-- end 1771satu -->

                                        <!-- start 1771dua -->
                                        <div id="1771dua" style="display: none">
                                            <div class="progressbar-wrapper">
                                                <ul class="progressbar" >
                                                    <li>Step 1</li>
                                                    <li class="active">Step 2</li>
                                                </ul>
                                            </div>
                                            <!-- end -->
                                            <br><br><br><br>
                                            <?php 
                                            include '../koneksi.php';
                                            $id = $_GET['id'];
                                            $data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1771 where id='$id'");
                                            while($row = mysqli_fetch_array($data)){
                                                ?>
                                                <div class="row form-group">
                                                    <div class="col col-md-4">
                                                        <label for="text-input" class=" form-control-label">Jenis Formulir</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="jns_formulir" name="jns_formulir" placeholder="Jenis SPT Wajib Pajak" class="form-control" value="<?php echo $row['jns_formulir'];?>">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-4">
                                                        <label for="file-input" class=" form-control-label">Tahun Pajak</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="tahun_pajak" name="tahun_pajak" placeholder="yyyy" class="form-control" value="<?php echo $row['tahun_pajak'];?>">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-4">
                                                        <label for="file-input" class=" form-control-label">Pembetulan Ke</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="number" id="pembetulan_ke" name="pembetulan_ke" placeholder="Silahkan Isi Dengan Angka" value="0" min="0" class="form-control" value="<?php echo $row['pembetulan_ke'];?>">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4">
                                                        <label for="file-input" class=" form-control-label">Status SPT</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="status_spt" name="status_spt" placeholder="Status SPT Wajib Pajak" class="form-control" value="<?php echo $row['status_spt'];?>">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4">
                                                        <label for="file-input" class=" form-control-label">Jumlah</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah SPT Wajib Pajak" class="form-control" value="<?php echo $row['jumlah'];?>">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4">
                                                        <label for="file-input" class=" form-control-label">Catatan</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="catatan" name="catatan" placeholder="Catatan Untuk Wajib Pajak" class="form-control" value="<?php echo $row['catatan'];?>">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
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
                        <!-- END FORM SPT 1771 -->  
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
<script txt="text/javascript">
    $(document).ready(function(){
        // format mata uang
        $( '.uang' ).mask('000.000.000.000', {reverse: true});

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
