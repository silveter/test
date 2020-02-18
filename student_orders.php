<!DOCTYPE html>
<html>
    <head>
        <title> Order Page</title>
    </head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
    <body>
<!--<form class="report-form" action="report.php" method="GET">-->
<table style=margin-bottom:20px;margin-top:30px; align="center" width="1000" border="1" cellpadding="1" cellspacing='1'>

        <tr bgcolor="orange">
                     
                 
					 <th>Order Title</th>
					 <th>Order Id</th>
					
                     
           </tr>
        

           
<?php
include 'functions.php';
include 'student_menu.php';
$orderid = '';
$sql = "select topic,orderid from orderdetails";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) >0) 

{
    // output data of each row
while ($row = mysqli_fetch_assoc($result)) 

//($row = mysqli_fetch_assoc($result)) 
{
 echo "<tr>"
   
	
	. "<td>".$row["topic"]."</td>";
	
echo '<td><a href="studentview_order.php?id=' . $row["orderid"].'">' . $row["orderid"].'</a></td>';
"</tr>";
    }
    
} else {
    echo "";
}

mysqli_close($conn);
?> 
          
          
           </table>


   </body>

</html>