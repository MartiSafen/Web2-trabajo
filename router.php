<?php
require_once './app/controllers/HomeController.php';
require_once './app/controllers/ProductsController.php';
require_once './app/controllers/LoginController.php';
require_once './app/controllers/CategoryController.php';


$homeController = new homeController();
$productController = new productController();
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
        $productsbyid= $params[1];
        $productController->showFormEditPoducts($productsbyid);
          $id = $params[1];
           $productController->editProducts($id);
         break;
    case 'filter':
       $categoriaController->filter();
          break;

    case 'categoria':
            $categoriaController->showCategorias();
            break;

    case 'addCategoria':
            $categoriaController->addCategoria();
            break;

    case 'deleteCategoria':
            $prenda_id = $params[1];
            $categoriaController->deleteCategoria($prenda_id);
            break;

    case 'formEditCategoria':
            $categoriaController->showFormEdit($categoriabyid);
            $prenda_id = $params[1];
            $categoriaController->editCategoria($prenda_id);
            break;

        case 'formEditCategoria':
              $prenda_id = $params[1];
              $categoriaController->formEditCategoria($prenda_id);
                break;


         default:
         echo('404');
         break;   
}
?>