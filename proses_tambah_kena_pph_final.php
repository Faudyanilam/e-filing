<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

	// membuat variabel untuk menampung data dari modal
  $sumber_penghasilan  = $_POST['sumber_penghasilan'];
  $DPP     = $_POST['DPP'];
  $PPh_terutang    = $_POST['PPh_terutang'];

                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO kena_pph_final (sumber_penghasilan, DPP, PPh_terutang) VALUES ('$sumber_penghasilan', '$DPP', '$PPh_terutang')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='halaman_7.php';</script>";
                  }
