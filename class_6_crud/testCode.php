<?php
function sum($number1, $number2)
{
    return $number1 + $number2;
}

echo sum(1, 2);

$book_list = [
    "book1",
    'book2',
    'book3'
];

foreach ($book_list as $item) {
    echo $item . "<br>";
}