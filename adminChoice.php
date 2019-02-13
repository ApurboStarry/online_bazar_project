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
    <button> <a href="http://localhost:4000/www/dropDown.php" >Home Page</a> </button>
    <br>
    <br>
    <form action="#" method="post">
        <h1>Select Your Choice</h1>
        <input type="radio" name="choice" value="insert" >Insert
        <input type="radio" name="choice" value="update">Update
        <input type="radio" name="choice" value="delete">Delete <br> <br>
        <input type="submit" name="submit" >
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $choice = $_POST['choice'];
            if($choice == "insert") {
                header("Location:http://localhost:4000/www/iAmAnAdmin.php");
                exit();
            }
            else if($choice == "update") {
                header("Location:http://localhost:4000/www/updateAsAdmin.php");
                exit();
            }
            else if($choice == "delete") {
                header("Location:http://localhost:4000/www/deleteAsAdmin.php");
                exit();
            }
                
            
        }
    ?>
</body>
</html>