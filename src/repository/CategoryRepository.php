<?php

namespace App\Repository;

use App\Controllers\Database;

class CategoryRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAllCategory(): array|bool {
        return $this->db->read("category", [], "");
    }

    public function createCategory(): void {
        return $this->db->create("category", ["name" => "Nike"]);
    }

    public function selectCategory(): array|bool {
        return $this->db->read("category", [], "");
    }

    public function deleteCategory(): bool {
        return $this->db->delete("name", "id = 1");
    }

    public function updateCategory(): bool {
        return $this->db->update("brand", ["name" => "Tee-shirt"], "name = 'Basket'");
    }
}