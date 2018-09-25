<html>
    <head>
        <title>Health care system</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="App.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="login-page">
            <div class ="form">
                <form class="register-form" action="register.php" method="post">
                    <h1>Registration Details</h1>
                    User Name:<sup>*</sup> <input type="text" name="username" placeholder="Enter your usersname"/>
                    Email:<sup>*</sup><input type="text" name="email" placeholder="Enter your email address"/>
                    Password<sup>*</sup><input type="text" name="password" placeholder="Enter the correct password"/>
                    <button type="submit" name="submit" value="submit">Submit</button>
					<p class="message">Already registered?<a href="#">Log in</a></p>
                </form>

                <form class="login-form" action="login.php" method="post">
                    <p><img src="4.png" alt="Avatar" class="avatar"/></p>
                    Email<input type="text" name="username" placeholder="Enter your usersname/Email"/>
                    Password<input type="text" name="Passwords" placeholder="Enter your password"/>
					<button type="submit" name="login" value="login">Log in</button>
                    <p class="message">New user?<a href="#">Register</a></p>
                </form>
				<?php
		$fullUrl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if(strpos($fullUrl, "register=empty") == true){
			echo "<p class='error'>Empty fields!</p>";
			exit();
		}
		elseif(strpos($fullUrl, "register=char") == true){
			echo "<p class='error'>Invalid character!</p>";
			exit();
		}
		elseif(strpos($fullUrl, "register=email") == true){
			echo "<p class='error'>Invalid email address!</p>";
			exit();
		}
		elseif(strpos($fullUrl, "login=empty") == true){
			echo "<p class='error'>Wrong user name and password!</p>";
			exit();
				}
		elseif(strpos($fullUrl, "register=success") == true){
			echo "<p class='error'>Signed up successfully!</p>";
			exit();
		}
		?>
            </div>

        </div>
		
        <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
        <script>
            $('.message a').click(function ()
            {
                $('form').animate(
                        {
                            height: "toggle", opcaity: "toggle"
                        }, "slow");
            });
            
        </script>
    </body>
</html>
