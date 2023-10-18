<?php

require_once 'libs/smarty-master/libs/Smarty.class.php';

class categoriaView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }


    function  showCategoria($categoriabyid, $logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('categoriabyid', $categoriabyid);
        $this->smarty->display('categoria.tpl');

}

function showFormEdit($categoriabyid){
    $this->smarty->assign('categoriabyid', $categoriabyid);
    $this->smarty->display('formEditCategoria.tpl');

}

function showEdit($categoriabyid){
    $this->smarty->assign('categoriabyid', $categoriabyid);
    
}
function showCategorias($productbycategory){
    $this->smarty->assign('productbycategory', $productbycategory);
    $this->smarty->display('categoria.tpl');


  }

}