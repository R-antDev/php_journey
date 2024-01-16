<?php

/*
The compact function creates an array from variables. 
It takes variable names as arguments and returns an associative array
where the keys are the variable names and the values are their corresponding values.
*/

$name = "John";
$age = 25;
$city = "New York";

$userInfo = compact('name', 'age', 'city');
var_dump($userInfo);
