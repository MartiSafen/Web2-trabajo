<?php
class HomeModel{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=UTF8', 'root', '');
    }
      public function getProductosconCategoria($id){
     $query = $this->db->prepare('SELECT productos.prenda_id, productos.id_compra, productos.talle, productos.hora, productos.vendedor, categoria.prenda_id, categoria.producto FROM productos JOIN categorias ON productos.prenda_id = categorias.prenda_id WHERE productos.prenda_id = ? ');
     $query->execute([$id]);
      return $query->fetchAll(PDO::FETCH_OBJ);
}
   // public function getProductById($id){
       // $query = $this->db->prepare('SELECT * FROM productos WHERE id=?');
     //   $query->execute([$id]);
       // $product = $query->fetchAll(PDO::FETCH_OBJ);
       // return $product;
    //}
}
?>