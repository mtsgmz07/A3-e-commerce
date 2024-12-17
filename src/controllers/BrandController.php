<?php

namespace App\Controllers;

use App\Models\Brand;
use App\Controllers\Controller;

class BrandController extends Controller
{
    private $brand;
    public function __construct()
    {
        parent::__construct();
        $this->brand = new Brand();
    }

    public function getAllAddresses()
    {
        $name = "Matisse";
        $allBrands = $this->brand->getAllBrand();
        return  $this->render("home.twig", ["allBrands" => $allBrands]);
    }

    public function execCreateBrand(): bool
    {
        $this->brand->createBrand();
        return true;
    }

    public function execSelectBrand(): array|bool
    {
        return $this->brand->selectBrand();
    }

    public function execDeleteBrand(): mixed
    {
        return $this->brand->deleteBrand();
    }

    public function execUpdateBrand(): bool
    {
        return $this->brand->updateBrand();
    }
}
