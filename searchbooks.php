<?php
    session_start();
    
	if(isset($_SESSION["success"]) && isset($_COOKIE["name"]))
	{
		if($_SESSION["success"] != "Logged In" || ($_COOKIE["name"] == "cookiename"))
		{
			header("Location: login.php");
		}
	}

	require_once("database.php");

    if(isset($_POST["Reserve"]))
    {
        $isbn = $_POST["ISBN"];
        $change = "UPDATE books SET Reserved = 'Y' WHERE ISBN = '$isbn';";
        $conn->execute_query($change);

        $uname = $_COOKIE["user"];
        $now = date("Y-m-d");

        $reserve = "INSERT INTO reserved(ISBN, username, ReservedDate) VALUES('$isbn', '$uname', '$now');";
        $conn->execute_query($reserve);
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
        <title> My Account</title> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Website icon in tab-->
        <link rel="icon" href="favicon.ico">
    </head>

    <body>

        <!--Navbar. Contains a dropdown menu that auto-scrolls to selected content. Made using bootstrap and own work -->
        <div class="menuDerv"> 
            <nav class="navbar navbar-expand-lg navbar-dark">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
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

        <!--Welcome Content. Contains location information and a picture of the troop neckerchief-->
        <div class="MainContainer">
            <div class="secondBorder">
                <h2 class ="ContentHeading"> Search for a book </h2>
                <h4>
                    <p class = "ContainerParagraph">

                        <br> <br>

                        <form action="searchbooks.php" method="post">
                        <input id="search" name="searchq" type="text" placeholder="Search for a book or author">
                        <input id="submit" type="submit" value="Search"> 
                        </form>

                        <br> <br>

                    </p> 
                </h4>
                <br>
            </div>
        </div>

        <br>
        <!--Beaver Section Container-->
        <div class="MainContainer">
            <div class="secondBorder">
                <h2 class ="ContentHeading"> Results for "<?php if(isset($_POST["searchq"])){echo $_POST["searchq"];} ?>" </h2>
                <p class = "ContainerParagraph">
                <br>
                <table class="bord">
                    <tr>
                        <th> ISBN </th>
                        <th> Title </th>
                        <th> Author </th>
                        <th> Edition </th>
                        <th> Year </th>
                        <th> Category </th>
                        <th> Reserved </th>
                    <?php
                        
                        if(isset($_POST["searchq"]))
                        {
                            $user_search = ($_POST["searchq"]);

                            $sql = ("SELECT books.ISBN, books.BookTitle, books.Author, books.Edition, books.Year, categories.CategoryDesc, books.Reserved FROM books JOIN categories ON books.Category = categories.CategoryID WHERE books.Author LIKE '%$user_search%' or books.BookTitle LIKE '%$user_search%' ORDER BY Author DESC LIMIT 5;");

                            $result = $conn->execute_query($sql);
                            

                            if($result->num_rows > 0)
                            {
                                //output data of each row in the table

                                while($row = $result->fetch_assoc())
                                {
                                    echo '<tr><td class="trasna">';
                                    echo (htmlentities($row["ISBN"]));
                                    echo '</td><td class="trasna">';
                                    echo (htmlentities($row["BookTitle"]));
                                    echo '</td><td class="trasna">';
                                    echo (htmlentities($row["Author"]));
                                    echo '</td><td class="trasna">';
                                    echo (htmlentities($row["Edition"]));
                                    echo '</td><td class="trasna">';
                                    echo (htmlentities($row["Year"]));
                                    echo '</td><td class="trasna">';
                                    echo (htmlentities($row["CategoryDesc"]));
                                    echo '</td><td class="trasna">';
                                    if (htmlentities($row["Reserved"] == "N"))
                                    {
                                        echo '<form action="searchbooks.php" method="post"> <input type="hidden" name="ISBN" value="' . htmlentities($row["ISBN"]) . '"> <input id="submit" type="submit" name ="Reserve" value="Reserve"> </form>';
                                    }
                                    else
                                    {
                                        echo 'Already Reserved';
                                    }
                                    
                                    echo "</td></tr>\n";

                                }

                            }

                        }

                    ?>

                </table>
                </p> 
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