<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObjectFunctions</title>
</head>
<body>
    <?php
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa =$gpa;
            }

            function hasHonors(){
                if($this->gpa >= 2.5){
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student("Jim","Engineering",2.4);
        $student2 = new Student("Justice","Med",2.9);

        echo $student1->hasHonors();
        
    ?>
</body>
</html>