<?php

// exercise 1

date_default_timezone_set("Asia/Dhaka");
echo "Date: ". date("D")." Current time: ".date("h:i:sa");


echo "<br>";

// exercise 2

$myStr = "Hello Young Tech People";

echo "String length: ". strlen($myStr);

echo "<br>";

// exercise 3

$myStr2 = "Hello World";

echo "First five character: ". substr($myStr, 0,5);

echo "<br>";
// exercise 4

echo "Random within 100-500: ". rand(100, 500);

// exercise 5
echo "<br>";
// create a file
$afile = fopen('afile.txt', 'w') or die("Unable to create");
$txt = "This is a new text";
fwrite($afile,$txt);
fclose($afile);

// read  a file
$afile = fopen('afile.txt','r') or die ("Unable to read");
echo "The file txt: ". fgets($afile);
fclose($afile);

