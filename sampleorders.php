<?php
include 'functions.php';
include 'Menu.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DMS- My files </title>
<link rel="stylesheet" href="dms.css">

<body>

<div id="content">




			
<div id="mid-div">	


<div id="form1-div" style="margin-top:-1%;width:80%;min-height:500px;">
		
<div class="topnav">
   </div>
	
<?php

if(isset($_GET['download-file-path']))
{
	
	$filepath=$_GET['download-file-path'];
	if(file_exists($filepath)) 
	{
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
	else 
	{
		
		 echo "<script> alert('File not available in the folder. It may have been deleted.');
	  </script>";
	  
	}
}

?>
	
<!--======================================================================================================-->	
<?php

if(isset($_GET['shared_files']))
{
	
		  
?>

<table class="myTable">	
	<?php		  
		  
echo "</table>";
}

else{
		$cnt=0;
		  //$myquery= "SELECT*FROM files";	
		$myquery= "SELECT d.topic,d.orderid,f.UploadLocation from orderdetails d,files f";		  
		  $result = mysqli_query($conn,$myquery) or die(Mysqli_error($conn));
		  $num_rows = mysqli_num_rows($result);			
?>



<table class="myTable">
	<tr style="border:1px solid red;"><th>Sample Order Title</th><th>Order Id</th><th colspan="2">ACTION</th></tr>
	
	<?php		  
		  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		  {
		
		  echo"<tr >";
		 
		  echo"<td>".$row['topic']."</td>";
		  echo"<td>".$row['orderid']."</td>";
		  
		  echo"<td><a href='sampleorders.php?share-file-path=".$row['UploadLocation']."'>View</span> </a></td>";	  
		  echo"<td><a href='sampleorders.php?download-file-path=".$row['UploadLocation']."'>Download</span> </a></td>";		  
		 		  
		  echo"</tr>";
}echo "</table>";
}
	?>
</div>	
</div>	
</div>
</body>
</html>