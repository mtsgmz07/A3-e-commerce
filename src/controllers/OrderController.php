<?php

namespace App\Controllers;

use App\Models\Order;
use App\Controllers\Controller;

class OrderController extends Controller
{
    private $order;
    public function __construct()
    {
        parent::__construct();
        $this->order = new Order();
    }

    public function getAllOrders()
    {
        $name = "Matisse";
        $allProducts = $this->order->getAllOrders();
        return  $this->render("home.twig", ["allProducts" => $allProducts]);
    }

    public function execCreateOrder(): bool
    {
        $this->order->createOrder();
        return true;
    }

    public function execSelectOrder()
    {
        return $this->order->selectOrder();
    }

    public function execDeleteOrder()
    {
        return $this->order->deleteOrder();
    }

    public function execUpdateOrder(): bool
    {
        return $this->order->updateProduct();
    }
}
