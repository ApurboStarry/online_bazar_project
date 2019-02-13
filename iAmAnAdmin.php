<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="adminPanel.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <form action="#" method="post">
            <br>
            <br>
            <h1>Select Category1</h1>
            <br>
            <select name="category1">
                <option value="Electronic Devices">Electronic Devices</option>
                <option value="Electronic Accesories">Electronic Accesories</option>
                <option value="TV and Home Appliances">TV and Home Appliances</option>
                <option value="Babies and Toys">Babies and Toys</option>
                <option value="Groceries and Pets">Groceries and Pets</option>
                <option value="Home and Lifestyle">Home and Lifestyle</option>
                <option value="Men's Fasion">Men's Fasion</option>
                <option value="Watches and Accessories">Watches and Accessories</option>
                <option value="Sports and Outdoors">Sports and Outdoors</option>
                <option value="Automotive and Motorbike">Automotive and Motorbike</option>
            </select>

            <br>
            <br>
            <h1>Select Category2</h1>
            <select name="category2">
                <option value="Mobiles">Mobiles</option>
                <option value="Tablets">Tablets</option>
                <option value="Laptops">Laptops</option>
                <option value="Desktops">Desktops</option>
                <option value="Gaming Consoles">Gaming Consoles</option>
                <option value="DSLR">DSLR</option>
                <option value="Camera Lenses">Camera Lenses</option>
                <option value="Action/Video Cameras">Action/Video Cameras</option>
                <option value="Security Cameras">Security Cameras</option>
            </select>

            <br>
            <br>
            <h1>Select Category2</h1>
            <select name="category3">
                <option selected="selected">NULL</option>
                <option value="Laptops and Notebooks">Laptops and Notebooks</option>
                <option value="Gaming Laptops">Gaming Laptops</option>
                <option value="Macbook">Macbook</option>
                <option value="All in One">All in One</option>
                <option value="Gaming Desktops">Gaming Desktops</option>
                <option value="Playstation Consoles">Playstation Consoles  </option>
                <option value="Playstation Games">Playstation Games</option>
                <option value="Playstation Controller">Playstation Controller</option>
                <option value="XBox Games">XBox Games</option>
                <option value="DSLR Lenses">DSLR Lenses</option>
                <option value="Camera Lenses">Camera Lenses</option>
                <option value="Lense Accessories">Lense Accessories</option>
                <option value="Sports and Action Camera">Sports and Action Camera</option>
                <option value="Video Camera">Video Camera</option>
                
            </select>


            <br>
            <br>
            <input type="submit">
        </form>
    </div>

    <?php
        if(isset($_POST['category1'])){
            $selected_val1 = $_POST['category1'];
        }
        if(isset($_POST['category2'])){
            $selected_val2 = $_POST['category2'];
        }
        if(isset($_POST['category3'])){
            $selected_val3 = $_POST['category3'];
        }

        $host        = "host = 127.0.0.1";
        $port        = "port = 5432";
        $dbname      = "dbname = online_bazar";
        $credentials = "user = postgres password=984621kk";
     
        $conn = pg_connect( "$host $port $dbname $credentials"  );
        if(!$conn) {
           echo "Error : Unable to open database\n";
        }
        //top deals
        $result = pg_query($conn, "select category_id from category where category1='$selected_val1' and category2 = '$selected_val2' and category3 = '$selected_val3'");
        if (!$result) {
          echo "An error occurred.\n";
          exit;
        }
        $row = pg_fetch_row($result);
        $cat_id = $row[0];
        echo $cat_id;
        
        if($cat_id == 1) {
            header("Location:http://localhost:4000/www/insertMobiles.php");
            exit();
        }else if ($cat_id == 2) {
            header("Location:http://localhost:4000/www/insertTablets.php");
            exit();
        }else if ($cat_id == 3) {
            header("Location:http://localhost:4000/www/insertLaptopAndNotebook.php");
            exit();
        }else if ($cat_id == 4) {
            header("Location:http://localhost:4000/www/insertGamingLaptop.php");
            exit();
        }else if ($cat_id == 5) {
            header("Location:http://localhost:4000/www/insertMacbook.php");
            exit();
        }
    ?>
</body>
</html>