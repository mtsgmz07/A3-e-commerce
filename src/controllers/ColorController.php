<?php

namespace App\Controllers;

use App\Models\Color;
use App\Controllers\Controller;

class ColorController extends Controller
{
    private $color;
    public function __construct()
    {
        parent::__construct();
        $this->color = new Color();
    }

    public function getAllColors()
    {
        $name = "Matisse";
        $allColors = $this->color->getAllColors();
        return  $this->render("home.twig", ["allColors" => $allColors]);
    }

    public function execCreateColor(): bool
    {
        $this->color->createColor();
        return true;
    }

    public function execSelectColor(): array|bool
    {
        return $this->color->selectColor();
    }

    public function execDeleteColor(): mixed
    {
        return $this->color->deleteProduct();
    }

    public function execUpdateColor(): bool
    {
        return $this->color->updateProduct();
    }
}
