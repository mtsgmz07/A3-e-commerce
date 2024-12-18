<?php

namespace App\Controllers;

use App\Repository\ProductRepository;

use App\Controllers\Controller;

class ProductController extends Controller
{
    private $productRepository;
    public function __construct()
    {
        parent::__construct();
        $this->productRepository = new ProductRepository();
    }

    // public function index()
    // {
    //     echo $this->twig->render('home.twig');
    // }

    public function getAllProducts()
    {
        $name = "Matisse";
        $allProducts = $this->productRepository->getAllProducts();
        return  $this->render("home.twig", ["allProducts" => $allProducts]);
    }

    public function execCreateProduct(): bool
    {
        $this->productRepository->createProduct();
        return true;
    }

    public function execSelectProduct()
    {
        return $this->productRepository->selectProduct();
    }

    public function execDeleteProduct()
    {
        return $this->productRepository->deleteProduct();
    }

    public function execUpdateProduct(): bool
    {
        return $this->productRepository->updateProduct();
    }
}
