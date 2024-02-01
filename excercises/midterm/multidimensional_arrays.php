<?php

$person_details = [
    'name' => 'John',
    'father_name' => 'Doe',
    'mother_name' => 'Jane',
    'permanent_address' => [
        'country' => 'Bangladesh',
        'city' => 'Mymensingh',
        'Upzilla' => 'Bhaluka',
        'postal_code' => '2200'
    ],
    'present_address' => [
        'country' => 'Bangladesh',
        'city' => 'Dhaka',
        'Upzilla' => 'Savar',
        'postal_code' => '1000'
    ]
];

$name = $person_details['name'];
$father_name = $person_details['father_name'];
$mother_name = $person_details['mother_name'];
$country = $person_details['permanent_address']['country'];
$division = $person_details['permanent_address']['city'];
$upzilla = $person_details['permanent_address']['Upzilla'];
$post_code = $person_details['permanent_address']['postal_code'];

function getInfo(): string
{
    global $name, $father_name, $mother_name, $country, $division, $upzilla, $post_code;
    return "Name: $name, Father Name: $father_name, Mother Name: $mother_name,
     Country: $country, Division: $division, Upzilla: $upzilla, Postal Code: $post_code";
}

//$details = compact('name', 'father_name', 'mother_name', 'country', 'division', 'upzilla', 'post_code');
//var_dump($details);

$details = getInfo();
$words = explode(' ',$details);
var_dump($words);