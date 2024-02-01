<?php

include 'CRUD.php';
include 'Validation.php';

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

Validation::fieldValidation($name, $email, $address);
Validation::emailValidation($email);

$crud = new CRUD();

if (isset($_POST['submit'])) {
    $crud->create($name, $email, $address);
}

