<?php

class HomeView 
{
    public function showproducts($productos){
        require './templates/home.phtml';
        
     }
     public function error($error){
      require './templates/error.phtml';
     }
     
  

}
?>