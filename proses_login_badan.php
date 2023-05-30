<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
// fungsi cek null dan kosong
function IsNullOrEmptyString($str){
    return ($str === null || trim($str) === '');
}

// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$npwp = $_POST['npwp'];
$password = $_POST['password'];

// menyeleksi data admin dengan id_daftar_npwp dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_daftarnpwp where id_daftar_npwp='$npwp' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
//memanggil data dari $data ke variabel $row
$row = mysqli_fetch_assoc($data);

// mengambil data untuk mengisi baris 36
$id_id = $row['id_id'];
$email = $row['email'];
$nama_ktp = $row['nama_ktp'];


// jika benar ada npwp dan pw yang cocok maka jalankan 
if($cek == 1){

	// untuk mengecek tipe akun basc/pro/trial, awal dan akhir berlangganan.
	if($row['id_paket'] == null){
		if($row['jenis_wp'] == "Badan"){ //mengecek jenis wajib pajak apakah Badan atau Orang Pribadi
			// HARI INI
			$hari_ini_date = new DateTime(); 
			$hari_ini_string = $hari_ini_date->format('Y-m-d');
			date_add($hari_ini_date,date_interval_create_from_date_string("14 days"));
			$hari_ini_akhir = $hari_ini_date->format('Y-m-d');

			mysqli_query($koneksi, "INSERT INTO tb_pelanggan(email,nama_ktp,id_daftar_npwp, akun, awal, akhir) 
			VALUES('$email','$nama_ktp','$npwp','trial','$hari_ini_string','$hari_ini_akhir')");


			// mengambil id_paket dari tb_pelanggan
			$paket = mysqli_query($koneksi, "select * from tb_pelanggan where id_daftar_npwp='$npwp' and email='$email'");
			$row_paket = mysqli_fetch_assoc($paket);
			$id_paket = $row_paket['id'];
			// memasukkan idpaket kedalam tb_daftarnpwp
			mysqli_query($koneksi,"update tb_daftarnpwp set id_paket='$id_paket' where id_id='$id_id'");
			$_SESSION['npwp'] = $npwp;
			$_SESSION['nama_ktp'] = $row['nama_ktp'];//memasukkan data yang telah ditampung ke session 
			$_SESSION['email'] = $row['email'];
			$_SESSION['status'] = "login_badan";
			$_SESSION['id_paket'] = $id_paket;
		
			header('location:spt_badan/lapor.php?hasil1=berhasil');
		}else{
			header('location:login_badan.php?hasil1=gagal2');
			session_destroy();
		}
		

	}else if ($row['id_paket'] == ''){
		if($row['jenis_wp'] == "Badan"){ //mengecek jenis wajib pajak apakah Badan atau Orang Pribadi
			// HARI INI
			$hari_ini_date = new DateTime(); 
			$hari_ini_string = $hari_ini_date->format('Y-m-d');
			date_add($hari_ini_date,date_interval_create_from_date_string("14 days"));
			$hari_ini_akhir = $hari_ini_date->format('Y-m-d');

			mysqli_query($koneksi, "INSERT INTO tb_pelanggan(email,nama_ktp,id_daftar_npwp, akun, awal, akhir) 
			VALUES('$email','$nama_ktp','$npwp','trial','$hari_ini_string','$hari_ini_akhir')");


			// mengambil id_paket dari tb_pelanggan
			$paket = mysqli_query($koneksi, "select * from tb_pelanggan where id_daftar_npwp='$npwp' and email='$email'");
			$row_paket = mysqli_fetch_assoc($paket);
			$id_paket = $row_paket['id'];
			// memasukkan idpaket kedalam tb_daftarnpwp
			mysqli_query($koneksi,"update tb_daftarnpwp set id_paket='$id_paket' where id_id='$id_id'");

			$_SESSION['npwp'] = $npwp;
			$_SESSION['nama_ktp'] = $row['nama_ktp'];//memasukkan data yang telah ditampung ke session 
			$_SESSION['email'] = $row['email'];
			$_SESSION['status'] = "login_badan";
			$_SESSION['id_paket'] = $id_paket;

			header('location:spt_badan/lapor.php?hasil1=berhasil');
		}else{
			header('location:login_badan.php?hasil1=gagal2');
			session_destroy();
		}
		
		
	}else if ($row['id_paket'] == '0'){
		if($row['jenis_wp'] == "Badan"){ //mengecek jenis wajib pajak apakah Badan atau Orang Pribadi
			// HARI INI
			$hari_ini_date = new DateTime(); 
			$hari_ini_string = $hari_ini_date->format('Y-m-d');
			date_add($hari_ini_date,date_interval_create_from_date_string("14 days"));
			$hari_ini_akhir = $hari_ini_date->format('Y-m-d');

			mysqli_query($koneksi, "INSERT INTO tb_pelanggan(email,nama_ktp,id_daftar_npwp, akun, awal, akhir) 
			VALUES('$email','$nama_ktp','$npwp','trial','$hari_ini_string','$hari_ini_akhir')");


			// mengambil id_paket dari tb_pelanggan
			$paket = mysqli_query($koneksi, "select * from tb_pelanggan where id_daftar_npwp='$npwp' and email='$email'");
			$row_paket = mysqli_fetch_assoc($paket);
			$id_paket = $row_paket['id'];
			// memasukkan idpaket kedalam tb_daftarnpwp
			mysqli_query($koneksi,"update tb_daftarnpwp set id_paket='$id_paket' where id_id='$id_id'");

			$_SESSION['npwp'] = $npwp;
			$_SESSION['nama_ktp'] = $row['nama_ktp'];//memasukkan data yang telah ditampung ke session 
			$_SESSION['email'] = $row['email'];
			$_SESSION['status'] = "login_badan";
			$_SESSION['id_paket'] = $id_paket;

			header('location:spt_badan/lapor.php?hasil1=berhasil');
		}else{
			header('location:login_badan.php?hasil1=gagal2');
			session_destroy();
		}
		
		
	}
	else{
		if($row['jenis_wp'] == "Badan"){ //mengecek jenis wajib pajak apakah Badan atau Orang Pribadi
			$id_paket = $row['id_paket'];
			$data2 = mysqli_query($koneksi, "select * from tb_pelanggan where id='$id_paket'");
			$row_data2 = mysqli_fetch_assoc($data2);
			
			$hari_ini_date = new DateTime(); 
			$hari_ini_str = $hari_ini_date->format('Y-m-d');
			$akhir_str = $row_data2['akhir'];
			$akhir_date = date_create("$akhir_str");
			if($row_data2['akun'] == 'trial'){
				if($hari_ini_date >= $akhir_date){
					mysqli_query($koneksi, "update tb_pelanggan set akun='suspended' where id='$id_paket'");
				}
			}else if($row_data2['akun'] == 'basic' || $row_data2['akun'] == 'pro'){
				if($hari_ini_date >= $akhir_date){
					$hari_ini_date = new DateTime(); 
					$hari_ini_string = $hari_ini_date->format('Y-m-d');
					date_add($hari_ini_date,date_interval_create_from_date_string("14 days"));
					$hari_ini_akhir = $hari_ini_date->format('Y-m-d');
					mysqli_query($koneksi, "update tb_pelanggan set akun='trial', harga='', user='', 
					awal='$hari_ini_string', akhir='$hari_ini_akhir' where id='$id_paket'");
				}
			}
			
			$_SESSION['npwp'] = $npwp;
			$_SESSION['nama_ktp'] = $row['nama_ktp'];//memasukkan data yang telah ditampung ke session 
			$_SESSION['email'] = $row['email'];
			$_SESSION['status'] = "login_badan";
			$_SESSION['id_paket'] = $row['id_paket'];
			header('location:spt_badan/lapor.php?hasil1=berhasil');
			if($row_data2['akun'] == 'suspended'){
				header('location:login_badan.php?hasil1=suspended');
				session_destroy();
			}
		}else{
			header('location:login_badan.php?hasil1=gagal2');
			session_destroy();
		}
		
	}
	$_SESSION['jenis_wp'] = $row['jenis_wp'];
	
}else{
	header('location:login_badan.php?hasil1=gagal');
}
?>
