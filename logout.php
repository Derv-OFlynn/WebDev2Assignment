<?php 
    session_start();

    unset($_SESSION["account"]);


?>

<html>

    <head>
    </head>
    
    <body>       

        <h1>Thank you for coming! </h1>

        <?php
            if ( isset($_SESSION["error"]) ) 
            {
                echo('<p style="color:red">Error:'.$_SESSION["error"]."</p>\n");
                unset($_SESSION["error"]);
            }

            session_destroy();
            echo("You are now logged out</p>");
            
        ?>

        <input type="button" value="Login" onclick="location.href='login.php'; return false "></p>

    </body>
    
</html>