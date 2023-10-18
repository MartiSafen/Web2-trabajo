<?php

require_once './app/models/CategoryModel.php';
require_once './app/helpers/LoginHelper.php';
require_once'./app/views/CategoryView.php';

class categoriaController{

    private $model;
    private $view;
    private $helper;
   
    public function __construct() {
      $this->model = new categoriaModel();
      $this->view = new categoriaView();
      $this->helper = new loginHelper();
    }
  
  
  public function showCategorias(){
 
    $categoriabyid= $this->model->getCategoria();
    $logged= $this->helper->logged();
    $this->view->showCategoria($categoriabyid,$logged);
  
  }

  function addCategoria() {
    // TODO: validar entrada de datos
      $prenda_id=$_POST['prenda_id'];
      $producto=$_POST['producto'];
      $tela=$_POST['tela'];
      $color=$_POST['color'];
      $this->model->insertCategoria($prenda_id, $producto, $tela, $color);
      header("Location: " . BASE_URL. "categorias"); 
}

function deleteCategoria($prenda_id) {
  $this->model->deleteCategoriaById($prenda_id);
  header("Location: " . BASE_URL. "categorias");
}

function showFormEdit($categoriabyid){
  session_start();
  $this->view->showFormEdit($categoriabyid);
}
function formEditCategoria($prenda_id)
{ //Traigo los datos de este id y los inserto el en form
    $categoriabyid = $this->model->getCategoriabyid($prenda_id);
    $this->view->showFormEdit($categoriabyid);
}

public function editCategoria($prenda_id) {
  $categoriabyid=$this->model->getCategoriabyid($prenda_id);
  $this->view->showEdit($categoriabyid);
  if ((!empty($_POST['producto']))&& (!empty($_POST['tela']))&& (!empty($_POST['color']))){
  $producto=$_POST['producto'];
  $tela=$_POST['tela'];
  $color=$_POST['color'];
  $prenda_id=$this->model->updateCategoria($producto,$tela,$color,$prenda_id);
    header("Location: " . BASE_URL. "categorias");
}
}
function filter(){
  if(isset ($_POST['selected'])&&(!empty($_POST['selected']))){
      $selected = $_POST['selected'];
      $productbycategory = $this->model->getProductsAndCategorias($selected);
      $this->view->showCategorias($productbycategory);

    }
}



}