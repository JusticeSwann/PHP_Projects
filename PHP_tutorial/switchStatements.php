<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switchStatements.php" method="post">
        What was your grade: <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "You did amazing!";
                break;
                case "B":
                    echo "You did goood!";
                    break;
                case "C":
                    echo "You can improve!";
                    break;
                case "F":
                    echo "Work Harder! Im sure you can do it.";
                    break;
                default:
                    echo "Invalid Grade";
                    break;
        }

    ?>
</body>
</html>