<?php

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

<html>

    <head>
    </head>
    
    <body>       

        <h1>Please Log In </h1>

        <?php

            if (isset($_SESSION["error"])) 
            {
                echo('<p style="color:red">Error:'.$_SESSION["error"].'</p></br>');
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