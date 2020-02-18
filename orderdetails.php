<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Order Details</title>
        <link rel="stylesheet" href="orderdetails.css">
    
        </head>
        <body>
          <?php
		  include('student_menu.php');
		  ?>

            <div id="main-div">
                    <div id="right-div">
                    
                    <div class="container">
                      
						<form action="orderdetails.php" method="POST" name="login-form">
						<h3 style="color:orange;background-color:#5F9EA0;text-align:center;font-family:Segoe UI;font-weight:bold;">My Homework Help</h3>
							<label for="topic">Assignment Topic</label>
                            <input type="text" id="topic" name="topic" required placeholder="Enter Subect Topic..">
                            <label for="order_deatails">Description</label>
                            <input type="text" id="description" name="description" required placeholder="Paste Assignment Brief" style="height:80px;>
                                                       
							<div class="form-input">
							<label  class="form-label" >Attach Files: </label>
							<input class="form-field" type="file" name="files" required>
						</div>
							
							           
                     <div class="row">
                     <button style="background-color:#5F9EA0; margin-right:15%;"name="order-submit" type="submit" class="success-btn">Submit</button>
                     </div>
                        </form>  
<div style="margin-bottom:20px;margin-top:-20px;text-align:center;height:10px;min-width:80%;margin-right:auto;margin-left:auto;">
<?php 
include('scripts/orderdetailsScr.php');

 ?>

</div>
                    </div>


                </div>
            </div>

        </body>
    </html>

