<?php

require_once 'libs/smarty-master/libs/Smarty.class.php';

class productsView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showProducts($productosbyid , $logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('productosbyid', $productosbyid);
        $this->smarty->display('productos.tpl');

    }


function showFormEdit($productosbyid){
    $this->smarty->assign('productosbyid', $productosbyid);
    $this->smarty->display('formEdit.tpl');

}

function showEdit($productosbyid){
    $this->smarty->assign('productosbyid', $productosbyid);
    
}

function showDescription($productosbyid){
    $this->smarty->assign('productosbyid', $productosbyid);

    $this->smarty->display('productos.tpl');
  }



}





