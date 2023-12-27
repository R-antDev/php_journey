<?php include("header.php") ?>

<body>
<div class="d-flex flex-column align-items-center mt-5 pt-5 mb-5">
    <div style="width: 500px">
        <label for="user" class="form-label">Username: </label>
        <input type="text" id="user" class="form-control" aria-describedby="passwordHelpBlock">
    </div>
    <div style="width: 500px">
        <label for="inputPassword5" class="form-label">Password: </label>
        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers.
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<?php include("footer.php") ?>