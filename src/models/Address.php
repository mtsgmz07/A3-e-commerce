<?php

namespace App\Models;

class Address {
    private $id;
    private $postalCode;
    private $city;
    private $country;
    private $addressLine;
    private $userId;

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setPostalCode(string $postalCode): void {
        $this->postalCode = $postalCode;
    }

    public function getPostalCode(): string {
        return $this->postalCode;
    }

    public function setCity(string $city): void {
        $this->city = $city;
    }

    public function getCity(): string {
        return $this->city;
    }

    public function setCountry(string $country): void {
        $this->country = $country;
    }

    public function getCountry(): string {
        return $this->country;
    }

    public function setAddressLine(string $addressLine): void {
        $this->addressLine = $addressLine;
    }

    public function getAddressLine(): string {
        return $this->addressLine;
    }

    public function setUserId(int $userId): void {
        $this->userId = $userId;
    }

    public function getUserId(): int {
        return $this->userId;
    }
}
