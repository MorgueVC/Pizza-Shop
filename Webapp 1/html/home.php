<?php
    require 'conn.php';
    session_start();

    if(!isset($_SESSION['user'])){
        header('location:index.php');
        exit(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Shop</title>
   <link rel="stylesheet" href="CSS/style.css">
    <script src="jquery3.6.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>
<header>
    <div class="header-wrapper">
	<div class="welcome-message">Hello <?php echo $_SESSION['user']; ?> <br> Welcome back</div>
        <div class="search-box">
            <button class="btn-search"><i class="fas fa-search"></i><span>&#x1F50D;</span></button>
            <input type="text" class="input-search" placeholder="Type to Search...">
        </div>
    </div>
</header>
<body class="background-index">
    <div class="banner-container">
        <img class="pizza-banner" src="Media/Group 3.png">
    </div>
    <div class="multi-button">
        <button class="fas fa-cut" onclick="window.location.href='products.php';"></i> &#127829; Pizza Funghi</button>
        <button class="fas fa-copy" onclick="window.location.href='products.php';"></i> &#127829; Pizza Pepperoni</button>
        <button class="fas fa-paste" onclick="window.location.href='products.php';"></i> &#127829; Pizza Margharita</button>
        <button class="fas fa-paste" onclick="window.location.href='products.php';"></i> &#127829; Pizza Shoarma</button>
        <button class="fas fa-paste" onclick="window.location.href='products.php';"></i> &#127839; See all &#8594;</button>
    </div>


    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="#">About</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
        </ul>
        <p>&copy;2024 Pizza Shop | All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>