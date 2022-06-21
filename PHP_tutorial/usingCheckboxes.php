<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using_Checkboxes</title>
</head>
<body>
    <form action="usingCheckboxes.php" method="post">
        Apples <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Peers <input type="checkbox" name="fruits[]" value="peers"> <br>
        <input type="submit">
    </form>

    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[1]
    ?>
</body>
</html>