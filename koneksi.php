
<?php
  $host = "localhost"; 
  $user = "taxcente_bantu_pajak";
  $pass = "dA37I59DKm{g";
  $nama_db = "taxcente_db_bantu_pajak"; //nama database
  
  
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar
  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
    echo "<script>alert('Gagal koneksi ke database!')</script>";

  }else{
    
  }
?>