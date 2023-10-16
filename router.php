<?php
require_once './app/controller/ProductsController.php';
require_once './app/controller/HomeController.php';
require_once './app/controller/LoginController.php';
require_once './app/controller/CategoryController.php';

$productController = new productController();
$homeController = new homeController();
$loginController = new loginController();
$categoriaController = new categoriaController();



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; //accion por defecto

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

$params = explode('/', $action);


switch($params[0]){
   
    case 'productos':
        $productController->showProducts();
        break;

    case 'home':
     $homeController->showHome();
            break;
    
    
    case 'detalle':
        $id= $params[1];
        $productController->showDescription($id);
        break;
    
    case 'login':
        $loginController->showLogin();
        break;
        

    case 'admin':
        $productController->showProducts();
        break;


    case 'validate':
            $loginController->validateUser();
            break;
    
    case 'logout':
            $loginController->logoutUser();

    case 'add':
            $productController->addProducts();
            break;

    case 'delete':
        $id = $params[1];
        $productController->deleteproducts($id);
        break;
        
    case 'formEditProducts':
        $id = $params[1];
        $productController->formEditProducts($id);
        break;

    case 'formEdit':
            $productController->showFormEditProducts($productbyid);
            $id = $params[1];
            $productController->editProducts($id);
            break;
    case 'filter':
            $categoriaController->filter();
            break;

    case 'categorias':
            $categoriaController->showCategorias();
            break;

    case 'addCategoria':
            $categoriaController->addCategoria();
            break;

    case 'deleteCategoria':
            $id_compra = $params[1];
            $categoriaController->deleteCategoria($id_compra);
            break;

    case 'formEditCategoria':
            $categoriaController->showFormEdit($categoriabyid);
            $id_comprador = $params[1];
            $categoriaController->editCategoria($prenda_id);
            break;

        case 'formEditCategoria':
              $id_compra = $params[1];
              $categoriaController->formEditCategoria($prenda_id);
                break;


         default:
         echo('404');
         break;   
}
?>