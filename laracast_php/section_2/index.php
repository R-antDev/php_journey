<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'] ;



if ($uri === '/index'){
    require 'controllers/index.php';
}elseif ($uri === '/about') {
    require 'controllers/about.php';
}else{
    dd($uri);
}