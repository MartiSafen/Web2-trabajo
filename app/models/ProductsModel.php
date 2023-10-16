<?php
class ProductsModel{

    private $db;
    
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=UTF8', 'root', '');
    }
      public function stockList(){
     $sentencia = $this->db->prepare('SELECT * FROM productos');
     $sentencia->execute();
     $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
     return $products;
}

public function stockListCategoria(){
    $sentencia = $this->db->prepare('SELECT * FROM categorias');
    $sentencia->execute();
    $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $categorias;
}


}






?>