<?php

namespace App\Repository;

use App\Controllers\Database;

class PaymentRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAllPayments(): array|bool
    {
        return $this->db->read("payment", [], "");
    }

    public function creatPayment(): void
    {
        return $this->db->create("payment", ["userId" => 1]);
    }

    public function selectPayment(): array|bool
    {
        return $this->db->read("payment", [], "");
    }

    public function deletePayment(): bool
    {
        return $this->db->delete("payment", "id = 1");
    }

    public function updatePayment(): bool
    {
        return $this->db->update("payment", ["method" => "visa"], "method = 'mastercard'");
    }
}
