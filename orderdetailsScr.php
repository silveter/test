<?php






if(isset($_POST['order-submit'])){
	include('functions.php');
	
	$topic = $_POST['topic'];
	$description = $_POST['description'];
	$files = $_POST['files'];
	//$file_store="uploads/".$UserName."/".$file;
	if (!file_exists('uploads/')) {
    mkdir('uploads/', 0777, true);
}		
				
$sql = "INSERT INTO orderdetails (topic,description,files)
        VALUES('".$topic."','".$description."','".$files."')";


$qury = mysqli_query($conn, $sql);

if(!$qury){
	echo"<div style='margin:auto;padding:2px;background:#dd7388;font-family:Segoe UI;border-radius:2px;color:#660606;'>
		<strong>Upload failed!</strong>".mysqli_error($conn)."</div>";
}
   else{
	 echo"<div style='margin:auto;padding:2px;background:#61dd37;font-family:Segoe UI;border-radius:2px;color:#144404;'>
		<strong>Success!</strong> Files Uploaded </div>";
   }
	   
	 }


?>