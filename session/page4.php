<html>
    <head>
        <title>session example </title>
    </head>
    <body>
        <?php
        session_start();
        $c=$_REQUEST['t3'];
        $x=$_SESSION['name'];
        $y=$_REQUEST['email'];
        echo "<tabel border='1'>";
        echo "<tr><td>Name</td><td>$x</td></tr>";
        echo "<tr><td>Email id</td><td>$y</td></tr>";
        echo "<tr><td>Contact number</td><td>$c</td></tr>";
        echo "</table>";
        ?>
    </body>
</html>