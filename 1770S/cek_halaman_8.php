@<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
include '../koneksi.php';

    // memproses data
$kode_harta = $_POST['kode_harta'];
$nama_harta = $_POST['nama_harta'];
$tahun_perolehan = $_POST['tahun_perolehan'];
$harga_perolehan = $_POST['harga_perolehan'];
$keterangan = $_POST['keterangan'];

$query = "select * from halaman8 where kode_harta = '$kode_harta' and nama_harta = '$nama_harta' and tahun_perolehan ='$tahun_perolehan' and harga_perolehan = '$harga_perolehan' and keterangan = '$keterangan'";

$data = mysqli_query($koneksi, $query);
$cek = mysqli_num_rows($data);

echo $kode_harta . " " . $nama_harta . " " . $tahun_perolehan . " " . $harga_perolehan. " " . $keterangan . $cek;

if($cek > 0){
    $query = "update halaman8 set status='Telah Diverifikasi' where kode_harta = '$kode_harta' and nama_harta = '$nama_harta' and tahun_perolehan ='$tahun_perolehan' and harga_perolehan = '$harga_perolehan' and keterangan = '$keterangan'";

    mysqli_query($koneksi, $query);
    
    header("location:halaman8-xxx.php?hasil=berhasil");
    // header('location:index.php?hasil=berhasil');
}else{
    header('location:halaman8-xxx.php?hasil=salah');
}


    //prosen pengambilan data di tabel

    // $query = mysqli_query($koneksi, "select * from halaman8 where kode_harta ='".$kode_harta."' and nama_harta ='".$nama_harta."' and tahun_perolehan ='".$tahun_perolehan."' and harga_perolehan ='".$harga_perolehan."' and keterangan='".$keterangan."'");

    // $q = mysqli_query($koneksi, "select * from ")

    // if(mysqli_num_rows($query) == 1){                               
        // echo "Berhasi;";
        // echo "<script>alert('Berhasil');window.location='halaman8-xxx.php'</script>";
        // $res = mysqli_fetch_assoc($query);

        // if($res['kode_harta'] == '011'){
        //     echo "MANTAP!!";
        //     // header("location: admin/index.php");
        // }else if ($res['nama_harta'] == 'mobil'){
        //     echo "WOW!";
        // }else if ($res['tahun_perolehan'] == '2020'){
        //     echo "OHH!";
        // }else if ($res['harga_perolehan'] == 'Rp. 800.000.000'){
        //     echo "BUSET!";
        // }else if ($res['keterangan'] == 'kredit'){
        //     echo "YAELAH!";
        // }else{
        //     //header("location: halaman8-xxx.php");
        // }
//}else{
        // echo "GABISA DONG"; 
        // header("location: halaman8-xxx.php");
    //     echo "<script>alert('Data yang anda masukkan salah');window.location='halaman8-xxx.php'</script>";
    // }



