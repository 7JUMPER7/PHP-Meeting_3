<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LR</title>
    <link href="./styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="LR.php" method="POST">
            <label for="R">R:
                <input type="number" name="R" required min="0" max="255">
            </label>
            <label for="G">G:
                <input type="number" name="G" required min="0" max="255">
            </label>
            <label for="B">B:
                <input type="number" name="B" required min="0" max="255">
            </label>
            <input type="submit" name="sbtn" value="Get color">
        </form>
        <?php
    if(isset($_POST['sbtn'])) {
        $r = $_POST['R'];
        $g = $_POST['G'];
        $b = $_POST['B'];
        $complementary = "rgb(".(255 - $r).", ".(255 - $g).", ".(255 - $b).")";
        echo "<span class='result' style='background-color: rgb($r, $g, $b); color: $complementary'>Test text</span>";
    }
    ?>
</div>
</body>
</html>