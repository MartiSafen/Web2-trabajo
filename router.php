<?php
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/LoginController.php';
require_once 'app/controllers/ProductController.php';

define ('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$homeController = new HomeController();
$loginController = new LoginController();
$productController = new ProductController();
$action = 'home';


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

// Tabla de Routeo

switch ($params[0]) {
    case 'home':
        $homeController->showHome($id);
        break;
    case 'listar':
        $productController->showProducts();
        break;
    case 'login':
       // $loginController->showLogin();
        break;
    case 'formAdd':
       // $productController->addProducts();
        break;
    case 'eliminar':
       // $productController->deleteProducts($id);
        break;
    case 'editar' :
        //$productController->updateProducts($id);
        break;
    default:
        echo ('404 Page not found');
        break;
}
