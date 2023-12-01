<?php

    setcookie("cookiename", "cookievalue");
    session_start();
    
    unset($_SESSION["account"]);

    require_once("database.php");

    if (isset($_POST["account"]) && isset($_POST["pw"]))
    { 

        $uname = ($_POST["account"]);
        $pword = ($_POST["pw"]);

        $sql = "SELECT username, password FROM users WHERE username LIKE '$uname';";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {

            while($row = $result->fetch_assoc())
            {

                if ($pword == htmlentities($row["password"]))
                {
                    setcookie("user", $uname, time()+3600); 
                    $_SESSION["account"] = $_POST["account"];
                    $_SESSION["success"] = "Logged In";
                    header( 'Location: index.php' ) ;
                    return;
                } 
        
            }

        }
        else 
        {
            $_SESSION["error"] = "Incorrect password.";
            header( 'Location: login.php' ) ;
            return;
        } 
    } 
    
    else if (count($_POST) > 0)
    { 
        $_SESSION["error"] = "Missing Required Information";
        header( 'Location: login.php' ) ;
        return;
    }

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
        <link rel="stylesheet" href="coillteachlibrary.css">
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
                <h2 class ="ContentHeading"> Please Log In </h2>


                <?php

                    if (isset($_SESSION["error"])) 
                    {
                        echo('<p style="color:red">Error:'.$_SESSION["error"].'</p></br>');
                        unset($_SESSION["error"]);
                    }

                ?>

                <form class="ContainerParagrpah" method="post">
                    <p class = "ContainerParagraph">Account: 
                        <br>
                        <input type="text" name="account" value="">
                    </p>

                    <p class = "ContainerParagraph">Password:
                        <br>
                        <input type="text" name="pw" value="">
                    </p>
                    <p><input type="submit" value="Log In"></p>
                </form>
            </div>
        </div>

        <br>
        <!--Contact Us block-->
        <div class="MainContainer">
            <div class="secondBorder">
                <h2 class ="ContentHeading"> Contact Us Online </h2>
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
        <!--Local Script-->
        <script src="Scripts\coillteachlib.js"></script>
        <!--End of scripts-->
    
    </body>

</html>