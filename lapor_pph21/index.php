<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    
</head>
<body>
    <div class="container" >
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="index.php" method="POST" autocomplete="">
                    <h2 class="text-center">LOGIN</h2>
                    <p></p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="NPWP" placeholder="Masukkan NPWP" minlength="15" maxlength="15"required>
                    </div>  
                    <div class="form-group">
                        <input class="form-control" type="email" name="Email" placeholder="Masukkan Email" required value="<?php echo $Email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="Password" name="Password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php"> Anda Lupa Kata Sandi?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Masuk">
                    </div>
                    <div class="link login-link text-center">Atau Belum Punya NPWP <a href="signup-user.php">Daftar Sekarang</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>