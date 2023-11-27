<?php

require_once './app/models/CategoryModel.php';
require_once './app/helpers/AuthHelper.php';
require_once'./app/views/CategoryView.php';

class categoriaController{

    private $model;
    private $view;
   
    public function __construct() {
      $this->model = new categoriaModel();
      $this->view = new categoriaView();
      AuthHelper::init();

    }
  
  
  public function showCategorias(){
 
    $categoria= $this->model->getCategoria();
    $this->view->showCategoria($categoria);
  
  }

  function addCategoria() {
    AuthHelper::verify();
    $this->view->showAddCategoria();
    // TODO: validar entrada de datos
      $material=$_POST['material'];
      $color=$_POST['color'];
      if(!empty($_POST['material']) && !empty( $_POST['color'])) {
      $this->model->insertCategoria($material, $color);
      header("Location: " . BASE_URL. "categorias"); 
      }
      else{
        $this->view->showError();
      }
        
}

function deleteCategoria($id) {
  AuthHelper::verify();
  $this->model->deleteCategoriaById($id);
  header("Location: " . BASE_URL. "categorias");
}


function formEditCategoria($id_categoria)
{
  AuthHelper::verify();
    $categorias = $this->model->getCategoriabyid($id_categoria);
    $this->view->showFormEdit($id_categoria, $categorias);
}

public function editCategoria($id_categoria) {
  AuthHelper::verify();
  
  if (empty($_POST['material']) && empty($_POST['color'])){
    $this->view->showError("Debe completar todos los campos");

   }
else{
  $material= $_POST['material'];
  $color= $_POST['color'];
  $this->model->updateCategoria($material, $color, $id_categoria);
  header("Location: " . BASE_URL. "categorias");
}
}





}