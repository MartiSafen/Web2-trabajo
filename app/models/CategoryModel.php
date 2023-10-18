<?php

class categoriaModel{


    private $db;
   
       public function __construct(){
           $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8','root','');
       }
       

   function getCategoria(){
       $query =$this->db->prepare('SELECT * FROM categorias');
       $query->execute();
   
       $categoriabyid=$query->fetchAll(PDO::FETCH_OBJ);
       
       return $categoriabyid;
   }

   public function insertCategoria($prenda_id, $producto, $tela, $color) {
    $query = $this->db->prepare('INSERT INTO categorias (prenda_id,producto,talle,color) VALUES (?,?,?,?)');
    $query->execute([$prenda_id, $producto, $tela, $color]);
    return $this->db->lastInsertId();
  }

  function deleteCategoriaById($prenda_id) {
    $query = $this->db->prepare('DELETE FROM categorias WHERE prenda_id = ?');
    $query->execute([$prenda_id]);
}

function getCategoriabyid($prenda_id){
        
    $query = $this->db->prepare("SELECT * FROM categorias WHERE prenda_id=?");
    $query->execute([$prenda_id]);

    $categoriabyid = $query->fetchAll(PDO::FETCH_OBJ);

   return $categoriabyid;
}

public function updateCategoria($prenda_id, $producto, $tela, $color) {
    $query = $this->getCategoriabyid($prenda_id);
    $query = $this->db->prepare('UPDATE categorias SET producto=?, tela=?, color=? WHERE prenda_id = ?');
    $query->execute([$prenda_id, $producto, $tela, $color]);
    
}
function getProductsAndCategorias($selected){
        $query = $this->db->prepare("SELECT * 
                                     FROM productos a 
                                     INNER JOIN  categorias b ON a.id = b.prenda_id 
                                     WHERE a.id=?");
        $query->execute(array($selected));
    $productbycategory = $query->fetchAll(PDO::FETCH_OBJ);

    return $productbycategory;
}

}