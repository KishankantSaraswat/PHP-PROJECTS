<?php
session_start();
$x = $_SESSION['name'];
echo "welcome $x";
?>