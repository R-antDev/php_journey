<?php


$host = 'localhost';
$user = 'root';
$pass = '1234';
$database = 'information';
$port = 3307;


$connect = new mysqli($host, $user, $pass, $database, $port);


if ($connect->connect_error) {
    die("Connection failed: ".$connect->connect_error);
}
echo "Connected successfully <br>";

$name = 'Sublayer';
$email = 'layer@mail.com';
$age = 23;


$sql = "INSERT INTO info (name, email, age) VALUES ('$name','$email','$age')";
if ($connect->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: ".$sql."<br>".$connect->error;
}

