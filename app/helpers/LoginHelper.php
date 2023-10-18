<?php

class loginHelper {
  

   

    public function login($usuario){
        session_start();
        $_SESSION['user'] = $usuario->user;
        $_SESSION['password'] = $usuario->password;
        $_SESSION['ISLOGGED'] = true;

    }

      /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */
    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . "login");
            die();
        }
    } 


    //oculta los botones si el usuarui no esta logueado

public function logged(){
    
    if(!isset($_SESSION['ISLOGGED'])){
    $logged = false;
}
    else {
        $logged = true;
  }
  return $logged;
}

}