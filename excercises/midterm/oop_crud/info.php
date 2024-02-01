<?php
include 'CRUD.php';

$crud = new CRUD();
$info = $crud->read();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Information's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="d-flex flex-column justify-content-center align-items-center">
    <div class="col-6 mt-5">
        <h2 class="text-center"> Information's</h2>
        <a class="col-3 btn btn-success mx-auto d-flex flex-row justify-content-center rounded-pill mb-4 mt-3"
           href="index.php">Home</a>
        <table class="table table-striped table-info mt-3">
            <?php foreach ($info

            as $value): ?>
            <tbody>
            <tr>
                <th scope="row"> <?= $value['id'] ?> </th>
                <td> <?= $value['name'] ?> </td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['address'] ?></td>
                <td><a href="update.php?id=<?= $value['id'] ?>" class="btn btn-primary">Update</a></td>
                <td><a href="delete.php?id=<?= $value['id'] ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>

