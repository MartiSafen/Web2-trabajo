<?php
require_once 'app/views/HomeView.php';

class HomeController{
    private $view;
    /* private $model; */

    public function __construct() {
        $this->view = new HomeView();
        /* $this->model = new HomeModel(); */
    }

    public function showHome(){
        $this-> view-> showHome();
    }
}
?>