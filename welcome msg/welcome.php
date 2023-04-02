<?php
$a = $_REQUEST['user'];
$b =$_REQUEST['gender'];
if ($a=="male"){
    echo "welcome Mr. $a";
}
else
{
    echo "welcome Mrs. $a";
}
?>
