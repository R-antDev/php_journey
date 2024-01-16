<?php

include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo '<pre>';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    echo $name, $email, $password, $address;
    if (empty($name || $email || $password || $address )){
        echo "Field can not be empty";
    }

    $sql = "INSERT INTO person (name, email, password, address) VALUES ('$name','$email','$password','$address')";
    $insert = $conn->query($sql);
    if ($insert){
        header('Location: data.php');
    }else{
        echo "Data not inserted successfully";
    }

}


//
//$servername = 'localhost';
//$username = 'root';
//$password = 1234;
//$database = 'formphp';
//$port = 3307;
//
//$conn = new mysqli($servername, $username, $password, $database, $port);
//
//if ($conn->connect_error) {
//    die("Connection failed: ".$conn->connect_error);
//}
//echo "Connected successfully";
//
//$name = $_POST['name'];
//$email = $_POST['email'];
//$password = $_POST['password'];
//$address = $_POST['address'];
//
//if (!empty($name && $email && $password && $address)) {
//    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $sql = "INSERT INTO person (name, email, password, address) VALUES ('$name','$email','$password','$address')";
//        if ($conn->query($sql) === true) {
//            echo "New record created successfully";
//        } else {
//            echo "Error: ".$sql."<br>".$conn->error;
//        }
//    } else {
//        echo("$email is not a valid email address");
//    }
//} else {
//    echo 'Form Can not be empty';
//}
