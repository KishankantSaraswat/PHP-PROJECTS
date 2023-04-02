<?php
$s=$_REQUEST['prime'];
echo nl2br ("<p style='text-align:center; font-size:64px; text-decoration:underline; color:aqua;'>All Prime Number less than $s:</p>"."\n");
for($i=1; $i<=$s; $i++){
    $count=0;
    for($k=2; $k<=$i/2; $k++){
        if ($i%$k==0){
            $count++;
            break;
        }
    }
    if($count==0 && $i!=1){
        echo  "<p style='text-align:center; font-size:30px; text-decoration:bold;'> $i</p>";
    }
}
return 0;
?>