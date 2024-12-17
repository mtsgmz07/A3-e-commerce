<?php

require_once "./vendor/autoload.php";

$request = $_SERVER['REQUEST_URI'];

$loader = new \Twig\Loader\FilesystemLoader('src/views');
$twig = new \Twig\Environment($loader);

use App\Controllers\ProductController;

switch ($request) {
    case '':
    case '/':
        echo (new ProductController())->getAllProducts();
        break;

    case '/crew':
        echo $twig->render('crew.twig');
        break;

    case '/destination':
        echo $twig->render('destination.twig');
        break;

    case '/technology':
        echo $twig->render('technology.twig');
        break;

    default:
        http_response_code(404);
        echo $twig->render('404.twig');
}
