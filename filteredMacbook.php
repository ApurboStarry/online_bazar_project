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
    <link rel="stylesheet" type="text/css" media="screen" href="one.css" />
</head>
<body>
    <?php

        $host        = "host = 127.0.0.1";
        $port        = "port = 5432";
        $dbname      = "dbname = online_bazar";
        $credentials = "user = postgres password=984621kk";

        $conn = pg_connect( "$host $port $dbname $credentials"  );
        if(!$conn) {
        echo "Error : Unable to open database\n";
        }

        function addToProducts($prdct_id) {
            echo "The Product id is $prdct_id";
        }

        if(isset($_POST['brand'])) {
            $brand = $_POST['brand'];
        }else {
            $brand = NULL;
        }

        if(isset($_POST['ram'])) {
            $ram = (int)$_POST['ram'];
        }else {
            $ram = NULL;
        }

        if(isset($_POST['rom'])) {
            $rom = (int)$_POST['rom'];
        }else {
            $rom = NULL;
        }

        if(isset($_POST['colour'])) {
            $colour = $_POST['colour'];
        }else {
            $colour = NULL;
        }

        

        if($brand != NULL and $ram != NULL and $rom != NULL and $colour != NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and ram = $ram and hdd = $rom and company_name = '$brand' and colour = '$colour'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand != NULL and $ram != NULL and $rom != NULL and $colour == NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and ram = $ram and hdd = $rom and company_name = '$brand'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand != NULL and $ram != NULL and $rom == NULL and $colour != NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and ram = $ram and company_name = '$brand' and colour = '$colour'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand != NULL and $ram != NULL and $rom == NULL and $colour == NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and ram = $ram and company_name = '$brand'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand != NULL and $ram == NULL and $rom != NULL and $colour != NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and hdd = $rom and company_name = '$brand' and colour = '$colour'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand != NULL and $ram == NULL and $rom != NULL and $colour == NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and hdd = $rom and company_name = '$brand'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand != NULL and $ram == NULL and $rom == NULL and $colour != NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and company_name = '$brand' and colour = '$colour'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand != NULL and $ram == NULL and $rom == NULL and $colour == NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and company_name = '$brand'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand == NULL and $ram != NULL and $rom != NULL and $colour != NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and ram = $ram and hdd = $rom and colour = '$colour'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand == NULL and $ram != NULL and $rom != NULL and $colour == NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and ram = $ram and hdd = $rom");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand == NULL and $ram != NULL and $rom == NULL and $colour != NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and ram = $ram and colour = '$colour'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand == NULL and $ram != NULL and $rom == NULL and $colour == NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and ram = $ram");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand == NULL and $ram == NULL and $rom != NULL and $colour != NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and hdd = $rom and colour = '$colour'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand == NULL and $ram == NULL and $rom != NULL and $colour == NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and hdd = $rom");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }
        else if($brand == NULL and $ram == NULL and $rom == NULL and $colour != NULL) {
            $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5 and colour = '$colour'");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }
        }

        echo "<br>";
        echo "<button><a href="."http://localhost:4000/www/dropDown.php".">Home</a></button>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h1>Showing Filtered Results on All Kind Of Laptops</h1>";
        echo "<br>";
        echo "<br>";
        

        echo "<table class = "."blueTable"."><thead><tr>";
        echo "<th>Product_Name</th>";
        echo "<th>Description</th>";
        echo "<th>Stock quantity</th>";
        echo "<th>Value</th>";
        echo "<th>Discount</th>";
        echo "<th>Average Rating</th>";
        echo "<th>Reviews</th>";
        echo "<th>Company</th>";
        echo "<th>Colour</th>";
        echo "<th>Warranty</th>";
        echo "<th>Photo</th>";
        echo "<th>HDD</th>";
        echo "<th>SSD</th>";
        echo "<th>Processor Type</th>";
        echo "<th>CPU Speed</th>";
        echo "<th>OS</th>";
        echo "<th>GPU</th>";
        echo "<th>RAM</th>";
        echo "<th>Buy</th>";
        
        echo "</tr></thead><tbody>";
        
        //echo "<br />\ncustomer_id  location_id  first_name  last_name";
        while ($row = pg_fetch_row($result)) {
          echo "<tr>";
          echo "<td>$row[1]</td>";
          echo "<td>$row[2]</td>";
          echo "<td>$row[3]</td>";
          echo "<td>$row[4]</td>";
          echo "<td>$row[5]</td>";
          echo "<td>$row[6]</td>";
          echo "<td>$row[7]</td>";
          echo "<td>$row[8]</td>";
          echo "<td>$row[9]</td>";
          echo "<td>$row[10]</td>";
          echo "<td>$row[11]</td>";
          echo "<td>$row[12]</td>";
          echo "<td>$row[13]</td>";
          echo "<td>$row[14]</td>";
          echo "<td>$row[15]</td>";
          echo "<td>$row[16]</td>";
          echo "<td>$row[17]</td>";
          echo "<td>$row[18]</td>";
          
          echo "<td><form action='#' method='post'> <button type='submit' name='sub' value=$row[0]>Add To Cart</button> </form></td>";
          
          echo "</tr>";
          //echo "<p>$row[0]     $row[1]       $row[2]       $row[3]</p>";
          //echo "<br />\n";
        }
        echo "</tbody>";
        echo "</table>";
        echo "<br>";
        echo "<br>";
        
    ?>

    <?php
      if(isset($_POST['sub'])) {
        echo $_POST['sub'];
        $cid = $_SESSION['customer_id'];
        $pid = $_POST['sub'];
        $qry = pg_query($conn, "insert into cart(customer_id, product_id) VALUES ($cid, $pid)");
        if (!$qry) {
          echo "An error occurred.\n";
          exit;
        }
        header("Location:http://localhost:4000/www/cart.php");
        exit();
      }
    ?>

</body>
</html>