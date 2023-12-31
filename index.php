<?php
	#Starts session. If user is not logged in, they are sent to the login page
	session_start();

	if(isset($_SESSION["success"]) && isset($_COOKIE["value"]))
	{
		if($_SESSION["success"] != "Logged In" || ($_COOKIE["value"] == "cookievalue"))
		{
			header("Location: login.php");
		}
	}
	
	#Starts the connection to the database
	require_once("database.php");
?>
<!--
    Programmer: Derv O'Flynn
    Student Number: C22344363 
    Start Date: 08/11/2023
    End Date: 08/12/2023
    Purpose: CA Assignment
    Title: Index
    Description: This is the homepage for my Library website
-->
<html lang="en">

  <head>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Local CSS-->
    <link rel="stylesheet" href="coillteachlibrary.css?c=<?php echo time(); ?>">
    <title> Home: Coillteach Library</title> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Website icon in tab-->
    <link rel="icon" href="favicon.ico">
  </head>

  <body>

    <!--Navbar. Contains a dropdown menu that auto-scrolls to selected content. Made using bootstrap and own work -->
    <div class="menuDerv"> 
		<!--Bootstrap Nav-bar-->
		<nav class="navbar navbar-expand-lg navbar-dark">
			<!--If the screen is narrow, the nav-bar will collapse into a toggle-able button that reformats it vertically-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<!--Link to current page if user needs to refresh -->
					<li class="nav-item">
						<a class="nav-link" href="index.php"><h3>Home</h3></a>
					</li>
					<!--Links to the other pages -->
					<li class="nav-item">
						<a class="nav-link" href="searchbooks.php"><h3>Search/Reserve Books</h3></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contactus.php"><h3>Contact Us</h3></a>
					</li>
						<a class="nav-link" href="account.php"><h3>My Account</h3></a>
					</li>
				</ul>
			</div>
		</nav>  
    </div>
    <!--End Navbar-->

	<br> <br>

    <header>
      <!--Header Image-->
      <img class="SectionImg" src="SiteImages/Coillteach_Library_yellow.png" alt="Coillteach Library Logo">
    </header>

    <br> <br>

    <!--Welcome Content. Contains Information and History-->
    <div class="MainContainer">
      	<div class="secondBorder">
        	<h2 class ="ContentHeading"> Welcome to Coillteach Library! </h2>
        	<p class = "ContainerParagraph">
        		This library was founded in 2010 and sits near the TU Dublin Grangegorman City Campus. This website was created to allow 
				users to interact with the library online. You can create an account, login, logout, reserve books and check the progress
		  		of books you have already reserved!
				<br> <br>
				We hope you enjoy the use of this library to its fullest extent!
        	</p> 
			<br>
      	</div>
    </div>

	<br> <br>

    <!--Contact Us block-->
    <div class="MainContainer">
      	<div class="secondBorder">
        	<h2 class ="ContentHeading"> Contact Us </h2>
        	<p class = "ContainerParagraph">

                <br> <br>
                    
                Instagram: <a href="https://www.instagram.com/">@coillteachlib</a>
				
                <br> <br>

                Facebook: <a href="https://www.facebook.com/">Coillteach Library</a>

                <br> <br>

                Twitter: <a href="https://www.twitter.com/">@coillteach_library</a>

                <br> <br>

                Email: <a href="https://www.gmail.com/">enquiries@ctlib.ie</a>
        	</p> 
			<br>
        </div>
    </div>

    <br> <br>

    <!--End content section-->

    <!--Footer-->
    <footer class="footer">
    
      <br>

      <p id="FooterText">Website created by Derv O'Flynn, 2023</p>

      <br>

    </footer>
    <!--End footer-->

    <!--Scripts-->
    <!--Bootstrap scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--End of scripts-->
  </body>
</html>