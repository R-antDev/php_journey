<?php

// Create two variables, $a and $b, and swap their values without using a third variable.

$a = 20;
$b = 30;

echo "Before swapping";
echo "<br> Old A: ".$a."<br>"."Old B: ".$b;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "<br> After swapping";
echo "<br> New A: ".$a."<br> New B: ".$b;