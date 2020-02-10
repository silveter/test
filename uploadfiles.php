<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DMS- File Management/</title>
<link rel="stylesheet" href="dms.css">
<?php 
//include('connection.php');
include('menu.php');
//include('scripts/refresh.php');
//session_start();


?>

</head>


<body>

<div id="content">




			
<div id="mid-div">	


<div id="form1-div" style="margin-top:-1%;width:80%;min-height:500px;">
		


<div id="form-div">		
<form id="login-part" action="uploadfiles.php" method="POST" name="login-form" enctype="multipart/form-data">
<div style="text-align:center;font-family:Segoe UI;">
<h3 style="color:#100ba8;font-family:Segoe UI;background: #5F9EA0;font-weight:bold;">Upload Samples Orders:</h3>
</div>
<div class="form-input">
<label  class="form-label" >File: </label>
<input class="form-field" type="file" name="filename" required>
</div>
<div class="form-input" style="text-align:right;">
<button type="reset" style="margin-right:5%;" class="warning-btn">Clear file</button>
<button name="upload-file" type="submit" style="margin-right:10%;" class="success-btn">Upload file</button>
</div>
</form>	

<div style="text-align:center;font-family:Segoe UI;margin-top:-30px;">
<?php include('scripts/fileUploadScr.php'); ?>
</div>

</div>	


</div>	


</div>	


</div>
</body>
</html>































