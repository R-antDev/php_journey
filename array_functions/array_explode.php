<?php

/*
The explode function is used to split a string into an array based on a specified delimiter.
It takes two parameters: the delimiter and the input string.
*/

$sentence = "This is a sample sentence";

$words = explode(" ", $sentence);
echo '<pre>';
print_r($words);