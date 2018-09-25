<?php
include 'connect.php';
$login_user= mysqli_select_db($conn,$dbname); // selecting db
session_start(); //starting session
$user_check=$_SESSION['login_user'];
$ses_sql= mysqli_query($conn, "select username from register where username='$user_check'");
$row= mysqli_fetch_assoc($ses_sql);
$login_session=$row['username'];
if(isset($login_session))
{
 header("location:login.php");//redirecting to login page
}
 else {
//    mysqli_close($conn);
     echo '';
}
?>