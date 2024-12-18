<?php

namespace App\Controllers;

use App\Repository\OrderRepository;
use App\Controllers\Controller;

class OrderController extends Controller
{
    private $orderRepository;
    public function __construct()
    {
        parent::__construct();
        $this->orderRepository = new OrderRepository();
    }

    public function getAllOrders()
    {
        $name = "Matisse";
        $allProducts = $this->orderRepository->getAllOrders();
        return  $this->render("home.twig", ["allProducts" => $allProducts]);
    }

    public function execCreateOrder(): bool
    {
        $this->orderRepository->createOrder();
        return true;
    }

    public function execSelectOrder()
    {
        return $this->orderRepository->selectOrder();
    }

    public function execDeleteOrder()
    {
        return $this->orderRepository->deleteOrder();
    }

    public function execUpdateOrder(): bool
    {
        return $this->orderRepository->updateProduct();
    }
}
