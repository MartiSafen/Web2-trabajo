<?php

class productsModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8','root','');
    }
    
    function getProducts(){

    
        $query = $this->db->prepare("SELECT * FROM productos INNER JOIN categorias ON categorias.id_categoria = productos.id_categoria");
        $query->execute();
    
        $productosbyid = $query->fetchAll(PDO::FETCH_OBJ);

       return $productosbyid;
       
    
    }

    
    
    public function insertProducts($id_categoria, $nombre, $talle, $precio, $vendedor) {
        $query = $this->db->prepare('INSERT INTO productos(id_categoria, nombre, talle, precio, vendedor) VALUES (?,?,?,?,?)');
        $query->execute([$id_categoria, $nombre, $talle, $precio, $vendedor]);
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
    
        return $query->fetch(PDO::FETCH_OBJ);

    }

    public function updateProducts($id_categoria,$nombre,$talle,$precio,$vendedor,$id) {
        $query = $this->db->prepare('UPDATE productos SET id_categoria=?, nomnre=?, talle=?, precio=?, vendedor=? WHERE id = ?');
        $query->execute([$id_categoria,$nombre,$talle,$precio,$vendedor,$id]);
        
    }




    


}