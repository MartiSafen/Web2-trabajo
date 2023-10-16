<?php
require_once './app/model/ProductsModel.php';
require_once './app/model/CategoryModel.php';
require_once './app/view/ProductsView.php';
require_once './app/helpers/Login.helper.php';


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
    session_start();
    $productosbyid= $this->model->getproductos();
    $logged= $this->helper->logged();
    $this->view->showProductos($productosbyid, $logged);
   

    }

    public function showDescription($id) {
      session_start();
      $descriptionProducts= $this->model->getDescription($id);
      $this->view->showDescription($descriptionProducts);
    }

    

    function addProducts() {
      // TODO: validar entrada de datos
      $prenda_id = $_POST['prenda_id'];
      $id_compra = $_POST['id_compra'];
      $talle = $_POST['talle'];
      $hora = $_POST['hora'];
      $vendedor = $_POST['vendedor'];

      $this->model->insertProduct($prenda_id, $id_compra,$talle, $hora ,$vendedor);

      header("Location: " . BASE_URL. "productos"); 
  }
 
  function deleteproducts($id) {
      $this->model->deleteProductsById($id);
      header("Location: " . BASE_URL."Productos");
  }
  function showFormEditPoducts($Productbyid){
    session_start();
    $this->view->showFormEdit($productsbyid);
  }

   public function editProduct($id) {
    $productsbyid=$this->model->getProductsbyid($id);
    $this->view->showEdit($productsbyid);
    if (!empty($_POST['prenda_id'])&& (!empty($_POST['id_compra'])) && (!empty($_POST['talle']))&& (!empty($_POST['hora']))&&(!empty($_POST['venderor']))){
      $prenda_id = $_POST['prenda_id'];
      $id_compra = $_POST['id_compra'];
      $talle = $_POST['talle'];
      $hora = $_POST['hora'];
      $vendedor = $_POST['vendedor'];
    $id=$this->model->updateProducts($id_compra,$prenda_id,$talle,$hora,$vendedor);
      header("Location: " . BASE_URL."productos");
  }
}

function formEditProducts($id)
{ //Traigo los datos de este id y los inserto el en form
    $productsbyid = $this->model->getproductsbyid($id);
    $this->view->showFormEdit($productsbyid);



}

}