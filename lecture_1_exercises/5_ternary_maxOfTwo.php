<?php

// Declare two variables representing numbers. Use a ternary operator to find and display the
// maximum of the two numbers.

$num1 = 30;
$num2 = 40;

function maxOfTwo($n1, $n2){
    return $n1 > $n2? "Num1- $n1 is Max": "Num2- $n2 is Max";
}

echo maxOfTwo($num1, $num2);