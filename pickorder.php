<?php
include 'functions.php';
include 'menu.php';
//include 'id.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Payment</title>

</head>

<body>
	
<?php
		
		//fetch products from the database
		$results = $conn->query("SELECT o.description,d.price FROM orderdetails o,orders d WHERE o.orderid='".$_GET['id']."'");
		$row = $results->fetch_assoc();
		
	?>
    
   <div style="text-align:left;font-family:Segoe UI;margin-top:30px;font-weight:bold;">
	Order Id: <?php echo $_GET['id']; ?>
	</div>
  
 <div style="text-align:right;font-family:Segoe UI;margin-top:-30px;color: green;font-weight:bold;">
  Budget: $<?php
  echo $row['price']; 
  ?>
  </div>
   
   
	<table align="center" panding-right width="1000" border="0" cellpadding="1" cellspacing='1' bgcolor='beige'>

        <tr bgcolor="green">
                     
                     <th>Order Description</th>
					
                     
           </tr>
		   
<?php


if (mysqli_num_rows($results) > 0) {
 echo "<tr>"
    . "<td>".$row["description"]."</td>";
"</tr>";


    
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


      
	 <form id="login-part" action="confirmed.php" method="POST" name="login-form" enctype="multipart/form-data">

        

        </table>
           <div class="row">
                    <button style="background-color:orange;font-weight:bold;left: 50%;font-size: 20px;height:30px;margin-left:auto;display:block;margin-right:auto; width:60px;"name="order-submit" type="submit" class="success-btn">Pick</button>
					
           </div>

    </form>
    
</body>
</html>
