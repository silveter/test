<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="Home.css">
    
        </head>
        <body>
            <div id="orange-div">
                <hr class="new1">
                <div class="home">
                    MY HOMEWORK HELP

                </div> 

                <div class="dropdown">
                    <button class="dropbtn">Your Profile 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                         <a href="login.php?logout='1'" style="color: black;">Change Password</a>				
						<a href="login.php?logout='1'" style="color: black;">Log Out</a>
                    </div>
                </div> 
            </div>

            <div id="black-div">
                <hr class="new1">
                |<a href="admin_menu.php">Home</a>|				
                <a href="displayorder.php">Student Requests</a>|
                <a href="confirmed.php">Orders Confirmed
				
				<font color='green'>
				<?php echo mysqli_num_rows($conn->query("SELECT d.orderid,d.topic,o.price from orderdetails d, orders o WHERE d.order_status='Y'"));?>
				</font>
				</a>|              
				<a href="tag_a.asp">Submitted Answers</a>|
				<a href="tag_a.asp">Revisions</a>|
				<a href="uploadfiles.php">Upload Samples</a>|
                <a href="#">Students</a>|
				<a href="displayorder.php">Experts</a>|

            </div>  
      

</body>
</html>

