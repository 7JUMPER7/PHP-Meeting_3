<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
    <link href="./styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="./afterlogin.php" method="POST">
            <label for="username">Username:
                <input type="text" name="username">
            </label>
            <label for="email">Email:
                <input type="email" name="email">
            </label>
            <label for="password">Password:
                <input type="password" name="password">
            </label>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>