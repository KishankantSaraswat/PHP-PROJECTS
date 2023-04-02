<?php
$a = $_REQUEST['t1'];
$b = $_REQUEST['t2'];
$c = $_REQUEST['t3'];
if($b>=18 && $c=='male'){
    echo "WELCOME Mrs.$a you are eligible for giving vote";
}
elseif($b>=18 && $c=='female'){
    echo "WELCOME Mrs.$a you are eligible for giving vote";
}
else{
    echo "YOU are not eligile for vote";
}
?>