<?php

namespace App\Models;

use App\Controllers\Database;

class Color {
    private $db;
    private $id;
    private $name;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAllColors(): array|bool {
        return $this->db->read("color", [], "");
    }

    public function createColor(): void {
        return $this->db->create("color", ["name" => "Rouge"]);
    }

    public function selectColor(): array|bool {
        return $this->db->read("color", [], "");
    }

    public function deleteProduct(): bool {
        return $this->db->delete("color", "name = 'Rouge'");
    }

    public function updateProduct(): bool {
        return $this->db->update("color", ["name" => "Rouge"], "name = 'Vert'");
    }
}