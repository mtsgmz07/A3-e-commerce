<?php

namespace App\Repository;

use App\Controllers\Database;

class SizeRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAllSizes(): array|bool
    {
        return $this->db->read("size", [], "");
    }

    public function creatSize(): void
    {
        return $this->db->create("size", ["size" => 1]);
    }

    public function selectSize(): array|bool
    {
        return $this->db->read("size", [], "");
    }

    public function deleteSize(): bool
    {
        return $this->db->delete("size", "id = 1");
    }

    public function updateSize(): bool
    {
        return $this->db->update("size", ["size" => 1], "size = 2");
    }
}
