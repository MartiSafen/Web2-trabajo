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

   public function insertCategoria($material, $color) {
    $query = $this->db->prepare('INSERT INTO categorias(material, color) VALUES (?,?)');
    $query->execute([$material, $color]);
    return $this->db->lastInsertId();
  }

  function deleteCategoriaById($id) {
    $query = $this->db->prepare('DELETE FROM categorias WHERE id_categoria = ?');
    $query->execute([$id]);
}

function getCategoriabyid($id_categoria){
        
    $query = $this->db->prepare("SELECT * FROM categorias WHERE id_categoria=?");
    $query->execute([$id_categoria]);

   return $query->fetch(PDO::FETCH_OBJ);


}

public function updateCategoria($material, $color, $id_categoria) {
    $query = $this->db->prepare('UPDATE categorias SET material=?, color=? WHERE id_categoria = ?');
    $query->execute([$material, $color, $id_categoria]);
    
}
function getProductsAndCategorias($selected){
        $query = $this->db->prepare("SELECT * FROM productos a INNER JOIN  categorias b ON a.id_categoria = b.id_categoria   WHERE a.id_categoria=?");
        $query->execute(array($selected));
    $productbycategory = $query->fetchAll(PDO::FETCH_OBJ);

    return $productbycategory;
}

}