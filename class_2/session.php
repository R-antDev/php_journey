<?php

session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Session</title>
</head>
<body>
<?php
    $_SESSION["animal"] = "Elephant";
    print_r($_SESSION);
    // session_unset(); // for terminating session.
    // session_destroy(); // for destroying session.
?>

</body>
</html>