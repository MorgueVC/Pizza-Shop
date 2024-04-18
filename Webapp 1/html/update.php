<?php
$connection = new PDO('mysql:dbname=db_login;host=mysql_db', 'root', 'rootpassword');

if (isset($_POST["bijwerken"])) {
    $sql = "UPDATE producten 
            SET itemName = :itemName, 
                Prijs = :Prijs, 
                Estimated_Delivery_Time = :Estimated_Delivery_Time 
            WHERE ProductCode = :ProductCode";

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(":itemName", $_POST['itemName']);
    $stmt->bindParam(":Prijs", $_POST['Prijs']);
    $stmt->bindParam(":Estimated_Delivery_Time", $_POST['Estimated_Delivery_Time']);
    $stmt->execute();

    header("Location: products.php");
    exit;
}
?>

<form method='post'>
    <h1>Edit Meal</h1>
    <h2><?php echo isset($producten['itemName']) ? $producten['itemName'] : ''; ?></h2>

    <div>
        <label>Item Name
            <input type="text" name="itemName"
                value="<?php echo isset($product['itemName']) ? $product['itemName'] : ''; ?>" placeholder="Name....">
        </label>
    </div>
    <div>
        <label>Price
            <input type="text" name="Prijs" value="<?php echo isset($product['Prijs']) ? $product['Prijs'] : ''; ?>"
                placeholder="Price....">
        </label>
    </div>
    <div>
        <label>Delivery Time
            <input type="text" name="Estimated_Delivery_Time"
                value="<?php echo isset($product['Estimated_Delivery_Time']) ? $product['Estimated_Delivery_Time'] : ''; ?>"
                placeholder="DT....">
        </label>
    </div>
    <div>
        <input type="submit" name="bijwerken" value="Submit Changes">
    </div>
</form>