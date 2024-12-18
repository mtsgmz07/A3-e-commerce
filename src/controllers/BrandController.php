<?php

namespace App\Controllers;

use App\Repository\BrandRepository;
use App\Controllers\Controller;

class BrandController extends Controller
{
    private $brandRepository;
    public function __construct()
    {
        parent::__construct();
        $this->brandRepository = new BrandRepository();
    }

    public function getAllAddresses()
    {
        $name = "Matisse";
        $allBrands = $this->brandRepository->getAllBrand();
        return  $this->render("home.twig", ["allBrands" => $allBrands]);
    }

    public function execCreateBrand(): bool
    {
        $this->brandRepository->createBrand();
        return true;
    }

    public function execSelectBrand(): array|bool
    {
        return $this->brandRepository->selectBrand();
    }

    public function execDeleteBrand(): mixed
    {
        return $this->brandRepository->deleteBrand();
    }

    public function execUpdateBrand(): bool
    {
        return $this->brandRepository->updateBrand();
    }
}
