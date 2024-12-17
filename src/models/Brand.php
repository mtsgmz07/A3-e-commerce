<?php

namespace App\Models;

use App\Controllers\Database;

class Brand {
    private $db;
    private $id;
    private $name;


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