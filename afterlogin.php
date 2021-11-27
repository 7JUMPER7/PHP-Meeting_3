<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./styles.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="color: white;">
        <?php
            if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
                echo "<p>Здравствуйте <b>".$_POST["username"]."</b></p>";
                echo "<p><b>Email: </b>".$_POST['email']."</p>";
                echo "<p><b>Password: </b>".$_POST['password']."</p>";
            } else {
                echo "Какой-то из параметров не передан.";
            }
        ?> 
    </div>
</body>
</html>