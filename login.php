<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login or Registration Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form" action="login.php" method="post">
                <input type="text" placeholder="firstName" name="firstName">
                <input type="text" placeholder="lastName" name="lastName">
                <input type="text" placeholder="phone number" name="phoneNumber">
                <input type="text" placeholder="userName" name="userName">
                <input type="password" placeholder="password" name="password">
                <input type="text" placeholder="email" name="email">
                <input type="text" placeholder="houseNumber" name="houseNumber">
                <input type="text" placeholder="houseName" name="houseName">
                <input type="text" placeholder="street" name="street">
                <input type="text" placeholder="city" name="city">
                <input type="text" placeholder="postalCode" name="postalCode">
                <input type="text" placeholder="country" name="country">
                
                <input type="submit" name="register" value="Register"/>
                <p class="message">Already Registered?<a href="#" style="color:white">Login</a></p>
            </form>

            <form class="login-form" action="#" method="post">
                <input type="text" name="uName" placeholder="username">
                <input type="password" name="pass" placeholder="password">
                <input type="submit" name="submit" value="Login"/>
                <p class="message">Not Registered? <a href="#" style="color:white">Register</a></p>
            </form>
            <button> <a href="http://localhost:4000/www/dropDown.php" style="color:white">Home Page</a> </button>
        </div>
        
    </div>
    <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>

    <script>
        $('.message a').click(function() {
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>

    <?php

        $host        = "host = 127.0.0.1";
        $port        = "port = 5432";
        $dbname      = "dbname = online_bazar";
        $credentials = "user = postgres password=984621kk";

        $conn = pg_connect( "$host $port $dbname $credentials"  );
        if(!$conn) {
        echo "Error : Unable to open database\n";
        }

        if(isset($_POST['register'])) {
            echo $_POST["firstName"];
            echo "<br>";
            echo $_POST["lastName"];
            echo "<br>";
            echo $_POST["phoneNumber"];
            echo "<br>";
            echo $_POST["userName"];
            echo "<br>";
            echo $_POST["password"];
            echo "<br>";
            echo $_POST["email"];
            echo "<br>";
            echo $_POST["houseNumber"];
            echo "<br>";
            echo $_POST["houseName"];
            echo "<br>";
            echo $_POST["street"];
            echo "<br>";
            echo $_POST["city"];
            echo "<br>";
            echo $_POST["postalCode"];
            echo "<br>";
            echo $_POST["country"];
            echo "<br>";

            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $phoneNumber = $_POST["phoneNumber"];
            $userName = $_POST["userName"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $houseNumber = $_POST["houseNumber"];
            $houseName = $_POST["houseName"];
            $street = $_POST["street"];
            $city = $_POST["city"];
            $postalCode = $_POST["postalCode"];
            $country = $_POST["country"];
            $result = pg_query($conn, "select * from insert_into_customer('$firstName', '$lastName', '$phoneNumber', '$userName', '$password', '$email', '$houseNumber', '$houseName', '$street', '$city', $postalCode, '$country')");
            if($result) {
                $res = pg_query($conn, "select * from currval(pg_get_serial_sequence('customer', 'customer_id'))");
                $row = pg_fetch_row($result);
                $_SESSION["customer_id"] = $row[0];
                echo "<script>window.location = 'http://localhost:4000/www/dropDown.php'</script>";
            }

        }

        if(isset($_POST['submit'])) {
            echo $_POST['uName'];
            echo "<br>";
            echo $_POST['pass'];
            $username = $_POST['uName'];
            $passWord = $_POST['pass'];

            $res = pg_query($conn, "select customer_id from customer where user_name = '$username' and password = '$passWord'");
            if($row = pg_fetch_row($res)) {
                //echo "Res is not null";
                $_SESSION["customer_id"] = $row[0];
                echo "<script>window.location = 'http://localhost:4000/www/dropDown.php'</script>";
            }else {
                echo "login failed try again";
                //exit();
            }
        }
    ?>
</body>
</html>