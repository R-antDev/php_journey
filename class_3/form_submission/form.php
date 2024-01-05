<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class :3 - Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-success-subtle">
<div style="width: 700px;" class="bg-light mx-auto mt-5 rounded-5 p-5">
<h1 class="text-center">Login form</h1>
<form>
    <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" placeholder="Your name" class="form-control" id="fullName" name="fullName">
    
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" placeholder="example@mail.com" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="number" class="form-label">Number</label>
        <input type="number" placeholder="Phone number" class="form-control" id="number" name="number">
    
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
