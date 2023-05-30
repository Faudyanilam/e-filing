<?php

define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'perhitunganpajak');
$con = mysqli_connect('localhost','root','','perhitunganpajak');
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>