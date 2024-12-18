<?php

namespace App\Repository;

use App\Controllers\Database;

class BrandRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAllBrand(): array|bool {
        return $this->db->read("address", [], "");
    }

    public function createBrand(): void {
        return $this->db->create("brand", ["name" => "Nike"]);
    }

    public function selectBrand(): array|bool {
        return $this->db->read("brand", [], "");
    }

    public function deleteBrand(): bool {
        return $this->db->delete("brand", "id = 1");
    }

    public function updateBrand(): bool {
        return $this->db->update("brand", ["name" => "Adidas"], "name = 'Nike'");
    }
}