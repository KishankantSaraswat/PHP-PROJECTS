<?php
$a = $_REQUEST['t1'];
$b = $_REQUEST['t2'];
if($a=='web' && $b=='technology'){
    echo "welcome $a";
}
elseif($a=='GLA' && $b=='University'){
    echo "welcome $a";
}
elseif($a=='CEA' && $b=='Department'){
    echo "welcome $a";
}
else{
    echo('<script>alert("you entered wrong password and username")');
} 
?>