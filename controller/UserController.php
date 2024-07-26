<?php
require_once '../core/Controller.php';
require_once '../models/UserModel.php';

class UserController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $users = $this->userModel->findAll();
        $this->view('usuarios/index', ['usuarios' => $users]);
    }
}
