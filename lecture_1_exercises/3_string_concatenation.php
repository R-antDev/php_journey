<?php

// Create two string variables and concatenate them. Display the result.

$firstName = "Shariar";
$middleName = 'Hasan';
$lastName = "Emon";

function strConcat ($first, $middle, $last){
    return $first.' '.$middle.' '.$last;
}

echo "Full name: ".strConcat($firstName, $middleName, $lastName);