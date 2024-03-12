<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


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

    /**
     * Filters books by their author
     *
     * @param [array] $books
     * @param [string] $author
     * @return array
     */
    function filter_book_by_author($books, $author)
    {
        $filtered_books = array();

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filtered_books[] = $book;
                // array_push($filtered_books, $books);
            }
        }

        return $filtered_books;
    }
    ?>

    <ul>
        <?php
        foreach (filter_book_by_author($books, "Andy Weir") as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?></a>(<?= $book['releaseYear']; ?>) By <?= $book['author'] ?>
            </li> <!-- Alt + 0153 for tm symbol -->
        <?php endforeach; ?>
    </ul>


    <!-- 2nd and more flexible way of filtering --->
    <?php
    function filter($items, $key, $value)
    {
        $filter_item = array();
        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $filter_item[] = $item;
                // array_push($filter_item, $item);
            }
        }
        return $filter_item;
    }
    $filter_book_by_author = filter($books, 'author', 'Andy Weir');
    ?>
    <ul>
        <?php
        foreach ($filter_book_by_author as $book) : ?>
            <li><a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?>(<?= $book['author'] ?>)</a> By <?= $book['author'] ?></li>
        <?php endforeach; ?>
    </ul>


    <!-- 3rd and more flexible way of filtering / Lambda Function --->
    <?php
    function filters($items, $fn)
    {
        $filter_item = array();
        foreach ($items as $item) {
            if ($fn($item)) {
                $filter_item[] = $item;
                // array_push($filter_item, $item);
            }
        }
        return $filter_item;
    }
    $filter_book_by_authors = filters($books, function ($book) {
        return $book['releaseYear'] <= 2000;
    });
    ?>
    <ul>
        <?php
        foreach ($filter_book_by_authors as $book) : ?>
            <li><a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?>(<?= $book['author'] ?>)</a> By <?= $book['author'] ?></li>
        <?php endforeach; ?>
    </ul>


    <!-- 3rd and more flexible way of filtering / Lambda Function Practice Again --->
    <?php
    function filterss($books, $fn)
    {
        $filterss_book = array();
        foreach ($books as $book) {
            if ($fn($book)) {
                $filterss_book[] = $book;
            }
        }
        return $filterss_book;
    }
    $filtered_books_by_value = filterss($books, function ($book) {
        return $book['releaseYear'] <= 2000;
    });
    ?>
    <ul>
        <?php
        foreach ($filtered_books_by_value as $book) : ?>
            <li><a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?>(<?= $book['author'] ?>)</a> By <?= $book['author'] ?></li>
        <?php endforeach; ?>
    </ul>



    <!-- Array Filter ( Lambda Function ) --->
    <?php
    $filtered_books_by_value = array_filter($books, function ($book) {
        return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
    });
    ?>
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