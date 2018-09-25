<?php
include 'connect.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
//$error = '';
if (isset($_POST['login'])) {
    if (empty($_POST['passwords']) && empty($_POST['username'])) {
		header("location:index.php?login=empty"); //Redirecting to the login page
    } else {
        $pass = $_POST['Passwords'];
        $user = $_POST['username'];
        $user = stripslashes($user);
        $pass = stripslashes($pass);
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $pass = mysqli_real_escape_string($conn, $_POST['Passwords']);
        //select the db 
//        include 'session.php';
        session_start();
        $query = mysqli_query($conn, "select username,Passwords from register where username='$user'AND Passwords='$pass'");
        $row = mysqli_fetch_assoc($query);
        if ($row > 0) {
         $_SESSION['username']=$user; //initializing session
            header("location:Home.php?login=success"); //Redirecting to the home page
        } else {
            header("location:index.php"); //Redirecting to the login page
			
        }
    }
    mysqli_close($conn);
}
?>