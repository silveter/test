<?php

include 'functions.php';
include 'admin_menu.php';

				
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Orders in Progress</title>
    </head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
    <body>

<?php
if(isset($_POST['pick_id'])){
		$result = $conn->query("update orderdetails set order_status='Y' WHERE orderid='".$_POST['pick_id']."'");
		
		//$result = $conn->query("update orderdetails set order_status='Y' WHERE orderid='orderid'");
		//$row = $result->fetch_assoc(); 
}
		//fetch products from the database
		
		$results = $conn->query("SELECT d.orderid,d.topic,o.price from orderdetails d, orders o WHERE d.order_status='Y'");
		
		//$row = $results->fetch_assoc();
?>
<table style=margin-bottom:20px;margin-top:30px; align="center" width="1000" border="1" cellpadding="1" cellspacing='1'>

        <tr bgcolor="orange">
                                     
					 
					 <th>Order Id</th>
					 <th>Topic</th>
					 <th>Price</th>
					
                     
           </tr>
        

           
<?php

if (mysqli_num_rows($results) >0) 

{
while($row = $results->fetch_assoc()){

 echo "<tr>"
   
	. "<td>".$row["orderid"]."</td>"
	. "<td>".$row["topic"]."</td>"
	. "<td>".$row["price"]."</td>";
	
"</tr>";
    }
    }
    
 else {
    echo "results";
	
}

mysqli_close($conn);
?> 
          
          
           </table>


   </body>

</html>