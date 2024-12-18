<?php

namespace App\Repository;

use App\Controllers\Database;

class OrderRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAllOrders(): array|bool
    {
        return $this->db->read("order", [], "");
    }

    public function createOrder(): void
    {
        return $this->db->create("order", ["userId" => 1]);
    }

    public function selectOrder(): array|bool
    {
        return $this->db->read("order", [], "");
    }

    public function deleteOrder(): bool
    {
        return $this->db->delete("order", "userId = 1");
    }

    public function updateProduct(): bool
    {
        return $this->db->update("order", ["userId" => 2], "userId = 1");
    }
}
