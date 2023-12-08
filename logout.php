<?php
	session_start();

    setcookie("cookiename", "cookievalue");

    unset($_SESSION["account"]);
    unset($_SESSION["success"]);

    if ( isset($_SESSION["error"]) ) 
    {
        echo('<p style="color:red">Error:'.$_SESSION["error"]."</p>\n");
        unset($_SESSION["error"]);
    }
    session_destroy();
    setcookie("cookiename", "cookievalue");
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

        <br> <br>

        <header>
            <!--Header Image-->
            <img class="SectionImg" src="SiteImages/Coillteach_Library_yellow.png" alt="Coillteach Library Logo">
        </header>

        <br> <br>

        <!--Welcome Content. Contains location information and a picture of the troop neckerchief-->
        <div class="MainContainer">
            <div class="secondBorder">
                <h2 class ="ContentHeading"> Thank you for coming </h2>
                <h4>
                    <p class = "ContainerParagraph">

                        <?php

                            echo("You are now logged out");
                            
                        ?>

                        <br> <br>

                        <button class="BadgeButton"><a href="login.php">Login</a></button>
                         
                        <br> <br>
                    </p>
                </h4> 
                <br>
            </div>
        </div>

        <br>
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
    
    </body>

</html>