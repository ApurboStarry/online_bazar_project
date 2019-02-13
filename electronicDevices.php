<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
        $result = pg_query($conn, "select * from electronic_devices()");
        if (!$result) {
          echo "An error occurred.\n";
          exit;
        }
        
        echo "<br>";
        echo "<button><a href="."http://localhost:4000/www/dropDown.php".">Home</a></button>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h1>Following are products of electronic devices</h1>";
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
        
        echo "</tr></thead><tbody>";
        
        //echo "<br />\ncustomer_id  location_id  first_name  last_name";
        while ($row = pg_fetch_row($result)) {
          echo "<tr>";
          echo "<td>$row[0]</td>";
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
          
          echo "</tr>";
          //echo "<p>$row[0]     $row[1]       $row[2]       $row[3]</p>";
          //echo "<br />\n";
        }
        echo "</tbody>";
        echo "</table>";
        echo "<br>";
        echo "<br>";
    ?>
  </body>
</html>
