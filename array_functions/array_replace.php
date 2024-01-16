<?php

// These functions replace the values of the first array with the values from subsequent arrays.

$arr1 = ['a' => 1, 'b' => 2];
$arr2 = ['b' => 3, 'c' => 4];

$result = array_replace($arr1, $arr2);
print_r($result);
