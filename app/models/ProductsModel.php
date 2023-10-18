<?php

class productsModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8','root','');
    }
    
    function getProducts(){

    
        $query = $this->db->prepare("SELECT * FROM productos");
        $query->execute();
    
        $productosbyid = $query->fetchAll(PDO::FETCH_OBJ);

       return $productosbyid;
       
    
    }

    
    
    public function insertProducts($id_compra, $talle, $hora, $vendedor) {
        $query = $this->db->prepare("INSERT INTO productos (id_compra, talle, hora, vendedor) VALUES (?,?,?,?)");
        $query->execute([$id_compra, $talle, $hora, $vendedor]);

        return $this->db->lastInsertId();
    }

    function deleteProductsById($id) {
        $query = $this->db->prepare('DELETE FROM productos WHERE id = ?');
        $query->execute([$id]);
    }

    public function getDescriptionProducts($id){
        $query = $this->db->prepare("SELECT * FROM productos WHERE id=?");
        $query->execute([$id]);
        $productbyid = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $productbyid;
    }

    function getProductsbyid($id){
        
        $query = $this->db->prepare("SELECT * FROM productos WHERE id=?");
        $query->execute([$id]);
    
        $productsbyid = $query->fetchAll(PDO::FETCH_OBJ);

       return $productsbyid;
    }

    public function updateProducts($id, $id_compra, $talle, $hora, $vendedor) {
        $query = $this->getProductsbyid($id);
        $query = $this->db->prepare('UPDATE productos SET id_compra=?, talle=?, hora=?, vendedor=? WHERE id = ?');
        $query->execute([$id, $id_compra, $talle, $hora, $vendedor]);
        
    }



    


}