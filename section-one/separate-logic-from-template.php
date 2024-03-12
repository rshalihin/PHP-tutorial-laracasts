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

// Array Filter ( Lambda Function ).
$filtered_books_by_value = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
});

require_once './separate-logic-from-template.view.php';
