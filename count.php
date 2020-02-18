<!DOCTYPE html>
<html>
    <head>
        <title> count</title>
    </head>
<body>   
<table style=margin-bottom:20px;margin-top:30px; align="center" width="1000" border="1" cellpadding="1" cellspacing='1'>
     
<?php
//include 'functions.php';
//include 'admin_menu.php';
$cnt=0;
$sql = "select topic,orderid from orderdetails where order_status=''";
$result = mysqli_query($conn, $sql)or die(Mysqli_error($conn));
$num_rows = mysqli_num_rows($result);

if (mysqli_num_rows($result) >0) 

{
    // output data of each row
while ($row = mysqli_fetch_assoc($result)) 
$cnt++;

{

}
    
} else {
    echo "";
}

mysqli_close($conn);
?> 
 <div style="font-family:Segoe UI;margin-top:-1%;"><h4 style="font-weight:bold;text-align:left;color:#100ba8;">Total files shared: <?php echo $num_rows?>
<font style="font-weight:bold;text-align:left;color:#100ba8;float:right;">
</font></h4>
</div>         
          
</table>
</body>

</html>