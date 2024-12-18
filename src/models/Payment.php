<?php

namespace App\Models;

class Payment
{
    private $id;
    private $method;
    private $status;
    private $date;
    private $orderId;

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setMethod(string $method): void {
        $this->method = $method;
    }

    public function getMethod(): string {
        return $this->method;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setDate(string $date): void {
        $this->date = $date;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function setOrderId(int $orderId): void {
        $this->orderId = $orderId;
    }

    public function getOrderId(): int {
        return $this->orderId;
    }
}
