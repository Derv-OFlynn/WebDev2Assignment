<?php 
    if(! isset(setcookie("user", "cookiename", time()+3600)));
    session_start();

    unset($_SESSION["account"]);

    require_once("database.php");

    if (isset($_POST["account"]) && isset($_POST["pw"]))
    { 

        $uname = ($_POST["account"]);
        $pword = ($_POST["pw"]);

        $sql = "SELECT userName, password FROM users WHERE username LIKE '$uname';";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {

            while($row = $result->fetch_assoc())
            {

                if ($pword == htmlentities($row["Password"]))
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

<html>

    <head>

        <meta http-equiv="content-type" content="text/html;charset=iso" >

    </head>
    
    <body>       

        <h1>Please Log In </h1>

        <?php
            if ( isset($_SESSION["error"]) ) 
            {
                echo('<p style="color:red">Error:'.
                $_SESSION["error"]."</p>\n");
                unset($_SESSION["error"]);
            }
        ?>

        <form method="post">
            <p>Account: <input type="text" name="account" value=""></p>
            <p>Password: <input type="text" name="pw" value=""></p>
            <p><input type="submit" value="Log In"></p>
        </form>

    </body>
    
</html>