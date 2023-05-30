<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Registrasi</h2>
                    <p class="text-center">Ini cepat dan mudah.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="Username" placeholder="Nama Lengkap" required value="<?php echo $Username ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="Email" placeholder="Masukkan Email" required value="<?php echo $Email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="NPWP" placeholder="Masukkan NPWP " required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="Password" placeholder="Masukkan Password" required>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Konfirmasi Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Daftar">
                    </div>
                    <div class="link login-link text-center">Sudah Punya Akun? <a href="index.php">Masuk Sekarang </a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>