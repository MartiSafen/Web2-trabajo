<?php


class loginModel{

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    public function getUsuarios($user) {
        $query = $this->db->prepare("SELECT * FROM usuario WHERE user = ?");
        $query->execute([$user]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}