<?php 
	if(isset($_POST['upload-file'])){
	include('functions.php');
	
	$file_name = $_FILES['filename']['name'];
	$file_type = $_FILES['filename']['type'];
	$file_size = $_FILES['filename']['size'];
	$file_tem_loc = $_FILES['filename']['tmp_name'];
	
	$file_store="uploads/".$file_name;
	
	if (!file_exists('uploads/')) {
    mkdir('uploads/');
}

//check if same file exists
if(!file_exists("uploads/")) {
	echo"<div style='margin:auto;padding:2px;background:#61dd37;font-family:Segoe UI;border-radius:2px;color:#144404;'>
		<strong></strong> File Exists.</div>";
		
		$file_store1="uploads/copy_of_".$file_name;
		echo'<a href="uploadfiles.php?fn='.$file_name.'&nfn=copy_of_'.$file_name.'&ft='.$file_type.'&fs='.$file_type.'&floc='.$file_store.'&tloc='.$file_store1.'">';
		
		echo"<input type='button' class='warning-btn' value='Save as copy of_".$file_name."'></a><br /></div>";
}
	
	else{
		
$sql = "INSERT INTO files (FileName,FileType,FileSize,SourceLocation,UploadDateTime)
		VALUES('".$file_name."','".$file_type."','".$file_size."','".$file_tem_loc."',NOW())";
$qury = mysqli_query($conn, $sql);


if(!$qury){
	echo"<div style='margin:auto;padding:2px;background:#dd7388;font-family:Segoe UI;border-radius:2px;color:#660606;'>
		<strong>Upload failed!</strong>".mysqli_error($conn)."</div>";
}
   else {
	   
	   if(move_uploaded_file($file_tem_loc,$file_store)){
	 echo"<div style='margin:auto;padding:2px;background:#61dd37;font-family:Segoe UI;border-radius:2px;color:#144404;'>
		<strong></strong> Uploaded Successfully.</div>";
   }
		
	}
	
	}
	
	
	
	}
	
	if(isset($_GET['fn'])){	
	
	   if(file_exists($_GET['tloc'])) {
		   echo"<div style='margin:auto;padding:2px;background:#61dd37;font-family:Segoe UI;border-radius:2px;color:#144404;'>
		File already saved.</div>";
	   }else{
	   if(copy($_GET['floc'],$_GET['tloc'])){
$sql = "INSERT INTO files (FileName,FileType,FileSize,SourceLocation,UploadLocation,UploadUser,UploadDateTime)
		VALUES('".$_GET['nfn']."','".$_GET['ft']."','".$_GET['fs']."','".$_GET['floc']."','".$_GET['tloc']."','".$uid."',NOW())";
$qury = mysqli_query($conn, $sql);
	   }

if(!$qury){
	echo"<div style='margin:auto;padding:2px;background:#dd7388;font-family:Segoe UI;border-radius:2px;color:#660606;'>
		<strong>Upload failed!</strong>".mysqli_error($conn)."</div>";
}
   else {
	 echo"<div style='margin:auto;padding:2px;background:#61dd37;font-family:Segoe UI;border-radius:2px;color:#144404;'>
		<strong></strong> Upload Successful.</div>";
   }		
	}
	}
		
	
?>