<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <button><a href="http://localhost:4000/www/dropDown.php">Home</a></button>
    <br>
    <br>
    <h1>Insert Mobile</h1>
    <br>
    <br>
    <form action="#" method="post">
        Product Name <input type="text"  name="product_name"/> <br> <br>
        Description <input type="text" name="description"/> <br> <br>
        Stock Quantity <input type="text" name="stock_quantity"/> <br> <br>
        Price <input type="text" name="price"/> <br> <br>
        Discount <input type="text" name="discount"/> <br> <br>
        Company Name <input type="text" name="company_name"/> <br> <br>
        Colour <input type="text" name="colour"/> <br> <br>
        Warranty <input type="text" name="warranty"/> <br> <br>
        Photo <input type="text" name="photo"/> <br> <br>
        RAM <input type="text" name="ram"/> <br> <br>
        ROM <input type="text" name="rom"/> <br> <br>
        Processor Type <input type="text" name="proc_type"/> <br> <br>
        Operating System <input type="text" name="op_sys"/> <br> <br>
        GPU <input type="text" name="gpu"/> <br> <br>
        <input type="submit" name="submit">
    </form>
    

    <?php
        if(isset($_POST['submit'])) {
            $product_name = $_POST['product_name'];
            $description = $_POST['description'];
            $catID = 1;
            $stock_quantity = (int)$_POST['stock_quantity'];
            $price = (float)$_POST['price'];
            $discount = (float)$_POST['discount'];
            $company_name = $_POST['company_name'];
            $colour = $_POST['colour'];
            $warranty = (float)$_POST['warranty'];
            $pic = $_POST['photo'];
            $ram = (int)$_POST['ram'];
            $rom = (int)$_POST['rom'];
            $proc_type = $_POST['proc_type'];
            $op_sys = $_POST['op_sys'];
            $gpu = $_POST['gpu'];


            $host        = "host = 127.0.0.1";
            $port        = "port = 5432";
            $dbname      = "dbname = online_bazar";
            $credentials = "user = postgres password=984621kk";
        
            $conn = pg_connect( "$host $port $dbname $credentials"  );
            if(!$conn) {
            echo "Error : Unable to open database\n";
            }
            //top deals
            $result = pg_query($conn, "select * from insert_into_mobile_tablet('$product_name', '$description', $catID, $stock_quantity, $price, $discount, '$company_name', '$colour', $warranty, '$pic', $ram, $rom, '$proc_type', '$op_sys', '$gpu')");
            if (!$result) {
            echo "An error occurred.\n";
            exit;
            }
            
        }
    ?>
</body>
</html>