<?php

require_once "conexion.php";

class Compra {

    private $id_usuario;
    private $id_libro;

    const TABLA_COMPRA = 'compra';

    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getIdLibro() {
        return $this->id_libro;
    }

    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setIdLibro($id_libro) {
        $this->id_libro = $id_libro;
    }

    public function __construct($id_usuario, $id_libro) {
        
        $this->id_usuario = $id_usuario;
        $this->id_libro = $id_libro;

    }


}

?>