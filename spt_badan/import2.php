<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// mengaktifkan session php
session_start();


// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$jenis_formulir = $_POST['jenis_formulir'];
$thn_pajak = $_POST['thn_pajak'];
$pembetulan_ke = $_POST['pembetulan_ke'];
$status_spt = $_POST['status_spt'];
$jml = $_POST['jml'];
$catatan = $_POST['catatan'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_hasil_lapor_1771 where jns_formulir='$jenis_formulir' and tahun_pajak='$thn_pajak' and pembetulan_ke='$pembetulan_ke' and status_spt='$status_spt' and jumlah='$jml' and catatan='$catatan'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$namaku = mysqli_fetch_assoc($data);

if($cek == 1){
    $_SESSION['status'] = "import_data";
     header('location:lapor.php?hasil=berhasil');
    // header('location:index.php?hasil=berhasil');
}else{
    header('location:spt_1.php?hasil=gagal');
}
?>
