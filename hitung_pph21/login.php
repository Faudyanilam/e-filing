<!DOCTYPE HTML>
<html>
  <head>
    <link rel="icon" type="image/png" href="assets/img/icon.png" /> 
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
   
 
  </head>

  <body>
    <section class="signin-page account">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="block text-center">
              <h2 class="text-center"><font color="white">LOGIN</font></h2>
                <form action="proses_login.php" method="post">
                  <div class="form-group">
                    <input type="username" name="username" id="username" class="form-control"  placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id=" password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-main text-center" >Login</button>
                  </div>
                </form>
                <p style="text-align: center">Belum Punya Akun? Klik <a href="registrasi.php"> DAFTAR!! </a></p>
                <p style="text-align: center"><a href="forgot-password.php">Lupa Password??</a></p> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal -->
                
</body>
</html>