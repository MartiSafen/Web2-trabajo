<?php

require_once './app/controllers/ProductsController.php';
class productsView{

    function showProducts($productos){
       require './templates/productos.phtml';
    }


function showFormEdit($id, $productos){
  require './templates/formEdit.phtml';
}
function showAddProduct(){
    require './templates/formAddProducts.phtml';
}


function showDescription($productosbyid){
    require './templates/productos.phtml';
  }


  function showError($error = null){
    require './templates/error.phtml';
  }

}





