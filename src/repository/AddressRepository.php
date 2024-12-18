<?php

namespace App\Repository;

use App\Controllers\Database;

class AddressRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAllAddress(): array|bool
    {
        return $this->db->read("address", [], "");
    }

    public function createAddress(): void
    {
        return $this->db->create("address", ["postalCode" => "93200", "city" => "Saint-Denis", "country" => "France", "addressLine" => "11 avenue des chasseurs", "userId" => 1]);
    }

    public function selectAddress(): array|bool
    {
        return $this->db->read("address", [], "");
    }

    public function deleteAddress(): bool
    {
        return $this->db->delete("address", "id = 1");
    }

    public function updateAddress(): bool
    {
        return $this->db->update("address", ["postalCode" => "75000"], "postalCode = '93200'");
    }
}
