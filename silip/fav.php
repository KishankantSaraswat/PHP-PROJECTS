<?php
$a = $_REQUEST['t1'];
$b = $_REQUEST['t2'];
if($b=="red" ){
    echo "<p style='color:red'>$a</p>";
}
elseif ($b=="yellow"){
    echo "<p style='color:yellow'>$a</p>";
}
else{
    echo "<p style='color:aqua'>$a</p>";
}