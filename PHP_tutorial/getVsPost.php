<html>
    <body>
        

    <form action="getVsPost.php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
        echo $_POST["password"];
    ?>

    </body>
</html>