<?php
require_once './app/controllers/CategoryController.php';


class categoriaView{
   
    function  showCategoria($categoria){
        require './templates/categoria.phtml';

}
function showAddCategoria(){
    require './templates/formAddCategoria.phtml';
}
function showFormEdit($id_categoria, $categorias){
   require'./templates/formEditCategoria.phtml';
}

function showError($error = null){
  require './templates/error.phtml';
}

}