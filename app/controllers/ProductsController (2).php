<?php
require_once './app/models/ProductsModel.php';
require_once './app/views/ProductsView.php';
require_once './app/models/CategoryModel.php';


class productController{

    private $model;
    private $view;
   

   
    public function __construct() {
      $this->model = new productsModel();
      $this->view = new productsView();
      AuthHelper::init();     
    }


  public function showProducts(){
    
    $productos= $this->model->getProducts();
    $this->view->showProducts($productos);
   

    }

    public function showDescription($id) {
      //session_start();
      $descriptionProducts= $this->model->getDescriptionProducts($id);
      $this->view->showDescription($descriptionProducts);
    }

    

    public function addProducts() {
      AuthHelper::verify();
      $this->view->showAddProduct();
      // TODO: validar entrada de datos
      $id_categoria = $_POST['id_categoria'];
      $nombre = $_POST['nombre'];
      $talle = $_POST['talle'];
      $precio = $_POST['precio'];
      $vendedor = $_POST['vendedor'];
      if(!empty($_POST['id_categoria'])&& !empty($_POST['nombre'])&& !empty($_POST['talle'])&& !empty($_POST['precio'])&& !empty($_POST['vendedor'])){
      $this->model->insertProducts($id_categoria, $nombre, $talle, $precio, $vendedor);
      
      header("Location: " . BASE_URL. "productos"); 
}
  }
 
  function deleteproducts($id) {
    AuthHelper::verify();
      $this->model->deleteProductsById($id);
      header("Location: " . BASE_URL."productos");
  }
  //function showFormEditPoducts($productos){
  //  AuthHelper::verify();
   // $productos = $this->model->getAllProducts();
   // $this->view->showFormEdit($productos);
  //}
  
function formEditProducts($id)
{ 
  AuthHelper::verify();
  //Traigo los datos de este id y los inserto el en form
    $productos = $this->model->getProductsbyid($id);
    $this->view->showFormEdit($id,$productos);



}

   public function editProducts($id) {
    AuthHelper::verify();
    $id_categoria = $_POST['id_categoria'];
    $nombre = $_POST['nombre'];
    $talle = $_POST['talle'];
    $precio = $_POST['precio'];
    $vendedor = $_POST['vendedor'];
    if ( (empty($_POST['id_categoria'])) || (empty($_POST['talle']))&& (!empty($_POST['precio']))&&(!empty($_POST['venderor']))){
      $this->view->showError("Debe completar todos los campos");

  }
  else{
    
  $this->model->updateProducts($id_categoria,$nombre,$talle,$precio,$vendedor,$id);
    header("Location: " . BASE_URL."productos");
  }
}

}
