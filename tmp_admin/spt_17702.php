<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>SPT 1770 | Politeknik Negeri Batam</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">


    <link rel="stylesheet" href="test/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="test/css/raleway-font.css">
    <link rel="stylesheet" type="text/css" href="test/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css"> -->



</head>

<body class="animsition">
    <div class="page-wrapper">

    <!-- HEADER MOBILE-->
    <?php include 'header_mobile.php' ?>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <?php include 'nav_sidebar.php' ?>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <?php include 'header_sec.php' ?>
        <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- FORM SPT 1770 -->
                            <div class="page-content" >
                                <div class="wizard-v1-content">
                                    <div class="wizard-form">
                                        <form class="form-register" id="form-register" action="#" method="post">
                                            <div id="form-total">
                                                <!-- SECTION 1 -->
                                                <h2>
                                                    <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                                                    <span class="step-number">Step 1</span>
                                                    <span class="step-text">SPT Anda</span>
                                                </h2>
                                                <section>
                                                    <div class="inner">
                                                        <div class="form-row">
                                                            <div class="form-holder form-holder-2">
                                                                <label for="npwp">NPWP</label>
                                                                <input type="text" placeholder="Nomor Pokok Wajib Pajak" class="form-control" id="npwp" name="npwp" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-holder form-holder-2">
                                                                <label for="lampiran1">File SPT*</label>
                                                                <input type="file" id="file-input" name="file-input" accept=".csv, .xlsx" class="form-control-file" >
                                                                <small class="form-text text-muted"><font color="white">Pastikan File Anda .csv</font></small>
                                                                <!-- <input type="text" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"> -->
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-holder form-holder-2">
                                                                <label for="lampiran1">Lampiran 1*</label>
                                                                <input type="file" id="file-input" name="file-input" accept=".pdf" class="form-control-file" >
                                                                <small class="form-text text-muted"><font color="white">Pastikan File Anda .csv</font></small>
                                                                <!-- <input type="text" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"> -->
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-holder form-holder-2">
                                                                <label for="lampiran1">Lampiran 2</label>
                                                                <input type="file" id="file-input" name="file-input" accept=".pdf" class="form-control-file">
                                                                <small class="form-text text-muted"><font color="white">Pastikan File Anda .csv</font></small>
                                                                <!-- <input type="text" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"> -->
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-holder form-holder-2">
                                                                <label for="lampiran1">Lampiran 3</label>
                                                                <input type="file" id="file-input" name="file-input" accept=".pdf" class="form-control-file">
                                                                <small class="form-text text-muted"><font color="white">Pastikan File Anda .csv</font></small>
                                                                <!-- <input type="text" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"> -->
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-holder form-holder-2">
                                                                <label for="lampiran1">Lampiran 4</label>
                                                                <input type="file" id="file-input" name="file-input" accept=".pdf" class="form-control-file">
                                                                <small class="form-text text-muted"><font color="white">Pastikan File Anda .csv</font></small>
                                                                <!-- <input type="text" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"> -->
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-row">
                                                            <div class="form-holder">
                                                                <label for="password">Password*</label>
                                                                <input type="password" placeholder="Password" class="form-control" id="password" name="password" required >
                                                            </div>
                                                            <div class="form-holder">
                                                                <label for="confirm_password">Confirm Password*</label>
                                                                <input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" name="confirm_password" required>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </section>
                                                <!-- SECTION 2 -->
                                                <h2>
                                                    <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                                                    <span class="step-number">Step 2</span>
                                                    <span class="step-text">Payment Infomation</span>
                                                </h2>
                                                <section>
                                                    <div class="inner">
                                                        <div class="form-row">
                                                            <div class="form-holder form-holder-2">
                                                                <label for="card-type">Card Type</label>
                                                                <select name="card-type" id="card-type" class="form-control">
                                                                    <option value="" disabled selected>Select Credit Card Type</option>
                                                                    <option value="Business Credit Cards">Business Credit Cards</option>
                                                                    <option value="Limited Purpose Cards">Limited Purpose Cards</option>
                                                                    <option value="Prepaid Cards">Prepaid Cards</option>
                                                                    <option value="Charge Cards">Charge Cards</option>
                                                                    <option value="Student Credit Cards">Student Credit Cards</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-holder form-holder-3">
                                                                <label for="card-number">Card Number</label>
                                                                <input type="text" name="card-number" class="card-number" id="card-number" placeholder="ex: 489050625008xxxx">
                                                            </div>
                                                            <div class="form-holder">
                                                                <label for="cvc">CVC</label>
                                                                <input type="text" name="cvc" class="cvc" id="cvc" placeholder="xxx">
                                                            </div>
                                                        </div>
                                                        <div class="form-row form-row-2">
                                                            <div class="form-holder">
                                                                <label for="month">Expiry Month</label>
                                                                <select name="month" id="month" class="form-control">
                                                                    <option value="" disabled selected>Expiry Month</option>
                                                                    <option value="January">January</option>
                                                                    <option value="February">February</option>
                                                                    <option value="March">March</option>
                                                                    <option value="February">February</option>
                                                                    <option value="April">April</option>
                                                                    <option value="May">May</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-holder">
                                                                <label for="year">Expiry Year</label>
                                                                <select name="year" id="year" class="form-control">
                                                                    <option value="" disabled selected>Expiry Year</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- SECTION 3 -->
                                                <h2>
                                                    <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                                                    <span class="step-number">Step 3</span>
                                                    <span class="step-text">Confirm Your Details</span>
                                                </h2>
                                                <section>
                                                    <div class="inner">
                                                        <h3>Comfirm Details</h3>
                                                        <div class="form-row table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr class="space-row">
                                                                        <th>Username:</th>
                                                                        <td id="username-val"></td>
                                                                    </tr>
                                                                    <tr class="space-row">
                                                                        <th>Email Address:</th>
                                                                        <td id="email-val"></td>
                                                                    </tr>
                                                                    <tr class="space-row">
                                                                        <th>Card Type:</th>
                                                                        <td id="card-type-val"></td>
                                                                    </tr>
                                                                    <tr class="space-row">
                                                                        <th>Card Number:</th>
                                                                        <td id="card-number-val"></td>
                                                                    </tr>
                                                                    <tr class="space-row">
                                                                        <th>CVC:</th>
                                                                        <td id="cvc-val"></td>
                                                                    </tr>
                                                                    <tr class="space-row">
                                                                        <th>Expiry Month:</th>
                                                                        <td id="month-val"></td>
                                                                    </tr>
                                                                    <tr class="space-row">
                                                                        <th>Expiry Year:</th>
                                                                        <td id="year-val"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <script src="test/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="test/js/jquery.steps.js"></script>
    <script src="test/js/main.js"></script>

</body>

</html>
<!-- end document-->
