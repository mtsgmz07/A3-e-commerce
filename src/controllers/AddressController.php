<?php

namespace App\Controllers;

use App\Repository\AddressRepository;
use App\Controllers\Controller;

class AddressController extends Controller
{
    private $addressRepository;
    public function __construct()
    {
        parent::__construct();
        $this->addressRepository = new AddressRepository();
    }

    public function getAllAddresses()
    {
        $name = "Matisse";
        $allAddresses = $this->addressRepository->getAllAddress();
        return  $this->render("home.twig", ["allAddresses" => $allAddresses]);
    }

    public function execCreateAddress(): bool
    {
        $this->addressRepository->createAddress();
        return true;
    }

    public function execSelectAddress()
    {
        return $this->addressRepository->selectAddress();
    }

    public function execDeleteAddress()
    {
        return $this->addressRepository->deleteAddress();
    }

    public function execUpdateAddress(): bool
    {
        return $this->addressRepository->updateAddress();
    }
}
