<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function cube($num){
            return $num*$num*$num;      //REMEMBER THAT RETURN BREAKS OUT OF THE FUNCTION SO ANY CODE UNDER IT WILL NOT EXECUTE.
        }
        $cubeResult = cube(4);
        echo $cubeResult;
    ?>
</body>
</html>