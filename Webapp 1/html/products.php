<link rel="stylesheet" href="CSS/style.css">
<header>
<div class="search-box">
            <button class="btn-search"><i class="fas fa-search"></i><span>&#x1F50D;</span></button>
            <input type="text" class="input-search" placeholder="Type to Search...">
        </div>
</header>
<body>
<?php
    $connection = new PDO(dsn:'mysql:dbname=db_login;host=mysql_db', username: 'root' , password: 'rootpassword');
    
    $sql = "SELECT * FROM `producten`";
    $stmt = $connection->query($sql);

    while($product = ($stmt->fetch())) {
        echo "<div class='itemName'>" .  $product['itemName'] . "</div>";

        echo "<div class='Prijs'>" .  $product['Prijs'] . "</div>";

        echo "<div class='ProductCode'>" .  $product['ProductCode'] . "</div>";

        echo "<div class='est-delivery'>" .  $product['Estimated_Delivery_Time'] . "</div>";
    }
?>
<a class="edit-button" href="editmeal.php">Click here to edit meal</a>
</body>