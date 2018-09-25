<?php //include 'session.php'; ?>
<html>
    <head>
        <title>Home page</title>
        <link href="Home.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
            <div class="topnav" id="myTopnav">
            <a class="active" href="#home">Home</a>
            <a href="index.php">Homepage</a>
			 <a href="Access.php">Log in</a>
            <a href="new_user.php">Registration</a>
            <b id="logout"><a href="logout.php">Log out</a></b>
        </div>

        <div style="padding-top:16px">

        </div>


        <!--<h2>Automatic Slideshow</h2><p>Change image every 2 seconds:</p> //-->

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
               <!-- <img src="1.jpg" style="width:50%" style="height:50%">-->
				<img src="1.jpg" height="500" width="500">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <!--<img src="2.jpg" style="width:50%" style="height:50%">-->
				<img src="2.jpg" height="500" width="500">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <!--<img src="3.jpg" style="width:50%" style="height:50%">-->
				<img src="3.jpg" height="500" width="500">
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 4000); // Change image every 2 seconds
            }
        </script>
        <div class="footer">
            <footer>Copyright &copy; 2018.</footer>
        </div>

    </body>
</html>