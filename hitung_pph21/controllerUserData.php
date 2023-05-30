<?php 
session_start();
require "koneksi.php";
$Email = "";
$Username = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $Username = mysqli_real_escape_string($con, $_POST['Username']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $kode = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($Password !== $cpassword){
        $errors['Password'] = "Konfirmasi kata sandi tidak cocok!";
    }
    $Email_check = "SELECT * FROM user WHERE username = '$Username'";
    $res = mysqli_query($con, $Email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['Email'] = "Email yang Anda masukkan sudah ada!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($Password, PASSWORD_BCRYPT);
        $Kode_Efin = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO user ( username,kode, email, password, kode_efin)
                        values('$username', '$email','$kode', '$encpass', '$kode_efin')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Kode Verifikasi Email";
            $message = "Kode verifikasi Anda adalah $Kode_Efin";
            $sender = "From: pph21education@gmail.com";
            if(mail($Email, $subject, $message, $sender)){
                $info = "Kami telah mengirimkan verifikasi Kode Verifikasi ke email Anda- $Email";
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
        $check_Kode_Efin = "SELECT * FROM user WHERE Kode_Efin = $otp_Kode_Efin";
        $Kode_Efin_res = mysqli_query($con, $check_Kode_Efin);
        if(mysqli_num_rows($Kode_Efin_res) > 0){
            $fetch_data = mysqli_fetch_assoc($Kode_Efin_res);
            $fetch_Kode_Efin = $fetch_data['Kode_Efin'];
            $Email = $fetch_data['Email'];
            $Kode_Efin = 0;
            $status = 'verified';
            $update_otp = "UPDATE user SET Kode_Efin = $Kode_Efin, status = '$status' WHERE Kode_Efin = $fetch_Kode_Efin";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['Username'] = $Username;
                $_SESSION['Email'] = $Email;
                header('location: beranda.php');
                exit();
            }else{
                $errors['otp-error'] = "Gagal saat memperbarui Kode Verifikasi !";
            }
        }else{
            $errors['otp-error'] = "Anda telah memasukkan Kode Verifikasi  yang salah!";
        }
    }

    

    //if user click login button
    if(isset($_POST['login'])){
        $NPWP = mysqli_real_escape_string($con, $_POST['NPWP']);
        $Email = mysqli_real_escape_string($con, $_POST['Email']);
        $Password = mysqli_real_escape_string($con, $_POST['Password']);
        $check_email = "SELECT * FROM user WHERE Email = '$Email'";
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
        $check_email = "SELECT * FROM user WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $Kode_Efin = rand(999999, 111111);
            $insert_Kode_Efin = "UPDATE user SET kode_efin = $Kode_Efin WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_Kode_Efin);
            if($run_query){
                $subject = "Kode Reset Kata Sandi";
                $message = "Reset kata sandi Anda Kode Verifikasi adalah $Kode_Efin";
                $sender = "From: pph21education@gmail.com";
                if(mail($Email, $subject, $message, $sender)){
                    $info = "Kami telah mengirimkan otp reset kata sandi ke Email Anda - $Email";
                    $_SESSION['info'] = $info;
                    $_SESSION['Email'] = $Email;
                    header('location: reset-kode_efin.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Gagal saat mengirim Kode Verifikasi!";
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
        $check_Kode_Efin = "SELECT * FROM user WHERE Kode_Efin = $otp_Kode_Efin";
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
            $errors['otp-error'] = "Anda telah memasukkan Kode Verifikasi yang salah!";
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
            $update_pass = "UPDATE user SET Kode_Efin = $Kode_Efin, Password = '$encpass' WHERE Email = '$Email'";
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

    if(isset($_POST['simpan'])){
        $npwp_user = mysqli_real_escape_string($con, $_POST['npwp']);
        $nama = mysqli_real_escape_string($con, $_POST['nama']);
        $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
        $telp = mysqli_real_escape_string($con, $_POST['telp']);
        $email_company = mysqli_real_escape_string($con, $_POST['email_company']);
        $npwp_ttd = mysqli_real_escape_string($con, $_POST['npwp_ttd']);
        $nama_ttd = mysqli_real_escape_string($con, $_POST['nama_ttd']);
        $npwp_kuasa = mysqli_real_escape_string($con, $_POST['npwp_kuasa']);
        $nama_kuasa = mysqli_real_escape_string($con, $_POST['nama_kuasa']);
        $insert_data = "INSERT INTO isi_profil (NPWP, nama, alamat, telp, email_company, npwp_ttd, nama_ttd, npwp_kuasa, nama_kuasa) VALUES ('$NPWP','$nama','$alamat', '$telp', '$email_company', '$npwp_ttd', '$nama_ttd', '$npwp_kuasa', '$nama_kuasa')";
        $hasil = mysqli_query($con, $insert_data);
        
        header("location:beranda.php");
        }

?>