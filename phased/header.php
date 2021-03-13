<?php 
include("status.php"); 
include('classes/DB.php'); 
?> 


<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Phased</title>

        <!--Linked CSS-->
        <link rel="stylesheet" href="css/main.css">

        <!--Linked Font-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">

        <!--Linked Favicon Application -->
        <link rel="shortcut icon" href="img/phasedIcon.png" />


    </head> 


    <body>
        
    <div class="mainMenu">
        <div class="mmLogo"><img src="img/phasedIcon.png" width="50px"></div>
    <div class="mmLinks"> 
            <div class="nav">         
                
                <a href="index.php"><img src="img/Home-icon.svg" class="navIcons"><span class="navText">Home</span></a>

        
</div>
                <?php
                if($loggedin) { ?> 

                <a href="news.php"><img src="img/Newsfeed-icon.svg" class="navIcons"><span class="navText">News</span></a>
                <a href="resources.php"><img src="img/Resource-icon.svg" class="navIcons"><span class="navText">Resources</span></a>
                <a href="search.php"><img src="img/Search-icon.svg" class="navIcons"><span class="navText">Search</span></a>
            </div> 
                    <img src="img/Nav-icon.svg" class="navMenu">
        
                    <div class="mmButtons">


                <button onclick="window.location.href='logout.php';">Logout</button>
            
            <?php 
            }
            ?> 
                <button onclick="window.location.href='login.php';">Login</button>

                
        </div> 
    </div> 

    <!--Linked JS-->
    <script src="js/nav.js"></script>
    

        </body> 
        </html> 