<?php

class DbConnection

{

    public function connect()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=db_productos;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            exit($e);
        }
    }
}