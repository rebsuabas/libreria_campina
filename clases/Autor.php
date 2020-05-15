<?php

require_once "conexion.php";

class Autor {

    private $id_autor;
    private $nombre;
    private $nacionalidad;
    private $ano_nacimiento;
    private $ano_defuncion;
    private $obras;

    const TABLA_AUTOR = 'autor';

    public function getIdAutor() {
        return $this->id_autor;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function getAnoNacimiento() {
        return $this->ano_nacimiento;
    }

    public function getAnoDefuncion() {
        return $this->ano_defuncion;
    }

    public function getObras() {
        return $this->obras;
    }

    public function setIdAutor($id_autor) {
        $this->id_autor = $id_autor;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function setAnoNacimiento($ano_nacimiento) {
        $this->ano_nacimiento = $ano_nacimiento;
    }

    public function setAnoDefuncion($ano_defuncion) {
        $this->ano_defuncion = $ano_defuncion;
    }

    public function setObras($obras) {
        $this->obras = $obras;
    }

    public function __construct($id_autor=null, $nombre, $nacionalidad, $ano_nacimiento, $ano_defuncion, 
    $obras) {
        
        $this->id_autor = $id_autor;
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
        $this->ano_nacimiento = $ano_nacimiento;
        $this->ano_defuncion = $ano_defuncion;
        $this->obras = $obras;

    }

}

?>