<?php

namespace App\Controllers;

use App\Repository\UserRepository;
use App\Controllers\Controller;

class UserController extends Controller
{
    private $userRepository;
    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    // public function index()
    // {
    //     echo $this->twig->render('home.twig');
    // }

    public function getAllUsers(): string
    {
        $name = "Matisse";
        $allUsers = $this->userRepository->getAllUsers();
        return  $this->render("home.twig", ["allUsers" => $allUsers]);
    }

    public function execCreateUser(): bool
    {
        $this->userRepository->createUser();
        return true;
    }

    public function execSelectUser(): array|bool
    {
        return $this->userRepository->selectUser();
    }

    public function execDeleteProduct(): bool
    {
        return $this->userRepository->deleteUser();
    }

    public function execUpdateProduct(): bool
    {
        return $this->userRepository->updateUser();
    }
}
