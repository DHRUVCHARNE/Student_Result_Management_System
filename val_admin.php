<?php 
#predefined login & password for testing
$login_id = "demo@gmail.com";       
$login_pw = "123";

$var1 = $_POST["admin_email"];
$var2 = $_POST["admin_passwd"];

if ($var1==$login_id and $var2==$login_pw){
    session_start();
    $_SESSION['loggedinAdmin']=true;
    echo "<script>window.location.replace('Admin_login2.php')</script>";
} else {
    echo "<script>window.alert('Invalid Login or Password')</script>";
    echo "<script>window.location.replace('Admin_login.php')</script>";
}
?>