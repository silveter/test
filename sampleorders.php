<?php
//include('menu.php');
include('functions.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sampleorders </title>
<!--<link rel="stylesheet" href="dms.css">-->
<link rel="stylesheet" href="style.css">
<body>

<table class="myTable">
	<tr style="border:1px; solid orange;">
	<th>Available and Free Samples</th><th>Action</th><th>Action</th></tr>

	<?php
	
	$myquery= "SELECT FileType,UploadLocation,FileName  FROM files WHERE SharedState='N' limit 1";		  
	$result = mysqli_query($conn,$myquery) or die(Mysqli_error($conn));
	$num_rows = mysqli_num_rows($result);	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	echo"<tr >";
	echo"<td>".$row['FileName']."</td>";
	echo"<td><a href='myfiles.php?download-file-path=".$row['UploadLocation']."'>View</span> </a></td>";
	echo"<td><a href='myfiles.php?download-file-path=".$row['UploadLocation']."'>Download</span> </a></td>";
	echo"</tr>";
	echo "</table>"; }
	?>
		

</body>
</html>