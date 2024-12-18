<?php

namespace App\Models;

class Order
{
    private $id;
    private $userId;

    public function setId(int $id): int {
        $this->id = $id;
        return $this->id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setUserId(int $userId): int {
        $this->userId = $userId;
        return $this->userId;
    }

    public function getUserId(): int {
        return $this->userId;
    }
}
