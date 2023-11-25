<?php
    session_start();
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
<!DOCTYPE html>
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

    <!--Content Section-->
    <br> <br> 

    <!--Navbar. Contains a dropdown menu that auto-scrolls to selected content. Made using bootstrap and own work -->
    <div class="menuDerv"> 
      <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <!--Links to the other pages -->
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="searchbooks.html">Search Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>  
    </div>
    <!--End Navbar-->

    <br> <br>

    <!--Welcome Content. Contains location information and a picture of the troop neckerchief-->
    <div class="MainContainer">
      <div class="secondBorder">
        <h2 class ="ContentHeading" id="OurTroop"> Welcome to Coillteach Library! </h2>
        <p class = "ContainerParagraph">
          Our troop started in 1963 and is located in the Old Presbytery on the Lower Kilmacud Road (beside Bear Market ;) .
          Our neckerchief is green and gold (green is worn on the left).
          We have two Beaver Sections, two Cub sections, two Scouts sections, a Venture section and a Rover Section.

          <br> <br>
          <img class="TroopBadgeImg" src="SiteImages/neckerchief.png" alt="Kilmacud Neckerchief picture">

          <br>
        </p> 
      </div>
    </div>

    <br>
    <!--Beaver Section Container-->
    <div class="MainContainer">
      <div class="secondBorder">
        <h2 class ="ContentHeading" id="Beavers"> Beavers </h2>
        <p class = "ContainerParagraph">
          <br>

          <img class="SectionImg" src="SiteImages/BeaverSection.png" alt="Beaver Section Image">

          <br> <br>
          Beaver Scouts are aged 6 to 8 years old and wear light blue jumpers. We have two beaver sections!

          <br> <br>

          62nd Beavers meet on Wednesdays from 6:30 to 7:30

          <br> <br>

          71st Beavers meet on Mondays from 6:30 to 7:30
        </p> 
      </div>
    </div>

    <br>
    <!--Cub Section Container-->
    <div class="MainContainer">
      <div class="secondBorder">
        <h2 class ="ContentHeading" id="Cubs"> Cubs </h2>
        <p class = "ContainerParagraph">

          <br>

          <img class="SectionImg" src="SiteImages/CubSection.png" alt="Cub Section Image">

          <br> <br>
          Cub Scouts are aged 9 to 11 years old and wear navy jumpers.

          <br> <br>

          62nd Cubs meet on Tuesday nights from 7:00 to 8:30

          <br> <br>

          71st Cubs meet on Thursday nights from 7:00 to 8:30
        </p> 
      </div>
    </div>

    <br>
    <!--Scout Section Container-->
    <div class="MainContainer">
      <div class="secondBorder">
        <h2 class ="ContentHeading" id="Scouts"> Scouts </h2>
        <p class = "ContainerParagraph">
          <br>

          <img class="SectionImg" src="SiteImages/ScoutSection.png" alt="Scout Section Image">

          <br> <br>

          Scouts are aged 12 to 14 and they are very active! They wear the Scout Shirt and participate in a lot of county and national events too.

          <br> <br>

          62nd Scouts meet on Friday nights from 8:00 to 10:00

          <br> <br>

          71st Scouts meet on Wednesday nights from 7:45 to 9:30 

          <br> <br>
          Check out the 62nd Scout's trip to Austria last summer! 
          <br> <br>
          <iframe class="MapEmbed" src="https://www.youtube.com/embed/xiuR98lkr9A" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allow="fullscreen"></iframe>

          <br> <br>
        </p> 
        <!--Break needed as iframe tag interrupts <p>-->
        <p class="ContainerParagraph">

          <br> <br>
          The Scouts alternate annual camps between Ireland, Gillwell and further abroad!
        </p>
      </div>
    </div>

    <br>
    <!--Venture Section Container-->
    <div class="MainContainer">
      <div class="secondBorder">
        <h2 class ="ContentHeading" id="Ventures"> Ventures </h2>
        <p class = "ContainerParagraph">
          <br>

          <img class="SectionImg" src="SiteImages/VentureSection.png" alt="Venture Section Image">

          <br> <br>
          Ventures are aged 15 to 17. They can start helping out in other sections at this age as well. Ventures doing Gaisce can also complete the Chief Scout Award for Ventures concurrently. They wear the Scout Shirt too! 

          <br> <br>

          Ventures meet on Thursday nights from 8:45 to 10:30 
        </p> 
      </div>
    </div>

    <br>
    <!--Rover Section Container-->
    <div class="MainContainer">
      <div class="secondBorder">
        <h2 class ="ContentHeading" id="Rovers"> Rovers </h2>
        <p class = "ContainerParagraph">
          <br>

          <img class="SectionImg" src="SiteImages/RoverSection.png" alt="Rover Section Image">

          <br> <br>
          
          Rovers are aged 18 to 26 and do not have a designated meeting night. Most of our Rovers are leaders as well! (not a requirement though if ye want to tag along for the craic ;) )
        
        </p> 
      </div>
    </div>

    <br>
    <!--Leader Section Container. Uses a table to display titles and names-->
    <div class="MainContainer">
      <div class="secondBorder">
        <h2 class ="ContentHeading" id="Leaders"> Leaders </h2>
        <p class ="ContainerParagraph">
          <br>

          <img class="SectionImg" src="SiteImages/ScoutingIrelandLogo.png" alt="Scouting Ireland Logo">

          <br> <br>

          Our leaders are an enthusiastic and passionate bunch :). We're always open to new leaders too.
        </p>
          <!--Table for title and Names-->
          <table class="bord">
            <tr>
              <th>Group Leader: </th>
              <td>Keith Lamon</td>
            </tr>
          
            <tr>
              <th>62nd Beaver Section Leader: &nbsp; &nbsp; </th>
              <td> Meadhbh Ní Cleirigh</td>
            </tr>

            <tr>
              <th>71st Beaver Section Leader: </th>
              <td> Enda Colfer</td>
            </tr>

            <tr>
              <th>62nd Cub Section Leader: </th>
              <td>Cormac Doyle</td>
            </tr>

            <tr>
              <th>71st Cub Section Leader: </th>
              <td>Matthew Pearse</td>
            </tr>

            <tr>
              <th>62nd Scout Section Leader: </th>
              <td>Derek Kinsella</td>
            </tr>

            <tr>
              <th>71st Scout Section Leader: </th>
              <td>Matthew Pearse</td>
            </tr>

            <tr>
              <th>Venture Section Leader: </th>
              <td>Keith Lamon</td>
            </tr>

          </table>
      </div>
    </div>

    <br> <br>

    <!--End content section-->

    <!--Footer-->
    <footer class="footer">
    
      <br>

      <p id="FooterText">Website created by Derv O'Flynn, 2022</p>

      <br>

    </footer>
    <!--End footer-->

    <!--Scripts-->
    <!--Bootstrap scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Local Script-->
    <script src="Scripts/Kilmacud.js"></script>
    <!--End of scripts-->
  </body>
</html>