<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <br />
    <h5>Published between the years 1950 and 2020</h5>
    <ul>
        <?php
        foreach ($filtered_books_by_value as $book) : ?>
            <li><a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?>(<?= $book['author'] ?>)</a> By <?= $book['author'] ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>