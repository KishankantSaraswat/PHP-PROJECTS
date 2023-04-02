<?php 
$k=$_REQUEST['t1'];
$f=fopen("feedback.txt","a");
$k=$k."\n";
fwrite($f,$k);
echo "Your feedback is sucessfully submitted";
?>