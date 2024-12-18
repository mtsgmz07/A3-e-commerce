<?php

namespace App\Repository;

use App\Controllers\Database;

class UserRepository {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAllUsers() {
        return $this->db->read("user", [], "");
    }

    public function createUser() {
        return $this->db->create("user", ["firstname" => "Matisse", "lastname" => "Gomez", "email" => "matissegom@gmail.com", "phone" => "0606060606"]);
    }

    public function selectUser() {
        return $this->db->read("user", [], "");
    }

    public function deleteUser() {
        return $this->db->delete("user", "id = 1");
    }

    public function updateUser() {
        return $this->db->update("user", ["name" => "salut"], "id = 1");
    }
}