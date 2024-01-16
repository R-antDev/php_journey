<?php

/*
The implode function (or its alias join) is used to join elements of an array into a string.
It takes two parameters: the glue (string to join elements with) and the array.
*/
$colors = array("red", "green", "blue");

$result = implode(", ", $colors);
echo $result;
