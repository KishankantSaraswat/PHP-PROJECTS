<?php
$a = $_REQUEST['t2'];
$b = $_REQUEST['t3'];
if($a!=$b){
    echo "SORRY! password and confirm password not matcheds";
}
else{
    echo "sucessfully registered";
}
?>