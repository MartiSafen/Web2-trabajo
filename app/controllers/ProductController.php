<?php
require_once './app/models/ProductsModel.php';
require_once './app/views/ProductsView.php';


class ProductController{
    private $view;
    private $model; 
  
    public function __construct() {
     $this->model = new ProductsModel(); 
     $this->view = new ProductsView();
       
    }
    public function showProducts(){
       // $products= $this-> model->stockList();

      //  $this->view->stockList($products);
        
      //  $categorias= $this->model->stockListCategoria();

      //  $this->view->stockListCategoria($categorias);

       

    }

    
}
?>