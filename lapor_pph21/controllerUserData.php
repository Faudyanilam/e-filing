<?php 
session_start();
require "connection.php";
$NPWP = "";
$Email = "";
$Username = "";
$npwp_user = "";



$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $NPWP = mysqli_real_escape_string($con, $_POST['NPWP']);
    $Username = mysqli_real_escape_string($con, $_POST['Username']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($Password !== $cpassword){
        $errors['Password'] = "Konfirmasi kata sandi tidak cocok!";
    }
    $Email_check = "SELECT * FROM akun_user WHERE NPWP = '$NPWP'";
    $res = mysqli_query($con, $Email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['Email'] = "Email yang Anda masukkan sudah ada!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($Password, PASSWORD_BCRYPT);
        $Kode_Efin = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO akun_user ( NPWP, Username, Email, Password, Kode_Efin, status)
                        values('$NPWP','$Username', '$Email', '$encpass', '$Kode_Efin', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Kode Verifikasi Email";
            $message = "Kode Efin verifikasi Anda adalah $Kode_Efin";
            $sender = "From: pph21education@gmail.com";
            if(mail($Email, $subject, $message, $sender)){
                $info = "Kami telah mengirimkan verifikasi Kode Efin ke email Anda- $Email";
                $_SESSION['info'] = $info;
                $_SESSION['Email'] = $Email;
                $_SESSION['Password'] = $Password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Gagal saat mengirim Kode Efin!";
            }
        }else{
            $errors['db-error'] = "Gagal saat memasukkan data ke dalam database!";
        }
    }

}
    //if user click verification Kode_Efin submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_Kode_Efin = mysqli_real_escape_string($con, $_POST['otp']);
        $check_Kode_Efin = "SELECT * FROM akun_user WHERE Kode_Efin = $otp_Kode_Efin";
        $Kode_Efin_res = mysqli_query($con, $check_Kode_Efin);
        if(mysqli_num_rows($Kode_Efin_res) > 0){
            $fetch_data = mysqli_fetch_assoc($Kode_Efin_res);
            $fetch_Kode_Efin = $fetch_data['Kode_Efin'];
            $Email = $fetch_data['Email'];
            $Kode_Efin = 0;
            $status = 'verified';
            $update_otp = "UPDATE akun_user SET Kode_Efin = $Kode_Efin, status = '$status' WHERE Kode_Efin = $fetch_Kode_Efin";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['Username'] = $Username;
                $_SESSION['Email'] = $Email;
                header('location: beranda.php');
                exit();
            }else{
                $errors['otp-error'] = "Gagal saat memperbarui Kode Efin!";
            }
        }else{
            $errors['otp-error'] = "Anda telah memasukkan Kode Efin yang salah!";
        }
    }

    

    //if user click login button
    if(isset($_POST['login'])){
        $NPWP = mysqli_real_escape_string($con, $_POST['NPWP']);
        $Email = mysqli_real_escape_string($con, $_POST['Email']);
        $Password = mysqli_real_escape_string($con, $_POST['Password']);
        $check_email = "SELECT * FROM akun_user WHERE Email = '$Email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['Password'];
            if(password_verify($Password, $fetch_pass)){
                $_SESSION['Email'] = $Email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['NPWP'] = $NPWP;
                  $_SESSION['Email'] = $Email;
                  $_SESSION['Password'] = $Password;
                    header('location: beranda.php');
                }else{
                    $info = "Sepertinya Anda belum memverifikasi email Anda - $Email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['Email'] = "Email atau sandi salah!";
            }
        }else{
            $errors['Email'] = "Sepertinya Anda belum menjadi anggota! Klik tautan di bawah untuk mendaftar.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $Email = mysqli_real_escape_string($con, $_POST['Email']);
        $check_email = "SELECT * FROM akun_user WHERE Email='$Email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $Kode_Efin = rand(999999, 111111);
            $insert_Kode_Efin = "UPDATE akun_user SET Kode_Efin = $Kode_Efin WHERE Email = '$Email'";
            $run_query =  mysqli_query($con, $insert_Kode_Efin);
            if($run_query){
                $subject = "Kode Reset Kata Sandi";
                $message = "Reset kata sandi Anda Kode Efin adalah $Kode_Efin";
                $sender = "From: pph21education@gmail.com";
                if(mail($Email, $subject, $message, $sender)){
                    $info = "Kami telah mengirimkan otp reset kata sandi ke Email Anda - $Email";
                    $_SESSION['info'] = $info;
                    $_SESSION['Email'] = $Email;
                    header('location: reset-Kode_Efin.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Gagal saat mengirim Kode Efin!";
                }
            }else{
                $errors['db-error'] = "Ada yang salah!";
            }
        }else{
            $errors['email'] = "Alamat email ini tidak ada!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_Kode_Efin = mysqli_real_escape_string($con, $_POST['otp']);
        $check_Kode_Efin = "SELECT * FROM akun_user WHERE Kode_Efin = $otp_Kode_Efin";
        $Kode_Efin_res = mysqli_query($con, $check_Kode_Efin);
        if(mysqli_num_rows($Kode_Efin_res) > 0){
            $fetch_data = mysqli_fetch_assoc($Kode_Efin_res);
            $Email = $fetch_data['Email'];
            $_SESSION['Email'] = $Email;
            $info = "Harap buat kata sandi baru yang tidak Anda gunakan di situs lain mana pun.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "Anda telah memasukkan Kode Efin yang salah!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $Password = mysqli_real_escape_string($con, $_POST['Password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($Password !== $cpassword){
            $errors['Password'] = "Konfirmasi Kata Sandi tidak cocok!";
        }else{
            $Kode_Efin = 0;
            $Email = $_SESSION['Email']; //getting this email using session
            $encpass = password_hash($Password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE akun_user SET Kode_Efin = $Kode_Efin, Password = '$encpass' WHERE Email = '$Email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Kata sandi Anda berubah. Sekarang Anda dapat masuk dengan kata sandi baru Anda.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Gagal mengubah kata sandi Anda!";
            }
        }
    }

    //if user SPT button
    if(isset($_POST['spt'])){
    $npwp = mysqli_real_escape_string($con, $_POST['npwp']);
    $tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);
    if(count($errors) === 0){
        $insert_data = "INSERT INTO masa_spt (tanggal,NPWP) values('$tanggal','$npwp')";
        $hasil=mysqli_query($con,$insert_data);
       
        if($hasil){
            echo "Data Berhasil Disimpan";
            }else{
            echo "Gagal Disimpan";
            }
    }
    }

        //if user SPT button
        if(isset($_POST['buka_perusahan'])){
            $NPWP = mysqli_real_escape_string($con, $_POST['NPWP']);
            if(count($errors) === 0){
                $insert_data = "INSERT INTO isi_profil (NPWP) values('$NPWP','','','','','','','','','','')";
                $hasil=mysqli_query($con,$insert_data);
                if($hasil){
                    echo "Data Berhasil Disimpan";
                    }else{
                    echo "Gagal Disimpan";
                    }
            }
            }
        //if user SPT button
        if(isset($_POST['buka_perusahan2'])){
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $assword = mysqli_real_escape_string($con, $_POST['password']);
            if(count($errors) === 0){
                $insert_data = "INSERT INTO isi_profil (username, password) values('','','','','','','','$username','$password')";
                $hasil=mysqli_query($con,$insert_data);
                if($hasil){
                    echo "Data Berhasil Disimpan";
                    }else{
                    echo "Gagal Disimpan";
                    }
            }
            }

    // if tambah masa pajak button
    if(isset($_POST['satu_masa'])){
        $id = mysqli_real_escape_string($con, $_POST['id']);
        $npwp = mysqli_real_escape_string($con, $_POST['npwp']);
        $nama = mysqli_real_escape_string($con, $_POST['nama']);
        $kode_object_pajak = mysqli_real_escape_string($con, $_POST['kode_object_pajak']);
        $jumlah_penghasilan_bruto = mysqli_real_escape_string($con, $_POST['jumlah_penghasilan_bruto']);
        $pph_dipotong = mysqli_real_escape_string($con, $_POST['pph_dipotong']);
        $kode_negara_domisili = mysqli_real_escape_string($con, $_POST['kode_negara_domisili']);
        if(count($errors) === 0){
            $insert_data = "INSERT INTO user (npwp, nama, kode_object_pajak, jumlah_penghasilan_bruto, pph_dipotong, kode_negara_domisili,id_spt)
                            VALUES ('$npwp','$nama','$kode_object_pajak','$jumlah_penghasilan_bruto','$pph_dipotong','$kode_negara_domisili','$id')";
            $hasil=mysqli_query($con,$insert_data);
            if($hasil){
                echo "Data Berhasil Disimpan";
                }else{
                echo "Gagal Disimpan";
                }
        }
        }
    // hapus data di cheklis
       if (isset($_POST['pilih'])){
        $jumlah_dipilih = count($npwp);
         
        for($x=0;$x<$jumlah_dipilih;$x++){
            mysql_query("DELETE FROM user WHERE npwp='$npwp[$x]'");
        }
    }
         
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: index.php');
    }


    //isi profil 
    if(isset($_POST['simpan'])){

        //$npwp_user= mysqli_real_escape_string($con, $_POST['npwp_user']);
        // $NPWP = "SELECT NPWP from akun_user WHERE NPWP = '$NPWP' ";
        $npwp_user= mysqli_real_escape_string($con, $_POST['npwp_user']);
       
        $nama = mysqli_real_escape_string($con, $_POST['nama']);
        $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
        $telp = mysqli_real_escape_string($con, $_POST['telp']);
        $email_company = mysqli_real_escape_string($con, $_POST['email_company']);
        $npwp_ttd = mysqli_real_escape_string($con, $_POST['npwp_ttd']);
        $nama_ttd = mysqli_real_escape_string($con, $_POST['nama_ttd']);
        $npwp_kuasa = mysqli_real_escape_string($con, $_POST['npwp_kuasa']);
        $nama_kuasa = mysqli_real_escape_string($con, $_POST['nama_kuasa']);
        $a2 = mysqli_real_escape_string($con, $_POST['a2']);
        if($a2=='a2'){
            $a2 = mysqli_real_escape_string($con, $_POST['a2']);;
        }else{
            $a2 = "tidak";
        }

        
        
        $profil = "INSERT INTO isi_profil (NPWP,nama,alamat,telp,email_company,npwp_ttd,nama_ttd,npwp_kuasa,nama_kuasa,a2) VALUES ('$npwp_user','$nama','$alamat','$telp','$email_company','$npwp_ttd','$nama_ttd','$npwp_kuasa','$nama_kuasa','$a2')";
        $hasil_profil = mysqli_query($con, $profil);
    
        if($hasil_profil){
            echo "Data Berhasil Disimpan";
            }else{
            echo "Gagal Disimpan";
            }
        
         }
    //edit profil
    if(isset($_POST['edit_profil'])){

        //$npwp_user= mysqli_real_escape_string($con, $_POST['npwp_user']);
        // $NPWP = "SELECT NPWP from akun_user WHERE NPWP = '$NPWP' ";
        $npwp_user= mysqli_real_escape_string($con, $_POST['npwp_user']);
        $nama = mysqli_real_escape_string($con, $_POST['nama']);
        $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
        $telp = mysqli_real_escape_string($con, $_POST['telp']);
        $email_company = mysqli_real_escape_string($con, $_POST['email_company']);
        $npwp_ttd = mysqli_real_escape_string($con, $_POST['npwp_ttd']);
        $nama_ttd = mysqli_real_escape_string($con, $_POST['nama_ttd']);
        $npwp_kuasa = mysqli_real_escape_string($con, $_POST['npwp_kuasa']);
        $nama_kuasa = mysqli_real_escape_string($con, $_POST['nama_kuasa']);
        
        
       
        
        if($_POST['a2']){
            $a2 = mysqli_real_escape_string($con, $_POST['a2']);;
        }else{
            $a2 = "tidak";
        }
        
        
        $profil = "UPDATE isi_profil SET nama='$nama',alamat='$alamat',telp='$telp',email_company='$email_company',npwp_ttd='$npwp_ttd',nama_ttd='$nama_ttd',npwp_kuasa='$npwp_kuasa',nama_kuasa='$nama_kuasa',a2='$a2' WHERE NPWP='$npwp_user'";
        $hasil_profil = mysqli_query($con, $profil);
    
        if($hasil_profil){
            echo "Data Berhasil Disimpan";
            }else{
            echo "Gagal Disimpan";
            }
        
         }

         if(isset($_POST['simpan_a2'])){
            
            $tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);
            $npwp = mysqli_real_escape_string($con, $_POST['npwp']);
            $nip  = mysqli_real_escape_string($con, $_POST['nip']);
            $nama  = mysqli_real_escape_string($con, $_POST['nama']);
            $alamat  = mysqli_real_escape_string($con, $_POST['alamat ']);
            $jenis_kelamin = mysqli_real_escape_string($con, $_POST['jeniskelamin']);
            $nik  = mysqli_real_escape_string($con, $_POST['nik']);
            $status_a2  = mysqli_real_escape_string($con, $_POST['status']);
            $jumlahtanggungan  = mysqli_real_escape_string($con, $_POST['jumlahtanggungan']);
            $gol  = mysqli_real_escape_string($con, $_POST['gol']);
            $namajabatan  = mysqli_real_escape_string($con, $_POST['namajabatan']);
            $kodeobjekpajak  = mysqli_real_escape_string($con, $_POST['kodeobjekpajak']);
            $jumlahgaji  = mysqli_real_escape_string($con, $_POST['jumlahgaji']);
            $jumlahbruto  = mysqli_real_escape_string($con, $_POST['jumlahbruto']);
            $jumlahpengurangan  = mysqli_real_escape_string($con, $_POST['jumlahpengurangan']);
            $jumlahpenghasilanneto  = mysqli_real_escape_string($con, $_POST['jumlahpenghasilanneto']);
            $neto_setahun  = mysqli_real_escape_string($con, $_POST['neto_setahun']);
            $ptkp  = mysqli_real_escape_string($con, $_POST['ptkp']);
            $pkpsetahun  = mysqli_real_escape_string($con, $_POST['pkpsetahun']);
            $pkppph21  = mysqli_real_escape_string($con, $_POST['pkppph21']);
            $pph21terutang  = mysqli_real_escape_string($con, $_POST['pph21terutang']);
            $gajitunjangan  = mysqli_real_escape_string($con, $_POST['23a']);
            $penghasilan_tetap = mysqli_real_escape_string($con, $_POST['23b']);
            $namainstansi = mysqli_real_escape_string($con, $_POST['namainstansi']);
            $npwppemotong = mysqli_real_escape_string($con, $_POST['npwppemotong']);
            $namapemotong = mysqli_real_escape_string($con, $_POST['namapemotong']);
            $nippemotong = mysqli_real_escape_string($con, $_POST['nippemotong']);

            $a2 = "INSERT INTO a2_laporan (`tanggal_a2`, `npwp_a2`, `nip`, `nama`, `alamat`, `jenis_kelamin`, `nik`, `status`, `jumlah_tanggungan`, `pangkat`, `nama_jabatan`, `kode_objek_pajak`, `jumlah_gaji`, `jumlah_bruto`, `jumlah_pengurangan`, `neto`, `neto_pph21`, `ptkp`, `pkp`, `pkp_pph21`, `pph21_terutang`, `gaji_tunjangan23a`, `penghasilan_tetap23b`, `nama_instansi`, `npwp_pemotong`, `nama_pemotong`, `nip_pemotong`) VALUES ('$tanggal','$npwp','$nip','$nama','$alamat','$jenis_kelamin','$nik','$status_a2','$jumlahtanggungan','$gol','$namajabatan  ','$kodeobjekpajak','$jumlahgaji','$jumlahbruto','$jumlahpengurangan ','$jumlahpenghasilanneto','$neto_setahun','$ptkp','$pkpsetahun','$pkppph21','$pph21terutang','$gajitunjangan','$namainstansi','$npwppemotong','$namapemotong','$nippemotong')";
            $hasil_a2 = mysqli_query($con, $a2);
            if($hasil_a2){
                echo "Data Berhasil Disimpan";
                }else{
                echo "Gagal Disimpan";
                }
            
                
             }
                // hapus data di masa pajak
             if (isset($_POST['pilih'])){
                $jumlah_dipilih = count($npwp);
                 
                for($x=0;$x<$jumlah_dipilih;$x++){
                    mysql_query("DELETE FROM user WHERE npwp='$npwp[$x]'");
                }
            }


 
        
?>