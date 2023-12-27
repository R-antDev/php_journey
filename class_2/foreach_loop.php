<?php

$flowers = array("Rose", "Sunflower","Tulip");

//without index
//foreach ($flowers as $flower){
//    echo $flower."<br>";
//}

// with index
foreach ($flowers as $index=>$flower){
    echo $index + 1," ", $flower."<br>";
}
