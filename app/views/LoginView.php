<?php

require_once 'libs/smarty-master/libs/Smarty.class.php';

class loginView{
        private $smarty;
    
        public function __construct() {
            $this->smarty = new Smarty();
        }
    
    function showLogin($error = null){
    
        $this->smarty->assign("error", $error);
        $this->smarty->display('login.tpl');
    }
    
      
}