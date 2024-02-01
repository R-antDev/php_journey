<?php

include 'CRUD.php';
include 'Validation.php';

$userID = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

Validation::fieldValidation($name, $email, $address);
Validation::emailValidation($email);

$crud = new CRUD();

if (isset($_POST['submit'])) {
    $crud->update($userID, $name, $email, $address);
}

