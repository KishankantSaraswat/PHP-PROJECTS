<?php
function swap (&$x, &$y){
    $temp = $x;
    $x = $y;
    $y = $temp;
    echo "The value of x is:" . $x . "<br>";
    echo "The value of y is:" . $y . "<br><br>";
}
$a = 10;
$b = 20;
swap($a, $b);
echo "The value of a is:" . $a . "<br>";
echo "The value of b is:" . $b . "<br>";
?>