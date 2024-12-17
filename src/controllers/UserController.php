<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\Controller;

class UserController extends Controller
{
    private $user;
    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }

    // public function index()
    // {
    //     echo $this->twig->render('home.twig');
    // }

    public function getAllUsers(): string
    {
        $name = "Matisse";
        $allUsers = $this->user->getAllUsers();
        return  $this->render("home.twig", ["allUsers" => $allUsers]);
    }

    public function execCreateUser(): bool
    {
        $this->user->createUser();
        return true;
    }

    public function execSelectUser(): array|bool
    {
        return $this->user->selectUser();
    }

    public function execDeleteProduct(): bool
    {
        return $this->user->deleteUser();
    }

    public function execUpdateProduct(): bool
    {
        return $this->user->updateUser();
    }
}
