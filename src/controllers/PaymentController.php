<?php

namespace App\Controllers;

use App\Repository\PaymentRepository;
use App\Controllers\Controller;

class PaymentController extends Controller
{
    private $paymentRepository;
    public function __construct()
    {
        parent::__construct();
        $this->paymentRepository = new PaymentRepository();
    }

    public function getAllOrders()
    {
        $name = "Matisse";
        $allPayments = $this->paymentRepository->getAllPayments();
        return  $this->render("home.twig", ["allPayments" => $allPayments]);
    }

    public function execCreatePayment(): bool
    {
        $this->paymentRepository->creatPayment();
        return true;
    }

    public function execSelectPayment()
    {
        return $this->paymentRepository->selectPayment();
    }

    public function execDeletePayment()
    {
        return $this->paymentRepository->deletePayment();
    }

    public function execUpdatePayment(): bool
    {
        return $this->paymentRepository->updatePayment();
    }
}
