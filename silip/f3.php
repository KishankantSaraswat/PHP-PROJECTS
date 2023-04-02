<html>
    <head>
    </head>
    <body>
    <?php
        session_start();
        $b=$_REQUEST['t2'];
        $_SESSION['email']=$b;
        ?>
        <form action="f4.php">
            mobile no.<input type="number" name="t3">
            <input type="submit" value="submit your mobile number">
        </form>
        
    </body>
</html>