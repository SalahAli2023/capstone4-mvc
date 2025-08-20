<?php

class UserController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    //
    public function index() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit();
        }

        $users = $this->userModel->getAllUsers();
        $this->view('users/index', ['users' => $users]);
    }
}