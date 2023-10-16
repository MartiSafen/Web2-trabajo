<?php
require_once './app/models/HomeModel.php';
require_once './app/views/HomeView.php';
class HomeController{
    private $view;
    private $model; 

    public function __construct() {
        $this->model = new HomeModel(); 
        $this->view = new HomeView();
       
    }

    public function showHome($id){
       $productos = $this-> model->getProductosconCategoria($id);
        $this-> view-> showProducts($productos);

    }
  //  public function showAllProduct($id){
   //     $product = $this->model->getProductById($id);
    //    if($product){
      //      $this->view->showDescription($product);
     //   }
       // else{
      //      $this->view->error("error al insertar tarea");
      //  }
  //  }
}
?>