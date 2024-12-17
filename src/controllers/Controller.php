<?php

namespace App\Controllers;

use \Twig\Loader\FilesystemLoader;

use \Twig\Environment;

class Controller{

    private $twig;
    public function __construct() {
        $loader = new FilesystemLoader('src/views');
        $this->twig = new Environment($loader);
    }

    public function render($view, $data = []) {
        return $this->twig->render($view, $data);
    }
}