<?php
	if(isset($_POST['login-submit'])){
			include('connection.php');

			$username = $_POST['login-username'];
			$password = MD5(MD5($_POST['login-password']));
			
			
			$login_sql = "SELECT * FROM user WHERE UserName='".$username."' AND Password='".$password."' COLLATE latin1_general_cs";
			
			$login_result = mysqli_query($db, $login_sql) or die(mysqli_error($db));
			
			$count = mysqli_num_rows($login_result);
		
		if($count == 1){
		session_start();
		$_SESSION['newuser']=$username;
		header('Location:uploadfiles.php');
		} //end of if
		
		
		else{

		echo"<div style='margin:auto;padding:2px;background:#dd7388;font-family:Segoe UI;border-radius:2px;color:#660606;'>
		<strong>Login failed!</strong> Incorrect Username or/and Password.</div>";
			
}


}



	if(isset($_POST['rec-submit'])){
			include('connection.php');
			$username = $_POST['rec-username'];
			$password = MD5(MD5($_POST['rec-password1']));
			$recphn = $_POST['rec-phone'];
			
			if(($_POST['rec-password1'])!=($_POST['rec-password2'])){
			echo"<div style='margin:auto;padding:2px;background:#dd7388;font-family:Segoe UI;border-radius:2px;color:#660606;'>
			<strong>Error!</strong>Passwords do not match.</div>";				
			}
			else{
				$sql = "SELECT * FROM user WHERE UserName='".$username."' AND PhoneNum='".$recphn."' COLLATE latin1_general_cs";
				$result = mysqli_query($db, $sql) or die(mysqli_error($db));
				$count = mysqli_num_rows($result);
				
				if($count > 0){
				$sql = "UPDATE user SET Password='".$password."' WHERE UserName='".$username."' COLLATE latin1_general_cs";
				$result = mysqli_query($db, $sql) or die(mysqli_error($db));
				
				if(!$result){
					echo"<div style='margin:auto;padding:2px;background:#dd7388;font-family:Segoe UI;border-radius:2px;color:#660606;'>
						Password recovery failed!".mysqli_error($db)."</div>";
					}
					   else{
						 echo"<div style='margin:auto;padding:2px;background:#61dd37;font-family:Segoe UI;border-radius:2px;color:#144404;'>
							<strong>Success!</strong> Password reset successfully.</div>";
					   }
			
				}
				else{
					echo"<div style='margin:auto;padding:2px;background:#dd7388;font-family:Segoe UI;border-radius:2px;color:#660606;'>
				<strong>Error!</strong>Username or Recovery phone number is incorrect.</div>";
					}
			}
		
		
		} //end of if
		
		

?>