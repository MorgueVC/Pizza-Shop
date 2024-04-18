<link rel="stylesheet" href="CSS/style.css">
<header>
<a class="edit-button" href="addmeal.php">Click here to add a meal</a>
<a class="index-button" href="index.php">Click here to return to index</a>
<div class="search-box">
            <button class="btn-search"><i class="fas fa-search"></i><span></span></button>
            <input type="text" class="input-search" placeholder="Type to Search...">
            <div class="click-to">Click the green bubble to search...</div>
        </div>
</header>
<body>
<?php
    $connection = new PDO(dsn:'mysql:dbname=db_login;host=mysql_db', username: 'root' , password: 'rootpassword');
    
    $sql = "SELECT * FROM `producten`";
    $stmt = $connection->query($sql);

    while($product = ($stmt->fetch())) {

        echo "<div class='itemName'>" .  $product['itemName'] . "</div>";
      
        echo "Price:";
        echo "<div class='Prijs'>" .  $product['Prijs'] . "</div>";

        echo "Code:";
        echo "<div class='ProductCode'>" .  $product['ProductCode'] . "</div>";

        echo "Delivery Time:";
        echo "<div class='est-delivery'>" .  $product['Estimated_Delivery_Time'] . "</div>";

        echo "<a class='edit-button-update' href='update.php?ProductCode=" . $product['ProductCode'] . "'>Click here to edit a meal</a>";
        ?>
        <div></div>
        <?php
        echo "<a class='edit-button-update' href='delete.php?ProductCode=" . $product['ProductCode'] . "'>Click here to delete this meal</a>";
     
    }
     
?>
</body>