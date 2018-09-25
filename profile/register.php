<?php
include 'connect.php';
$db_select = mysqli_select_db($conn,'musembi');
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$Email=$_POST['email'];
$password=$_POST['password'];
if(empty($username) || empty($password) || empty($Email)){
	header("location:new_user.php?register=empty");
	exit();
	}
	else{
		//check if characters are valid
		if(!preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $password)){
	header("location:index.php?register=char");
	//exit();
	}
	else{
		//check email validity
		if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
			header("location:index.php?register=email");
			//exit();
		}
else{
	header("location:index.php?register=success");
}
}
$sql="insert into register(username,Email,passwords)VALUES('$username','$Email','$password')";
//$result= mysqli_query($conn,$sql);

if($conn->query($sql)===TRUE)
{
    echo 'Success';
 }
 else
 {
     echo "Error:" .$sql . "<br>" .$conn->error;
}
}
}
$conn->close();
?>