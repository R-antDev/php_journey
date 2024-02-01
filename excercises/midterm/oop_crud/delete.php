<?php

include "CRUD.php";

$crud = new CRUD();


$id = $_GET['id'];

$crud->delete($id);