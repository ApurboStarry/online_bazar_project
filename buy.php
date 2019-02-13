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
    <title>Buy</title>
</head>
<body>
        <br>
        <button><a href="http://localhost:4000/www/dropDown.php">Home</a></button>
        <br>
        <br>
    <form action="#" method="post">
        Purchase Quantity <input type="text" name="purchase_quantity"> <br> <br>
        Payment Method <input type="text" name="payment_method"> <br> <br>
        Shipping Address <input type="text" name="shipping_address"> <br> <br>
        Review Star <br>
        <input type="radio" name="review_star" value=1>1
        <input type="radio" name="review_star" value=2>2
        <input type="radio" name="review_star" value=3>3
        <input type="radio" name="review_star" value=4>4
        <input type="radio" name="review_star" value=5>5
        <br> <br>
        Review Comment <input type="text" name="review_comment"> <br> <br>
        
        <input type="submit" name="submit">
    </form>
     
    <?php
        $customer_id = (int)$_SESSION['customer_id'];
        $product_id = (int)$_SESSION['product_id'];

        if(isset($_POST['submit'])) {
            $purchase_quantity = (int)$_POST['purchase_quantity'];
            $payment_method = $_POST['payment_method'];
            $shipping_address = $_POST['shipping_address'];
            $review_star = (int)$_POST['review_star'];
            $review_comment = $_POST['review_comment'];

            $host        = "host = 127.0.0.1";
            $port        = "port = 5432";
            $dbname      = "dbname = online_bazar";
            $credentials = "user = postgres password=984621kk";
        
            $conn = pg_connect( "$host $port $dbname $credentials"  );
            if(!$conn) {
                echo "Error : Unable to open database\n";
            }
            
            $result = pg_query($conn, "insert into customer_order(customer_id, product_id, purchase_quantity, confirmation, order_date, shipping_date, payment_method, staff_id, shipping_address) values ($customer_id, $product_id, $purchase_quantity, true, current_date, null, '$payment_method', 1, '$shipping_address')");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }

            $result = pg_query($conn, "select currval(pg_get_serial_sequence('customer_order', 'order_id'))");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }  
            $row = pg_fetch_row($result);
            $order_id = $row[0];
            echo "<br>";
            echo "Order ID : ".$order_id;          

            $result = pg_query($conn, "insert into review(customer_id, product_id, star, comment, order_id) VALUES ($customer_id, $product_id, $review_star, '$review_comment', $order_id)");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }

            $result = pg_query($conn, "delete from cart where product_id = $product_id and customer_id = $customer_id");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }

            header("Location:http://localhost:4000/www/dropDown.php");
            exit();
        }
    ?>
</body>
</html>