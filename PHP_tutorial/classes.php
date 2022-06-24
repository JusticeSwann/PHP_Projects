<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php 
        class Book{
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;
        $book1 -> title = "Harry Potter";
        $book1 -> author = "J.K Rowling";
        $book1 -> pages = 400;

        $book2 = new Book;
        $book2 -> title = "How To Pick Up Gyal Using Your Father Navara";
        $book2 -> author = "Donald Trump Jr";
        $book2 -> pages = 3;
    ?>
</body>
</html>