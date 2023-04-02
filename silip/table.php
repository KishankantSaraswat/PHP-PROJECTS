<?php
$a = $_REQUEST['t1'];
for($i=1; $i<=10; $i++){
echo nl2br("<center><table border='1'><tr><td bgcolor='aqua'>$a</td><td bgcolor='red'>X</td><td>$i</td><td bgcolor='pink'>=</td><td bgcolor='green'>" .$a*$i."</td>");
};
