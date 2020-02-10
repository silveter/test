<?php
		include ('menu.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Homepage</title>
        <!--<link rel="stylesheet" href="Home.css">-->
    
        </head>
        <body>
		
          
           
                
                <div id="right-div">
                    <p style="color:black"><b>My Homework help</b></p>
                    <div class="container">
                       <!-- <form action="/action_page.php">-->
						<form action="Home.php" method="POST" name="login-form">

                            <label for="email">Email Id</label>
                            <input type="text" id="email" name="email" required placeholder="Enter Your Email..">
                            <label for="course_code">Course Code</label>
                            <input type="text" id="course" name="course" required placeholder="BCOM C001..">
                            <label for="pages">No.of Pages</label>
                            <input type="text" id="pages" name="pages" required placeholder="No.Of Pages..">
							
                            <label for="lname">Assignment Deadline</label>

                            <input style="height:30px;" "width:30px;" type="date" value="Deadline">
                        <select>
						<option value="none">Select</option>
						  <option value="midday">2 AM</option>
						  <option value="one">4 AM</option>
						  <option value="two">6 AM</option>
						  <option value="three">7AM</option>
						</select>
                     <div class="row">
                     <!--<button style="background-color:green; margin-right:15%; height:30px; width:60px;"name="order-submit" type="submit" class="success-btn">Submit</button>-->
					 <button style="background-color:#5F9EA0;font-weight:bold;left: 50%;font-size: 16px;height:30px;margin-left:auto;display:block;margin-right:auto; width:120px;"name="order-submit" type="submit" class="success-btn">Your Help</button>
                     </div>
                        </form>  
<div style="margin-bottom:20px;margin-top:-20px;text-align:center;height:10px;min-width:80%;margin-right:auto;margin-left:auto;">
<?php 
include('scripts/ordersScr.php');

 ?>

</div>
                    </div>


                </div>
 

        </body>
    </html>

