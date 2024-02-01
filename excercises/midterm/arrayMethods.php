<?php

// remove element from array
$cars = [
    "name" => "Ford",
    "model" => "Mustang",
    "year" => 1964,
    "color" => "red"
];

unset($cars["color"]);
array_pop($cars);

// sort array
$unsorted_array = [
    "a", "z", "d", "c", "e", "g", "f"
];


$unsorted_keyValue_array = [
    1 => "a", 5 => "b", 3 => "d", 20 => "c", 10 => "e", 6 => "g", 7 => "f"
];


$result = implode(',', $unsorted_array);
echo $result;

//foreach ($unsorted_array as $key => $value) {
//    echo $key . " " . $value . "<br>";
//}


// sort array
// sort($unsorted_array);
// sort in reverse
// rsort($unsorted_array);
// sort in ascending by value
asort($unsorted_keyValue_array);
// sort in ascending by key
ksort($unsorted_keyValue_array);
// sort in descending by value
arsort($unsorted_keyValue_array);
// sort in descending by value
krsort($unsorted_keyValue_array);



