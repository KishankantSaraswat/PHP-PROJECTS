<?php
session_start();
$k=$_REQUEST['t1'];
$_SESSION['name'] = $k;
echo "Welcome $k";
?>
<a href=name1.php>click here</a>