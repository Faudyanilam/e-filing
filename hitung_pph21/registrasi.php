<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" type="image/png" href="assets/img/icon.png" /> 
        <title>Halaman Registrasi</title>
         <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <h2 class="text-center"><font color="white">Create Your Account</font></h2>
          <form action="proses_signup.php" method="POST" >
            <div class="form-group">
              <input type="text" name="username"  class="form-control"  placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="email" name="email"  class="form-control"  placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" name="password"  class="form-control"  placeholder="Password" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center">DAFTAR</button>
            </div>
          </form>
          <p style="text-align: center">Already hava an account ?<a href="login.php"> Login</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>
</html>