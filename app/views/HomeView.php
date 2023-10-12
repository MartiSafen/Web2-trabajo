<?php

class HomeView 
{
    public function showHome($products){
        $count = count($products);
        require './templates/home.phtml';
    }

}

?>