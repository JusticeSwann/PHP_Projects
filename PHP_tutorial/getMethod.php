<html>
    <body>
        <form action="BetterCalculator.php" method="get">
            Name: <input type="text" name="name"> <br>
            <input type="submit"> 
        </form>
        <br><br>

        <?php
            echo $_GET["name"];
        
        ?>
    </body>
</html>