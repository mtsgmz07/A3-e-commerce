<?php

namespace App\Models;

class Size
{
    private $id;
    private $size;

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setSize(string $size): void {
        $this->size = $size;
    }

    public function getSize(): string {
        return $this->size;
    }
}
