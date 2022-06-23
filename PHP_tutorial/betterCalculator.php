<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="betterCalculator.php" method="post">
        First Number: <input type="number" step="0.1" name="num1">
        Opperator: <input type="text" name="opp">
        Second Number:  <input type="number" step="0.1" name="num2">
        <input type="submit">
    </form>

    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $opp = $_POST["opp"];

        if($opp == "+"){
            echo $num1 + $num2;
        }elseif($opp == "-"){
            echo $num1 - $num2;
        }elseif($opp == "/"){
            echo $num1 / $num2;
        }elseif($opp == "*" || $opp == "x"){
            echo $num1 * $num2;
        }else{
            echo "Invalid Opperator. Try again with + - / or *";
        }
    ?>
</body>
</html>