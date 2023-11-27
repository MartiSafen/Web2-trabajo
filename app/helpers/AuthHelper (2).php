<?php

class AuthHelper {
    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
    public static function login($usuario){
        AuthHelper::init();
        $_SESSION['USER_ID'] = $usuario->id;
        $_SESSION['USER_USER'] = $usuario->user;

    }
    public static function verify() {
        AuthHelper::init();
        if (!isset($_SESSION['USER_ID'])) {
            header("Location: " . BASE_URL . "login");
            die();
        }
    } 
    public static function logout() {
        AuthHelper::init();
        session_destroy();
    }


}