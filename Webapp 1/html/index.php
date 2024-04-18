<?php
   
	$connection = new PDO(dsn:'mysql:dbname=db_login;host=mysql_db', username: 'root' , password: 'rootpassword');
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
	<a class="login-button" href="loginpage.php">Click here to login</a>
    <div class="header-wrapper">
	<div class="welcome-message">Hello Customer <br> Welcome back</div>
    
    <div class="search-bar">
    <form action="" method="GET" name="">
        <table>
            <tr>
            <td><input type="text" name="k" placeholder="Search for something..." autocomplete="off"></td>
            <td><input type="submit" name="" value="Search"></td>
        </tr>
        </table>
    </form>
    </div>
    </div>
</header>
<body class="background-index">
    <?php 
	 $sql = "SELECT * FROM `producten`";
	$stmt = $connection->query($sql);
	?>
	<img class="funghi" src="Media/pizza-funghi.jpg">
	<img class="salami" src="Media/salami.jpg">
	<img class="shoarma" src="Media/shoarma.jpg">


	<?php
	 while($product = ($stmt->fetch())) {

		echo "<div class='itemName-index'>" . $product['itemName'] . " &#127829;</div>";

        echo "Price:";
        echo "<div class='Prijs-index'>" .  $product['Prijs'] . "&#8364;</div>";

        echo "Code:";
        echo "<div class='ProductCode-index'>" .  $product['ProductCode'] . "&#9997;</div>";

        echo "Delivery Time:";
        echo "<div class='est-delivery-index'>" .  $product['Estimated_Delivery_Time'] . " &#x1F550;</div>";

       
        ?>
        <div></div>
        <?php
     
    }
?>

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