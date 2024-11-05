<?php
$x = 5;
$x = 10;
function sum()
{
    global $x, $y;
    $y = $x + $y;
}
sum();
echo $y;
?>