<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara-cast</title>
</head>
<body>

<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ],
];
/*
function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item){
        if ($fn($item)){
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}
*/

$filteredBooks = array_filter($books, function ($book){
    return $book['releaseYear'] >= 2000;
});

?>
<ul>
    <?php
    foreach ($filteredBooks as $book):
        ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?> - By <?= $book['author'] ?>)
            </a>
        </li>
    <?php endforeach; ?>
</ul>


</body>
</html>