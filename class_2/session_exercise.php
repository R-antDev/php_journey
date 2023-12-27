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

$_SESSION["user"] = ["em0n"];
$_SESSION["password"] = ["123pass_pass"];
print_r($_SESSION);
// session_destroy() // terminate session

?>
</body>
</html>