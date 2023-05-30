<?php session_start();
error_reporting(0);
include("koneksi.php");
if(isset($_POST['submit'])) {
  $_SESSION['submit']='';
}

if(isset($_POST['change']))
{
 $username=$_POST['username'];
 $password=md5($_POST['password']);
 $query=mysqli_query($con,"SELECT * FROM user WHERE username='$username'");
 $num=mysqli_fetch_array($query);
 if($num>0)
 {
  mysqli_query($con,"update user set password='$password' WHERE username='$username'");
  $msg="Password Changed Successfully";
  header("location:login.php");
}
else

{
  $errmsg="Invalid username";
}
}
?>