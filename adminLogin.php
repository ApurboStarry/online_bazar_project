<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        UserName<input type="text" name="uName" placeholder="username"> <br> <br>
        Password<input type="password" name="pass" placeholder="password"> <br> <br>
        <input type="submit" name="submit" value="Login"/>
    </form>

    <?php
        if(isset($_POST["submit"])) {
            $uname = $_POST["uName"];
            $pass = $_POST["pass"];
            echo $uname;
            echo "<br>";
            echo $pass;

            if($uname == "HasinApurbo" && $pass == "1234") {
                header("Location:http://localhost:4000/www/adminChoice.php");
                exit();
            }else {
                echo "Invalid Input ! \n Try Again";
            }
        }
    ?>
</body>
</html>