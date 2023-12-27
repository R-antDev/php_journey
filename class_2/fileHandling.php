<?php

// read a file
// echo readfile("test.txt");
// echo "<br>";
// file opening in different modes
// $file = fopen('test.txt','r') or die("Unable to open.");
// echo fgets($file);
// fclose($file);
//
// echo "<br>";
// read the full file.
$file = fopen('test.txt','r') or die("Unable to open.");
while (!feof($file)){
    echo fgets($file)."<br>";
}
fclose($file);

// create a new file

$newFile = fopen('newTest.txt', 'w') or die("Unable to create");
$txt = "My name is Emon\n";
fwrite($newFile, $txt);
$txt = "New year is coming 2024\n";
fwrite($newFile, $txt);
echo readfile("newTest.txt");
fclose($newFile);

// read the file again



