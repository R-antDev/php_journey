<?php

// The array_chunk() function splits an array into chunks of new arrays, according to values.

$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
echo"<pre>";
print_r(array_chunk($cars,3));

