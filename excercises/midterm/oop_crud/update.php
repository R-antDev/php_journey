<?php
include 'CRUD.php';

$crud = new CRUD();
$userID = $_GET['id'];
$info = $crud->readOne($userID);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 d-flex flex-column justify-content-center align-items-center">
    <div class="col-md-6">
        <h1 class="text-center mb-4">Update your information's</h1>
        <a class="col-3 btn btn-success mx-auto d-flex flex-row justify-content-center rounded-pill mb-4"
           href="index.php">Home</a>
        <form action="update_process.php" method="POST">
            <div class="mb-3 mt-3">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name"
                       value="<?= $info['name'] ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                       value="<?= $info['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"
                          placeholder="Enter your address"> <?= $info['address'] ?> </textarea>
            </div>
            <button type="submit" class="btn btn-primary col-3 mt-3 rounded-pill" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>

</body>
</html>