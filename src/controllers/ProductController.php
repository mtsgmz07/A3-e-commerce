<?php

namespace App\Controllers;

use App\Models\Product;
use App\Controllers\Controller;

class ProductController extends Controller
{
    private $product;
    public function __construct()
    {
        parent::__construct();
        $this->product = new Product();
    }

    // public function index()
    // {
    //     echo $this->twig->render('home.twig');
    // }

    public function getAllProducts()
    {
        $name = "Matisse";
        $allProducts = $this->product->getAllProducts();
        return  $this->render("home.twig", ["allProducts" => $allProducts]);
    }

    public function execCreateProduct(): bool
    {
        $this->product->createProduct();
        return true;
    }

    public function execSelectProduct()
    {
        return $this->product->selectProduct();
    }

    public function execDeleteProduct()
    {
        return $this->product->deleteProduct();
    }

    public function execUpdateProduct(): bool
    {
        return $this->product->updateProduct();
    }
}
