<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associate array</title>
</head>
<body>

<?php
$books = [
    [
        "name" => "Harry Potter",
        "author" => "JK Rowling",
        "purchaseUrl" => "www.example.com"
    ],
    [
        "name" => "Gitanjoli",
        "author" => "Rabindronath tagor",
        "purchaseUrl" => "www.example.com"
    ],
    [
        "name" => "Gmat math solve",
        "author" => "Mba publications",
        "purchaseUrl" => "www.example.com"
    ]
];
?>
<ul>
    <?php
    foreach ($books as $book):
    ?>
    <li>
        <?php echo $book['name'] ?>
    </li>
    <?php endforeach;?>
</ul>

</body>
</html>