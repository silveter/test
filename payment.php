<?php
include 'functions.php';

//Set useful variables for paypal form
$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_username = 'silvesterkisalu@gmail.com'; //Business Email

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
		$results = $conn->query("SELECT orderid, price FROM orders");
		//$results = $conn->query("SELECT * FROM orderdetails WHERE orderid='".$_GET['id']."'");
		while($row = $results->fetch_assoc())
			
		{
	?>
    
    <br/>Order Id: <?php echo $row['orderid']; ?>
    <br/>Total Pay: $<?php echo $row['price']; ?>
	
    <form action="<?php echo $paypal_link; ?>" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row['orderid']; ?>">
        <input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/paypal_cancel.php'>
		<input type='hidden' name='return' value='http://localhost/paypal_integration_php/paypal_success.php'>

        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    
    </form>
    <?php } ?>
</body>
</html>
