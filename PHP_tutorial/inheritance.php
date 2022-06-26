<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
        class Chef {
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpeicalDish(){
                echo "The chef makes bbq ribs <br>";
            }}

        class TriniChef extends Chef{
            function makePasta(){
                echo "The chef makes pasta <br>";
            }
            function makeSpeicalDish(){             //Overiding a Functions
                echo "The chef makes pizza <br>";
            }
        }
    
        
        
        $chef = new TriniChef();
        $chef -> makeSpeicalDish();
    ?>
</body>
</html>