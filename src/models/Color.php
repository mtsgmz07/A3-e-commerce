<?php

namespace App\Models;

use App\Controllers\Database;

class Color {
    private $id;
    private $name;

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}
