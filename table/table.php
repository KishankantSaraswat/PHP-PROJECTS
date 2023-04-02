<?php
$s=$_REQUEST['number'];
echo nl2br ("<p style='text-align:center; font-size:64px;text-decoration:underline; color:aqua;'>Muliplication table of $s:</p>"."\n");
for ($i =1;  $i <= 10; $i++){
    echo nl2br ("<p style='text-align:center; 
    font-size:30px; 
    text-decoration:bold 
    color:aqua;'>
    $s X $i=" .$s*$i."\n");
}
?>