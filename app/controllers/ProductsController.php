<?php
require_once './app/models/ProductsModel.php';
require_once './app/views/ProductsView.php';
require_once './app/models/CategoryModel.php';
require_once './app/helpers/LoginHelper.php';


class productController{

    private $model;
    private $view;
    private $helper;
   

   
    public function __construct() {
      $this->model = new productsModel();
      $this->view = new productsView();
      $this->helper = new loginHelper();
     
    }


  public function showProducts(){
    
    $productosbyid= $this->model->getProducts();
    $logged= $this->helper->logged();
    $this->view->showProducts($productosbyid, $logged);
   

    }

    public function showDescription($id) {
      session_start();
      $descriptionProducts= $this->model->getDescriptionProducts($id);
      $this->view->showDescription($descriptionProducts);
    }

    

    public function addProducts() {
      // TODO: validar entrada de datos
      $id_compra = $_POST['id_compra'];
      $talle = $_POST['talle'];
      $hora = $_POST['hora'];
      $vendedor = $_POST['vendedor'];

      $this->model->insertProducts($id_compra,$talle, $hora ,$vendedor);
      
      header("Location: " . BASE_URL. "productos"); 
  }
 
  function deleteproducts($id) {
      $this->model->deleteProductsById($id);
      header("Location: " . BASE_URL."productos");
  }
  function showFormEditPoducts($productsbyid){
    session_start();
    $this->view->showFormEdit($productsbyid);
  }

   public function editProducts($id) {
    $productsbyid=$this->model->getProductsbyid($id);
    $this->view->showEdit($productsbyid);
    if ( (!empty($_POST['id_compra'])) && (!empty($_POST['talle']))&& (!empty($_POST['hora']))&&(!empty($_POST['venderor']))){
      $id_compra = $_POST['id_compra'];
      $talle = $_POST['talle'];
      $hora = $_POST['hora'];
      $vendedor = $_POST['vendedor'];
    $id=$this->model->updateProducts($id,$id_compra,$talle,$hora,$vendedor);
      header("Location: " . BASE_URL."productos");
  }
}

function formEditProducts($productsbyid)
{ //Traigo los datos de este id y los inserto el en form
    $productsbyid = $this->model->getproductsbyid($productsbyid);
    $this->view->showFormEdit($productsbyid);



}

}
