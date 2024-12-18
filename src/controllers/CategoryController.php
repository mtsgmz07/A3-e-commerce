<?php

namespace App\Controllers;

use App\Repository\CategoryRepository;
use App\Controllers\Controller;

class CategoryController extends Controller
{
    private $categoryRepository;
    public function __construct()
    {
        parent::__construct();
        $this->categoryRepository = new CategoryRepository();
    }

    public function getAllCategorys()
    {
        $name = "Matisse";
        $allCategorys = $this->categoryRepository->getAllCategory();
        return  $this->render("home.twig", ["allCategorys" => $allCategorys]);
    }

    public function execCreateCategory(): bool
    {
        $this->categoryRepository->createCategory();
        return true;
    }

    public function execSelectCategory(): array|bool
    {
        return $this->categoryRepository->selectCategory();
    }

    public function execDeleteCategory(): mixed
    {
        return $this->categoryRepository->deleteCategory();
    }

    public function execUpdateCategory(): bool
    {
        return $this->categoryRepository->updateCategory();
    }
}
