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

    public function showHome(){
       $products= $this-> model-> showHome();
        $this-> view-> showHome($products);
       

    }
}
?>