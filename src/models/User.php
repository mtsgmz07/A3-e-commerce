<?php

namespace App\Models;

use App\Controllers\Database;

class User {
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $phone;

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setFirstname(string $firstname): void {
        $this->firstname = $firstname;
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function setLastname(string $lastname): void {
        $this->lastname = $lastname;
    }

    public function getLastname(): string {
        return $this->lastname;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function getPhone(): string {
        return $this->phone;
    }
}
