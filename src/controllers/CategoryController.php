<?php

namespace App\Controllers;

use App\Models\Category;
use App\Controllers\Controller;

class CategoryController extends Controller
{
    private $category;
    public function __construct()
    {
        parent::__construct();
        $this->category = new Category();
    }

    public function getAllCategorys()
    {
        $name = "Matisse";
        $allCategorys = $this->category->getAllCategory();
        return  $this->render("home.twig", ["allCategorys" => $allCategorys]);
    }

    public function execCreateCategory(): bool
    {
        $this->category->createCategory();
        return true;
    }

    public function execSelectCategory(): array|bool
    {
        return $this->category->selectCategory();
    }

    public function execDeleteCategory(): mixed
    {
        return $this->category->deleteCategory();
    }

    public function execUpdateCategory(): bool
    {
        return $this->category->updateCategory();
    }
}
