<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    if(!isset($_POST["smtBtn"])) {
        ?>
        <div class="container">
            <form action="handler1.php" method="POST">
                <div class="mb-3">
                    <label for="name">Имя:</label>
                    <input type="text" name="name" class="form-control" placeholder="Введите имя">
                </div>
                <div class="mb-3">
                    <label for="surname">Фамилия:</label>
                    <input type="text" name="surname" class="form-control" placeholder="Введите фамилию">
                </div>
                <div class="mb-3">
                    <label for="userpswd">Пароль:</label>
                    <input type="text" name="userpswd" class="form-control" placeholder="Введите пароль:">
                </div>
                <div class="mb-3">
                    <input type="submit" name="smtBtn" class="btn btn-primary" value="Зарегистрироваться">
                </div>
            </form>
        </div>
        <?php
    }
    else {
        echo "<div>Привет, ".$_POST['name']." ".$_POST['surname']."!</div>";
        echo "<div>Ваш пароль: ".$_POST['userpswd'];
    }

?>

</body>
</html>