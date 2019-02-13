<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="#" method="post"> <button type="submit" name="sub" value=4>Add To Cart</button> </form>

    <?php
        if(isset($_POST['sub'])) {
            echo $_POST['sub'];
        }
    ?>
</body>
</html>

