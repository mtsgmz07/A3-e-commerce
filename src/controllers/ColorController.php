<?php

namespace App\Controllers;

use App\Repository\ColorRepository;
use App\Controllers\Controller;

class ColorController extends Controller
{
    private $colorRepository;
    public function __construct()
    {
        parent::__construct();
        $this->colorRepository = new ColorRepository();
    }

    public function getAllColors()
    {
        $name = "Matisse";
        $allColors = $this->colorRepository->getAllColors();
        return  $this->render("home.twig", ["allColors" => $allColors]);
    }

    public function execCreateColor(): bool
    {
        $this->colorRepository->createColor();
        return true;
    }

    public function execSelectColor(): array|bool
    {
        return $this->colorRepository->selectColor();
    }

    public function execDeleteColor(): mixed
    {
        return $this->colorRepository->deleteProduct();
    }

    public function execUpdateColor(): bool
    {
        return $this->colorRepository->updateProduct();
    }
}
