<?php
session_start();
$c = $_REQUEST['t3'];
$x = $_SESSION['name'];
$y = $_SESSION['email'];
echo "<table border='1'><tr><td>Name</td><td>$x</td></tr>";
echo "<tr><td>Email Id</td><td>$y</td></tr>";
echo "<tr><td>mobile</td><td>$c</td></tr>";
?>