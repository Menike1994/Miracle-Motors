<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Miracle Motors</title>

        <link rel="stylesheet" href="style1.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" type="img/x-icon" href="logoM.png">
    </head>
    <body>
        <header>
            <div class="nav container">
                <i class='bx bx-menu' id="menu-icon"></i>
                <a href="#" class="logo">Miracle<span>Motors</span></a>
                <ul class="navbar">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="views/gallery.html">Vehicle</a></li>
                    <li><a href="views/Aboutus">About</a></li>
                    <li><a href="views/contactUs">Contact</a></li>
                    <li><a href="views/accounts/login.php">Login</a></li>
                    <li><a href="views/accounts/signup.php">Sign up</a></li>
                </ul>

                <i class='bx bx-search' id="search-icon"></i>
                <iv class="search-box container">
                    <input type="search" name="" id="" placeholder="Search here....">
                </iv>
            </div>
        </header>
        <section class="home" id="home">
            <div class="home-text">
                <h1>We Have Everything<br>Your<span> Vehicle </span>Need</h1>
                <p style="color: black;">get your ride now<br> enjoy with your family</p>
                <br>
                <a href="#" class="btn">Discover Now</a>
            </div>
        </section>
        <section class="cars" id="cars">
            <div class="heading">
                <span>All Vehicles</span>
                <h1>We have all types of vehicle</h1>
                <p>get your own vehicle now</p>
            </div>
            <div class="cars-container container">
                <div class="box">
                    <img src="img/homeimg/car1.jpg" alt="">
                    <h2>Porche</h2>
                </div>
                <div class="box">
                    <img src="img/homeimg/car2.jpg" alt="">
                    <h2>Audi R8</h2>
                </div>
                <div class="box">
                    <img src="img/homeimg/car3.jpg" alt="">
                    <h2>Audi</h2>
                </div>
                <div class="box">
                    <img src="img/homeimg/car4.jpg" alt="">
                    <h2>Audi</h2>
                </div>
                <div class="box">
                    <img src="img/homeimg/car5.jpg" alt="">
                    <h2>Porche</h2>
                </div>
                <div class="box">
                    <img src="img/homeimg/car6.jpg" alt="">
                    <h2>Ford Mustang GT</h2>
                </div>
            </div>
        </section>
        <?php require 'views/webFooter.php';?>
        <script src="js/main.js"></script>
    </body>
    </html>


