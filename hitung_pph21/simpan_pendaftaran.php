<?php 
session_start();
require "koneksi.php";
$Username = "";
$Email = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $Username = mysqli_real_escape_string($con, $_POST['username']);
    $Email = mysqli_real_escape_string($con, $_POST['email']);
    $Password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($Password !== $cpassword){
        $errors['password'] = "Konfirmasi kata sandi tidak cocok!";
    }
    $Email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($con, $Email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email yang Anda masukkan sudah ada!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $kode_efin = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO user (username, email, password, kode_efin, status)
                        values('$username', '$email', '$encpass', '$kode_efin', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Kode Verifikasi Email";
            $message = "Kode Efin verifikasi Anda adalah $Kode_Efin";
            $sender = "From: rosaulinatua@gmail.com";
            if(mail($Email, $subject, $message, $sender)){
                $info = "Kami telah mengirimkan verifikasi Kode Efin ke email Anda- $Email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
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
                $errors['otp-error'] = "Gagal saat memperbarui Kode Efin!";
            }
        }else{
            $errors['otp-error'] = "Anda telah memasukkan Kode Efin yang salah!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $Email = mysqli_real_escape_string($con, $_POST['email']);
        $Password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM user WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($Password, $fetch_pass)){
                $_SESSION['email'] = $Email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $Email;
                  $_SESSION['password'] = $Password;
                    header('location: beranda.php');
                }else{
                    $info = "Sepertinya Anda belum memverifikasi email Anda - $Email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Email atau sandi salah!";
            }
        }else{
            $errors['email'] = "Sepertinya Anda belum menjadi anggota! Klik tautan di bawah untuk mendaftar.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM user WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $kode_efin = rand(999999, 111111);
            $insert_Kode_Efin = "UPDATE user SET kode_efin = $kode_efin WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_kode_efin);
            if($run_query){
                $subject = "Kode Reset Kata Sandi";
                $message = "Reset kata sandi Anda Kode Efin adalah $Kode_Efin";
                $sender = "From: rosaulinatua@gmail.com";
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
        $check_Kode_Efin = "SELECT * FROM user WHERE kode_efin = $otp_kode_efin";
        $Kode_Efin_res = mysqli_query($con, $check_Kode_Efin);
        if(mysqli_num_rows($Kode_Efin_res) > 0){
            $fetch_data = mysqli_fetch_assoc($Kode_Efin_res);
            $Email = $fetch_data['email'];
            $_SESSION['email'] = $Email;
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
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($Password !== $cpassword){
            $errors['password'] = "Konfirmasi Kata Sandi tidak cocok!";
        }else{
            $kode_efin = 0;
            $eSmail = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($Password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE user SET kode_efin = $kode_efin, password = '$encpass' WHERE email = '$email'";
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
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: index.php');
    }
?>