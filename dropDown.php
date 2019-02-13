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
    <title>Online Bazar</title>
    <link rel="stylesheet" type="text/css" media="screen" href="one.css" />
    <style>
        body {
            background:url("abstract-attractive-backdrop-988872.jpg") center no-repeat;
            height:400vh;
            background-size:cover;
        }

        .menudropdown1 {
            width:100%;
            height:100px;
            margin:0px auto;
        }

        .menudropdown1 ul {
            padding:0px;
        }

        .menudropdown1 ul li {
            float:left;
            background-color:black;
            color:white;
            width:250px;
            height:50px;
            line-height:50px;
            font-size:16px;
            text-align:center;
            list-style:none;
            opacity:0.8;
        }

        .menudropdown1 ul li ul {
            display:none;
        }

        .menudropdown1 ul li:hover > ul {
            display:block;
        }

        .menudropdown1 ul li:hover {
            background-color:#32CD32;
            opacity:0.9;
        }

        .menudropdown1 ul li ul li {
            position:relative;
        }

        .menudropdown1 ul li ul li ul {
            position:absolute;
            left:250px;
            top:0px;
        }

        .menudropdown1 ul li ul li ul li ul {
            position:absolute;
            left:250px;
            top:0px;
        }

    </style>
</head>
<body>
    <h1>Online Bazar </h1>
    <div class='menudropdown1'>
        <ul>
            <li>Shop By Category
                <ul>
                    <li><a href="http://localhost:4000/www/electronicDevices.php" style="color:white" >Electronic Devices</a>
                        <ul>
                            <li> <a href="http://localhost:4000/www/mobiles.php" style="color:white">Mobiles</a></li>
                            <li><a href="http://localhost:4000/www/tablets.php" style="color:white">Tablets</a></li>
                            <li><a href="http://localhost:4000/www/laptop.php" style="color:white">Laptop</a>
                                <ul>
                                    <li><a href="http://localhost:4000/www/laptopsAndNotebooks.php" style="color:white">Laptops and Notebooks</a></li>
                                    <li><a href="http://localhost:4000/www/gamingLaptops.php" style="color:white">Gaming Laptops</a></li>
                                    <li><a href="http://localhost:4000/www/macbook.php" style="color:white">Macbook</a></li>
                                </ul>
                            </li>
                            <li>Desktops
                                <ul>
                                    <li>All in One</li>
                                    <li>Gaming Desktops</li>
                                </ul>
                            </li>
                            <li>Gaming Consoles
                                <ul>
                                    <li>Playstation Consoles</li>
                                    <li>Playstation Games</li>
                                    <li>Playstation Controller</li>
                                    <li>XBox Games</li>
                                </ul>
                            </li>
                            <li>DSLR</li>
                            <li>Camera Lenses
                                <ul>
                                    <li>DSLR Lenses</li>
                                    <li>Camera Lenses</li>
                                    <li>Lense Accessories</li>
                                </ul>
                            </li>
                            <li>Action/Video Cameras
                                <ul>
                                    <li>Sports and Action Camera</li>
                                    <li>Video Camera</li>
                                </ul>
                            </li>
                            <li>Security Cameras</li>
                            
                        </ul>
                    </li>
                    <li>Electronic Accesories
                        <ul>
                            <li>Mobile Accesories
                                <ul>
                                    <li>Phone Cases</li>
                                    <li>Power Banks</li>
                                    <li>Cables and Converters</li>
                                    <li>Wireless Chargers</li>
                                </ul>
                            </li>
                            <li>Audio
                                <ul>
                                    <li>Headphones and Headsets</li>
                                    <li>Home Entertainment</li>
                                    <li>Bluetooth Speakers</li>
                                </ul>
                            </li>
                            <li>Wearable
                                <ul>
                                    <li>Smart Watches</li>
                                    <li>Virtual Reality</li>
                                </ul>
                            </li>
                            <li>Console Accessories
                                <ul>
                                    <li>Playstation Controllers</li>
                                    <li>Other Gaming Controllers</li>
                                </ul>
                            </li>
                            <li>Camera Accesories
                                <ul>
                                    <li>Memory Card</li>
                                    <li>Lenses</li>
                                    <li>Tripods and Monopods</li>
                                    <li>Camera Cases and Covers</li>
                                    <li>Lighting and Studio Equipments</li>
                                    <li>Dry Box</li>
                                    <li>Batteries</li>
                                </ul>
                            </li>
                            <li>Computer Accesories
                                <ul>
                                    <li>Monitors</li>
                                    <li>Mouse</li>
                                    <li>PC Audio</li>
                                    <li>Keyboards</li>
                                </ul>
                            </li>
                            <li>Storage
                                <ul>
                                    <li>External Hard Drives</li>
                                    <li>Internal Hard Drives</li>
                                    <li>Flash Drives</li>
                                    <li>OTG Drives</li>
                                </ul>
                            </li>
                            <li>Printers
                                <ul>
                                    <li>Printers</li>
                                    <li>Ink and Toners</li>
                                    <li>Printer Stands</li>
                                </ul>
                            </li>
                            <li>Computer Components
                                <ul>
                                    <li>Graphics Card</li>
                                    <li>Desktop Casing</li>
                                    <li>Motherboards</li>
                                    <li>RAM</li>
                                    <li>Processors</li>
                                    <li>Fans and Heatsinks</li>
                                </ul>
                            </li>
                            <li>Network Components
                                <ul>
                                    <li>Access Points</li>
                                    <li>MODEMs</li>
                                    <li>Network Interface Cards</li>
                                    <li>Network Switches</li>
                                    <li>Routers</li>
                                    <li>Wireless USB Adapters</li>
                                </ul>
                            </li>
                            <li>Software
                                <ul>
                                    <li>Educational Media</li>
                                    <li>Operating System</li>
                                    <li>PC Games</li>
                                    <li>Security Software</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>TV and Home Appliances
                        <ul>
                            <li>Televisions
                                <ul>
                                    <li>Smart Television</li>
                                    <li>LED Television</li>
                                    <li>OLED Television</li>
                                </ul>
                            </li>
                            <li>Home Audio
                                <ul>
                                    <li>Soundbars</li>
                                    <li>Home Entertainment</li>
                                    <li>Portable Players</li>
                                </ul>
                            </li>
                            <li>Television Accesories
                                <ul>
                                    <li>TV Receivers</li>
                                    <li>Projectors</li>
                                    <li>TV Remote Controllers</li>
                                    <li>Cables</li>
                                    <li>Wallmount and Protectors</li>
                                    <li>Bluray/DVD Players</li>
                                </ul>
                            </li>
                            <li>Large Appliances
                                <ul>
                                    <li>Refrigerators</li>
                                    <li>Freegers</li>
                                    <li>Washing Machine</li>
                                    <li>Microwave Oven</li>
                                    <li>Electric Oven</li>
                                    <li>Hoods</li>
                                    <li>Cooktop and Range</li>
                                </ul>
                            </li>
                            <li>Small Kitchen Appliances
                                <ul>
                                    <li>Rice Cooker</li>
                                    <li>Blender, Mixer and Grinder</li>
                                    <li>Electric Kettle</li>
                                    <li>Juice and Fruit Extractor</li>
                                    <li>Fryer</li>
                                    <li>Coffee Machine</li>
                                    <li>Pressure Cooker</li>
                                    <li>Sandwitch Maker</li>
                                </ul>
                            </li>
                            <li>Cooling and Heating
                                <ul>
                                    <li>Fan</li>
                                    <li>Air Conditioner</li>
                                    <li>Air Purifier</li>
                                    <li>Air Cooler</li>
                                    <li>Dehumidifier</li>
                                    <li>Water Heater</li>
                                </ul>
                            </li>
                            <li>Vacuums and Floor Care
                                <ul>
                                    <li>Vaccuum Cleaner</li>
                                    <li>Steam Mops</li>
                                    <li>Vaccuum Cleaner Parts</li>
                                </ul>
                            </li>
                            <li>Ironing and Sewing Machine
                                <ul>
                                    <li>Irons</li>
                                    <li>Sewing Machine</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>Babies and Toys
                        <ul>
                            <li>Diapering and Potty
                                <ul>
                                    <li>Cloth Diapers and Accesories</li>
                                    <li>Diaper Bags</li>
                                    <li>Wipes and Holders</li>
                                    <li>Disposable Diapers</li>
                                </ul>
                            </li>
                            <li>Baby Gear</li>
                            <li>Baby Personal Care</li>
                            <li>Clothing and Accesories</li>
                            <li>Nursery</li>
                            <li>Feeding</li>
                            <li>Toys and Games</li>
                            <li>Baby and Toddler Toys</li>
                            <li>Remote Control and Vehicles</li>
                            <li>Sports and Outdoor Play</li>
                            <li>Traditional Games</li>
                        </ul>
                    </li>
                    <li>Groceries and Pets
                        <ul>
                            <li>India Gate</li>
                            <li>Kutub Minar</li>
                            <li>Red Fort</li>
                        </ul>
                    </li>
                    <li>Home and Lifestyle</li>
                    <li>Men's Fasion</li>
                    <li>Watches and Accessories</li>
                    <li>Sports and Outdoors</li>
                    <li>Automotive and Motorbike</li>
                    
                </ul>
            </li>
            <li> <a href="http://localhost:4000/www/adminLogin.php" style="color:white">I am an Admin</a></li>
            <li><a href="http://localhost:4000/www/cart.php" style="color:white">Cart</a></li>
            <li>Contact Us</li>
            <li> <a href="http://localhost:4000/www/login.php" style="color:white">Login</a></li>
        </ul>
    </div>

    <?php
        
        echo "<br>";
        echo "<br>";
        $var = (int)$_SESSION['customer_id'];
        echo $var;
        echo "<br>";
        echo "<br>";

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
        
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h1>Top Deals</h1>";
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
        
        //top rated items
        $result = pg_query($conn, "select * from top_rated()");
        if (!$result) {
          echo "An error occurred.\n";
          exit;
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h1>Top Rated Items</h1>";
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

        //recommended for you
        $result = pg_query($conn, "select * from recommended_for_you($var)");
        if (!$result) {
          echo "An error occurred.\n";
          exit;
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h1>Recommended For You</h1>";
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