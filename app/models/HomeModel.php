<?php
class HomeModel{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=UTF8', 'root', '');
    }
      public function showHome(){
     $sentencia = $this->db->prepare('SELECT * FROM productos');
     $sentencia->execute();
     $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
     return $products;
}
}
?>