<?php
//$conn = mysqli_connect('localhost', 'root','root','musembi'); // Establishing Connection with Server
$servername="localhost";
$username="root";
$password="root";
$dbname="musembi";
//create db connection 
$conn= mysqli_connect($servername, $username, $password, $dbname);
//Check db connection
if($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);
}
?>