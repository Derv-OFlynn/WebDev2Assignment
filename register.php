<?php

    session_start();

    setcookie("cookiename", "cookievalue");
    
    unset($_SESSION["account"]);

    require_once("database.php");

    if (isset($_POST["account"]) && isset($_POST["pw"]) && isset($_POST["phoneno"]) && isset($_POST["firstname"]) && isset($_POST["surname"]) && isset($_POST["address1"]) && isset($_POST["address2"]) && isset($_POST["city"]) && isset($_POST["mobileno"]))
    { 

        $uname = ($_POST["account"]);
        $pword = ($_POST["pw"]);
        $phnum = ($_POST["phoneno"]);
        $fname = ($_POST["firstname"]);
        $sname = ($_POST["surname"]);
        $al1 = ($_POST["address1"]);
        $al2= ($_POST["address2"]);
        $ct = ($_POST["city"]);
        $mnum = ($_POST["mobileno"]);

        $sql = "SELECT username FROM users WHERE username = '$uname';";

        $result = $conn->execute_query($sql);

        if ($result->num_rows > 0)
        {
            $_SESSION["error"] = "Username is not unique!";
            header( 'Location: register.php' ) ;
            return;
        }


        $sql = ("INSERT INTO users (username, password, firstname, surname, addressline1, addressline2, city, phoneno, mobileno)  VALUES ('$uname', '$pword', '$fname', '$sname', '$al1', '$al2', '$ct', '$mnum', '$phnum');");

        $result = $conn->execute_query($sql);

    } 
    
    else if (count($_POST) > 0)
    { 
        $_SESSION["error"] = "Missing Required Information";
        header( 'Location: register.php' ) ;
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
                <h2 class ="ContentHeading"> Register New Account </h2>


                <?php

                    if (isset($_SESSION["error"])) 
                    {
                        echo('<p class="ErrorMessage">Error:'.$_SESSION["error"].'</p></br>');
                        unset($_SESSION["error"]);
                    }

                ?>

                <p class = "ContainerParagraph">
                    When you are registering your new account please keep this in mind:
                    <ul>
                        <li>Your username must be unique to you </li>
                        <li>Your password must be 6 characters long</li>
                        <li>Your mobile number must be 10 characters long</li>
                    </ul>
                </p>

                <form class="ContainerParagrpah" method="post">
                    <p class = "ContainerParagraph">Username: 
                        <br>
                        <input type="text" name="account" value="">
                    </p>

                    <p class = "ContainerParagraph">Password:
                        <br>
                        <input type="text" name="pw" value="" maxlength="6">
                    </p>

                    <p class = "ContainerParagraph">First name: 
                        <br>
                        <input type="text" name="firstname" value="">
                    </p>

                    <p class = "ContainerParagraph">Surname: 
                        <br>
                        <input type="text" name="surname" value="">
                    </p>

                    <p class = "ContainerParagraph">Address Line 1: 
                        <br>
                        <input type="text" name="address1" value="">
                    </p>

                    <p class = "ContainerParagraph">Address Line 2: 
                        <br>
                        <input type="text" name="address2" value="">
                    </p>

                    <p class = "ContainerParagraph">City: 
                        <br>
                        <input type="text" name="city" value="">
                    </p>

                    <p class = "ContainerParagraph">Phone Number:
                        <br>
                        <input type="text" name="phoneno" value="" maxlength="10">
                    </p>

                    <p class = "ContainerParagraph">Mobile Number: 
                        <br>
                        <input type="text" name="mobileno" value="">
                    </p>

                    <p><input type="submit" value="Register"></p>

                    <br> <br>

                    <p class = "ContainerParagraph">
                    Already have an account? Log in here:
                    </p>
                    <button class="BadgeButton"><a href="login.php">Login</a></button>
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
        <!--Local Script-->
        <script src="Scripts\coillteachlib.js"></script>
        <!--End of scripts-->
    
    </body>

</html>