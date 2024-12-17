<?php

namespace App\Controllers;

use App\Models\Payment;
use App\Controllers\Controller;

class PaymentController extends Controller
{
    private $payment;
    public function __construct()
    {
        parent::__construct();
        $this->payment = new Payment();
    }

    public function getAllOrders()
    {
        $name = "Matisse";
        $allPayments = $this->payment->getAllPayments();
        return  $this->render("home.twig", ["allPayments" => $allPayments]);
    }

    public function execCreatePayment(): bool
    {
        $this->payment->creatPayment();
        return true;
    }

    public function execSelectPayment()
    {
        return $this->payment->selectPayment();
    }

    public function execDeletePayment()
    {
        return $this->payment->deletePayment();
    }

    public function execUpdatePayment(): bool
    {
        return $this->payment->updatePayment();
    }
}
