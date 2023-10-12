<?php
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/LoginController.php';
define ('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$homeController = new HomeController();
$loginController = new LoginController();
$action = 'home';


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

// Tabla de Routeo

switch ($params[0]) {
    case 'home':
        $homeController->showHome();
        break;
    case 'productos':
        $productController->showAllProductos();
        break;
    case 'login':
        $loginController->loginUser();
        break;
    default:
        echo ('404 Page not found');
        break;
}
