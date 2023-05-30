<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Admin | Politeknik Negeri Batam</title>
    <link href="tmp-admin/dist/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  
</head>
<body style="background-image:  url('img/poltek3.jpeg'); background-size:cover;">
    <?php
    include "koneksi.php";

    if (isset($_GET['hasil'])) {
        if ($_GET['hasil'] == "logout"){
            echo "<script>
            Swal.fire(
            'Logout',
            'Anda Berhasil Logout',
            'success'
        ) </script>";
    } else if($_GET['hasil'] == "gagal"){
        echo "<script>
        Swal.fire(
        ' Login Gagal',
        'NPWP atau Passworrd Salah',
        'error'
    ) </script>";
} 
}
?>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card shadow-lg border-0 rounded-lg mt-5" style="border-radius: 0.6rem">
                            <div class="card-header" style="background-color: rgb(255, 157, 49);border-radius: 10px 10px 0px 0px"><h3 class="text-center font-weight-dark my-2">Login</h3></div>
                            <div class="card-body">
                                <form action="proses-login-admin.php" method="post">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputUsername">Username</label>
                                        <input class="form-control py-4" id="inputUsername" type="text" name="username" placeholder="Masukkan Username" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Masukkan password" />
                                    </div>
                                           <!--  <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div> -->
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href=""></a>
                                                <button class="btn btn-primary" type="submit" name="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center" style="background-color: rgb(255, 157, 49)">
                                        <div class="small"><br></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Polibatam Software</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="tmp-admin/dist/js/scripts.js"></script>
    </body>
    </html>
