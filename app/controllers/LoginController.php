<?php 
require_once './app/views/LoginView.php';
class loginController{
    private $view;

    public function __construct() {
        $this->view = new LoginView();
       
    }

public function loginUser(){
     $this-> view-> loginUser();
    


}
}

?>
