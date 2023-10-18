<?php
require_once './app/views/LoginView.php';
require_once './app/models/LoginModel.php';
require_once './app/helpers/LoginHelper.php';

class loginController {
    private $view;
    private $model;
    private $helper;

    
    public function __construct() {
        $this->model = new loginModel();
        $this->view = new loginView();
        $this->helper = new loginHelper();
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start(); // verifica que haya un inicio de sesion
        }  
     
    }

    public function showLogin() {
        $this->view->showLogin();
    }
    public function validateUser() { // valida los datos
       
        $user = $_POST['user'];
        $password = $_POST['password'];

        // busco el usuario por user
        $usuario = $this->model->getUsuarios($user);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($usuario && password_verify($password, $usuario->password)) {
            $this->helper->login($usuario);

            // inicio una session para este usuario
            session_start();
            $_SESSION['user'] = $usuario->id;
            $_SESSION['password'] = $usuario->user;
            $_SESSION['IS_LOGGED'] = true;

            header("Location:" . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un error
           $this->view->showLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function logoutUser() {
        session_start();
        session_destroy();
        header("Location:" . BASE_URL. "login");
    }
}