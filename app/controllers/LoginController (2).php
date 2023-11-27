<?php
require_once './app/views/LoginView.php';
require_once './app/models/LoginModel.php';
require_once './app/helpers/AuthHelper.php';

class loginController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new loginModel();
        $this->view = new loginView();
    }

    public function showLogin() {
        $this->view->showLogin();
    }
    public function validateUser() { // valida los datos
       
        $user = $_POST['user'];
        $password = $_POST['password'];

        $usuario = $this->model->getUsuarios($user);

        if ($usuario && password_verify($password, $usuario->password)) {
            AuthHelper::login($usuario);

            header("Location:" . BASE_URL);
        } else {
           $this->view->showLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function logoutUser() {
        AuthHelper::logout();
        header("Location:" . BASE_URL. "login");
    }
}