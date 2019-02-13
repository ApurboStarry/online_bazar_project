<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <style>
    body {
      height:400vh;
    }
  </style>
    <meta charset="utf-8">
    <title></title>
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
        $result = pg_query($conn, "select product_id, product_name, description, stock_quantity, price, discount, average_rating, no_of_reviews, company_name, colour, warranty, photo, hdd, ssd, processor_type, cpu_speed, operating_system, graphics_card, ram from laptop_and_desktop_view where category_id = 5");
        if (!$result) {
          echo "An error occurred.\n";
          exit;
        }

        function addToProducts($prdct_id) {
            echo "The Product id is $prdct_id";
        }
        
        echo "<br>";
        echo "<button><a href="."http://localhost:4000/www/dropDown.php".">Home</a></button>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h1>Macbooks</h1>";
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
          
          
          //echo "<td><a href=".""." onclick="."addToProducts($row[0])"." class="."deletebtn".">Delete</a></td>";
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
      }
    ?>

    

    <div class="filter">
        <form action="http://localhost:4000/www/filteredMacbook.php" method="post">
            <p>Filter By Brand</p>
            <input type="radio" name="brand" value="Xiaomi">Xiaomi 
            <input type="radio" name="brand" value="Samsung">Samsung 
            <input type="radio" name="brand" value="Huawei">Huawei
            <input type="radio" name="brand" value="ASUS">ASUS
            <input type="radio" name="brand" value="Apple">Apple
            

            <br>
            <br>

            <p>Filter By RAM</p>
            <input type="radio" name="ram" value=4>4
            <input type="radio" name="ram" value=8>8
            <input type="radio" name="ram" value=16>16
            
            
            <p>Filter By Storage Capacity(in TB)</p>
            <input type="radio" name="rom" value=1>1
            <input type="radio" name="rom" value=2>2

            <p>Filter By Colour</p>
            <input type="radio" name="colour" value="Black">Black
            <input type="radio" name="colour" value="White">White
            <input type="radio" name="colour" value="Gold">Gold
            <input type="radio" name="colour" value="Blue">Blue
            <input type="radio" name="colour" value="Grey">Grey
            <input type="radio" name="colour" value="Red">Red
            <input type="radio" name="colour" value="Green">Green
            <input type="radio" name="colour" value="Silver">Silver
            <input type="radio" name="colour" value="Brown">Brown
            <input type="radio" name="colour" value="Mirror Black">Mirror Black
            
            
            <p><input type="submit"></p>
        </form>
    </div>

    

  </body>
</html>
