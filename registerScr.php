<?php
if(isset($_POST['register'])){
	include('connection.php');
	
	$fn = $_POST['fn'];
	$on = $_POST['ons'];
	$unr = $_POST['un'];
	$phn = $_POST['phone'];
	$pwd = MD5(MD5($_POST['pwd']));
	
	//check if username exists
$checksql = "SELECT UserName FROM user WHERE UserName='".$unr."'";
$quryres = mysqli_query($conn, $checksql);
$count = mysqli_num_rows($quryres);		
	if($count>0){
		echo"<div style='margin:auto;padding:2px;background:#dd7388;font-family:Segoe UI;border-radius:2px;color:#660606;'>
		<strong>Registration failed!</strong> Username <font style='color:black;'>".$unr."</font> already exists.Choose another one and try again.
		</div>";		
	}
	
	
else{
			
$sql = "INSERT INTO user (UserName,FirstName,OtherNames,PhoneNum,Password)
        VALUES('".$unr."','".$fn."','".$on."','".$phn."','".$pwd."')";


$qury = mysqli_query($conn, $sql);

if(!$qury){
	echo"<div style='margin:auto;padding:2px;background:#dd7388;font-family:Segoe UI;border-radius:2px;color:#660606;'>
		<strong>Registration failed!</strong>".mysqli_error($conn)."</div>";
}
   else{
	 echo"<div style='margin:auto;padding:2px;background:#61dd37;font-family:Segoe UI;border-radius:2px;color:#144404;'>
		<strong>Success!</strong> You have successfully registered ".$unr.".</div>";
   }
	   
	 }
}

?>