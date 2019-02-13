<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        Product ID : <input type="text" name="pid"> <br> <br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])) {
            echo $_POST['pid'];
            echo "<br>";
            $product_id = (int)$_POST['pid'];

            $host        = "host = 127.0.0.1";
            $port        = "port = 5432";
            $dbname      = "dbname = online_bazar";
            $credentials = "user = postgres password=984621kk";
        
            $conn = pg_connect( "$host $port $dbname $credentials"  );
            if(!$conn) {
            echo "Error : Unable to open database\n";
            }
            //top deals
            $result = pg_query($conn, "select category_id from products where product_id=$product_id");
            if (!$result) {
            echo "An error occurred.\n";
            exit;
            }

            $row = pg_fetch_row($result);
            $category_id = $row[0];
            echo $category_id;

            $_SESSION["product_id"] = $product_id;


            if($category_id == NULL) {
                echo "<br>";
                echo "ERROR!!!!No such Product!!!";
            }else if($category_id == 1 or $category_id == 2) {
                header("Location:http://localhost:4000/www/updateMobileTablet.php");
                exit();
            }else if ($category_id == 3 or $category_id == 4 or $category_id == 5 or $category_id == 6 or $category_id == 7) {

            }else if ($category_id == 14 or $category_id == 16 or $category_id == 17) {

            }else if($category_id == 18 or $category_id == 19) {

            }else if($category_id >= 31 and $category_id <= 37) {

            }else {

            }
        }
    ?>
</body>
</html>