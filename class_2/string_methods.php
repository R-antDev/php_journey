<?php


$myStr = "Hello World";
$myStr2 = "I am Good.";

$myInt = 3.5;

// length of string
echo strlen($myStr);
echo "<br>";
// print part of string starts from given index
echo substr($myStr, 5);
echo "<br>";
// print the given range of the string
echo substr($myStr2, 2,3);
echo "<br>";
// to lowercase
echo strtolower($myStr);
echo "<br>";
// to uppercase
echo strtoupper($myStr);
echo "<br>";
// to print a single char from a string with index
echo $myStr2[5];

echo "<br>";
// replace a string with the matching string
echo str_replace("firstName", "Emon", "Hasan firstName");
echo "<br>";
// round a decimal value
echo round($myInt);
//print any random value in range
echo rand(0, 100);
echo "<br>";
// print absolute values
$myInt2 = -10.00;
echo abs($myInt2);
echo "<br>";
