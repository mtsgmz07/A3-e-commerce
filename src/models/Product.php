<?php

namespace App\Models;

use App\Controllers\Database;

class Product {
    private $db;
    private $id;
    private $name;
    private $price;
    private $description;


    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAllProducts() {
        return $this->db->read("product", [], "");
    }

    public function createProduct() {
        return $this->db->create("product", ["name" => "T-shirt", "price" => 12, "description" => "test", "categoryId" => 1, "brandId" => 1]);
    }

    public function selectProduct() {
        return $this->db->read("product", [], "");
    }

    public function deleteProduct() {
        return $this->db->delete("product", "description = 'test'");
    }

    public function updateProduct() {
        return $this->db->update("product", ["name" => "salut"], "id = 1");
    }
}