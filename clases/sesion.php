<?php

class Sesion {
    
    public function __construct() {
        session_start();
    }

    public function setUsuarioActual($id_usuario){
        $_SESSION['id_usuario'] = $id_usuario;
    }

    public function getUsuarioActual() {
        return $_SESSION['id_usuario'];
    }

    public function cerrarSesion() {
        session_unset();
        session_destroy();
    }

}

?>