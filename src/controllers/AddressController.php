<?php

namespace App\Controllers;

use App\Models\Address;
use App\Controllers\Controller;

class AddressController extends Controller
{
    private $address;
    public function __construct()
    {
        parent::__construct();
        $this->address = new Address();
    }

    public function getAllAddresses()
    {
        $name = "Matisse";
        $allAddresses = $this->address->getAllAddress();
        return  $this->render("home.twig", ["allAddresses" => $allAddresses]);
    }

    public function execCreateAddress(): bool
    {
        $this->address->createAddress();
        return true;
    }

    public function execSelectAddress()
    {
        return $this->address->selectAddress();
    }

    public function execDeleteAddress()
    {
        return $this->address->deleteAddress();
    }

    public function execUpdateAddress(): bool
    {
        return $this->address->updateAddress();
    }
}
