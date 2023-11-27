<?php

require_once './app/views/HomeView.php';

class homeController{
    private $view;
  
    public function __construct() {
      $this->view = new homeView();
    }
  
    public function showHome(){
      $this->view->showHome();
      
    }
  }
  ?>