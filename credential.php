<?php 
	/*Update credentials production(server)*/
	define('EMAIL', 'admin@taxcenter-polibatam.id');
    define('PASS', 'Inipasswordbantupajak12379');

	$mail = new PHPMailer;

    $mail->SMTPDebug = false;
    $mail->do_debug = 0;
    

    $mail->isSMTP();
    
    $mail->Host = 'localhost';
    $mail->SMTPAuth = true;
    $mail->SMTPAutoTLS = false; 
    $mail->Port = 25; 
	$mail->Username = "admin@taxcenter-polibatam.id";   //nama-email smtp 
	$mail->Password = "Inipasswordbantupajak12379";           //password email smtp





    $mail->setFrom(EMAIL, 'Tax Center Polibatam');
    $mail->addReplyTo(EMAIL);


    /*Update credentials development(local)*/
    // define('EMAIL', 'rizkyindri69@gmail.com');
    // define('PASS', 'rizkyindri18');

    // $mail = new PHPMailer;

    // // $mail->SMTPDebug = 4;                               // Enable verbose debug output

    // $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    // $mail->SMTPAuth = true;                               // Enable SMTP authentication
    // $mail->Username = EMAIL;                 // SMTP username
    // $mail->Password = PASS;                           // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;                                    // TCP port to connect to

    // $mail->setFrom(EMAIL, 'Tax Center Polibatam');

    // $mail->addReplyTo(EMAIL);

?>