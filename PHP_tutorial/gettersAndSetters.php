<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
</head>
<body>
    <?php
        class Movie{
            public $title;
            private $rating;    //public and private are visiblity modifiers. 

            function __construct($title, $rating){
                $this -> title = $title;
                $this -> setRating($rating);    //Now this atribute cannot be tampered with outside the expected values.
            }

            function getRating(){       //Because you cannot access the pirvate vaiables outside of a class.. you can 
                                        // create a function to get it for you within the class.
                return $this -> rating;
            }

            function setRating($newRating){     //This is a setter. Justifided for similar reasons as getter.
                if($newRating=="G" || $newRating=="PG" || $newRating=="PG-13" || $newRating=="R" || $newRating=="NR"){
                    $this -> rating = $newRating;
                }else{
                    $this -> rating = "NR";
                }
            }
        } 

        $avengers = new Movie("Avengers", "PG-13");
        $avengers -> setRating("PG-1d3");
        echo $avengers -> getRating();
    ?>
</body>
</html>