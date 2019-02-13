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
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <h1>Choose the entity you want to change</h1>
        <input type="radio" name="entity" value="product_name">Product Name <br>
        <input type="radio" name="entity" value="description">Description <br>
        <input type="radio" name="entity" value="stock_quantity">Stock Quantity <br>
        <input type="radio" name="entity" value="price">Price <br>
        <input type="radio" name="entity" value="discount">Discount <br>
        <input type="radio" name="entity" value="company_name">Company Name <br>
        <input type="radio" name="entity" value="colour">Colur <br>
        <input type="radio" name="entity" value="warranty">Warranty <br>
        <input type="radio" name="entity" value="photo">Photo <br>
        <input type="radio" name="entity" value="ram">RAM <br>
        <input type="radio" name="entity" value="rom">ROM <br>
        <input type="radio" name="entity" value="processor_type">Processor Type <br>
        <input type="radio" name="entity" value="os">OS <br>
        <input type="radio" name="entity" value="gpu">GPU <br>
        <input type="radio" name="entity" value="description">Description <br>
        <input type="radio" name="entity" value="description">Description <br> <br> <br>

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

            $host        = "host = 127.0.0.1";
            $port        = "port = 5432";
            $dbname      = "dbname = online_bazar";
            $credentials = "user = postgres password=984621kk";
        
            $conn = pg_connect( "$host $port $dbname $credentials"  );
            if(!$conn) {
            echo "Error : Unable to open database\n";
            }
            //top deals
            $result = pg_query($conn, "select * from top_deals()");
            if (!$result) {
            echo "An error occurred.\n";
            exit;
            }
        }    

    ?>
</body>
</html>