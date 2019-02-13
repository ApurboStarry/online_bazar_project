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
        
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])) {
            echo $_POST['entity'];
        }    

    ?>
</body>
</html>