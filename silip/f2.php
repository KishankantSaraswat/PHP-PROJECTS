<html>
    <head>
    </head>
    <body>
    <?php
        session_start();
        $a=$_REQUEST['t1'];
        $_SESSION['name']=$a;
        ?>
        <form action="f3.php">
            Email<input type="email" name="t2">
            <input type="submit" value="submit your email">
        </form>
        
    </body>
</html>