<?php

require_once 'view/partial/functions.php';


$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/phpweb/day2/section-two/") {
    require_once 'controllers/index.php';
} elseif ($uri === "phpweb/day2/section-two/about") {
    require_once 'controllers/about.php';
} elseif ($uri === "/phpweb/day2/section-two/contact") {
    require_once 'controllers/contact.php';
    // phpweb/day2/section-two/controllers/contact.php
}
