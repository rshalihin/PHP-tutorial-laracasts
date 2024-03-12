<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
// dd($_SERVER['REQUEST_URI']);

function url_is($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}
