<html>
    <head>
        <title>session example </title>
    </head>
    <body>
        <?php
        session_start();
        $a=$_REQUEST['t2'];
        $_SESSION['email']=$b;
        ?>
        <form action="page4.php">
            Contact Number<input type="number" name="t3"><br>
            <input type="submit" value="Submit your Contact Number">
        </form>
    </body>
</html>