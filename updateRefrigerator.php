<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Refrigerator</title>
</head>
<body>
    <br>
    <button> <a href="http://localhost:4000/www/dropDown.php" >Home Page</a> </button>
    <br>
    <form action="#" method="post">
        <h1>Choose the entity you want to change</h1>
        <input type="radio" name="entity" value="product_name">Product Name <br>
        <input type="radio" name="entity" value="description">Description <br>
        <input type="radio" name="entity" value="stock_quantity">Stock Quantity <br>
        <input type="radio" name="entity" value="price">Price <br>
        <input type="radio" name="entity" value="discount">Discount <br>
        <input type="radio" name="entity" value="company_name">Company Name <br>
        <input type="radio" name="entity" value="colour">Colour <br>
        <input type="radio" name="entity" value="warranty">Warranty <br>
        <input type="radio" name="entity" value="photo">Photo <br>
        <input type="radio" name="entity" value="door_style">Door Style <br>
        <input type="radio" name="entity" value="capacity">Capacity <br>
        <input type="radio" name="entity" value="energy_star_rating">Energy Star Rating <br>
        <input type="radio" name="entity" value="features">Features <br>
        <input type="radio" name="entity" value="defrost_system">Defrost System <br>
        <input type="radio" name="entity" value="door_pattern">Door Pattern <br>
        <input type="radio" name="entity" value="shelf_type">Shelf Type <br>
        

        <h1>Write down associated change in the entity</h1> <br>
        <input type="text" name="updateValue">
        
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit']) and isset($_POST['updateValue'])) {
            $entity = $_POST['entity'];
            $updatedValue = $_POST['updateValue'];
            echo $entity;
            echo "<br>";
            echo $updatedValue;
            echo "<br>";
            echo $_SESSION['product_id'];
            $product_id = $_SESSION['product_id'];

            $host        = "host = 127.0.0.1";
            $port        = "port = 5432";
            $dbname      = "dbname = online_bazar";
            $credentials = "user = postgres password=984621kk";
        
            $conn = pg_connect( "$host $port $dbname $credentials"  );
            if(!$conn) {
            echo "Error : Unable to open database\n";
            }
            
            if($entity == "product_name" or $entity == "description" or $entity == "stock_quantity" or $entity == "price" or $entity == "discount" or $entity == "company_name" or $entity == "colour" or $entity == "warranty" or $entity == "photo") {
                if(gettype($updatedValue) == 'integer'){
                    $result = pg_query($conn, "update products set $entity=$updatedValue where product_id = $product_id");
                    if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                    }
                }else {
                    $result = pg_query($conn, "update products set $entity='$updatedValue' where product_id = $product_id");
                    if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                    }
                }
                
            }else {
                if(gettype($updatedValue) == 'integer'){
                    $result = pg_query($conn, "update refrigerator set $entity=$updatedValue where product_id = $product_id");
                    if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                    }
                }else {
                    $result = pg_query($conn, "update refrigerator set $entity='$updatedValue' where product_id = $product_id");
                    if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                    }
                }
            }
            
            
        }    

    ?>
</body>
</html>