<html>
    <head>
        <title>session example </title>
    </head>
    <body>
        <?php
        session_start();
        $a=$_REQUEST['t1'];
        $_SESSION['name']=$a;
        ?>
        <form action="page3.php">
            Email<input type="email" name="t2"><br>
            <input type="submit" value="Submit your Email id">
        </form>
    </body>
</html>