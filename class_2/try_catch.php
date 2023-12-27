<?php

try {
    $file = fopen('file.txt','r');
    if (!$file){
        throw new Exception("Failed to open the file.");
    }
} catch (Exception $e){
    echo 'Error: ', $e->getMessage();
}
