<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laracast Tutorial PHP</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        }
    </style>
</head>

<body>
    <?php
    $book_name = "Dark Matter";
    $read = false;
    if ($read) {
        $message = "You have read $book_name. ";
    } else {
        $message = "You have not read $book_name. ";
    }
    ?>
    <h1><?php echo $message; ?>
        <?= $message ?>
    </h1>

    <?php
    $books = array(
        array(
            "name" => "Do Androids Dream of Electric Sheep",
            "author" => "Philip K. Dick",
            'releaseYear' => 1975,
            "purchaseUrl" => "http://example.com"
        ),
        array(
            "name" => "The Langoliers",
            "author" => "Andy Weir",
            'releaseYear' => 1968,
            "purchaseUrl" => "http://example.com"
        ),
        array(
            "name" => "Project Hail Mary",
            "author" => "Andy Weir",
            'releaseYear' => 1978,
            "purchaseUrl" => "http://example.com",
        )
    );
    ?>
    <ul>
        <?php
        foreach ($books as $book) : ?>
            <li> <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?></a>(<?= $book['releaseYear']; ?>)</li> <!-- Alt + 0153 for tm symbol -->
        <?php endforeach; ?>
    </ul>

</body>

</html>