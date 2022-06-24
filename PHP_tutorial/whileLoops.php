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
        $index = 1;
         while($index <= 10){
            echo "$index <br>";
            $index++;  
         }

         do{                    // This do while loop runs the block of code before checking the condition
            echo "$index <br>";
            $index++;  
         }while($index <= 10)
         
    ?>
</body>
</html>